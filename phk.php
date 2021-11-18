<!DOCTYPE html>
<html lang="de">
<head>
  <title>Duesk test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <link rel="SHORTCUT ICON" href="http://www.paul-koop.org/ich.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
/* unvisited link */
a:link {
  color: white;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
  color: white;
}

/* selected link */
a:active {
  color: white;
}
</style>
</head>
<body  style="background-color:#CC9999; color:white;"> 
 <?
 include("cl_func.php");
 ?>


<div class="container-fluid" >
 <div class="row">
    <div class="col-sm-1" style="background-color:#CC9999;">&nbsp;</div>
    <div class="col-sm-10" style="background-color:#CC9999;">
    
    
     <div class="col">
     <div class="row" style="background-color:#660000;">&nbsp;</div>
     <div class="row">
        [<a href="<? echo $PHP_SELF ?>">Home</a>] 
        [<a href="<? echo $PHP_SELF ?>?ID=3">Algorithmische Revolution</a>] [<a href="<? echo $PHP_SELF ?>?ID=5">cumos</a>] 
        [<a href="<? echo $PHP_SELF ?>?ID=6">Algorithmisch Rekursive Sequenzanalyse</a>]  
        [<a href="<? echo $PHP_SELF ?>?ID=9">GOLEMs Kommentare</a>]  
        [<a href="<? echo $PHP_SELF ?>?ID=10">Düsseldorfer Schülerinventar</a>] [<a href="<? echo $PHP_SELF ?>?ID=2">Texte</a>] 
        [<a href="<? echo $PHP_SELF ?>?ID=8">Rechenbuch</a>] 
        [<a href="<? echo $PHP_SELF ?>?ID=11">Download Sammlung</a>] 
        [<a href="<? echo $PHP_SELF ?>?ID=12">Leseliste</a>] 
        [<a href="<? echo $PHP_SELF ?>?formular=1">Kontakt</a>]      
     </div>     
     <div class="row">
		 <img class="img-fluid" src="http://paul-koop.org/kopf_ich937gekacheltLISP.jpg" width=100%>	 
	 </div>
     <div class="row">&nbsp;</div>
     <div class="row">
     
        <div class="panel panel-default" style="background-color:#660000; color:white; border:0; display: block;">

           <div class="panel-body" style="background-color:#660000; color:white; display: block;">
           
 	
        <?
                if($vts)
                 {
                  include("cl_vtsuche.php");
                 }
                 else
                  {
                    if($formular)
                     {
                      include("cl_kontakt.php");
                     }
                    else
                    {
                     include("cl_thema.php");
                    }
                  }
           ?>
         
           
           
           </div>
        </div>
     
     
     
     </div>
     </div>

    
    
    
    
    

    </div>
    <div class="col-sm-1" style="background-color:#CC9999;">&nbsp;</div>
 </div>
</div>



</body>
</html> 