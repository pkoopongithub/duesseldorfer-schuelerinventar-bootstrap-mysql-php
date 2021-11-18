<?


  function mailcheck($elecmail)
  {//BEGIN mailcheck
   $reg_mail="#^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$#";
   //echo $reg_mail."<br>";
   if (preg_match($reg_mail,$elecmail))
   {return 1;}
   else
   {return 0;}
  }//END mailcheck

if($abschicken)
  {//Begin mail und name pruefen
  echo "<table>";
   if (!$vnname){$abschicken=0; echo"<tr><td>Sie haben Ihren Namen vergessen einzutragen</tr></td>";}
   if (!$strasse){$abschicken=0; echo"<tr><td>Sie haben die Strasse vergessen einzutragen</tr></td>";}
   if (!$plz){$abschicken=0; echo"<tr><td>Sie haben die PLZ vergessen einzutragen</tr></td>";}
   if (!$ort){$abschicken=0; echo"<tr><td>Sie haben den Ort vergessen einzutragen</tr></td>";}
   if (!mailcheck($elecmail)){$abschicken=0; echo"<tr><td>Ihre email ist falsch</tr></td>";}
   echo "</table>";
  }//END mail und name pruefen

if($abschicken)
{//BEGIN mail
 $zeile =$vnname."\n".$strasse."\n". $plz." ".$ort."\n".$elecmail."\nSie schrieben folgende Nachricht an Paul Koop:\n".$nachricht;
 if(mail("pkoop@gmx.net,$elecmail","Kontaktformular",$zeile,"From: ".$elecmail))
           {echo"die mail wurde verschickt";}
           else
           {echo"die mail konnte nicht gesendet werden";}
 if(mail("pkoop@gmx.net,$elecmail","Kontaktformular",$zeile,"From: ".$elecmail)){}else{}
}//END mail
else
{//BEGIN Formular
?><head>
<link href="style.css" rel="stylesheet" type="text/css">



 <style type="text/css">
 .auto-style1 {
	 color: #FFFFFF;
 }
 .auto-style2 {
	 font-family: Arial, Verdana, Helvetica, sans-serif;
	 font-size: 10pt;
	 color: #000000;
	 font-weight: 600;
	 background-color: #FFFFFF;
	 border: 1px solid #000000;
 }
 </style>
</head>



 

<div align="left">
  <p><h1 class="auto-style1">Kontakt</h1></p>
  <div class="table-responsive">
  <table class="table">
                  <tr>
                    <td>
                      <form method="post" action="">

          <div class="table-responsive">
  <table class="table">            <tr> 
              <td class="auto-style1">&nbsp;</td>
              <td class="auto-style1" >&nbsp;</td>
            </tr>
            <tr> 
              <td class="auto-style1">Ich bin</td>
              <td > <input name=vnname type=text class=input  size="100%"><span class="auto-style1">
			  </span> </td>
            </tr>
            <tr> 
              <td class="auto-style1">Strasse</td>
              <td><input name="strasse" type="text" class="input" size="100%"><span class="auto-style1">
			  </span> 
              </td>
            </tr>
            <tr> 
              <td class="auto-style1">PLZ</td>
              <td> <input type="text" name="plz" class="input"><span class="auto-style1">
			  </span> </td>
            </tr>
            <tr> 
              <td class="auto-style1">Ort</td>
              <td> <input name="ort" type="text" class="input" size="100%"><span class="auto-style1">
			  </span> </td>
            </tr>
            <tr> 
              <td class="auto-style1">E-Mail-Adresse</td>
              <td><input name=elecmail type=text class=input ><span class="auto-style1">
			  </span> </td>
            </tr>
            <tr>
              <td class="auto-style1">&nbsp;</td>
              <td class="auto-style1">&nbsp;</td>
            </tr>
            <tr> 
              <td class="auto-style1">Nachricht</td>
              <td> <textarea name="nachricht" cols="100%" rows=10 class="input" ></textarea><span class="auto-style1">
			  </span> 
              </td>
            </tr>
            <tr> 
              <td class="auto-style1">&nbsp;</td>
              <td> <font color="#000000">
                <input type="submit" name="abschicken" value="Abschicken" class="auto-style2">
                <input type="reset" name="reset" value="Reset" class="auto-style2">
                </font><span class="auto-style1"> </span> </td>
            </tr>
            <tr> 
              <td class="auto-style1">&nbsp;</td>
              <td class="auto-style1">&nbsp; </td>
            </tr>
          </table></div>
                      
        </form>
                    </td>
                  </tr>
                </table></div>

                <p>
                Kontaktdaten werden via Servermailanwendung versendet.
		Servermailanwendung und alternative Dienste sind natürlich öffentlich wie 
 		Postkarten und nicht sicher. Alle Provider müssen bestimmte Daten festhalten.
		Dazu gehören die IP-Adresse des Absenders und die Mailadressen von Sender und
                Empfänger. Außerdem wird gespeichert, wann der Postfach-Besitzer auf dieses zugegriffen hat, zusammen mit der IP-Adresse.
		Nicht festgehalten wird jeweils der Inhalt der Kommunikation – also etwa das, was in einer E-Mail steht oder was jemand am Telefon erzählt.
		Es ist halt wie bei einer Postkarte. 
 		
		Alle Provider speichern Server-Logfiles
                auf ihren Servern ab. Folgende Daten werden von allen Providern
                protokolliert: Besuchte Website, Uhrzeit zum Zeitpunkt des
                Zugriffes, Menge der gesendeten Daten in Byte, Quelle/Verweis,
                von welchem Sie auf die Seite gelangten, Verwendeter Browser ,
                Verwendetes Betriebssystem und Verwendete IP-Adresse nach den
                für die Provider gültigen Regeln. Alle Downloads auf
                paul-koop.org sind kostenlos und natürlich ohne
                Garantie etc.. Links auf andere Seiten sind hier wie Zeigefinger auf andere Gebäude. Dadurch ändern sich weder die Besitzverhältnisse noch die zukünftige Entwicklung der Gebäude und der Besitzer des Fingers beansprucht auch die Gebäude nicht für sich. Quellcodes (Simulation Lisp, Pascal, C++, Java,
                und Statistik, SPSS, R und diverse Programmierübungen bitte
                nur mit Quellenangabe, Nachprogrammieren geht natürlich auch und man lernt was). Viel Spass, Paul Koop,
                Thomashofstrasse 19 52070 Aachen
                </p>
                </div>

<?
}//END Formular
?>