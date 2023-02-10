<?
  function db_lesen_passwort($sql,$conn)
   {//BEGIN db_lesen
    //echo $sql."<br>";
    $result=mysqli_query($conn,$sql);
    if($result)
    {//BEGIN if $result
    $number=mysqli_num_rows($result);
     //echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number){//BEGIN Suchausgabe>null
     while($row=mysqli_fetch_assoc($result))
     {//BEGIN row
       //echo "<li><a href=\"#\">Willkommen Sie sind angemeldet</a></li>";
	   $userID=$row['ID'];
     }//END row
     }//ENDE suchausgabe >null
	 return $userID;
    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysqli_error($conn));
    }//END if result
   }//END db_lesen

  function anmeldung_input($sql,$conn)
  {//BEGIN input
    //echo $sql."<br>";
    if (mysqli_query($conn,$sql))
    {
    //echo"MYSQL-INSERT-OK anmeldung";
    }
    else
    {echo("User und Passwort sind unbekannt. Wenn Sie einen eigenen Zugang wuenschen, nehmen Sie bitte Kontakt auf.");
    die("MYSQL-INSERT-neue Eingabe-Fehler".mysqli_error($conn));}
  }//ENDE input
  
   function anmeldung_ok($sql,$conn,$session,$userID)
   {//BEGIN db_lesen
    //echo $sql."<br>";
    $ok=0;
	$result=mysqli_query($conn,$sql);
    if($result)
    {//BEGIN if $result
    $number=mysqli_num_rows($result);
     echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number){//BEGIN Suchausgabe>null
     while($row=mysqli_fetch_assoc($result))
     {//BEGIN row
       //echo "Willkommen Sie sind angemeldet"."<br>";
	   $ok=1;
     }//END row
     }//ENDE suchausgabe >null
	 return $ok;
    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysqli_error($conn));
    }//END if result
   }//END db_lesen
   
  function anmeldung_loeschen($sql,$conn,$session,$userID)
  {//BEGIN loeschen
    //echo $sql."<br>";
    if (mysqli_query($conn,$sql))
    {
    //echo"MYSQL-DELETE-OK";
    }
    else
    {die("MYSQL-DELETE-Fehler".mysqli_error($conn));}
  }//ENDE loeschen

//   db ausgeben ausgeben

?>

  <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#6699CC; color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="background-color:#6699CC; color:white;" href="<? echo $PHP_SELF ?>?navi=6">D&uuml;sseldorfer Sch&uuml;lerinventar</a>
    </div>


<?
  if($abmelden==1)
   {
    $conn=connect($host,$user,$pass,$db);
	$sql="DELETE FROM anmeldung WHERE (userID like $userID) AND (session LIKE \"$session\")";
	anmeldung_loeschen($sql,$conn,$session,$userID);
	$conn=deconnect($conn);
   }
  if(!isset($submit))
   { ?>
        <form class="navbar-form navbar-left" action="">
      <div class="form-group">
        <input type="text" class="form-control"  name="benutzer" value="gast">
        <input type="password" class="form-control"  name="kennwort" value="gast">
        <input type=hidden name=navi value=1>
      </div>
      <button type="submit" class="btn btn-default" name="submit" >Anmelden</button>
    </form>
       
       <form class="navbar-form navbar-left" action="">
     <div class="form-group">
       <input type=hidden  name="benutzer" value="gast">
       <input type=hidden  name="kennwort" value="gast">
       <input type=hidden name=navi value=1>
     </div>
     <button type="submit" class="btn btn-info" name="submit" >Machen Sie jetzt den kostenlosen Test als Gast</button>
   </form>
    
<? }
   else
   {
   $conn=connect($host,$user,$pass,$db);
   //$sqlanmeldung="SELECT * FROM anmeldung WHERE (userID LIKE $userID)AND(session LIKE \"$session\");";
   $sql="SELECT * FROM user WHERE (user LIKE \"$benutzer\") AND (pass LIKE \"$kennwort\")";
    //echo $sql."<br>";
    $userID=db_lesen_passwort($sql,$conn);
    $session=setze_session($session);
	if (isset($userID))
	{
	 $sql="INSERT INTO anmeldung (userID,session)VALUES($userID,\"$session\")";
	 //echo("Willkommen </BR>");
	}
	else
	{
	 $sql="INSERT INTO user (user,pass)VALUES(\"$benutzer\",\"$kennwort\")";
	 //echo("<li><a href=\"#\">Sie sind jetzt mit Username und Passwort registriert und angemeldet</a></li>");
	}
	//$sql="INSERT INTO anmeldung (userID,session)VALUES($userID,\"$session\")";
	anmeldung_input($sql,$conn);
	if (!isset($userID)) {$userID=mysqli_insert_id();
	$sql="INSERT INTO anmeldung (userID,session)VALUES($userID,\"$session\")";
	anmeldung_input($sql,$conn);
	}
	$conn=deconnect($conn);
   ?>
    <ul class="nav navbar-nav" >
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="background-color:#6699CC; color:white;" href="#" >Bearbeitung<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<? echo $PHP_SELF ?>?navi=1&userID=<? echo $userID ?>&session=<? echo $session ?>">Einf&uuml;gen</a></li>
          <li><a href="<? echo $PHP_SELF ?>?navi=2&userID=<? echo $userID ?>&session=<? echo $session ?>">Bearbeiten</a></li>
          <li><a href="<? echo $PHP_SELF ?>?abmelden=1&userID=<? echo $userID ?>&session=<? echo $session ?>">Abmelden</a></li>
        </ul>
      </li>
      <li><a style="background-color:#6699CC; color:white;" href="<? echo $PHP_SELF ?>?abmelden=1&userID=<? echo $userID ?>&session=<? echo $session ?>">Abmelden</a></li>
    </ul>
    <?
   }
    
?>

  </div>
</nav>

