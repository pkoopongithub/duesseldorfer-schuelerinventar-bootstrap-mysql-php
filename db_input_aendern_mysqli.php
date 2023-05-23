<?
 function input($sql,$conn)
  {//BEGIN input
    //echo $sql."<br>";
    if (mysqli_query($conn, $sql))
    {
    //echo"MYSQL-INSERT-OK";
    }
    else
    {die("MYSQL-INSERT-neue Eingabe-Fehler".mysqli_error($conn));}
  }//ENDE input

  function read_gruppe_suche($sql,$conn)
   {//BEGIN raed_data
    $result=mysqli_query($conn, $sql);
    //echo $sql."<br>";
    //echo("<BR> Ergebnis = $result <BR>");
    if($result)
    {//BEGIN if $result
    $number=mysqli_num_rows($result);
     //echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number){//BEGIN Suchausgabe>null
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
     {//BEGIN fields

      //BEGIN stringdef
       $zeile  ="<option value=".$row["gruppeID"].">".$row["name"]."</option>";
        //END stringdef
       echo $zeile;
     }//END fields
     }//ENDE suchausgabe >null
    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysqli_error($conn));
    }//END if result
   }//END read_data


   function read_aendern($sql,$conn,$ID,$userID,$session)
   {//BEGIN raed_data
    //echo $sql."<br>";
    $result=mysqli_query($conn, $sql);
    //echo("<BR> Ergebnis = $result <BR>");
    if($result)
    {//BEGIN if $result
    $number=mysqli_num_rows($result);

     if($number){//BEGIN Suchausgabe>null
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
     {//BEGIN fields
?>

        <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Rohdatenblatt &Auml;ndern</h3>
           </div>
         <div class="panel-body">

<form method="post" action="<? echo("$PHP_SELF"); ?>">

        <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Rohdatensatz</h3>
           </div>
         <div class="panel-body">


 <p>Name<br>
 <input name="name" type="text" class="form-control" size="30" maxlength="40" value="<?echo $row['name'] ?>" >
 </p>
 <p>Gruppe w&auml;hlen<br>
  <select class="form-control" name="gruppeID" >
          <?
           $sql_gruppe_ID="select * FROM gruppe WHERE userID LIKE $userID";
           read_gruppe_suche($sql_gruppe_ID,$conn);
        ?>
        </select >
 </p>
   <p>neue Gruppe<br>
 <input name="namegruppe" type="text" class="form-control" size="30" maxlength="40" >
 </p>



</div>
</div>




        <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Selbsteinsch&auml;tzung</h3>
           </div>
         <div class="panel-body">


  <table class="table table-hover" width="48%" border="1" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolor="#C0C0C0">
    <tr>
      <td width="18%">Item</td>
      <td width="19%"><div align="center">triff voll zu</div></td>
      <td width="20%"><div align="center">trifft zu</div></td>
      <td width="21%"><div align="center">trifft teilweise zu</div></td>
      <td width="22%"><div align="center">trifft nicht zu</div></td>
    </tr>
    <tr>
      <td>Zuverl&auml;ssigkeit:<br><br>Ich beachte beim Erf&uuml;llen eines Auftrags 
	  genau die Hinweise, Vorgaben und Absprachen.</td>
      <td><div align="center" > 
          <input type="radio" name="item1" value="4" <?  if ($row['item1']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item1" value="3" <?  if ($row['item1']=="3") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input name="item1" type="radio" value="2" <?  if ($row['item1']=="2") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item1" value="1" <?  if ($row['item1']=="1") echo("checked"); ?> >
        </div></td>
    </tr>
    <tr>
      <td>Arbeitstempo:<br><br>Ich schaffe schulische Aufgaben in der 
	  vorgegebenen Zeit.</td>
      <td><div align="center"> 
          <input type="radio" name="item2" value="4" <?  if ($row['item2']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item2" value="3" <?  if ($row['item2']=="3") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input name="item2" type="radio" value="2" <?  if ($row['item2']=="2") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item2" value="1" <?  if ($row['item2']=="1") echo("checked"); ?> >
        </div></td>
    </tr>
    <tr>
      <td>Arbeitsplanung:<br><br>Ich mache einen Plan zur Vorgehensweise.</td>
      <td><div align="center"> 
          <input type="radio" name="item3" value="4" <?  if ($row['item3']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item3" value="3" <?  if ($row['item3']=="3") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input name="item3" type="radio" value="2" <?  if ($row['item3']=="2") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item3" value="1" <?  if ($row['item3']=="1") echo("checked"); ?> >
        </div></td>
    </tr>
    <tr>
      <td>Organisationsf&auml;higkeit:<br><br>Ich mache Vorschl&auml;ge zur 
	  Aufgabenverteilung.</td>
      <td><div align="center"> 
          <input type="radio" name="item4" value="4"<?  if ($row['item4']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item4" value="3"<?  if ($row['item4']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item4" type="radio" value="2" <?  if ($row['item4']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item4" value="1"<?  if ($row['item4']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Geschicklichkeit:<br><br>Ich bin geschickt und sicher bei der 
	  Benutzung von Werkzeugen und Arbeitsgeraten.</td>
      <td><div align="center"> 
          <input type="radio" name="item5" value="4"<?  if ($row['item5']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item5" value="3"<?  if ($row['item5']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item5" type="radio" value="2"<?  if ($row['item5']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item5" value="1"<?  if ($row['item5']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Ordnung:<br><br>Mein Arbeitsplatz ist immer ordentlich und 
	  ubersichtlich.</td>
      <td><div align="center"> 
          <input type="radio" name="item6" value="4"<?  if ($row['item6']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item6" value="3"<?  if ($row['item6']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item6" type="radio" value="2"<?  if ($row['item6']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item6" value="1"<?  if ($row['item6']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Sorgfalt:<br><br>Ich gehe sachgerecht und verantwortungsbewusst mit 
	  Materialien um.</td>
      <td><div align="center"> 
          <input type="radio" name="item7" value="4"<?  if ($row['item7']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item7" value="3"<?  if ($row['item7']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item7" type="radio" value="2"<?  if ($row['item7']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item7" value="1"<?  if ($row['item7']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Kreativit&auml;t:<br><br>Ich habe immer wieder neue Ideen, wie ich 
	  L&ouml;suungen finden kann.</td>
      <td><div align="center"> 
          <input type="radio" name="item8" value="4"<?  if ($row['item8']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item8" value="3"<?  if ($row['item8']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item8" type="radio" value="2"<?  if ($row['item8']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item8" value="1"<?  if ($row['item8']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Probleml&ouml;sungsf&auml;higkeit:<br><br>Knifflige Aufgaben machen 
	  mir Spaﬂ.</td>
      <td><div align="center"> 
          <input type="radio" name="item9" value="4"<?  if ($row['item9']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item9" value="3"<?  if ($row['item9']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item9" type="radio" value="2"<?  if ($row['item9']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item9" value="1"<?  if ($row['item9']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Abstraktionsverm&ouml;gen:<br><br>Ich kann Wichtiges von Unwichtigem 
	  unterscheiden.</td>
      <td><div align="center"> 
          <input type="radio" name="item10" value="4"<?  if ($row['item10']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item10" value="3"<?  if ($row['item10']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item10" type="radio" value="2"<?  if ($row['item10']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item10" value="1"<?  if ($row['item10']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Selbstst&auml;ndigkeit:<br><br>Ich kann Aufgaben ohne Anleitung 
	  ausf&uuml;hren.</td>
      <td><div align="center"> 
          <input type="radio" name="item11" value="4"<?  if ($row['item11']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item11" value="3"<?  if ($row['item11']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item11" type="radio" value="2"<?  if ($row['item11']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item11" value="1"<?  if ($row['item11']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Belastbarkeit:<br><br>Ich arbeite auch bei Schwierigkeiten an einer 
	  Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="item12" value="4"<?  if ($row['item12']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item12" value="3"<?  if ($row['item12']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item12" type="radio" value="2"<?  if ($row['item12']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item12" value="1"<?  if ($row['item12']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Konzentrationsf&auml;higkeit:<br><br>Ich kann eine T&auml;tigkeit &uuml;ber 
	  l&auml;ngere Zeit aus&uuml;ben, ohne mich ablenken zu lassen.</td>
      <td><div align="center"> 
          <input type="radio" name="item13" value="4"<?  if ($row['item13']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item13" value="3"<?  if ($row['item13']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item13" type="radio" value="2"<?  if ($row['item13']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item13" value="1"<?  if ($row['item13']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Verantwortungsbewu&szlig;tsein:<br><br>Ich gestalte Entscheidungen mit 
	  und &uuml;bernehme auch die Verantwortung f&uuml;r sie.</td>
      <td><div align="center"> 
          <input type="radio" name="item14" value="4"<?  if ($row['item14']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item14" value="3"<?  if ($row['item14']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item14" type="radio" value="2"<?  if ($row['item14']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item14" value="1"<?  if ($row['item14']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Eigeninitiative:<br><br>Ich setze mir eigene Ziele und verwirkliche 
	  sie auch ohne Anstoﬂ von auﬂen.</td>
      <td><div align="center"> 
          <input type="radio" name="item15" value="4"<?  if ($row['item15']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item15" value="3"<?  if ($row['item15']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item15" type="radio" value="2"<?  if ($row['item15']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item15" value="1"<?  if ($row['item15']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Leistungsbereitschaft:<br><br>Ich arbeite auch &uuml;ber das geforderte Maﬂ 
	  an einer Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="item16" value="4"<?  if ($row['item16']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item16" value="3"<?  if ($row['item16']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item16" type="radio" value="2"<?  if ($row['item16']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item16" value="1"<?  if ($row['item16']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Auffassungsgabe:<br><br>Ich kann Zusammenh&auml;nge leicht und schnell 
	  begreifen.</td>
      <td><div align="center"> 
          <input type="radio" name="item17" value="4"<?  if ($row['item17']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item17" value="3"<?  if ($row['item17']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item17" type="radio" value="2"<?  if ($row['item17']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item17" value="1"<?  if ($row['item17']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Merkf&auml;higkeit:<br><br>Einmal Gelerntes weiﬂ ich nach l&auml;ngerer 
	  Zeit noch.</td>
      <td><div align="center"> 
          <input type="radio" name="item18" value="4"<?  if ($row['item18']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item18" value="3"<?  if ($row['item18']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item18" type="radio" value="2"<?  if ($row['item18']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item18" value="1"<?  if ($row['item18']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Motivationsf&auml;higkeit:<br><br>Ich gehe mit Begeisterung an neue 
	  Aufgaben.</td>
      <td><div align="center"> 
          <input type="radio" name="item19" value="4"<?  if ($row['item19']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item19" value="3"<?  if ($row['item19']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item19" type="radio" value="2"<?  if ($row['item19']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item19" value="1"<?  if ($row['item19']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Reflektionsf&auml;higkeit:<br><br>Ich erkenne, wie meine 
	  Arbeitsleistung war.</td>
      <td><div align="center"> 
          <input type="radio" name="item20" value="4"<?  if ($row['item20']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item20" value="3"<?  if ($row['item20']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item20" type="radio" value="2"<?  if ($row['item20']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item20" value="1"<?  if ($row['item20']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Teamf&auml;higkeit:<br><br>Ich kann zielgerichtet und f&ouml;rderlich mit 
	  anderen zusammenarbeiten.</td>
      <td><div align="center"> 
          <input type="radio" name="item21" value="4"<?  if ($row['item21']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item21" value="3"<?  if ($row['item21']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item21" type="radio" value="2"<?  if ($row['item21']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item21" value="1"<?  if ($row['item21']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Hilfsbereitschaft:<br><br>Wenn jemand Unterst&uuml;tzung braucht, bin ich 
	  gern bereit zu helfen.</td>
      <td><div align="center"> 
          <input type="radio" name="item22" value="4"<?  if ($row['item22']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item22" value="3"<?  if ($row['item22']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item22" type="radio" value="2"<?  if ($row['item22']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item22" value="1"<?  if ($row['item22']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Kontaktf&auml;higkeit:<br><br>Ich kann auf andere zugehen und bin an 
	  deren Vorschl&auml;gen interessiert.</td>
      <td><div align="center"> 
          <input type="radio" name="item23" value="4"<?  if ($row['item23']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item23" value="3"<?  if ($row['item23']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item23" type="radio" value="2"<?  if ($row['item23']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item23" value="1"<?  if ($row['item23']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Respektvoller Umgang:<br><br>Ich beachte die Formen der H&ouml;flichkeit im 
	  Umgang mit anderen Menschen.</td>
      <td><div align="center"> 
          <input type="radio" name="item24" value="4"<?  if ($row['item24']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item24" value="3"<?  if ($row['item24']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item24" type="radio" value="2"<?  if ($row['item24']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item24" value="1"<?  if ($row['item24']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Kommunikationsf&auml;higkeit:<br><br>Ich gehe auf Fragen ein und h&ouml;re 
	  anderen aufmerksam zu.</td>
      <td><div align="center"> 
          <input type="radio" name="item25" value="4"<?  if ($row['item25']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item25" value="3"<?  if ($row['item25']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item25" type="radio" value="2"<?  if ($row['item25']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item25" value="1"<?  if ($row['item25']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Einf&uuml;hlungsverm&ouml;gen:<br><br>Ich kann mich in andere 
	  hineinversetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="item26" value="4"<?  if ($row['item26']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item26" value="3"<?  if ($row['item26']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item26" type="radio" value="2"<?  if ($row['item26']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item26" value="1"<?  if ($row['item26']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Konfliktf&auml;higkeit:<br><br>Ich versuche bei einem Streit, eine 
	  gemeinsame L&ouml;sung zu finden.</td>
      <td><div align="center"> 
          <input type="radio" name="item27" value="4"<?  if ($row['item27']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item27" value="3"<?  if ($row['item27']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item27" type="radio" value="2"<?  if ($row['item27']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item27" value="1"<?  if ($row['item27']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Kritikf&auml;higkeit:<br><br>Ich kann Kritik angemessen vorbringen, 
	  annehmen und umsetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="item28" value="4"<?  if ($row['item28']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item28" value="3"<?  if ($row['item28']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item28" type="radio" value="2"<?  if ($row['item28']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item28" value="1"<?  if ($row['item28']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Schreiben:<br><br>Ich schreibe gern Texte.</td>
      <td><div align="center"> 
          <input type="radio" name="item29" value="4"<?  if ($row['item29']=="4") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item29" value="3"<?  if ($row['item29']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item29" type="radio" value="2"<?  if ($row['item29']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item29" value="1"<?  if ($row['item29']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Lesen:<br><br>Ich kann wichtige Informationen aus einem Text 
	  entnehmen.</td>
      <td><div align="center"> 
          <input type="radio" name="item30" value="4"<?  if ($row['item30']=="4") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item30" value="3"<?  if ($row['item30']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item30" type="radio" value="2"<?  if ($row['item30']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item30" value="1"<?  if ($row['item30']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Mathematik:<br><br>Ich kann gut mit Zahlen und Formeln umgehen.</td>
      <td><div align="center"> 
          <input type="radio" name="item31" value="4"<?  if ($row['item31']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item31" value="3"<?  if ($row['item31']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item31" type="radio" value="2"<?  if ($row['item31']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item31" value="1"<?  if ($row['item31']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Naturwissenschaft:<br><br>Ich interessiere mich f&uuml;r die Natur und ihre 
	  Gesetze.</td>
      <td><div align="center"> 
          <input type="radio" name="item32" value="4"<?  if ($row['item32']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item32" value="3"<?  if ($row['item32']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item32" type="radio" value="2"<?  if ($row['item32']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item32" value="1"<?  if ($row['item32']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Fremdsprachen:<br><br>Ich kann mich in einer Fremdsprache ausdr&uuml;ckken.</td>
      <td><div align="center"> 
          <input type="radio" name="item33" value="4"<?  if ($row['item33']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item33" value="3"<?  if ($row['item33']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item33" type="radio" value="2"<?  if ($row['item33']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item33" value="1"<?  if ($row['item33']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>Pr&auml;sentationsf&auml;higkeit:<br><br>Wenn ich pr&auml;sentiere, h&ouml;ren 
	  mir andere gern zu.</td>
      <td><div align="center"> 
          <input type="radio" name="item34" value="4"<?  if ($row['item34']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item34" value="3"<?  if ($row['item34']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item34" type="radio" value="2"<?  if ($row['item34']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item34" value="1"<?  if ($row['item34']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>PC Kenntnisse:<br><br>Ich kann den PC f&uuml;r die schulische Arbeit 
	  nutzen.</td>
      <td><div align="center"> 
          <input type="radio" name="item35" value="4"<?  if ($row['item35']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item35" value="3"<?  if ($row['item35']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item35" type="radio" value="2"<?  if ($row['item35']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item35" value="1"<?  if ($row['item35']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr>
      <td>F&auml;cher&uuml;bergreifendes Denken:<br><br>Ich kann Wissen, das ich 
	  erworben habe, auch in anderen Zusammenh&auml;ngen anwenden.</td>
      <td><div align="center"> 
          <input type="radio" name="item36" value="4"<?  if ($row['item36']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item36" value="3"<?  if ($row['item36']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="item36" type="radio" value="2"<?  if ($row['item36']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item36" value="1"<?  if ($row['item36']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
  </table>


</div>
</div>
         
         <p>
         <input type=hidden name=profilID value=<? echo $ID ?>>
         <input type=hidden name=aendern value=0>
         <input type=hidden name=navi value=1>
         <input type=hidden name=userID value=<? echo $userID ?>>
         <input type=hidden name=session value=<? echo $session ?>>
         <button name="update" value="update" type="submit" class="btn btn-default">update</button>


         </p>



        <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Fremdeinsch&auml;tzung</h3>
           </div>
         <div class="panel-body">



  <table class="table table-hover" width="48%" border="1" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolor="#C0C0C0">
    <tr> 
      <td width="18%">Item</td>
      <td width="19%"><div align="center">triff voll zu</div></td>
      <td width="20%"><div align="center">trifft zu</div></td>
      <td width="21%"><div align="center">trifft teilweise zu</div></td>
      <td width="22%"><div align="center">trifft nicht zu</div></td>
    </tr>
    <tr> 
      <td>Zuverl&auml;ssigkeit:<br><br>Ich beachte beim Erf&uuml;llen eines Auftrags 
	  genau die Hinweise, Vorgaben und Absprachen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem1" value="4" <?  if ($row['feitem1']=="4") echo("checked"); ?> checked="true" >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem1" value="3" <?  if ($row['feitem1']=="3") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input name="feitem1" type="radio" value="2" <?  if ($row['feitem1']=="2") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem1" value="1" <?  if ($row['feitem1']=="1") echo("checked"); ?> >
        </div></td>
    </tr>
    <tr> 
      <td>Arbeitstempo:<br><br>Ich schaffe schulische Aufgaben in der 
	  vorgegebenen Zeit.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem2" value="4" <?  if ($row['feitem2']=="4") echo("checked"); ?> checked="true" >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem2" value="3" <?  if ($row['feitem2']=="3") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input name="feitem2" type="radio" value="2" <?  if ($row['feitem2']=="2") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem2" value="1" <?  if ($row['feitem2']=="1") echo("checked"); ?> >
        </div></td>
    </tr>
    <tr> 
      <td>Arbeitsplanung:<br><br>Ich mache einen Plan zur Vorgehensweise.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem3" value="4" <?  if ($row['feitem3']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem3" value="3" <?  if ($row['feitem3']=="3") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input name="feitem3" type="radio" value="2" <?  if ($row['feitem3']=="2") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem3" value="1" <?  if ($row['feitem3']=="1") echo("checked"); ?> >
        </div></td>
    </tr>
    <tr> 
      <td>Organisationsf&auml;higkeit:<br><br>Ich mache Vorschl&auml;ge zur 
	  Aufgabenverteilung.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem4" value="4"<?  if ($row['feitem4']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem4" value="3"<?  if ($row['feitem4']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem4" type="radio" value="2" <?  if ($row['feitem4']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem4" value="1"<?  if ($row['feitem4']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Geschicklichkeit:<br><br>Ich bin geschickt und sicher bei der 
	  Benutzung von Werkzeugen und Arbeitsgeraten.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem5" value="4"<?  if ($row['feitem5']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem5" value="3"<?  if ($row['feitem5']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem5" type="radio" value="2"<?  if ($row['feitem5']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem5" value="1"<?  if ($row['feitem5']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Ordnung:<br><br>Mein Arbeitsplatz ist immer ordentlich und 
	  ubersichtlich.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem6" value="4"<?  if ($row['feitem6']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem6" value="3"<?  if ($row['feitem6']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem6" type="radio" value="2"<?  if ($row['feitem6']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem6" value="1"<?  if ($row['feitem6']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Sorgfalt:<br><br>Ich gehe sachgerecht und verantwortungsbewusst mit 
	  Materialien um.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem7" value="4"<?  if ($row['feitem7']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem7" value="3"<?  if ($row['feitem7']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem7" type="radio" value="2"<?  if ($row['feitem7']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem7" value="1"<?  if ($row['feitem7']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Kreativit&auml;t:<br><br>Ich habe immer wieder neue Ideen, wie ich 
	  L&ouml;suungen finden kann.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem8" value="4"<?  if ($row['feitem8']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem8" value="3"<?  if ($row['feitem8']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem8" type="radio" value="2"<?  if ($row['feitem8']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem8" value="1"<?  if ($row['feitem8']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Probleml&ouml;sungsf&auml;higkeit:<br><br>Knifflige Aufgaben machen 
	  mir Spaﬂ.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem9" value="4"<?  if ($row['feitem9']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem9" value="3"<?  if ($row['feitem9']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem9" type="radio" value="2"<?  if ($row['feitem9']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem9" value="1"<?  if ($row['feitem9']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Abstraktionsverm&ouml;gen:<br><br>Ich kann Wichtiges von Unwichtigem 
	  unterscheiden.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem10" value="4"<?  if ($row['feitem10']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem10" value="3"<?  if ($row['feitem10']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem10" type="radio" value="2"<?  if ($row['feitem10']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem10" value="1"<?  if ($row['feitem10']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Selbstst&auml;ndigkeit:<br><br>Ich kann Aufgaben ohne Anleitung 
	  ausf&uuml;hren.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem11" value="4"<?  if ($row['feitem11']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem11" value="3"<?  if ($row['feitem11']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem11" type="radio" value="2"<?  if ($row['feitem11']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem11" value="1"<?  if ($row['feitem11']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Belastbarkeit:<br><br>Ich arbeite auch bei Schwierigkeiten an einer 
	  Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem12" value="4"<?  if ($row['feitem12']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem12" value="3"<?  if ($row['feitem12']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem12" type="radio" value="2"<?  if ($row['feitem12']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem12" value="1"<?  if ($row['feitem12']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Konzentrationsf&auml;higkeit:<br><br>Ich kann eine T&auml;tigkeit &uuml;ber 
	  l&auml;ngere Zeit aus&uuml;ben, ohne mich ablenken zu lassen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem13" value="4"<?  if ($row['feitem13']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem13" value="3"<?  if ($row['feitem13']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem13" type="radio" value="2"<?  if ($row['feitem13']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem13" value="1"<?  if ($row['feitem13']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Verantwortungsbewu&szlig;tsein:<br><br>Ich gestalte Entscheidungen mit 
	  und &uuml;bernehme auch die Verantwortung f&uuml;r sie.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem14" value="4"<?  if ($row['feitem14']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem14" value="3"<?  if ($row['feitem14']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem14" type="radio" value="2"<?  if ($row['feitem14']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem14" value="1"<?  if ($row['feitem14']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Eigeninitiative:<br><br>Ich setze mir eigene Ziele und verwirkliche 
	  sie auch ohne Anstoﬂ von auﬂen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem15" value="4"<?  if ($row['feitem15']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem15" value="3"<?  if ($row['feitem15']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem15" type="radio" value="2"<?  if ($row['feitem15']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem15" value="1"<?  if ($row['feitem15']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Leistungsbereitschaft:<br><br>Ich arbeite auch &uuml;ber das geforderte Maﬂ 
	  an einer Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem16" value="4"<?  if ($row['feitem16']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem16" value="3"<?  if ($row['feitem16']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem16" type="radio" value="2"<?  if ($row['feitem16']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem16" value="1"<?  if ($row['feitem16']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Auffassungsgabe:<br><br>Ich kann Zusammenh&auml;nge leicht und schnell 
	  begreifen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem17" value="4"<?  if ($row['feitem17']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem17" value="3"<?  if ($row['feitem17']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem17" type="radio" value="2"<?  if ($row['feitem17']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem17" value="1"<?  if ($row['feitem17']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Merkf&auml;higkeit:<br><br>Einmal Gelerntes weiﬂ ich nach l&auml;ngerer 
	  Zeit noch.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem18" value="4"<?  if ($row['feitem18']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem18" value="3"<?  if ($row['feitem18']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem18" type="radio" value="2"<?  if ($row['feitem18']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem18" value="1"<?  if ($row['feitem18']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Motivationsf&auml;higkeit:<br><br>Ich gehe mit Begeisterung an neue 
	  Aufgaben.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem19" value="4"<?  if ($row['feitem19']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem19" value="3"<?  if ($row['feitem19']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem19" type="radio" value="2"<?  if ($row['feitem19']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem19" value="1"<?  if ($row['feitem19']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Reflektionsf&auml;higkeit:<br><br>Ich erkenne, wie meine 
	  Arbeitsleistung war.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem20" value="4"<?  if ($row['feitem20']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem20" value="3"<?  if ($row['feitem20']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem20" type="radio" value="2"<?  if ($row['feitem20']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem20" value="1"<?  if ($row['feitem20']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Teamf&auml;higkeit:<br><br>Ich kann zielgerichtet und f&ouml;rderlich mit 
	  anderen zusammenarbeiten.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem21" value="4"<?  if ($row['feitem21']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem21" value="3"<?  if ($row['feitem21']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem21" type="radio" value="2"<?  if ($row['feitem21']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem21" value="1"<?  if ($row['feitem21']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Hilfsbereitschaft:<br><br>Wenn jemand Unterst&uuml;tzung braucht, bin ich 
	  gern bereit zu helfen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem22" value="4"<?  if ($row['feitem22']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem22" value="3"<?  if ($row['feitem22']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem22" type="radio" value="2"<?  if ($row['feitem22']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem22" value="1"<?  if ($row['feitem22']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Kontaktf&auml;higkeit:<br><br>Ich kann auf andere zugehen und bin an 
	  deren Vorschl&auml;gen interessiert.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem23" value="4"<?  if ($row['feitem23']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem23" value="3"<?  if ($row['feitem23']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem23" type="radio" value="2"<?  if ($row['feitem23']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem23" value="1"<?  if ($row['feitem23']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Respektvoller Umgang:<br><br>Ich beachte die Formen der H&ouml;flichkeit im 
	  Umgang mit anderen Menschen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem24" value="4"<?  if ($row['feitem24']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem24" value="3"<?  if ($row['feitem24']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem24" type="radio" value="2"<?  if ($row['feitem24']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem24" value="1"<?  if ($row['feitem24']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Kommunikationsf&auml;higkeit:<br><br>Ich gehe auf Fragen ein und h&ouml;re 
	  anderen aufmerksam zu.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem25" value="4"<?  if ($row['feitem25']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem25" value="3"<?  if ($row['feitem25']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem25" type="radio" value="2"<?  if ($row['feitem25']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem25" value="1"<?  if ($row['feitem25']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Einf&uuml;hlungsverm&ouml;gen:<br><br>Ich kann mich in andere 
	  hineinversetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem26" value="4"<?  if ($row['feitem26']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem26" value="3"<?  if ($row['feitem26']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem26" type="radio" value="2"<?  if ($row['feitem26']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem26" value="1"<?  if ($row['feitem26']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Konfliktf&auml;higkeit:<br><br>Ich versuche bei einem Streit, eine 
	  gemeinsame L&ouml;sung zu finden.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem27" value="4"<?  if ($row['feitem27']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem27" value="3"<?  if ($row['feitem27']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem27" type="radio" value="2"<?  if ($row['feitem27']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem27" value="1"<?  if ($row['feitem27']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Kritikf&auml;higkeit:<br><br>Ich kann Kritik angemessen vorbringen, 
	  annehmen und umsetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem28" value="4"<?  if ($row['feitem28']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem28" value="3"<?  if ($row['feitem28']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem28" type="radio" value="2"<?  if ($row['feitem28']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem28" value="1"<?  if ($row['feitem28']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Schreiben:<br><br>Ich schreibe gern Texte.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem29" value="4"<?  if ($row['feitem29']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem29" value="3"<?  if ($row['feitem29']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem29" type="radio" value="2"<?  if ($row['feitem29']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem29" value="1"<?  if ($row['feitem29']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Lesen:<br><br>Ich kann wichtige Informationen aus einem Text 
	  entnehmen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem30" value="4"<?  if ($row['feitem30']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem30" value="3"<?  if ($row['feitem30']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem30" type="radio" value="2"<?  if ($row['feitem30']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem30" value="1"<?  if ($row['feitem30']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Mathematik:<br><br>Ich kann gut mit Zahlen und Formeln umgehen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem31" value="4"<?  if ($row['feitem31']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem31" value="3"<?  if ($row['feitem31']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem31" type="radio" value="2"<?  if ($row['feitem31']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem31" value="1"<?  if ($row['feitem31']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Naturwissenschaft:<br><br>Ich interessiere mich f&uuml;r die Natur und ihre 
	  Gesetze.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem32" value="4"<?  if ($row['feitem32']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem32" value="3"<?  if ($row['feitem32']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem32" type="radio" value="2"<?  if ($row['feitem32']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem32" value="1"<?  if ($row['feitem32']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Fremdsprachen:<br><br>Ich kann mich in einer Fremdsprache ausdr&uuml;ckken.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem33" value="4"<?  if ($row['feitem33']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem33" value="3"<?  if ($row['feitem33']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem33" type="radio" value="2"<?  if ($row['feitem33']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem33" value="1"<?  if ($row['feitem33']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>Pr&auml;sentationsf&auml;higkeit:<br><br>Wenn ich pr&auml;sentiere, h&ouml;ren 
	  mir andere gern zu.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem34" value="4"<?  if ($row['feitem34']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem34" value="3"<?  if ($row['feitem34']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem34" type="radio" value="2"<?  if ($row['feitem34']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem34" value="1"<?  if ($row['feitem34']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>PC Kenntnisse:<br><br>Ich kann den PC f&uuml;r die schulische Arbeit 
	  nutzen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem35" value="4"<?  if ($row['feitem35']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem35" value="3"<?  if ($row['feitem35']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem35" type="radio" value="2"<?  if ($row['feitem35']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem35" value="1"<?  if ($row['feitem35']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
    <tr> 
      <td>F&auml;cher&uuml;bergreifendes Denken:<br><br>Ich kann Wissen, das ich 
	  erworben habe, auch in anderen Zusammenh&auml;ngen anwenden.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem36" value="4"<?  if ($row['feitem36']=="4") echo("checked"); ?> >
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem36" value="3"<?  if ($row['feitem36']=="3") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input name="feitem36" type="radio" value="2"<?  if ($row['feitem36']=="2") echo("checked"); ?>>
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem36" value="1"<?  if ($row['feitem36']=="1") echo("checked"); ?>>
        </div></td>
    </tr>
  </table>


</div>
</div>



 <p>
 <input type=hidden name=profilID value=<? echo $ID ?>>
 <input type=hidden name=aendern value=0>
 <input type=hidden name=navi value=1>
 <input type=hidden name=userID value=<? echo $userID ?>>
 <input type=hidden name=session value=<? echo $session ?>>
 <button name="update" value="update" type="submit" class="btn btn-default">update</button>


 </p>
</form>
</div>
</div>
<br>
<br>
<br>


<?

     }//END fields
     }//ENDE suchausgabe >null
    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysqli_error($conn));
    }//END if result
   }//END read_data



if ($aendern)
 {$sql="select DISTINCT  * FROM profil WHERE profilID LIKE $ID "; //"select DISTINCT  * FROM profil,gruppe WHERE (profilID LIKE $ID) AND (profil.gruppeID LIKE $gruppeID) ";
  //echo $sql."<br>";
  $conn=connect($host,$user,$pass,$db);
  read_aendern($sql,$conn,$ID,$userID,$session);
  $conn=deconnect($conn);
  }
 else
 {
 
 
$conn=connect($host,$user,$pass,$db);
 if($einfuegen)
 {//BEGIN
  if ($namegruppe)
   {//BEGIN namegruppe
    $sqlinput="INSERT INTO gruppe(name,userID) VALUES (\"$namegruppe\",$userID)";
    {input($sqlinput,$conn);}
    $gruppeID=mysqli_insert_id($conn);
   }//END namegruppe
$sqlinput
="INSERT INTO profil (name,userID,gruppeID,
item1,
item2,
item3,
item4,
item5,
item6,
item7,
item8,
item9,
item10,
item11,
item12,
item13,
item14,
item15,
item16,
item17,
item18,
item19,
item20,
item21,
item22,
item23,
item24,
item25,
item26,
item27,
item28,
item29,
item30,
item31,
item32,
item33,
item34,
item35,
item36,
feitem1,
feitem2,
feitem3,
feitem4,
feitem5,
feitem6,
feitem7,
feitem8,
feitem9,
feitem10,
feitem11,
feitem12,
feitem13,
feitem14,
feitem15,
feitem16,
feitem17,
feitem18,
feitem19,
feitem20,
feitem21,
feitem22,
feitem23,
feitem24,
feitem25,
feitem26,
feitem27,
feitem28,
feitem29,
feitem30,
feitem31,
feitem32,
feitem33,
feitem34,
feitem35,
feitem36)
VALUES
(\"$name\",$userID,$gruppeID,
$item1,
$item2,
$item3,
$item4,
$item5,
$item6,
$item7,
$item8,
$item9,
$item10,
$item11,
$item12,
$item13,
$item14,
$item15,
$item16,
$item17,
$item18,
$item19,
$item20,
$item21,
$item22,
$item23,
$item24,
$item25,
$item26,
$item27,
$item28,
$item29,
$item30,
$item31,
$item32,
$item33,
$item34,
$item35,
$item36,
$feitem1,
$feitem2,
$feitem3,
$feitem4,
$feitem5,
$feitem6,
$feitem7,
$feitem8,
$feitem9,
$feitem10,
$feitem11,
$feitem12,
$feitem13,
$feitem14,
$feitem15,
$feitem16,
$feitem17,
$feitem18,
$feitem19,
$feitem20,
$feitem21,
$feitem22,
$feitem23,
$feitem24,
$feitem25,
$feitem26,
$feitem27,
$feitem28,
$feitem29,
$feitem30,
$feitem31,
$feitem32,
$feitem33,
$feitem34,
$feitem35,
$feitem36)";

  {input($sqlinput,$conn);}
  $ID=mysqli_insert_id($conn);
  include("db_profil_lesen.php");
 }//END

  if($update)
 {//BEGIN
  if ($namegruppe)
   {//BEGIN namegruppe
    $sqlinput="INSERT INTO gruppe(name,userID) VALUES (\"$namegruppe\",$userID)";
    {input($sqlinput,$conn);}
    $gruppeID=mysqli_insert_id($conn);
   }//END namegruppe
  $sqlinput="UPDATE profil SET  name=\"$name\",
  item1=$item1,
item2=$item2,
item3=$item3,
item4=$item4,
item5=$item5,
item6=$item6,
item7=$item7,
item8=$item8,
item9=$item9,
item10=$item10,
item11=$item11,
item12=$item12,
item13=$item13,
item14=$item14,
item15=$item15,
item16=$item16,
item17=$item17,
item18=$item18,
item19=$item19,
item20=$item20,
item21=$item21,
item22=$item22,
item23=$item23,
item24=$item24,
item25=$item25,
item26=$item26,
item27=$item27,
item28=$item28,
item29=$item29,
item30=$item30,
item31=$item31,
item32=$item32,
item33=$item33,
item34=$item34,
item35=$item35,
item36=$item36,
feitem1=$feitem1,
feitem2=$feitem2,
feitem3=$feitem3,
feitem4=$feitem4,
feitem5=$feitem5,
feitem6=$feitem6,
feitem7=$feitem7,
feitem8=$feitem8,
feitem9=$feitem9,
feitem10=$feitem10,
feitem11=$feitem11,
feitem12=$feitem12,
feitem13=$feitem13,
feitem14=$feitem14,
feitem15=$feitem15,
feitem16=$feitem16,
feitem17=$feitem17,
feitem18=$feitem18,
feitem19=$feitem19,
feitem20=$feitem20,
feitem21=$feitem21,
feitem22=$feitem22,
feitem23=$feitem23,
feitem24=$feitem24,
feitem25=$feitem25,
feitem26=$feitem26,
feitem27=$feitem27,
feitem28=$feitem28,
feitem29=$feitem29,
feitem30=$feitem30,
feitem31=$feitem31,
feitem32=$feitem32,
feitem33=$feitem33,
feitem34=$feitem34,
feitem35=$feitem35,
feitem36=$feitem36,
  gruppeID=$gruppeID
  WHERE (profilID LIKE $profilID)";
  {input($sqlinput,$conn);}
  $ID=$profilID;
  $update=0;
 }//END
$conn=deconnect($conn);

 
 
 
 
 
 
 ?>
          <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Rohdatenblatt Eingabe</h3>
           </div>
         <div class="panel-body">


<form method="post" action="<? echo("$PHP_SELF"); ?>">

        <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Datensatz</h3>
           </div>
         <div class="panel-body">
 <p>Name<br>
 <input name="name" type="text" class="form-control" size="30" maxlength="40" class=button>
 </p>
 <p>Gruppe w&auml;hlen<br>
  <select class="form-control" name="gruppeID" >
          <?
           $conn=connect($host,$user,$pass,$db);
           $sql_gruppe_ID="select  * FROM gruppe WHERE userID LIKE $userID";
           read_gruppe_suche($sql_gruppe_ID,$conn);
           $conn=deconnect($conn);
        ?>
        </select >
 </p>
   <p>neue Gruppe<br>
 <input name="namegruppe" type="text" class="form-control" size="30" maxlength="40">
 </p>


</div>
</div>




        <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Selbsteinsch&auml;tzung</h3>
           </div>
         <div class="panel-body">


  <table class="table table-hover" width="48%" border="1" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolor="#C0C0C0">
    <tr> 
      <td width="18%">Item</td>
      <td width="19%"><div align="center">triff voll zu</div></td>
      <td width="20%"><div align="center">trifft zu</div></td>
      <td width="21%"><div align="center">trifft teilweise zu</div></td>
      <td width="22%"><div align="center">trifft nicht zu</div></td>
    </tr>
    <tr> 
      <td>Zuverl&auml;ssigkeit:<br><br>Ich beachte beim Erf&uuml;llen eines Auftrags 
	  genau die Hinweise, Vorgaben und Absprachen.</td>
      <td><div align="center"> 
          <input type="radio" name="item1" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item1" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item1" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item1" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Arbeitstempo:<br><br>Ich schaffe schulische Aufgaben in der 
	  vorgegebenen Zeit.</td>
      <td><div align="center"> 
          <input type="radio" name="item2" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item2" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item2" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item2" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Arbeitsplanung:<br><br>Ich mache einen Plan zur Vorgehensweise.</td>
      <td><div align="center"> 
          <input type="radio" name="item3" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item3" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item3" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item3" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Organisationsf&auml;higkeit:<br><br>Ich mache Vorschl&auml;ge zur 
	  Aufgabenverteilung.</td>
      <td><div align="center"> 
          <input type="radio" name="item4" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item4" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item4" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center">
          <input type="radio" name="item4" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Geschicklichkeit:<br><br>Ich bin geschickt und sicher bei der 
	  Benutzung von Werkzeugen und Arbeitsgeraten.</td>
      <td><div align="center"> 
          <input type="radio" name="item5" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item5" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item5" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item5" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Ordnung:<br><br>Mein Arbeitsplatz ist immer ordentlich und 
	  ubersichtlich.</td>
      <td><div align="center"> 
          <input type="radio" name="item6" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item6" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item6" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item6" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Sorgfalt:<br><br>Ich gehe sachgerecht und verantwortungsbewusst mit 
	  Materialien um.</td>
      <td><div align="center"> 
          <input type="radio" name="item7" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item7" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item7" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item7" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kreativit&auml;t:<br><br>Ich habe immer wieder neue Ideen, wie ich 
	  L&ouml;suungen finden kann.</td>
      <td><div align="center"> 
          <input type="radio" name="item8" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item8" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item8" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item8" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Probleml&ouml;sungsf&auml;higkeit:<br><br>Knifflige Aufgaben machen 
	  mir Spaﬂ.</td>
      <td><div align="center"> 
          <input type="radio" name="item9" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item9" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item9" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item9" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Abstraktionsverm&ouml;gen:<br><br>Ich kann Wichtiges von Unwichtigem 
	  unterscheiden.</td>
      <td><div align="center"> 
          <input type="radio" name="item10" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item10" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item10" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item10" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Selbstst&auml;ndigkeit:<br><br>Ich kann Aufgaben ohne Anleitung 
	  ausf&uuml;hren.</td>
      <td><div align="center"> 
          <input type="radio" name="item11" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item11" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item11" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item11" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Belastbarkeit:<br><br>Ich arbeite auch bei Schwierigkeiten an einer 
	  Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="item12" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item12" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item12" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item12" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Konzentrationsf&auml;higkeit:<br><br>Ich kann eine T&auml;tigkeit &uuml;ber 
	  l&auml;ngere Zeit aus&uuml;ben, ohne mich ablenken zu lassen.</td>
      <td><div align="center"> 
          <input type="radio" name="item13" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item1" value="32">
        </div></td>
      <td><div align="center"> 
          <input name="item13" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item13" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Verantwortungsbewu&szlig;tsein:<br><br>Ich gestalte Entscheidungen mit 
	  und &uuml;bernehme auch die Verantwortung f&uuml;r sie.</td>
      <td><div align="center"> 
          <input type="radio" name="item14" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item14" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item14" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item14" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Eigeninitiative:<br><br>Ich setze mir eigene Ziele und verwirkliche 
	  sie auch ohne Anstoﬂ von auﬂen.</td>
      <td><div align="center"> 
          <input type="radio" name="item15" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item15" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item15" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item15" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Leistungsbereitschaft:<br><br>Ich arbeite auch &uuml;ber das geforderte Maﬂ 
	  an einer Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="item16" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item16" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item16" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item16" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Auffassungsgabe:<br><br>Ich kann Zusammenh&auml;nge leicht und schnell 
	  begreifen.</td>
      <td><div align="center"> 
          <input type="radio" name="item17" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item17" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item17" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item17" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Merkf&auml;higkeit:<br><br>Einmal Gelerntes weiﬂ ich nach l&auml;ngerer 
	  Zeit noch.</td>
      <td><div align="center"> 
          <input type="radio" name="item18" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item18" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item18" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item18" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Motivationsf&auml;higkeit:<br><br>Ich gehe mit Begeisterung an neue 
	  Aufgaben.</td>
      <td><div align="center"> 
          <input type="radio" name="item19" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item19" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item19" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item19" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Reflektionsf&auml;higkeit:<br><br>Ich erkenne, wie meine 
	  Arbeitsleistung war.</td>
      <td><div align="center"> 
          <input type="radio" name="item20" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item20" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item20" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item20" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Teamf&auml;higkeit:<br><br>Ich kann zielgerichtet und f&ouml;rderlich mit 
	  anderen zusammenarbeiten.</td>
      <td><div align="center"> 
          <input type="radio" name="item21" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item21" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item21" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item21" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Hilfsbereitschaft:<br><br>Wenn jemand Unterst&uuml;tzung braucht, bin ich 
	  gern bereit zu helfen.</td>
      <td><div align="center"> 
          <input type="radio" name="item22" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item22" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item22" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item22" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kontaktf&auml;higkeit:<br><br>Ich kann auf andere zugehen und bin an 
	  deren Vorschl&auml;gen interessiert.</td>
      <td><div align="center"> 
          <input type="radio" name="item23" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item23" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item23" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item23" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Respektvoller Umgang:<br><br>Ich beachte die Formen der H&ouml;flichkeit im 
	  Umgang mit anderen Menschen.</td>
      <td><div align="center"> 
          <input type="radio" name="item24" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item24" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item24" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item24" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kommunikationsf&auml;higkeit:<br><br>Ich gehe auf Fragen ein und h&ouml;re 
	  anderen aufmerksam zu.</td>
      <td><div align="center"> 
          <input type="radio" name="item25" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item25" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item25" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item25" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Einf&uuml;hlungsverm&ouml;gen:<br><br>Ich kann mich in andere 
	  hineinversetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="item26" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item26" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item26" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item26" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Konfliktf&auml;higkeit:<br><br>Ich versuche bei einem Streit, eine 
	  gemeinsame L&ouml;sung zu finden.</td>
      <td><div align="center"> 
          <input type="radio" name="item27" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item27" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item27" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item27" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kritikf&auml;higkeit:<br><br>Ich kann Kritik angemessen vorbringen, 
	  annehmen und umsetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="item28" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item28" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item28" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item28" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Schreiben:<br><br>Ich schreibe gern Texte.</td>
      <td><div align="center"> 
          <input type="radio" name="item29" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item29" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item29" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item29" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Lesen:<br><br>Ich kann wichtige Informationen aus einem Text 
	  entnehmen.</td>
      <td><div align="center"> 
          <input type="radio" name="item30" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item30" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item30" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item30" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Mathematik:<br><br>Ich kann gut mit Zahlen und Formeln umgehen.</td>
      <td><div align="center"> 
          <input type="radio" name="item31" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item31" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item31" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item31" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Naturwissenschaft:<br><br>Ich interessiere mich f&uuml;r die Natur und ihre 
	  Gesetze.</td>
      <td><div align="center"> 
          <input type="radio" name="item32" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item32" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item32" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item32" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Fremdsprachen:<br><br>Ich kann mich in einer Fremdsprache ausdr&uuml;ckken.</td>
      <td><div align="center"> 
          <input type="radio" name="item33" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item33" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item33" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item33" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Pr&auml;sentationsf&auml;higkeit:<br><br>Wenn ich pr&auml;sentiere, h&ouml;ren 
	  mir andere gern zu.</td>
      <td><div align="center"> 
          <input type="radio" name="item34" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item34" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item34" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item34" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>PC Kenntnisse:<br><br>Ich kann den PC f&uuml;r die schulische Arbeit 
	  nutzen.</td>
      <td><div align="center"> 
          <input type="radio" name="item35" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item35" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item35" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item35" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>F&auml;cher&uuml;bergreifendes Denken:<br><br>Ich kann Wissen, das ich 
	  erworben habe, auch in anderen Zusammenh&auml;ngen anwenden.</td>
      <td><div align="center"> 
          <input type="radio" name="item36" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item36" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="item36" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="item36" value="1">
        </div></td>
    </tr>
  </table>


</div>
</div>
     
     <p>
     <input type=hidden name=navi value=1>
      <input type=hidden name=userID value=<? echo $userID ?>>
     <input type=hidden name=session value=<? echo $session ?>>
     <button name="einfuegen" value="einfuegen" type="submit" class="btn btn-default">einf&uuml;gen</button>

     </p>


        <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Fremdeinsch&auml;tzung</h3>
           </div>
         <div class="panel-body">


  <table class="table table-hover" width="48%" border="1" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolor="#C0C0C0">
    <tr> 
      <td width="18%">Item</td>
      <td width="19%"><div align="center">triff voll zu</div></td>
      <td width="20%"><div align="center">trifft zu</div></td>
      <td width="21%"><div align="center">trifft teilweise zu</div></td>
      <td width="22%"><div align="center">trifft nicht zu</div></td>
    </tr>
    <tr> 
      <td>Zuverl&auml;ssigkeit:<br><br>Ich beachte beim Erf&uuml;llen eines Auftrags 
	  genau die Hinweise, Vorgaben und Absprachen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem1" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem1" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem1" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem1" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Arbeitstempo:<br><br>Ich schaffe schulische Aufgaben in der 
	  vorgegebenen Zeit.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem2" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem2" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem2" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem2" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Arbeitsplanung:<br><br>Ich mache einen Plan zur Vorgehensweise.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem3" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem3" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem3" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem3" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Organisationsf&auml;higkeit:<br><br>Ich mache Vorschl&auml;ge zur 
	  Aufgabenverteilung.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem4" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem4" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem4" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem4" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Geschicklichkeit:<br><br>Ich bin geschickt und sicher bei der 
	  Benutzung von Werkzeugen und Arbeitsgeraten.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem5" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem5" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem5" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem5" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Ordnung:<br><br>Mein Arbeitsplatz ist immer ordentlich und 
	  ubersichtlich.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem6" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem6" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem6" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem6" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Sorgfalt:<br><br>Ich gehe sachgerecht und verantwortungsbewusst mit 
	  Materialien um.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem7" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem7" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem7" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem7" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kreativit&auml;t:<br><br>Ich habe immer wieder neue Ideen, wie ich 
	  L&ouml;suungen finden kann.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem8" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem8" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem8" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem8" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Probleml&ouml;sungsf&auml;higkeit:<br><br>Knifflige Aufgaben machen 
	  mir Spaﬂ.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem9" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem9" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem9" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem9" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Abstraktionsverm&ouml;gen:<br><br>Ich kann Wichtiges von Unwichtigem 
	  unterscheiden.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem10" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem10" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem10" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem10" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Selbstst&auml;ndigkeit:<br><br>Ich kann Aufgaben ohne Anleitung 
	  ausf&uuml;hren.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem11" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem11" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem11" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem11" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Belastbarkeit:<br><br>Ich arbeite auch bei Schwierigkeiten an einer 
	  Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem12" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem12" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem12" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem12" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Konzentrationsf&auml;higkeit:<br><br>Ich kann eine T&auml;tigkeit &uuml;ber 
	  l&auml;ngere Zeit aus&uuml;ben, ohne mich ablenken zu lassen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem13" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem1" value="32">
        </div></td>
      <td><div align="center"> 
          <input name="feitem13" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem13" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Verantwortungsbewu&szlig;tsein:<br><br>Ich gestalte Entscheidungen mit 
	  und &uuml;bernehme auch die Verantwortung f&uuml;r sie.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem14" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem14" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem14" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem14" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Eigeninitiative:<br><br>Ich setze mir eigene Ziele und verwirkliche 
	  sie auch ohne Anstoﬂ von auﬂen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem15" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem15" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem15" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem15" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Leistungsbereitschaft:<br><br>Ich arbeite auch &uuml;ber das geforderte Maﬂ 
	  an einer Aufgabe weiter.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem16" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem16" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem16" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem16" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Auffassungsgabe:<br><br>Ich kann Zusammenh&auml;nge leicht und schnell 
	  begreifen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem17" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem17" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem17" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem17" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Merkf&auml;higkeit:<br><br>Einmal Gelerntes weiﬂ ich nach l&auml;ngerer 
	  Zeit noch.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem18" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem18" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem18" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem18" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Motivationsf&auml;higkeit:<br><br>Ich gehe mit Begeisterung an neue 
	  Aufgaben.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem19" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem19" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem19" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem19" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Reflektionsf&auml;higkeit:<br><br>Ich erkenne, wie meine 
	  Arbeitsleistung war.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem20" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem20" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem20" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem20" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Teamf&auml;higkeit:<br><br>Ich kann zielgerichtet und f&ouml;rderlich mit 
	  anderen zusammenarbeiten.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem21" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem21" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem21" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem21" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Hilfsbereitschaft:<br><br>Wenn jemand Unterst&uuml;tzung braucht, bin ich 
	  gern bereit zu helfen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem22" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem22" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem22" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem22" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kontaktf&auml;higkeit:<br><br>Ich kann auf andere zugehen und bin an 
	  deren Vorschl&auml;gen interessiert.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem23" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem23" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem23" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem23" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Respektvoller Umgang:<br><br>Ich beachte die Formen der H&ouml;flichkeit im 
	  Umgang mit anderen Menschen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem24" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem24" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem24" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem24" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kommunikationsf&auml;higkeit:<br><br>Ich gehe auf Fragen ein und h&ouml;re 
	  anderen aufmerksam zu.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem25" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem25" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem25" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem25" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Einf&uuml;hlungsverm&ouml;gen:<br><br>Ich kann mich in andere 
	  hineinversetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem26" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem26" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem26" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem26" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Konfliktf&auml;higkeit:<br><br>Ich versuche bei einem Streit, eine 
	  gemeinsame L&ouml;sung zu finden.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem27" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem27" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem27" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem27" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Kritikf&auml;higkeit:<br><br>Ich kann Kritik angemessen vorbringen, 
	  annehmen und umsetzen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem28" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem28" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem28" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem28" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Schreiben:<br><br>Ich schreibe gern Texte.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem29" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem29" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem29" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem29" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Lesen:<br><br>Ich kann wichtige Informationen aus einem Text 
	  entnehmen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem30" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem30" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem30" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem30" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Mathematik:<br><br>Ich kann gut mit Zahlen und Formeln umgehen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem31" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem31" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem31" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem31" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Naturwissenschaft:<br><br>Ich interessiere mich f&uuml;r die Natur und ihre 
	  Gesetze.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem32" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem32" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem32" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem32" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Fremdsprachen:<br><br>Ich kann mich in einer Fremdsprache ausdr&uuml;ckken.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem33" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem33" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem33" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem33" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>Pr&auml;sentationsf&auml;higkeit:<br><br>Wenn ich pr&auml;sentiere, h&ouml;ren 
	  mir andere gern zu.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem34" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem34" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem34" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem34" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>PC Kenntnisse:<br><br>Ich kann den PC f&uuml;r die schulische Arbeit 
	  nutzen.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem35" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem35" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem35" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem35" value="1">
        </div></td>
    </tr>
    <tr> 
      <td>F&auml;cher&uuml;bergreifendes Denken:<br><br>Ich kann Wissen, das ich 
	  erworben habe, auch in anderen Zusammenh&auml;ngen anwenden.</td>
      <td><div align="center"> 
          <input type="radio" name="feitem36" value="4">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem36" value="3">
        </div></td>
      <td><div align="center"> 
          <input name="feitem36" type="radio" value="2" checked="true">
        </div></td>
      <td><div align="center"> 
          <input type="radio" name="feitem36" value="1">
        </div></td>
    </tr>
  </table>


</div>
</div>

 <p> 
 <input type=hidden name=navi value=1>
  <input type=hidden name=userID value=<? echo $userID ?>>
 <input type=hidden name=session value=<? echo $session ?>>
 <button name="einfuegen" value="einfuegen" type="submit" class="btn btn-default">einf&uuml;gen</button>

 </p>
</form>
</div>
</div> 

<?}

?>
