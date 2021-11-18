<?


    $host          = "host";                //Connectvariablen
    $user          = "user";
    $pass          = "pass";
    $db            = "db";

    //$host          = "localhost";                //Connectvariablen
    //$user          = "root";
    //$pass          = "";
    //$db            = "cl";
 
 //-----------------------------------------------------------------------------
 	foreach ($_REQUEST as $variablenbezeichner => $variableninhalt)
	 {
	  $variablenname = $variablenbezeichner;
	  $$variablenname = $variableninhalt;
	  //echo "variablenname ". $variablenname." variableninhalt ".$variableninhalt."<br>";
	 }
	 $PHP_SELF=$_SERVER['PHP_SELF'];
	 //echo "PHP_SELF ".$PHP_SELF."<br>";
  //-----------------------------------------------------------------------------
  
 function setze_session($session)
   {
    srand((double)microtime()*1000000);
    if(!isset($session)){ $session = md5(uniqid($UNIQUE_ID));}
    return $session;
   }
// mysql connect
   function connect($host,$user,$pass)
   {
    $conn=mysql_connect($host,$user,$pass);
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

// mysql datenbank auswahlen

   function choise_database($conn,$db)
   {
    $result=mysql_select_db($db,$conn);
    if($result)
    {
     //echo("MySQL-database steht: <BR>");
    }
    else
    {
     die("MySQL-database steht nicht: ");
    }
    return $conn;
   }

    function deconnect($conn)
   {
    return mysql_close($conn);
   }

?>
