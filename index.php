<!DOCTYPE html>
<html lang="de">
<head>
  <title>Duesk test</title>
  <!-- <meta charset="utf-8"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv=""content-type" content="text/html; charset=utf-8"/>
  <link rel="SHORTCUT ICON" href="http://www.paul-koop.org/ich.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.column2 {
  float: left;
  width: 66.6%;
  margin-bottom: 16px;
  padding: 0 8px;
  text-align: justify;
  text-justify: inter-word;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.container2 {
  padding: 0 16px;
}

.container2::after, .row::after {
  content: "";
  clear: both;
  display: table;

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
  </head>
<body  > <!-- style="background-image: url('glockenkurve.svg');"-->
<?          include("db_con_func.php"); 

 
            if (!isset($userID) || ($abmelden==1))
                 {
              include("db_passwort_lesen.php");
                 }
                 else
                 {
                  include("db_navigation.php");
                 }
         ?>

<div class="jumbotron" style="background-color:#6699CC; color:white; " >
  <div class="container-fluid">
  <h1>D &Uuml; S K</h1>
  <p>Düsseldorfer Schülerinventar online</p>
  </div>
</div>




<div class="container-fluid">
  <div class="row" >
    <div class="col-sm-2" style="background-color:white;" >
      
    </div>
    <div class="col-sm-10" style="background-color:white;">



<!-- -->

        <?PHP
                   switch ($navi)
                   {
                    case 1:include("db_input_aendern.php");break;
                    case 2:include("db_lesen_loeschen_aendern.php");break;
                    case 3:include("db_profil_lesen.php");break;
                    case 4:include("db_info_datenschutz.php");break;
					case 5:include("db_info_disclaimer.php");break;
					case 6:include("db_info.php");break;
					case 7:include("db_info_nutzung.php");break;
					case 8:include("db_info_kurzanleitung.php");break;
					
                    default: {include("db_info.php"); }break;
                   }
                  echo "<br>"; 
                  ?>

<!-- -->


    </div>
  </div>
</div>  




<div class="py-3" style="background-color:#6699CC; color:white; padding: 0 16px;>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6 p-3" ><br>D Ü S K<BR>
      Düsseldorfer Schülerinventar zur Selbsteinschätzung informeller Kompetenzen</div>
        <div class="col-lg-4 col-6 p-3">
          <br><p>Paul Koop M.A. <br>Thomashofstrasse 19<br>52070 Aachen</p>
          <p> <a href=http://paul-koop.org/index.php target="_blank">Homepage</a> </p>
          <p class="mb-0"> <a href=http://paul-koop.org/index.php?formular=1 target="_blank"> Kontakt </a> </p>
          <p class="mb-0"> <a href="<? echo $PHP_SELF ?>?navi=4"> Datenschutz </a> </p>
		  <p class="mb-0"> <a href="<? echo $PHP_SELF ?>?navi=5"> Disclaimer </a> </p>
		  <p class="mb-0"> <a href="<? echo $PHP_SELF ?>?navi=7"> Nutzung </a> </p>
		  <p class="mb-0"> <a href="<? echo $PHP_SELF ?>?navi=8"> Kurzanleitung </a> </p>
		  <p class="mb-0"> <a href="<? echo $PHP_SELF ?>?navi=6"> Düsseldorfer Schülerinventar </a> </p>
          <p class="mb-0"> <a href="https://gofund.me/2a56fa3b" target=_blank> GoFundMe </a> </p>
          <p class="mb-0"> <a href="https://www.spendenseite.de/d-252-sseldorfer-sch-252-lerinventar/-36119" target=_blank> Spendenseite </a> </p>
        </div>
        <div class="col-lg-4 col-6 p-3">
          <br>D Ü S K <br>
          <p class="mb-0"> Nutzen Sie den Gastzugang zu Testzwecken. Zur 
		  Weiterentwicklung im eigenen Netzwerk laden Sie den passenden Quellcode von dieser Seite herunter.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0 mt-2">&nbsp;</p>
        </div>
      </div>
    </div>
  </div></body>
</html> 
