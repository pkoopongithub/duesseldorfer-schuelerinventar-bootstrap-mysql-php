  <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#6699CC; color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="background-color:#6699CC; color:white;" href="<? echo $PHP_SELF ?>?navi=6">D&uuml;sseldorfer Sch&uuml;lerinventar</a>
    </div>
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
  </div>
</nav>


 
