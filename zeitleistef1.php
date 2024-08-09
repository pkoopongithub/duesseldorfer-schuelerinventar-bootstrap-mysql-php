<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// Database configuration
$host = '';
$dbname = '';
$user = '';
$pass = '';

// Connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Verbindungsfehler: " . $e->getMessage());
}

// Get the group ID from the query parameters
$groupId = isset($_GET['groupId']) ? (int)$_GET['groupId'] : 1;

// Fetch data from the database
$sql = "SELECT profilID, gruppeID, kompetenz1, kompetenz2, kompetenz3, kompetenz4, kompetenz5, kompetenz6
        FROM profil
        WHERE gruppeID = :groupId
        ORDER BY profilID";
$stmt = $pdo->prepare($sql);
$stmt->execute(['groupId' => $groupId]);

if ($stmt->errorCode() != '00000') {
    die("Fehler beim Ausführen der SQL-Abfrage: " . implode(", ", $stmt->errorInfo()));
}

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($data === false) {
    die("Fehler beim Abrufen der Daten: " . implode(", ", $stmt->errorInfo()));
}

// Calculate the SVG dimensions
$width = 800;
$height = 600;
$padding = 50;
$lineWidth = 2; // Default line width

// Calculate max and min values for scaling
$maxValues = array_fill(1, 6, 0);
$minValues = array_fill(1, 6, PHP_INT_MAX);
foreach ($data as $row) {
    for ($i = 1; $i <= 6; $i++) {
        $value = $row["kompetenz$i"];
        if ($value > $maxValues[$i]) $maxValues[$i] = $value;
        if ($value < $minValues[$i]) $minValues[$i] = $value;
    }
}

// Create SVG content
$svg = '<svg width="' . $width . '" height="' . $height . '" xmlns="http://www.w3.org/2000/svg">';
$colors = ['#ff0000', '#00ff00', '#0000ff', '#ff00ff', '#00ffff', '#ffff00'];

// Define Y-coordinate adjustments based on competence
$adjustments = [-3 * $lineWidth, -2 * $lineWidth, -1 * $lineWidth, 1 * $lineWidth, 2 * $lineWidth, 3 * $lineWidth];

// Plot each feature
$numPoints = count($data);
if ($numPoints <= 1) {
    die("Nicht genügend Daten für die Zeichnung.");
}
$xStep = ($width - 2 * $padding) / ($numPoints - 1);

for ($feature = 1; $feature <= 6; $feature++) {
    $max = 5; // Maximum value for Y-axis
    $min = 1; // Minimum value for Y-axis
    $range = $max - $min;
    $adjustment = $adjustments[$feature - 1];

    // Initialize path with the first data point
    $firstDataPoint = $data[0]["kompetenz$feature"];
    $path = 'M' . $padding . ',' . ($height - $padding - ($height - 2 * $padding) * ($firstDataPoint - $min) / $range + $adjustment);

    foreach ($data as $i => $row) {
        $x = $padding + $i * $xStep;
        $y = $height - $padding - ($height - 2 * $padding) * ($row["kompetenz$feature"] - $min) / $range + $adjustment;
        $path .= ' L' . $x . ',' . $y;
    }

    // Add path with constant thickness
    $svg .= '<path d="' . $path . '" stroke="' . $colors[$feature - 1] . '" fill="none" stroke-width="' . $lineWidth . '" />';
    
    // Add circles with values for each data point
    foreach ($data as $i => $row) {
        $x = $padding + $i * $xStep;
        $y = $height - $padding - ($height - 2 * $padding) * ($row["kompetenz$feature"] - $min) / $range + $adjustment;
        $value = $row["kompetenz$feature"];
        $svg .= '<circle cx="' . $x . '" cy="' . $y . '" r="8" fill="' . $colors[$feature - 1] . '" />';
        $svg .= '<text x="' . $x . '" y="' . ($y + 15) . '" fill="#ffffff" font-size="10" font-family="Arial" text-anchor="middle">' . $value . '</text>';
    }
}

// Add grid lines for levels
$gridLines = [1, 2, 3, 4, 5];
foreach ($gridLines as $level) {
    $yPos = $height - $padding - ($height - 2 * $padding) * ($level - 1) / 4; // Adjusted division
    $svg .= '<line x1="' . $padding . '" y1="' . $yPos . '" x2="' . ($width - $padding) . '" y2="' . $yPos . '" stroke="#d0d0d0" stroke-width="1" stroke-dasharray="5,5" />';
    $svg .= '<text x="' . ($padding - 40) . '" y="' . ($yPos + 4) . '" fill="#000000" font-size="10" font-family="Arial">' . $level . '</text>';
}

// Add labels for axes
$svg .= '<line x1="' . $padding . '" y1="' . ($height - $padding) . '" x2="' . ($width - $padding) . '" y2="' . ($height - $padding) . '" stroke="#000" />';
$svg .= '<line x1="' . $padding . '" y1="' . $padding . '" x2="' . $padding . '" y2="' . ($height - $padding) . '" stroke="#000" />';

// Add labels
$labels = ['Arbeitsverhalten', 'Lernverhalten', 'Sozialverhalten', 'Fachkompetenz', 'Personale Kompetenz', 'Methodenkompetenz'];
for ($i = 1; $i <= 6; $i++) {
    $svg .= '<text x="' . ($padding - 120) . '" y="' . ($height - $padding - ($i * 60) + 5) . '" fill="' . $colors[$i - 1] . '" font-size="12" font-family="Arial" text-anchor="end">' . $labels[$i - 1] . '</text>';
}

// Add legend in the upper left corner
$legendX = $padding;
$legendY = $padding;
$legendBoxSize = 20;
$legendPadding = 30; // Padding for spacing between boxes and text
foreach ($colors as $index => $color) {
    $svg .= '<rect x="' . $legendX . '" y="' . $legendY . '" width="' . $legendBoxSize . '" height="' . $legendBoxSize . '" fill="' . $color . '" />';
    $svg .= '<text x="' . ($legendX + $legendBoxSize + 5) . '" y="' . ($legendY + $legendBoxSize - 5) . '" fill="#000000" font-size="12" font-family="Arial">' . $labels[$index] . '</text>';
    $legendY += $legendBoxSize + $legendPadding;
}

$svg .= '</svg>';

// Output SVG
header('Content-Type: image/svg+xml');
echo $svg;
?>
