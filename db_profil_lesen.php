<head>
</head>

<?



// Variablendefinitionen
// Profil name
$name="";
$Xnichtgesetzt=true;

//item
$SEint = array();
$FEint = array();

//Normtabellen
$normSE = array();
$normFE = array();

//Profilaufaddieren

$SEPint = array ();
$FEPint = array ();

//korrelation
$korrelation=0;
$SEPmittel = 0;
$FEPmittel = 0;


//UebereinstimmungSEFE
$UebereinstimmungSEFE=0;



//Profilberechnung

$SEprofilSVG = array();
$SEprofilSVG[0]=0;
$SEprofilSVG[1]=0;
$SEprofilSVG[2]=0;
$SEprofilSVG[3]=0;
$SEprofilSVG[4]=0;
$SEprofilSVG[5]=0;

$SEprofil = array();

$SEprofil[0][0]="0";
$SEprofil[0][1]="0";
$SEprofil[0][2]="0";
$SEprofil[0][3]="0";
$SEprofil[0][4]="0";

$SEprofil[1][0]="0";
$SEprofil[1][1]="0";
$SEprofil[1][2]="0";
$SEprofil[1][3]="0";
$SEprofil[1][4]="0";

$SEprofil[2][0]="0";
$SEprofil[2][1]="0";
$SEprofil[2][2]="0";
$SEprofil[2][3]="0";
$SEprofil[2][4]="0";

$SEprofil[3][0]="0";
$SEprofil[3][1]="0";
$SEprofil[3][2]="0";
$SEprofil[3][3]="0";
$SEprofil[3][4]="0";

$SEprofil[4][0]="0";
$SEprofil[4][1]="0";
$SEprofil[4][2]="0";
$SEprofil[4][3]="0";
$SEprofil[4][4]="0";

$SEprofil[5][0]="0";
$SEprofil[5][1]="0";
$SEprofil[5][2]="0";
$SEprofil[5][3]="0";
$SEprofil[5][4]="0";


$FEprofilSVG = array();
$FEprofilSVG[0]=0;
$FEprofilSVG[1]=1;
$FEprofilSVG[2]=2;
$FEprofilSVG[3]=3;
$FEprofilSVG[4]=4;
$FEprofilSVG[5]=4;




$FEprofil = array();


$FEprofil[0][0]="0";
$FEprofil[0][1]="0";
$FEprofil[0][2]="0";
$FEprofil[0][3]="0";
$FEprofil[0][4]="0";

$FEprofil[1][0]="0";
$FEprofil[1][1]="0";
$FEprofil[1][2]="0";
$FEprofil[1][3]="0";
$FEprofil[1][4]="0";

$FEprofil[2][0]="0";
$FEprofil[2][1]="0";
$FEprofil[2][2]="0";
$FEprofil[2][3]="0";
$FEprofil[2][4]="0";

$FEprofil[3][0]="0";
$FEprofil[3][1]="0";
$FEprofil[3][2]="0";
$FEprofil[3][3]="0";
$FEprofil[3][4]="0";

$FEprofil[4][0]="0";
$FEprofil[4][1]="0";
$FEprofil[4][2]="0";
$FEprofil[4][3]="0";
$FEprofil[4][4]="0";

$FEprofil[5][0]="0";
$FEprofil[5][1]="0";
$FEprofil[5][2]="0";
$FEprofil[5][3]="0";
$FEprofil[5][4]="0";


//Punkte 1 bis 5 für Profil "X"
/*
$SEprofil = array
            (
             array ("Arbeitsverhalten"   ,"0","0","0","0","0")
	         array ("Lernverhalten"      ,"0","0","0","0","0")
             array ("Sozialverhalten"    ,"0","0","0","0","0")
             array ("Fachkompetenz"      ,"0","0","0","0","0")
             array ("Personale Kompetenz","0","0","0","0","0")
             array ("Methodenkompetenz"  ,"0","0","0","0","0")
            );
            
            

$FEprofil = array
            (
              array ("Arbeitsverhalten"   ,"0","0","0","0","0")
	          array ("Lernverhalten"      ,"0","0","0","0","0")
              array ("Sozialverhalten"    ,"0","0","0","0","0")
              array ("Fachkompetenz"      ,"0","0","0","0","0")
              array ("Personale Kompetenz","0","0","0","0","0")
              array ("Methodenkompetenz"  ,"0","0","0","0","0")
            );
*/           


           





//Funktionsdefinitionen
//Normtabellen lesen
  function db_normSE_lesen($sql,$conn,$userID,$session)
   {//BEGIN db_lesen
   global $normSE;
    //echo $sql."<br>";
    $result=mysql_query($sql,$conn);
    if($result)
    {//BEGIN if $result
    $number=mysql_num_rows($result);
     //echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number)
     {//BEGIN Suchausgabe>null
     while($row=mysql_fetch_array($result,MYSQL_ASSOC))
     {//BEGIN row
     //echo("<P>Verarbeitung Norm SE nicht auskommentiert</P>");
      $normSE[$row[kompetenzID]][]=$row['p1'];$normSE[$row[kompetenzID]][]=$row['p2'];$normSE[$row[kompetenzID]][]=$row['p3'];$normSE[$row[kompetenzID]][]=$row['p4'];$normSE[$row[kompetenzID]][]=$row['p5'];  
     }//END row
     }//ENDE suchausgabe >null
     //var_dump($normSE);
    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysql_error($conn));
    }//END if result
   }//END db_lesen
   
   

  function db_normFE_lesen($sql,$conn,$userID,$session)
   {//BEGIN db_lesen
    global $normFE;
    //echo $sql."<br>";
    $result=mysql_query($sql,$conn);
    if($result)
    {//BEGIN if $result
    $number=mysql_num_rows($result);
     //echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number)
     {//BEGIN Suchausgabe>null
     while($row=mysql_fetch_array($result,MYSQL_ASSOC))
     {//BEGIN row
      //echo("<P>Verarbeitung Norm FE nicht auskommentiert</P>");
      $normFE[$row[kompetenzID]][]=$row['p1'];$normFE[$row[kompetenzID]][]=$row['p2'];$normFE[$row[kompetenzID]][]=$row['p3'];$normFE[$row[kompetenzID]][]=$row['p4'];$normFE[$row[kompetenzID]][]=$row['p5'];
     }//END row
     }//ENDE suchausgabe >null
     //var_dump($normFE);
    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysql_error($conn));
    }//END if result
   }//END db_lesen




//Profillesen
  function db_profil_lesen($sql,$conn,$userID,$session)
   {//BEGIN db_lesen
   global $SEint, $FEint, $name;
    //echo $sql."<br>";
    $result=mysql_query($sql,$conn);
    if($result)
    {//BEGIN if $result
    $number=mysql_num_rows($result);
     //echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number)
     {//BEGIN Suchausgabe>null
     while($row=mysql_fetch_array($result,MYSQL_ASSOC))
     {//BEGIN row
      //echo("<P>Verarbeitung SEint FEint nicht auskommentiert</P>");
      //var_dump($row);
      $name=$row['name'];
      
      $SEint[1]=$row['item1'];
      $SEint[2]=$row['item2'];
      $SEint[3]=$row['item3'];
      $SEint[4]=$row['item4'];
      $SEint[5]=$row['item5'];
      $SEint[6]=$row['item6'];
      $SEint[7]=$row['item7'];
      $SEint[8]=$row['item8'];
      $SEint[9]=$row['item9'];
      $SEint[10]=$row['item10'];
      
      $SEint[11]=$row['item11'];
      $SEint[12]=$row['item12'];
      $SEint[13]=$row['item13'];
      $SEint[14]=$row['item14'];
      $SEint[15]=$row['item15'];
      $SEint[16]=$row['item16'];
      $SEint[17]=$row['item17'];
      $SEint[18]=$row['item18'];
      $SEint[19]=$row['item19'];
      $SEint[20]=$row['item20'];
      
      $SEint[21]=$row['item21'];
      $SEint[22]=$row['item22'];
      $SEint[23]=$row['item23'];
      $SEint[24]=$row['item24'];
      $SEint[25]=$row['item25'];
      $SEint[26]=$row['item26'];
      $SEint[27]=$row['item27'];
      $SEint[28]=$row['item28'];
      $SEint[29]=$row['item29'];
      $SEint[30]=$row['item30'];
      
      $SEint[31]=$row['item31'];
      $SEint[32]=$row['item32'];
      $SEint[33]=$row['item33'];
      $SEint[34]=$row['item34'];
      $SEint[35]=$row['item35'];
      $SEint[36]=$row['item36'];
      
      $FEint[1]=$row['feitem1'];
      $FEint[2]=$row['feitem2'];
      $FEint[3]=$row['feitem3'];
      $FEint[4]=$row['feitem4'];
      $FEint[5]=$row['feitem5'];
      $FEint[6]=$row['feitem6'];
      $FEint[7]=$row['feitem7'];
      $FEint[8]=$row['feitem8'];
      $FEint[9]=$row['feitem9'];
      $FEint[10]=$row['feitem10'];
      
      $FEint[11]=$row['feitem11'];
      $FEint[12]=$row['feitem12'];
      $FEint[13]=$row['feitem13'];
      $FEint[14]=$row['feitem14'];
      $FEint[15]=$row['feitem15'];
      $FEint[16]=$row['feitem16'];
      $FEint[17]=$row['feitem17'];
      $FEint[18]=$row['feitem18'];
      $FEint[19]=$row['feitem19'];
      $FEint[20]=$row['feitem20'];
      $FEint[21]=$row['feitem21'];
      $FEint[22]=$row['feitem22'];
      $FEint[23]=$row['feitem23'];
      $FEint[24]=$row['feitem24'];
      $FEint[25]=$row['feitem25'];
      $FEint[26]=$row['feitem26'];
      $FEint[27]=$row['feitem27'];
      $FEint[28]=$row['feitem28'];
      $FEint[29]=$row['feitem29'];
      $FEint[30]=$row['feitem30'];
      
      $FEint[31]=$row['feitem31'];
      $FEint[32]=$row['feitem32'];
      $FEint[33]=$row['feitem33'];
      $FEint[34]=$row['feitem34'];
      $FEint[35]=$row['feitem35'];
      $FEint[36]=$row['feitem36'];      
     }//END row
     }//ENDE suchausgabe >null
     //var_dump($SEint);var_dump($FEint);

    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysql_error($conn));
    }//END if result
   }//END db_lesen



//Verarbeitung
//Daten aus Datenbank einlesen


  //Profil SQL definieren
  $sqlprofil="SELECT   * FROM profil WHERE profilID LIKE $ID "; 
  //echo $sqlprofil."<br>";
  
  //Normtabellen SQL waehlen
  if ($normtabelle=="hs")
   {
    $sqlSE="SELECT   * FROM normSEhs ORDER BY kompetenzID";
    $sqlFE="SELECT   * FROM normFEhs ORDER BY kompetenzID";   
   }
   else //$normtabelle=="fs"
   {    
    $sqlSE="SELECT   * FROM normSEfs ORDER BY kompetenzID";
    $sqlFE="SELECT   * FROM normFEfs ORDER BY kompetenzID"; 
   }
   
   //echo $sqlSE."<br>";
   //echo $sqlFE."<br>";

  
  $conn=connect($host,$user,$pass);
  $conn=choise_database($conn,$db);
  
  //echo("Funktionsaufrufe auskommentiert<br>");
  
  db_normSE_lesen($sqlSE,$conn,$userID,$session);
  db_normFE_lesen($sqlFE,$conn,$userID,$session);
  db_profil_lesen($sqlprofil,$conn,$userID,$session);
  
  
  $conn=deconnect($conn);
// Var_dump daten aus datenbank
//var_dump($SEint);var_dump($FEint);
//var_dump($normSE);
//var_dump($normFE);
 
//Aufsummierung Punkte

       
       $SEPint[1]=(int)$SEint[1]+ (int)$SEint[2]+ (int)$SEint[3]+ (int)$SEint[4]+ (int)$SEint[5]+
                  (int)$SEint[6]+ (int)$SEint[7]+ (int)$SEint[8]+ (int)$SEint[9]+ (int)$SEint[10];
       $SEPint[2]=(int)$SEint[11]+ (int)$SEint[12]+ (int)$SEint[13]+ (int)$SEint[14]+ (int)$SEint[15]+
                  (int)$SEint[16]+ (int)$SEint[17]+ (int)$SEint[18]+ (int)$SEint[19]+ (int)$SEint[20];
       $SEPint[3]=(int)$SEint[21]+ (int)$SEint[22]+ (int)$SEint[23]+ (int)$SEint[24]+ (int)$SEint[25]+
                  (int)$SEint[26]+ (int)$SEint[27]+ (int)$SEint[28]+ (int)$SEint[9]+ (int)$SEint[10];
       $SEPint[4]=(int)$SEint[29]+ (int)$SEint[30]+ (int)$SEint[31]+ (int)$SEint[32]+ (int)$SEint[33]+
                  (int)$SEint[34]+ (int)$SEint[35]+ (int)$SEint[36];
       $SEPint[5]=(int)$SEint[1]+ (int)$SEint[2]+
                  (int)$SEint[6]+ (int)$SEint[7]+ (int)$SEint[8]+ (int)$SEint[9]+ (int)$SEint[10]+
                  (int)$SEint[12]+(int)$SEint[13]+ (int)$SEint[14]+ (int)$SEint[15];
       $SEPint[6]=(int)$SEint[3]+ (int)$SEint[4]+ (int)$SEint[5]+
                  (int)$SEint[9]+ (int)$SEint[10]+ (int)$SEint[11]+
                  (int)$SEint[17]+ (int)$SEint[18];


       $FEPint[1]=(int)$FEint[1]+ (int)$FEint[2]+ (int)$FEint[3]+ (int)$FEint[4]+ (int)$FEint[5]+
                  (int)$FEint[6]+ (int)$FEint[7]+ (int)$FEint[8]+ (int)$FEint[9]+ (int)$FEint[10];
       $FEPint[2]=(int)$FEint[11]+ (int)$FEint[12]+ (int)$FEint[13]+ (int)$FEint[14]+ (int)$FEint[15]+
                  (int)$FEint[16]+ (int)$FEint[17]+ (int)$FEint[18]+ (int)$FEint[19]+ (int)$FEint[20];
       $FEPint[3]=(int)$FEint[21]+ (int)$FEint[22]+ (int)$FEint[23]+ (int)$FEint[24]+ (int)$FEint[25]+
                  (int)$FEint[26]+ (int)$FEint[27]+ (int)$FEint[28]+ (int)$FEint[9]+ (int)$FEint[10];
       $FEPint[4]=(int)$FEint[29]+ (int)$FEint[30]+ (int)$FEint[31]+ (int)$FEint[32]+ (int)$FEint[33]+
                  (int)$FEint[34]+ (int)$FEint[35]+ (int)$FEint[36];
       $FEPint[5]=(int)$FEint[1]+ (int)$FEint[2]+
                  (int)$FEint[6]+ (int)$FEint[7]+ (int)$FEint[8]+ (int)$FEint[9]+ (int)$FEint[10]+
                  (int)$FEint[12]+(int)$FEint[13]+ (int)$FEint[14]+ (int)$FEint[15];
       $FEPint[6]=(int)$FEint[3]+ (int)$FEint[4]+ (int)$FEint[5]+
                  (int)$FEint[9]+ (int)$FEint[10]+ (int)$FEint[11]+
                  (int)$FEint[17]+ (int)$FEint[18];
       

//Testvariable falls nicht global
//$SEPint[1]=25;
//$FEPint[1]=25;
     
//var_dump($SEPint);var_dump($FEPint);


 
//Korrelation berechnen
$SEPmittel = ($SEPint[1]+ $SEPint[2]+ $SEPint[3]+ $SEPint[4]+ $SEPint[5]+ $SEPint[6])  / 6;
$FEPmittel = ($FEPint[1]+ $FEPint[2]+ $FEPint[3]+ $FEPint[4]+ $FEPint[5]+ $FEPint[6])  / 6;
//var_dump($SEPmittel);var_dump($FEPmittel);

$korrelation =
       (
        (($SEPmittel-$SEPint[1])*($FEPmittel-$FEPint[1]))+
        (($SEPmittel-$SEPint[2])*($FEPmittel-$FEPint[2]))+
        (($SEPmittel-$SEPint[3])*($FEPmittel-$FEPint[3]))+
        (($SEPmittel-$SEPint[4])*($FEPmittel-$FEPint[4]))+
        (($SEPmittel-$SEPint[5])*($FEPmittel-$FEPint[5]))+
        (($SEPmittel-$SEPint[6])*($FEPmittel-$FEPint[6]))
       )
       /
       sqrt
       (
        (
         pow($SEPmittel-$SEPint[1],2)+
         pow($SEPmittel-$SEPint[2],2)+
         pow($SEPmittel-$SEPint[3],2)+
         pow($SEPmittel-$SEPint[4],2)+
         pow($SEPmittel-$SEPint[5],2)+
         pow($SEPmittel-$SEPint[6],2)
        )
        *
        (
         pow($FEPmittel-$FEPint[1],2)+
         pow($FEPmittel-$FEPint[2],2)+
         pow($FEPmittel-$FEPint[3],2)+
         pow($FEPmittel-$FEPint[4],2)+
         pow($FEPmittel-$FEPint[5],2)+
         pow($FEPmittel-$FEPint[6],2)
        )
       );
       //var_dump($korrelation);
       //echo("Korrelation= ".$korrelation."<br>");

//uebereinstimmung in Prozent berechnen
         
for ($i = 1; $i <= 36; $i++)
    {
     if ($SEint[$i] == $FEint[$i])
     {
      $UebereinstimmungSEFE=$UebereinstimmungSEFE+1;  
     }
    }
    
    $UebereinstimmungSEFE=$UebereinstimmungSEFE*100/36;
    //echo("Uebereinstimmung= ".$UebereinstimmungSEFE."<br>");
    
    
    
//profil berechnen 

for ($kompetenz = 0; $kompetenz <= 5; $kompetenz++)
{
    $Xnichtgesetzt=true;    
    for ($punkte = 0; $punkte <= 4; $punkte++)
    {
     if ($SEPint[$kompetenz+1] < (int)$normSE[$kompetenz+1][$punkte]) 
     {
      $SEprofil[$kompetenz][$punkte]="X";
      $SEprofilSVG[$kompetenz]=$punkte;
      $punkte =5;$Xnichtgesetzt=false;
     }
    }
     if ($Xnichtgesetzt){$SEprofil[$kompetenz][4]="X";$SEprofilSVG[$kompetenz]=4;}
}

for ($kompetenz = 0; $kompetenz <= 5; $kompetenz++)
{
    $Xnichtgesetzt=true;
    for ($punkte = 0; $punkte <= 4; $punkte++)
    {
     if ($FEPint[$kompetenz+1] < (int)$normFE[$kompetenz+1][$punkte]) 
     {
      $FEprofil[$kompetenz][$punkte]="X";
      $FEprofilSVG[$kompetenz]=$punkte;
      $punkte =5;$Xnichtgesetzt=false;
     }
    }
    if ($Xnichtgesetzt){$FEprofil[$kompetenz][4]="X";$FEprofilSVG[$kompetenz]=4;}
}
    
    //var_dump($SEprofil);var_dump($FEprofil);
    
// Profil darstellen

?>


<table width="75%" border="0" cellspacing="0" cellpadding="5"  >
  <tr>
    <td width="32%" valign="top" >
             <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Profil</h3>
           </div>
         <div class="panel-body">

    <p><? if (!$druckansicht){echo("<a href=http://mein-duesk.org/db_druckansicht.php?ID=$ID&userID=$userID&session=$session&normtabelle=$normtabelle&druckansicht=1 target=_blank>Druckansicht</a>");}?></p>
    <p>Name: <? echo(" ".$name); ?>
	</p>
	
	</div>
	</div>
	
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Selbsteinschätzung</h3>
  </div>
  <div class="panel-body">
  
	
	
      <p>&nbsp;</p>
      <table class="table  table-bordered">
          <thead> 
          <th width="61%">Selbsteinsch&auml;tzung</th>
          <th width="0%" >1</th>
          <th width="7%"  >2</th>
          <th width="7%"  >3</th>
          <th width="7%"  >4</th>
          <th width="18%" >5</th>
         </thead></tr>
        <tr> 
          <td >Arbeitsverhalten  </td>
          <td ><?  if ($SEprofil[0][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[0][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[0][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[0][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($SEprofil[0][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
        <tr> 
          <td >Lernverhalten</td>
          <td ><?  if ($SEprofil[1][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[1][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[1][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[1][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($SEprofil[1][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
        <tr> 
          <td >Sozialverhalten</td>
          <td ><?  if ($SEprofil[2][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[2][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[2][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[2][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($SEprofil[2][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
        <tr> 
          <td >Fachkompetenz</td>
          <td ><?  if ($SEprofil[3][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[3][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[3][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[3][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($SEprofil[3][4]=="X") {echo("X");} ?>
		  </td>
		 </tr>
        <tr> 
          <td >Personale Kompetenz</td>
          <td ><?  if ($SEprofil[4][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[4][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[4][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[4][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($SEprofil[4][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
        <tr> 
          <td >Methodenkompetenz</td>
          <td ><?  if ($SEprofil[5][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[5][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[5][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($SEprofil[5][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($SEprofil[5][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
      </table>
      
 <svg   width="400" height="252"  >
<line x1="0" y1="0" x2="400" y2="0" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="36" x2="400" y2="36" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="72" x2="400" y2="72" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="108" x2="400" y2="108" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="144" x2="400" y2="144" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="180" x2="400" y2="180" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="216" x2="400" y2="216" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="252" x2="400" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />

<line x1="0" y1="0" x2="0" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="100" y1="0" x2="100" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="150" y1="0" x2="150" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="200" y1="0" x2="200" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="250" y1="0" x2="250" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="300" y1="0" x2="300" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="350" y1="0" x2="350" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="400" y1="0" x2="400" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />


<text font-size="10px" x="5" y="54" fill="black">Arbeitsverhalten</text>
<text font-size="10px" x="5" y="90" fill="black">Lernverhalten</text>
<text font-size="10px" x="5" y="126" fill="black">Sozialverhalten</text>
<text font-size="10px" x="5" y="162" fill="black">Fachkompetenz</text>
<text font-size="10px" x="5" y="198" fill="black">Personale Kompetenz</text>
<text font-size="10px" x="5" y="234" fill="black">Methodenkompetenz</text>

<text font-size="10px" x="125" y="18" fill="black">1</text>
<text font-size="10px" x="175" y="18" fill="black">2</text>
<text font-size="10px" x="225" y="18" fill="black">3</text>
<text font-size="10px" x="275" y="18" fill="black">4</text>
<text font-size="10px" x="325" y="18" fill="black">5</text>


  <polyline
     fill="none"
     stroke="#0074d9"
     stroke-width="3"
     points="
       <? echo(" ".$SEprofilSVG[0]*50+125);  ?>,54
       <? echo(" ".$SEprofilSVG[1]*50+125);  ?>,90
       <? echo(" ".$SEprofilSVG[2]*50+125);  ?>,126
       <? echo(" ".$SEprofilSVG[3]*50+125);  ?>,162
       <? echo(" ".$SEprofilSVG[4]*50+125);  ?>,198
       <? echo(" ".$SEprofilSVG[5]*50+125);  ?>,234"/>
       
       
<circle cx="<? echo(" ".$SEprofilSVG[0]*50+125);  ?>" cy="54" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$SEprofilSVG[1]*50+125);  ?>" cy="90" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$SEprofilSVG[2]*50+125);  ?>" cy="126" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$SEprofilSVG[3]*50+125);  ?>" cy="162" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$SEprofilSVG[4]*50+125);  ?>" cy="198" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$SEprofilSVG[5]*50+125);  ?>" cy="234" r="10" stroke="blue"; stroke-width="5" fill="white" />

</svg>      
      
      </div>
</div>






  
      
      <div class="panel panel-default">
  <div class="panel-heading">
	  <h3 class="panel-title">Fremdeinschätzung</h3>
  </div>
  <div class="panel-body">
  
  
  
      <p>&nbsp;</p>
      <table class="table  table-bordered">
          <thead> 
          <th width="61%">Fremdeinsch&auml;tzung</th>
          <th width="0%" >1</th>
          <th width="7%"  >2</th>
          <th width="7%"  >3</th>
          <th width="7%"  >4</th>
          <th width="18%" >5</th>
         </thead></tr>
        <tr> 
          <td >Arbeitsverhalten  </td>
          <td ><?  if ($FEprofil[0][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[0][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[0][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[0][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($FEprofil[0][4]=="X") {echo("X"); } ?>
		  </td>
        </tr>
        <tr> 
          <td >Lernverhalten</td>
          <td ><?  if ($FEprofil[1][0]=="X") {echo("X"); } ?>
		  </td>
          <td  ><?  if ($FEprofil[1][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[1][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[1][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($FEprofil[1][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
        <tr> 
          <td >Sozialverhalten</td>
          <td ><?  if ($FEprofil[2][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[2][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[2][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[2][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($FEprofil[2][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
        <tr> 
          <td >Fachkompetenz</td>
          <td ><?  if ($FEprofil[3][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[3][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[3][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[3][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($FEprofil[3][4]=="X") {echo("X");} ?>
		  </td>
		 </tr>
        <tr> 
          <td >Personale Kompetenz</td>
          <td ><?  if ($FEprofil[4][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[4][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[4][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[4][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($FEprofil[4][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
        <tr> 
          <td >Methodenkompetenz</td>
          <td ><?  if ($FEprofil[5][0]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[5][1]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[5][2]=="X") {echo("X");} ?>
		  </td>
          <td  ><?  if ($FEprofil[5][3]=="X") {echo("X");} ?>
		  </td>
          <td ><?  if ($FEprofil[5][4]=="X") {echo("X");} ?>
		  </td>
        </tr>
      </table> 
      
      
 <svg   width="400" height="252"  >
<line x1="0" y1="0" x2="400" y2="0" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="36" x2="400" y2="36" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="72" x2="400" y2="72" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="108" x2="400" y2="108" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="144" x2="400" y2="144" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="180" x2="400" y2="180" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="216" x2="400" y2="216" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="0" y1="252" x2="400" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />

<line x1="0" y1="0" x2="0" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="100" y1="0" x2="100" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="150" y1="0" x2="150" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="200" y1="0" x2="200" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="250" y1="0" x2="250" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="300" y1="0" x2="300" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="350" y1="0" x2="350" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="400" y1="0" x2="400" y2="252" style="stroke:rgb(255,0,0);stroke-width:2" />


<text font-size="10px" x="5" y="54" fill="black">Arbeitsverhalten</text>
<text font-size="10px" x="5" y="90" fill="black">Lernverhalten</text>
<text font-size="10px" x="5" y="126" fill="black">Sozialverhalten</text>
<text font-size="10px" x="5" y="162" fill="black">Fachkompetenz</text>
<text font-size="10px" x="5" y="198" fill="black">Personale Kompetenz</text>
<text font-size="10px" x="5" y="234" fill="black">Methodenkompetenz</text>

<text font-size="10px" x="125" y="18" fill="black">1</text>
<text font-size="10px" x="175" y="18" fill="black">2</text>
<text font-size="10px" x="225" y="18" fill="black">3</text>
<text font-size="10px" x="275" y="18" fill="black">4</text>
<text font-size="10px" x="325" y="18" fill="black">5</text>


  <polyline
     fill="none"
     stroke="#0074d9"
     stroke-width="3"
     points="
       <? echo(" ".$FEprofilSVG[0]*50+125);  ?>,54
       <? echo(" ".$FEprofilSVG[1]*50+125);  ?>,90
       <? echo(" ".$FEprofilSVG[2]*50+125);  ?>,126
       <? echo(" ".$FEprofilSVG[3]*50+125);  ?>,162
       <? echo(" ".$FEprofilSVG[4]*50+125);  ?>,198
       <? echo(" ".$FEprofilSVG[5]*50+125);  ?>,234"/>
       
       
<circle cx="<? echo(" ".$FEprofilSVG[0]*50+125);  ?>" cy="54" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$FEprofilSVG[1]*50+125);  ?>" cy="90" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$FEprofilSVG[2]*50+125);  ?>" cy="126" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$FEprofilSVG[3]*50+125);  ?>" cy="162" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$FEprofilSVG[4]*50+125);  ?>" cy="198" r="10" stroke="blue"; stroke-width="5" fill="white" />
<circle cx="<? echo(" ".$FEprofilSVG[5]*50+125);  ?>" cy="234" r="10" stroke="blue"; stroke-width="5" fill="white" />

</svg>     
      
  </div>
</div>

         <div class="panel panel-default">
           <div class="panel-heading">
            <h3 class="panel-title">Korrelation / Übereinstimmung</h3>
           </div>
         <div class="panel-body">

     <p>&nbsp;</p>
      <p>Korrelation.<? echo(" ".round($korrelation,2)); ?></p>
      <p>&nbsp;</p>
      <p>&Uuml;bereinstimmung <? echo(" ".round($UebereinstimmungSEFE,2)."%"); ?>
	  </p>
	  
	  
	  </div>
	  </div>
</td>
    <td width="68%">
    
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Itemkodierung</h3>
  </div>
  <div class="panel-body">
  
	<table class="table  table-bordered">
        <tr><thead> 
          <th width="79%"  >Item</th>
          <th width="0%"  >SE</th>
          <th width="21%"  >FE</th>
        </thead></tr>
        <tr>
          <td  >Zuverl&auml;ssigkeit</td>
          <td  ><? echo(" ".$SEint[1]); ?></td>
          <td  ><? echo(" ".$FEint[1]); ?></td>
        </tr>
        <tr>
          <td  >Arbeitstempo</td>
          <td  ><? echo(" ".$SEint[2]); ?></td>
          <td  ><? echo(" ".$FEint[2]); ?></td>
        </tr>
        <tr>
          <td  >Arbeitsplanung</td>
          <td  ><? echo(" ".$SEint[3]); ?></td>
          <td  ><? echo(" ".$FEint[3]); ?></td>
		 </tr>
        <tr>
          <td  >Organisationsf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[4]); ?></td>
          <td  ><? echo(" ".$FEint[4]); ?></td>
        </tr>
        <tr>
          <td  >Geschicklichkeit</td>
          <td  ><? echo(" ".$SEint[5]); ?></td>
          <td  ><? echo(" ".$FEint[5]); ?></td>
        </tr>
        <tr>
          <td  >Ordnung</td>
          <td  ><? echo(" ".$SEint[6]); ?></td>
          <td  ><? echo(" ".$FEint[6]); ?></td>
       </tr>
        <tr>
          <td  >Sorgfalt</td>
          <td  ><? echo(" ".$SEint[7]); ?></td>
          <td  ><? echo(" ".$FEint[7]); ?></td>
        </tr>
        <tr>
          <td  >Kreativit&auml;t</td>
          <td  ><? echo(" ".$SEint[8]); ?></td>
          <td  ><? echo(" ".$FEint[8]); ?></td>
        </tr>
        <tr>
          <td  >Probleml&ouml;sungsf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[9]); ?></td>
          <td  ><? echo(" ".$FEint[9]); ?></td>
        </tr>
        <tr>
          <td  >Abstraktionsverm&ouml;gen</td>
          <td  ><? echo(" ".$SEint[10]); ?></td>
          <td  ><? echo(" ".$FEint[10]); ?></td>
        </tr>
        <tr>
          <td  >Selbstst&auml;ndigkeit</td>
          <td  ><? echo(" ".$SEint[11]); ?></td>
          <td  ><? echo(" ".$FEint[11]); ?></td>
        </tr>
        <tr>
          <td  >Belastbarkeit</td>
          <td  ><? echo(" ".$SEint[12]); ?></td>
          <td  ><? echo(" ".$FEint[12]); ?></td>
        </tr>
        <tr>
          <td  >Konzentrationsf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[13]); ?></td>
          <td  ><? echo(" ".$FEint[13]); ?></td>
        </tr>
        <tr>
          <td  >Verantwortungsbewu&szlig;tsein</td>
          <td  ><? echo(" ".$SEint[14]); ?></td>
          <td  ><? echo(" ".$FEint[14]); ?></td>
        </tr>
        <tr>
          <td  >Eigeninitiative</td>
          <td  ><? echo(" ".$SEint[15]); ?></td>
          <td  ><? echo(" ".$FEint[15]); ?></td>
        </tr>
        <tr>
          <td  >Leistungsbereitschaft</td>
          <td  ><? echo(" ".$SEint[16]); ?></td>
          <td  ><? echo(" ".$FEint[16]); ?></td>
        </tr>
        <tr>
          <td  >Auffassungsgabe</td>
          <td  ><? echo(" ".$SEint[17]); ?></td>
          <td  ><? echo(" ".$FEint[17]); ?></td>
        </tr>
        <tr>
          <td  >Merkf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[18]); ?></td>
          <td  ><? echo(" ".$FEint[18]); ?></td>
        </tr>
        <tr>
          <td  >Motivationsf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[19]); ?></td>
          <td  ><? echo(" ".$FEint[19]); ?></td>
        </tr>
        <tr>
          <td  >Reflektionsf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[20]); ?></td>
          <td  ><? echo(" ".$FEint[20]); ?></td>
        </tr>
        <tr>
          <td  >Teamf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[21]); ?></td>
          <td  ><? echo(" ".$FEint[21]); ?></td>
        </tr>
        <tr>
          <td  >Hilfsbereitschaft</td>
          <td  ><? echo(" ".$SEint[22]); ?></td>
          <td  ><? echo(" ".$FEint[22]); ?></td>
        </tr>
        <tr>
          <td  >Kontaktf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[23]); ?></td>
          <td  ><? echo(" ".$FEint[23]); ?></td>
        </tr>
        <tr>
          <td  >Respektvoller Umgang</td>
          <td  ><? echo(" ".$SEint[24]); ?></td>
          <td  ><? echo(" ".$FEint[24]); ?></td>
        </tr>
        <tr>
          <td  >Kommunikationsf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[25]); ?></td>
          <td  ><? echo(" ".$FEint[25]); ?></td>
        </tr>
        <tr>
          <td  >Einf&uuml;hlungsverm&ouml;gen</td>
          <td  ><? echo(" ".$SEint[26]); ?></td>
          <td  ><? echo(" ".$FEint[26]); ?></td>
        </tr>
        <tr>
          <td  >Konfliktf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[27]); ?></td>
          <td  ><? echo(" ".$FEint[27]); ?></td>
        </tr>
        <tr>
          <td  >Kritikf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[28]); ?></td>
          <td  ><? echo(" ".$FEint[28]); ?></td>
        </tr>
        <tr>
          <td  >Schreiben</td>
          <td  ><? echo(" ".$SEint[29]); ?></td>
          <td  ><? echo(" ".$FEint[29]); ?></td>
        </tr>
        <tr>
          <td  >Lesen</td>
          <td  ><? echo(" ".$SEint[30]); ?></td>
          <td  ><? echo(" ".$FEint[30]); ?></td>
        </tr>
        <tr>
          <td  >Mathematik</td>
          <td  ><? echo(" ".$SEint[31]); ?></td>
          <td  ><? echo(" ".$FEint[31]); ?></td>
        </tr>
        <tr>
          <td  >Naturwissenschaft</td>
          <td  ><? echo(" ".$SEint[32]); ?></td>
          <td  ><? echo(" ".$FEint[32]); ?></td>
        </tr>
        <tr>
          <td  >Fremdsprachen</td>
          <td  ><? echo(" ".$SEint[33]); ?></td>
          <td  ><? echo(" ".$FEint[33]); ?></td>
        </tr>
        <tr>
          <td  >Pr&auml;sentationsf&auml;higkeit</td>
          <td  ><? echo(" ".$SEint[34]); ?></td>
          <td  ><? echo(" ".$FEint[34]); ?></td>
        </tr>
        <tr>
          <td  >PC Kenntnisse</td>
          <td  ><? echo(" ".$SEint[35]); ?></td>
          <td  ><? echo(" ".$FEint[35]); ?></td>
        </tr>
        <tr>
          <td  >F&auml;cher&uuml;bergreifendes Denken</td>
          <td  ><? echo(" ".$SEint[36]); ?></td>
          <td  ><? echo(" ".$FEint[36]); ?></td>
        </tr>
      </table></td>
      
        </div>
</div>

  </tr>
</table>
<br>
<br>
<br>
<br>



<?    
   
?>