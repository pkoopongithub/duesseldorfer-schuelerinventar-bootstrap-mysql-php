<!DOCTYPE html>
<html lang="de">
<head>
  <title>Duesk test</title>
  <!-- <meta charset="utf-8"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">

.auto-style7 {
	font-size: xx-small;
}
.auto-style8 {
	color: #FFFFFF;
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

<div class="jumbotron" style="background-color:#6699CC; color:white; ">
  <h1>D U E S K</h1>
  <p>Düsseldorfer Schülerinventar online</p>
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

                    default: {include("db_info.php"); }break;
                   }
                  echo "<br>"; 
                  ?>

<!-- -->


    </div>
  </div>
</div>  




<div class="text-left" style="   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #6699CC;
   color: white;
   ">
    Paul Koop M.A.<br>
    Thomashofstraße 19<br>
    52070 Aachen 
    <span class="auto-style7">
	Nutzen Sie den Gastzugang zu Testzwecken. Den Quellcode der Onlineversion 
	können Sie auf meiner Website <a href="http://www.paul-koop.org">
	<span class="auto-style8">http://www.paul-koop.org</span></a> für ihr 
	lokales Netzwerk downloaden.</span>
</div>

</body>
</html> 