<?
    function read_vtdata($sql,$conn,$vtsuche)
   {//BEGIN raed_data
    $result=mysql_query($sql,$conn);
    //echo("<BR> Ergebnis = $result <BR>");
    if($result)
    {//BEGIN if $result
    $number=mysql_num_rows($result);
     //echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number){//BEGIN Suchausgabe>null
     echo("<div class="table-responsive"><table class="table">");

     $farbe="#aaaaaa";


     while($row=mysql_fetch_array($result,MYSQL_ASSOC))
     {//BEGIN fields

      //BEGIN stringdef
       $zeile = "<TR>";
       $zeile .="<TD><h1>".$row['title']."</h1></TD>";
       $zeile .="</TR>";
       $zeile .= "<TR>";
       $zeile .="<TD>".$row['text']."</TD>";
       $zeile .="</TR>";
       $zeile .= "<TR>";
       $zeile .="<TD>".$row['beitrag']."</TD>";
       $zeile .="</TR>";
        //END stringdef
       echo $zeile;

     }//END fields
     echo("</TABLE></div>");
     }//ENDE suchausgabe >null
    }//END if result
    else
    {//BEGIN else $result
     echo("<BR>"."Errornumber= ".mysql_error($conn));
    }//END if result
   }//END read_data

//   aktuelles ausgeben

   $conn=connect($host,$user,$pass); ;
   $conn=choise_database($conn,$db);


     $sql="SELECT * FROM pk WHERE (title LIKE \"%$vtsuche%\") OR (text LIKE \"%$vtsuche%\")";
     //echo $sql;
     read_vtdata($sql,$conn,$vtsuche);

   $conn=deconnect($conn);


?>