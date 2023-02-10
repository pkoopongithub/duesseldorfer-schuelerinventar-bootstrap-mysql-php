<?
//echo"DB CON FUNC geladen<BR>";
/*

    $host          = "localhost";                //Connectvariablen
    $user          = "root";
    $pass          = "";
    $db            = "db34406101";
*/
    $host          = "rdbms.strato.de";                //Connectvariablen
    $user          = "U3517771";
    $pass          = "dBkNpI1000Jn";
    $db            = "DB3517771";
    
    
// variablenbezeichner
 	foreach ($_REQUEST as $variablenbezeichner => $variableninhalt)
	 {
	  $variablenname = $variablenbezeichner;
	  $$variablenname = $variableninhalt;
	  //echo "variablenname ". $variablenname." variableninhalt ".$variableninhalt."<br>";
	 }
	 $PHP_SELF=$_SERVER['PHP_SELF'];
	 //echo "PHP_SELF ".$PHP_SELF."<br>";
    


// mysql connect
   function connect($host,$user,$pass,$db)
   {
    $conn=mysqli_connect($host,$user,$pass,$db);
    if($conn)
    {
     //echo("MySQL-Verbindung steht: <BR>");
    }
    else
    {
     die("MySQL-Verbindung steht nicht: ");
    }
    return $conn;
   }


   function deconnect($conn)
   {
    return mysqli_close($conn);
   }
   
    function setze_session($session)
   {
    srand((double)microtime()*1000000);
    if(!isset($session)){ $session = md5(uniqid($UNIQUE_ID));}
    return $session;
   }

?>
