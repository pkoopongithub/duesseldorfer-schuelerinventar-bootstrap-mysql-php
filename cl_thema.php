
<?
    function read_data($sql,$conn,$session)
   {//BEGIN raed_data
    $result=mysql_query($sql,$conn);
    //echo("<BR> Ergebnis = $result <BR>");
    if($result)
    {//BEGIN if $result
    $number=mysql_num_rows($result);
     //echo("<P>Es sind $number Datensaetze gelesen worden.</P>");
     if($number){//BEGIN Suchausgabe>null
     echo("<div class=\"table-responsive\"> <table class=\"table\">");

     $farbe="#aaaaaa";


     while($row=mysql_fetch_array($result,MYSQL_ASSOC))
     {//BEGIN fields

      //BEGIN stringdef
       $zeile = "<TR>";
       $zeile .="<TD><h1>".utf8_encode($row['title'])."</h1></TD>";
       $zeile .="</TR>";
       $zeile .= "<TR>";
       $zeile .="<TD>".utf8_encode($row['text'])."</TD>";
       $zeile .="</TR>";
       $zeile .= "<TR>";
       $zeile .="<TD>".utf8_encode($row['beitrag'])."</TD>";
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

   if ($ID)
    {
     $sql="SELECT * FROM pk WHERE $ID LIKE ID";
     read_data($sql,$conn,$session);
    }
    else
    {?>
<!--<p>Herzlich willkommen auf meiner privaten Website. Alles über
mein berufliches Profil finden Sie auf meinem <a
href="https://www.xing.com/profile/PaulH_KoopMA" target="_blank"
rel="me"><img src="http://www.xing.com/img/buttons/9_de_btn.gif"
alt="XING" border="0" width="80" height="15" /></a>. </p>-->

<p>Ich bin Paul-Koop, Magister Artium (Erziehungswissenschaft, Sozialwissenschaften, 
  Psychologie). Das sozialwissenschaftliche Handwerkszeug (empirische Sozialforschung, 
  beschreibende Statistik, Prüfstatistik, Spieltheorie, Simulation, Modellbildung, 
  Algorithmisierung) und die psychodiagnostische Teststatistik beherrsche ich 
  ex forma et ex functione. Ich stehe methodisch einem kritisch-rationalen, naturalistischen, <a href="https://de.wikipedia.org/wiki/Darwinismus#Universeller_Darwinismus" target=_blank>universell-darwinischen</a> 
  und strukturalistischen Denken nahe. Ich denke nicht postmodern, poststrukturalistisch 
  oder konstruktivistisch. <!-- Wahrheitsrelativismus in der Methodik verkleidet als narzistischer Liberalismus und  -Libertarianismus (egal ob Links-, Rechts-, Neo- Öko- oder Lifestyle-) verbiete ich mir. Wenn durch politische Heilslehren beliebige Sätze unsterblich werden und Wahrheit relativ wird, sterben statt Theorien Menschen. 
  Erstaunlich ist nur, dass diese Formen von Eloquenz, Eleganz, Narzissmus und Wahrheitsrelativismus die sozialwissenschaftlichen Lehrstühle dominieren.--> 
  <!-- und mein Herz schlägt für
eine aus abendländischen&nbsp; Wurzeln gewachsene, agnostische, aufgeklärte, <a href="https://de.wikipedia.org/wiki/Evolution%C3%A4rer_Humanismus" target=_blank>evolutionär-humanistische</a>  und streng säkulare Weltanschauung.-->
  <!--Ich misstraue dem Sozialdarwinismus postmoderner Linker und Neoliberaler (Krieg um Bodenschätze, Privatisierung, Zerstörung der Sozialversicherung, Liberalisierung des Arbeitsmarktes und rüde Umverteilung, Geldschöpfung durch Geschäftsbanken, Kryptowährungen, Desintegration, Individualismus, Globalisierungseuphorie, Migrationseuphorie, Postdemokratie, Verbalaltruismus  für ferne Zukünfte, ferne Gesellschaften, andere Arten, Wohlfühl-Label, Realegoismus im räumlichen- und zeitlichen Direktkontakt) und setze meine Hoffnung auf eine Rückbesinnung der Politik weg von New Age, Konstruktivismus, Postmodernismus und Sozialdarwinismus hin zu kritischem Rationalismus, katholischer Soziallehre und evangelischer Sozialethik (<a href="http://worthwhile.typepad.com/worthwhile_canadian_initi/2015/11/vortigerns-immigration-policy.html" target="_blank">Vortigern's immigration policy</a>).<!--Ich bin Mitglied des Berufsverbandes der Erziehungswissenschaftlerinnen und Erziehungswissenschaftler,
der Sektion Modellbildung und Simulation der deutschen Gesellschaft für Soziologie
und der Arbeitsgemeinschaft Objektive Hermeneutik.-->
</p>

<p> Auf dieser Seite stelle ich meine privaten Interessen vor. [Algorithmische Revolution] bietet Quelltexte zu zelluären Automaten, genetischen Algorithmen, neuronalen Netzen, Nullsummenspielen und formalen Sprachen. Zum Umfang gehören auch ein Simulator für Primatenkulturen, die Simulation eines Zweiparteiensystems, ein Räuber-Beute-System und ein evolutionäres Modell für eine evolutionär stabile Strategie einer Population. [cumos] bietet ein Anfängermodell für Schwarmprogrammierung zum Nachprogrammieren. [Algorithmisch Rekursive Sequenzanalyse] bietet eine empirisch bewährte Methode zur Analyse protokollierter Ereignissequenzen mit formalen Sprachen und mündet in Simulationen mit den bei der Analyse erstellten formalen Sprachen. Benötigt werden LISP, SPSS und R. [GOLEMs Kommentare] bietet einen Einblick in mein Weltbild.  [Düsseldorfer Schülerinventar] bietet ein quelloffenes, objektives, valides und reliables Persönlichkeitsinventar zum Erlernen von Teststatistik und Testentwicklung. Zum Umfang gehören ein Handbuch mit Einweisung in die Anwendung und Dokumentation der Testgüte, Erfassungsbögen für die Rohwerterfassung, Auswertungsbögen, Profilbögen, eine Tabellenkalkulation zum Erlernen und Üben der Auswertung, 
eine PHP-Onlineversion mit Quelltext und eine plattformunabhängige PC-Version mit Quelltext 
und eine Android App mit Quelltext. Benötigt werden SPSS und R, 
Freepascal und Lazarus oder Delphi, Kylix und Eclipse und für die Onlineversion 
PHP, MySQL und ein Webserver und Android Studio für die Android App. <!--Die Arbeiten sind 
Guerilla- und Widerstandsarbeiten, an denen ich gegen den Strom des postmodernen 
Bildungsbürgertums, das eher an Harry Potter als an Karl Popper erinnert, seit 
den 80ern des vorigen Jahrhunderts arbeite.--> [Texte] bietet einen Überblick über meine Veröffentlichungen. [Rechenbuch] bietet einen Lehrtext zum Rechnen ohne Taschenrechner (Primarstufe, Sekundarstufe I) mit Übungsgenerator und Lösungsgenerator und eine Übungsfirma mit FiBu und Lagerverwaltung in einer Tabellenkalkulation. </p>
<p> Das Rechenbuch mit Lösungsgenerator ist sicherlich sehr nützlich. Nützlich 
ist auch die Übungsfirma mit Finanzbuchhaltung. Das Düsseldorfer Schülerinventar 
ist, anders als Lehrbücher sonst, dazu geeignet, sich nicht nur die Grundlagen 
der Teststatistik zu erarbeiten, sondern bietet auch die Möglichkeit, den 
Quellcode nachzuprogrammieren und sich so Grundwissen über SPSS, R, und 
Programmierung von Testanwendungen zu erarbeiten. Nach der allgemeinen 
Hochschulreife und während des Studiums war ich erstaunt über den Mangel an 
empirisch-analytischem Vorgehen. Zuerst war ich bereit, den Weg mitzugehen, dass 
empirisch-analytisches Arbeiten zu wenig emanzipatorisch ist und zu wenig am 
Sinn sozialer Handlungen orientiert ist. Dann aber Begriff ich, dass an 
sozialwissenschaftlichen Fachbereichen ein an Ideologien (Harry Potter statt 
Karl Popper) orientiertes Arbeiten 
dominiert und habe mich, die Gedanken sind frei, nicht von 
empirisch-analytischem Arbeiten und Lernen abhalten lassen. Bei der Suche nach 
einem Thema für die Magisterarbeit habe ich vergeblich nach einem 
Hochschullehrer gesucht, der eine Arbeit über Algorithmen und Datenstrukturen 
zur Soziometrie betreut und hatte die Gelegenheit eine qualitative Textanalyse 
anfertigen. Dafür bin ich dankbar. Denn dadurch bin ich auf die offensichtliche Möglichkeit gestoßen den 
genetischen Strukturalismus Oevermanns zu Ende zu denken und ihn zu einem 
empirisch-analytischen Werkzeug 
auszubauen, das es ermöglicht Handlungssequenzen in regelbasierte 
Datenstrukturen zu übersetzen, die Simulationen ermöglichen, deren künstliche 
Sequenzen mit Protokollen empirischer Sequenzen verglichen, also falsifiziert 
werden können. Ich habe dieses Modell unter SPSS, R und LISP an einer Vielzahl 
von protokollierten Verkaufsgesprächen ausgearbeitet und verschiedene 
Algorithmen und Datenstrukturen genutzt, mich aber letztlich für LISP 
entschieden. Dabei handelt es sich um eine reine Übersetzungsarbeit ohne 
Hinzufügung oder Auslassung. Der genetische Strukturalismus wird ohne 
Hinzufügung oder Auslassung in ein formales Modell übersetzt. Ist das Modell 
bewährt, so ist der genetische Strukturalismus bewährt. Ist das Modell 
falsifiziert, so ist der genetische Strukturalismus falsifiziert. Diese Arbeit lässt mich nicht mehr los. </p>

<p>Meine private Leidenschaft sind die visuelle
Amateurastronomie, gute Bücher und die informatische
Modellierung sozialer Strukturen. Ganz besonders interessiert
mich privat die Rekonstruktion der Regeln der Replikation
kultureller Replikatoren mit formalen Sprachen.<!--, also die algorithmisch rekursive Sequenzanalyse.
Im Modell des algorithmische Strukturalismus (Paul Koop) sind die Transformationskanten gewichtete Kanten.
Die Entscheidungsknoten lassen sich durch Fuzzy-Logik Modelle (z.B. Thomas Kron)
oder spieltheoretische Modelle (Andreas Diekmann) ergänzen. Fuzzy-Logik, Spieltheorie und algorithmischer Strukturalismus ergänzen sich gut.
Fuzzy-Logik und Spieltheorie sind alternative Modelle zu den Entscheidungsknoten des algorithmischen Strukturalismus.
Und der algorithmische Strukturalismus modelliert das Transformationsnetz mit einer kontextfreien formalen Sprache. 
Replikation, Transformation und Selektion der Transformationsregeln bilden die Grundlage der Evolution unserer Kultur (vgl. Blackmore, Dawkins, Dennett). Diese Regeln im Sinne von Algorithmen sind Replikatoren im Sinne von Dawkins.--></p>

<p>Es lohnt sich, die Sprache zu lernen, die Gesellschaften
rekonstruiert. Bisher haben wir nur eine Sprache, die
Gesellschaftsphilosophien, beeindruckend wie Pfauenschwänze als barockes Beiwerk 
für linke, rechte und ökologische politische Ideologien erschafft (deutscher Idealismus, Konstruktivismus, Kritische
Theorie, Postmodernismus, Poststrukturalismus, Funktionalismus, Strukturfunktionalismus, Symbolischer Interaktionismus, Wissenssoziologie, Liberalismus, Sozialismus, Kommunismus, etc) und heuristische Regel- und Agentensysteme. Die Gesellschaftsphilosophie ist essayistisch, kathartisch und elegant und heuristische Regelsysteme sind nicht empirisch bewährt. Wir brauchen
eine neue rekonstruktive Soziologie, die die kulturelle Evolution
als algorithmisch rekursive Reproduktion, Variation und Selektion
kultureller Replikatoren modelliert, deren Spuren
sequenzanalytisch mit formalen Sprachen rekonstruiert werden
können. Die Strukturwissenschaften Linguistik, Logik,
Mathematik, Soziologie und theoretische Informatik haben einen
identischen kalkülfähigen Gegenstandsbereich. </p>

<p>Aus der diskreten Natur der Materie geht die Sprache der
chemischen Verbindungen und die Sprache der DNA hervor. Wie ein
Echo entsteht daraus auf höherer Ebene die ethnische Sprache und
auf einer Metaebene die linguistische Struktur der Reproduktion,
Variation und Selektion der kulturellen Replikatoren. Diese
linguistische Struktur ist der Motor der memetischen Reproduktion
kultureller Replikatoren. Diese algorithmisch rekursive Struktur
ist natürlich nicht an Habermas und Luhmann, Derrida und Foucault oder Kant, Hegel, Fichte, Schelling, Heidegger, Sloterdijk, Jongen
anschlußfähig, wohl aber an Troitzsch, Diekmann, Esser, Neurath, Carnap, Schlick, Popper, Brezinka, Alisch, Roessner, Oevermann, Reichertz, Chomsky, McCarthy, Papert, Solomon, Lévi-Strauss, de Saussure, Austin, Searle, Suppes, Sneed, Stegmüller, Balzer, Manhart. Galilei ist ja auch nicht an Aristoteles
anschlußfähig.</p>
<p><font face="Arial, Helvetica, sans-serif"><tt>Der algorithmische 
Strukturalismus ist widerspruchsfrei, empirisch bewährt, galileisch, 
naturalistisch, darwinisch und ein Ärgernis für tiefenhermeneutische, 
konstruktivistische, postmodernistische und poststrukturalistische 
Sozialphilosophen.</tt></font></p>
<font face="Arial, Helvetica, sans-serif"><tt>
<p>Seit Mitte der 1970er bis heute finden irrationalistische oder 
antirationalistische Ideen unter akademischen Soziologen in Amerika, Frankreich, 
Großbritannien und Deutschland zunehmend Verbreitung. Die Ideen werden als 
Dekonstruktionismus, Tiefenhermeneutik, Wissenssoziologie, 
Sozialkonstruktivismus, Konstruktivismus oder Wissenschafts- und 
Technologieforschung bezeichnet. Der Überbegriff für diese Bewegungen ist 
Poststrukturalismus oder Postmodernismus. Alle Formen des Postmodernismus sind 
antiwissenschaftlich, antiphilosophisch, antistrukturalistisch, 
antinaturalistisch, antigalileisch, antidarwinisch und allgemein antirational. 
Die Sicht der Wissenschaft als eine Suche nach Wahrheiten (oder annähernden 
Wahrheiten) über die Welt wird abgelehnt. Die natürliche Welt spielt eine kleine 
oder gar keine Rolle bei der Konstruktion wissenschaftlichen Wissens. Die 
Wissenschaft ist nur eine andere soziale Praxis, die Erzählungen und Mythen 
hervorbringt, die nicht mehr Gültigkeit haben als die Mythen 
vorwissenschaftlicher Epochen.</p>
</tt></font>
<p><font face="Arial, Helvetica, sans-serif"><tt>
Eine soziale Handlung ist ein Ereignis im Möglichkeitsraum aller sozialen 
Handlungen. Der Sinn einer sozialen Handlung ist die Menge aller möglichen 
Anschlusshandlungen und ihrer Auftrittswahrscheinlichkeit. Der Sinn muss nicht 
deutend verstanden werden sondern kann empirisch rekonstruiert werden. Die 
Rekonstruktion kann durch Bewährungsversuche an empirischen Protokollen bewährt- 
oder falsifiziert werden.</tt></font></p>

<p><font face="Arial, Helvetica, sans-serif">Die sozialen
Replikatoren, Regeln im Sinne von Algorithmen, gespeichert in
neuralen Mustern und Artefakten, zur Laufzeit kopiert von
technischen und neuralen Automaten, erzeugen diachronisch eine
Kette von Selektionsknoten (Parameter I), wobei sie synchronisch
zum Zeitpunkt t aus dem Selektionsknoten t den Selektionsknoten
t+1 erzeugen (Parameter II). Dem entspricht eine kontextfreie
formale Sprache (K-Systeme), die aus dem Selektionsknoten zum
Zeitpunkt t durch Anwendung von Produktionsregeln den
Selektionsknoten t+1 erzeugt. </font></p>

<p><font face="Arial, Helvetica, sans-serif">Dabei ist jeder
Selektionsknoten ein Zeiger auf rekursiv ineinander
verschachtelte K-Systeme. So kann wie mit einem Mikroskop in die
Fallstruktur hineingezoomt werden. Die Menge der K-Systeme bilden
eine Case Structure Modelling Language &quot;CSML&quot;. K-Systeme sind eine Formalisierung des genetischen Strukturalismus ohne Ergänzung und ohne Hinzufügung. Genial ist, etwas Einfaches erstmalig einfach zu sagen.
K-Systeme sind strukturalistisch, naturalistisch, empirisch bewährt, in sich widerspruchsfrei und ein Ärgernis für tiefenhermeneutische-, postmoderne-, poststrukturalistische-, konstruktivistische- und  Gesellschaftsphilosophen der kritischen Theorie.</font></p>

<p><font face="Arial, Helvetica, sans-serif">Die Approximation
laesst sich beliebig nahe an die Transformation der sozialen
Wirklichkeit annähern. Dabei werden den Produktionen Maße
zugeordnet, die ihrer empirischen gesicherten Pragmatik/Semantik
entsprechen. Sie bilden topologisch ein rekursives
Transitionsnetz diskreter nichtmetrischer Ereignismengen ueber
denen ein algorithmisches Regelsystem arbeitet. K- Systeme <b><i>K
</i></b>sind formal durch ein Alphabet (<img src="p60b.jpg"
width="113" height="23"> ), alle Worte über dem Alphabet ( <b><i>A*
</i></b>), Produktionsregeln ( <b><i>p </i></b>) dem
Auftrittsmaß <b><i>h </i></b>(Pragmatik/Semantik)und einer
axiomatischen ersten Zeichenkette ( <b><i><img src="p60c.jpg"
width="60" height="24"> </i></b>) definiert:</font></p>

<p><font face="Arial, Helvetica, sans-serif"><img src="p60a.jpg"
width="194" height="170"></font></p>

<p>&nbsp;</p>

<p><font face="Arial, Helvetica, sans-serif">Vom Axiom <b><i>k</i></b><sub><b><i>0
</i></b></sub>ausgehend, erzeugt ein K-System eine Zeichenkette <i>k</i><sub><i>0</i></sub><i>k</i><sub><i>1</i></sub><i>k</i><sub><i>2</i></sub><i>...
</i>indem die Produktionsregel&nbsp;<i> </i>p auf das Zeichen i
einer Kette angewendet wird:</font></p>

<p><font face="Arial, Helvetica, sans-serif"><img src="p61a.jpg"
width="148" height="73"></font></p>

<p><font face="Arial, Helvetica, sans-serif">Ein strenges Maß
für die Zuverlässigkeit der Zuordnung der Interakte zu den
Kategorien (vorläufige Formative da im Prinzip ad infinitum zu
approximieren) ist die Anzahl der von allen Interpreten
übereinstimmend vorgenommene Zuordnung (vgl MAYRINGl99O,S.94ff,
LISCH/KR1Z1978,S.84ff). Dieser Koeffizient ist dann definiert
mit:</font></p>

<p><font face="Arial, Helvetica, sans-serif"><img src="p70a.jpg"
width="89" height="65"></font></p>

<p><font face="Arial, Helvetica, sans-serif">N:= Anzahl der
Interpreten</font></p>

<p><font face="Arial, Helvetica, sans-serif">Z:= Anzahl der total
übereinstimmenden Zuordnungen</font></p>

<p><font face="Arial, Helvetica, sans-serif">Ii:=Anzahl der
Zuordnungen des Interpreten Ii</font></p>

<p><i>&quot;Bei den Geisteswissenschaften dagegen hat man
manchmal den Eindruck, dass es mindestens ebenso wichtig ist, wie
und vor allem von wem etwas gesagt wird. Nehmen wir
beispielsweise Jürgen Habermas und seine (Entschuldigung,
wirren) Ideen zum Gehirn im Speziellen und der Evolution im
Allgemeinen. Weil er Habermas ist, nehmen viele seine Aussagen
erst einmal ernst, und wenn sie sie nicht verstehen, suchen sie
den Fehler bei sich selbst. Naturwissenschaftler würden, frei
nach Wolf Singer, schlicht sagen: &#132;Wo sind die Daten?&#147;
oder auch &#132;Geh doch mal ins Labor!&#147;&quot;</i> </p>

<p>Meyer, A.: Crash der Wissenschaftskulturen: <a
href="http://www.darwin-jahr.de/evo-magazin/crash-wissenschaftskulturen"
target="_blank">http://www.darwin-jahr.de/evo-magazin/crash-wissenschaftskulturen</a>
Handelsblatt, Donnerstag, 26. FEBRUAR 2009 | NR. 40 WISSENSCHAFT
&amp; DEBATTE <a
href="http://www.evolutionsbiologie.uni-konstanz.de/files/resourcesmodule/@random498aaf5c84194/1235651370_HB090226.pdf"
target="_blank">http://www.evolutionsbiologie.uni-konstanz.de/files/resourcesmodule/@random498aaf5c84194/1235651370_HB090226.pdf</a>
</p>

<p>Diese Feststellung trifft natürlich auf Luhmann genauso zu.</p>

<p><i>&quot;Konstruktivismus ist vielmehr ein Sonderfall von
Metaphysik. Konstruktivismus ist subjektiver (oder
&quot;intersubjektiver&quot;, &quot;sozialer&quot;)
Idealismus.Der deutsche Idealismus hat es Luhmann vorgemacht:
Kant, Hegel, Fichte und Schopenhauer beschreiben, wie sich
Bewusstsein seine Welt schafft. Luhmann gibt zwar das
mentalistische Vokabular: die Rede vom Bewusstsein auf, nicht
aber den idealistisch-demiurgischen Ansatz. &quot;</i> </p>

<p>Krause, D.: Luhmanns Systemtheorie als Metaphysik <a
href="http://www.lrz.de/~medkon/2401_krause.html" target="_blank">http://www.lrz.de/~medkon/2401_krause.html</a>
</p>

<p>Und deshalb ist es kein Zufall, dass die Reproduktion und
Transformation der Replikatoren dieser Subkultur eher an die
Ordinationsriten und Initiationsriten einer Religion erinnern.
Denn es geht nicht um Wissen, sondern um die Reproduktion ewiger
Wahrheiten. Wie die höheren Beamten öffentlich-rechtlicher
Religionsgemeinschaften verwalten Habermasjünger und
Luhmannjünger ihre Metaphysik. Und untereinander und gegen die,
die nicht glauben, führen sie Religionskrieg. Die
Sozialwissenschaften haben ihren Galilei noch nicht gefunden. Das
Elend des Historizismus lebt und treibt weiter sein schauriges
Spiel. Anders als bei den öffentlich-rechtlichen
Religionsgemeinschaften fällt aber nicht einmal als Nebeneffekt
etwas Nützliches ab. Kritische Theorie und Konstruktivismus sind
(Entschuldigung) reiner aristotelischer Humbug.</p>

<p><i>&quot;Im starken Gegensatz zum methodologischen
Naturalismus in der Soziologie behauptet der Historizismus, daß
einige der charakteristischen Methoden der Physik in den
Sozialwissenschaften nicht verwendbar sind, weil es tiefliegende
Unterschiede zwischen der Soziologie und Physik gebe. &quot;</i></p>

<p>Popper,K.: Das Elend des Historizismus, 1987,6.Auflage, Seite
5</p>
<!--
Und so ist ein unbeirrbarer Glaube an Habermas und Luhmann gemischt mit
Versatzstücken aus Buddhismus, Christentum, Esoterik, Islam, Judentum, Liberalismus, Kommunismus, Psychoanalyse, Psychotherapie und  Sozialismus das feste Glaubensbekenntnis im Weltbild der Geisteswissenschaftler.</p>
-->
<p>Natürlich kann man sich bemühen, an Luhmann oder Habermas
anschlussfähig zu bleiben und Luhmann oder Habermas zu
algorithmisieren. Algorithmisieren kann man alle Artefakte, zum
Beispiel die Astrologie oder das Schachspiel. Und man kann
normative Agenten verteilter künstlicher Intelligenz, Zelluläre
Automaten, neuronale Netze und andere Modelle mit heuristischen
Protokollsprachen und Regeln modellieren. Das ist zweifellos
theoretisch wertvoll. So wird es keinen soziologischen
Theoriefortschritt geben. Gesucht ist eine neue Soziologie, die
die Replikation, Variation und Selektion sozialer Replikatoren,
gespeichert in Artefakten und neuralen Mustern, modelliert. Diese
neue Soziologie wird an Habermas oder Luhman ebenso wenig
anschlussfähig sein wie Galilei an Aristoteles. Und ihre basalen
Sätze werden so einfach sein wie die newtonschen Gesetze. So wie
Newton die Begriffe Bewegung, Beschleunigung, Kraft, Körper und
Masse operational definierte, so wird diese Theorie die sozialen
Replikatoren, ihre materiellen Substrate, ihre Replikation,
Variation und Selektion algorithmisch und operational definieren
und sequenzanalytisch sichern. Soziale Strukturen sind sprachlich
codiert und basieren auf einem digitalen Code. Gesucht sind
syntaktische Strukturen einer Kultur codierenden Sprache. Aber
dies wird keine philosophische Sprache sein, sondern eine
Sprache, die Gesellschaft codiert und erschafft. Diese Sprache
codiert die Replikation, Variation und Selektion kultureller
Replikatoren. Auf dieser Basis werden dann normative Agenten
verteilter künstlicher Intelligenz, Zelluläre Automaten,
neuronale Netze und andere Modelle andere als heuristische
Protokollsprachen und Regelsysteme nutzen können, um die
Evolution kultureller Replikatoren zu simulieren. </p>

<p><i>&quot;Es geht nicht nur um die Überprüfung der
Anwendungsbedingungen eines bestimmten Modells (z. B. die
Erklärung der Organisation einer Revolution als
Kollektivgutproblem), sondern &#150; meist &#150; um die
Kombination ganz unterschiedlicher Situationstypen (und deren
aggregierter Folgen), wobei diese Kombination&#130;
historisch&#145; eher auf &#130;Zufall&#145; als auf einen
&#130;gesetzmäßigen&#145; Verlauf insgesamt zurückzuführen
ist. Es war wohl der zentrale Irrtum des Historizismus (und
analoger makroskopischer Theorien sozialen Wandels), die
konkreten Abläufe insgesamt aus einem Modell erklären zu wollen
und als eine Art von gigantischem, komplett endogenisierbaren
Ablauf zu verstehen, wobei es sich tatsächlich lediglich um die
zufällige Kombination ganz verschiedener Abläufe handelt.
Einzelne Teil-Prozesse und &#150;Konstellationen lassen sich dann
&#150; möglicherweise &#150; im o. a. Sinne modellieren; die
gesamte Kombination des empirischen Einzelfalls indessen (in
aller Regel) nicht.&quot;</i></p>

<p>Hartmut Esser, Klaus G. Troitzsch: Einleitung: Probleme der
Modellierung sozialer Prozesse. In: Hartmut Esser, Klaus G.
Troitzsch: Modellierung sozialer Prozesse. Informationszentrum
Sozialwissenschaften, Bonn 1991.S. 9-12.</p>
<!--
<p align="justify">Weimarer Aufruf</p>
<p align="justify">Ich bin mit Leib und Seele Mitarbeiter in der beruflichen Weiterbildung und ich unterstütze den <a href=http://www.gew.de/Weimarer_Aufruf.html  target=_blank>Weimarer Aufruf:</a></p>

<img src=http://paul-koop.de/NettolohnBBB.GIF />
<p align="justify">
Grundeinkommen: Götz Werner und Thilo Sarrazin im Diskurs:
</p>
<iframe title="YouTube video player" class="youtube-player" type="text/html" width="480" height="390" src="http://www.youtube.com/embed/L2rVy6kt-WM" frameborder="0"></iframe>


<p align="justify">Für jede gegebene generative Grammatik bestehend aus Alphabet und Produktionsregeln läßt sich zeigen, dass
sich mindestens eine wohlgeformte terminale Endkette angeben läßt, die nicht abgeleitet werden kann.
Für jede objektiv hermeneutische Methode, die methodologisch durch den genetischen Strukturalismus definiert ist
läßt sich zeigen, dass sie äquivalent auf eine generative Grammatik abgebildet werden kann und deshalb mindestens ein Fall angegeben werden kann, für den keine Fallstrukturgesetzlichkeit existiert.</p>
<p align=justify><a href="./ars.pdf" target=_blank>Algorithmisch Rekursive Sequenzanalyse: Regeln 
  einer sequenzanalytischen soziologischen Methode, Aachen 1994b</a><a href="./ars2.pdf" target=_blank>-</a> 
</p>
<p align=justify><a href="./oechsle.pdf" target=_blank>&quot;EINE HAND W&Auml;SCHT DIE ANDERE&quot;: 
  Bedingungen der M&ouml;glichkeit eines algorithmischen Deskriptionismus: Eine 
  Voruntersuchung am Beispiel der Sequenzanalyse mikro&ouml;konomischer Interakte, 
  Aachen 1994a</a><a href="./oechsle2.pdf" target=_blank>-</a></p>
<p align=justify><br>
  <a href="./fallstruktur.pdf" target=_blank>Fallstruktur</a></p>
<p align=justify><a href="./reku.pdf">Rekursive Strukturen und Prozesse zwischen OEVERMANNs 
  genetischem Strukturalismus und LUHMANNS Systemtheorie, Aachen 1995</a></p>
<p align=justify><a href="./methodologie.pdf" target=_blank>DIE METHODOLOGIE DES ALGORITHMISCHEN STRUKTURALISMUS, 
  Aachen 1996</a></p>
<p align=justify><a href="./GTGentscheidbarkeit.pdf" target=_blank>&Uuml;ber die Unentscheidbarkeit der GTG CHOMSKY's, Aachen 1995</a></p>
<p align=justify><a href="./BEDars.pdf" target=_blank>Bedingungen der M&ouml;glichkeit einer Algorithmisch Rekonstruktiven Soziologie, Aachen 1995</a></p>
<p align=justify><a href="./KSysteme.pdf" target=_blank>K-Systeme: Die Bedingung der M&ouml;glichkeit einer algorithmisch rekursiven Sequenzanalyse, Aachen 1995</a></p>
-->
<p>&quot;Den Geistes-, Kultur- und Sozialwissenschaften ist ihr
Gegenstand erst unter dem grundlegenden Aspekt der
Sinnstrukturiertheit gegeben, und Sinnstrukturiertheit wiederum
kommt ihrem Gegenstandsbereich erst aufgrund der
Regelgeleitetheit von sozialem Handeln, nicht aufgrund des
subjektiven Meines und Intendierens zu, wobei unter Regeln hier
in scharfer Differenz zu Regularitaet oder Regelmaeßigkeit
formal ein Äquivalent zu einem Algorithmus verstanden
wird...&quot;</p>

<p>Ulrich Oevermann, Die objektive Hermeneutik als unverzichtbare
methodologische Grundlage fuer die Analyse von Subjektivitaet.
Zugleich eine Kritik der Tiefenhermeneutik, In. Jung, Th.,
Mueller-Doohm, st. (Hg):&gt;&gt;Wirklichkeit&lt;&lt; im
Deutungsprozess: Verstehen und Methoden in den Kultur- und
Sozialwissenschaften, Frankfurt 1993, S. 115</p>

<p><br>
&quot;Normalerweise liegt eine Revolution vor uns und kuendigt
sich mit »Getoese« an. Die Algorithmische Revolution dagegen
liegt bereits hinter uns und nur wenige haben sie bemerkt - umso
wirkungsvoller ist sie gewesen. Die Algorithmische Revolution
begann um 1930 in der Wissenschaft, um 1960 in der Kunst.
Inzwischen gibt es kaum noch einen Bereich unseres
gesellschaftlichen und kulturellen Lebens, der nicht von
Algorithmen durchdrungen ist: Technik, Transport, Haushalt,
Banken, Wirtschaft, Kommunikation, Architektur, Literatur, Kunst,
Musik.&quot;</p>

<p>Peter Weibel: <a
href="http://www01.zkm.de/algorithmische-revolution/"
target="_blank">http://www01.zkm.de/algorithmische-revolution/</a></p>

<p>&nbsp;</p>

<p>&quot;...das kognitiv richtige Denken verwandelt sich mit dem
Ablauf der Zeit in Technologie im Gegensatz zum 'unrichtigen'
Denken, welches die reale Welt - ohne es zu bemerken -
transzendiert und Fiktionen schafft, wie philosophische Systeme,
Weltanschauungen, Mythen und dergleichen.&quot;</p>

<p>Lem, St.: Vorwort im nachhinein, in: Ralf-Dirk Hennings u.a.
(Hg.): Informations- und Kommunikationsstrukturen der Zukunft.
Bericht anläßlich eines Workshops mit Stanislaw Lem, München
1983, S.9f.<br>
</p>

<p>&quot;Text heisst jede durch eine Grammatik (Chomskygenerator)
generierte Menge von Zeichenketten, unabhaengig davon, wozu wir
sie verwenden. Abstrakt, als Texte sind sich ein Computerprogramm
und ein Liebesbrief gleich. Wenn Text nicht mentalistisch
abgehoben, eine &#132;(schriftlich fixierte) im Wortlaut
festgelegte Folge von Aussagen&quot; (Microsoft 1995
(Duden-LexiRom)), sondern ein von Menschen intentional
hergestelltes Produkt ist, kann man nicht nur nach seiner
Verwendung oder Wirkung, sondern auch nach seiner
Gegenstandsbedeutung (Holzkamp 1976:25ff) fragen. Die
Gegenstandsbedeutung von Text ist nicht eine irgendwie geartete
inhaltliche Bedeutung, die mittels Text uebermittelt werden soll,
sondern die Bedeutung des gegenstaendlichen Textes selbst, also
seine gegenstaendliche Funktion im uebergeordneten Prozess.&quot;</p>

<p><br>
Rolf Todesco<br>
Hypertext oder Was heisst Konstruktion im konstruktivistischen
Diskurs?<br>
in: Rusch, G. / S.J. Schmidt (Hrsg): Konstruktivismus in
Psychiatrie und Psychologie, Delfin 1998/99, Suhrkamp, stw 1503,
Frankfurt 2000 </p>

<p>&nbsp;</p>

<p>Der Kuenstler als Programmierer findet ein widerstaendiges
Material. Dieses ist von vornherein semiotischer Art. Seine
Widerstaendigkeit liegt folglich im Geistigen. Berechnungen gilt
es zu organisieren, die zu Bildereignissen werden. Die
Bewunderung fuer den Kuenstler, die wir aus seinem Bild heraus
stets aufbringen wollen, findet ihren Anlaß in der Distanz, die
er zum eigenen Werk eingeht und aushaelt. Deutlich ist die
kuenstliche Kunst, die sich des Computers bedient, eine
postmoderne Kunst, also eine Kunst, die zwar zu den Materialien
gelangt, aber nicht von ihnen selbst, sondern von ihren
semiotischen Spuren ausgeht...</p>

<p>Frieder Nake: &quot;Mensch und Kunst im
Computerzeitalter&quot; http://www.emohr.com/ww1_out.html</p>

<p>Die Instruktionen und Anweisungen der unterschiedlichen Musik-
und Kunstrichtungen lassen sich im Begriff des Algorithmus
zusammenfassen. Ein Algorithmus ist eine streng definierte
Handlungsanweisung mit finiten Elementen und einer determinierten
Abfolge die einer Maschine oder einem Menschen mitteilt, was zu
tun ist. Die Maschine folgt einer Folge von Ziffern und fuehrt
das Programm aus, der Mensch folgt Buchstaben und Symbolen, sei
es einem Kochrezept, einer musikalische Partitur oder den Regeln
eines Spiels. Die intuitiven Algorithmen in Form von Gebrauchs-
und Handlungsanweisungen setzten sich in den Kuensten parallel
zur Entwicklung der Rechenmaschinen und Maschinensprachen und
ihren algorithmischen Prozeduren durch.</p>

<p>Peter Weibel:
http://www02.zkm.de/youser/index.php?option=com_content&amp;task=view&amp;id=16&amp;Itemid=24</p>

<p>SEQUITUR is an algorithm that infers a hierarchical structure
from a sequence of discrete symbols by replacing repeated phrases
with a grammatical rule that generates the phrase, and continuing
this process recursively. The result is a hierarchical
representation of the original sequence, which offers insights
into its lexical structure. The algorithm is driven by two
constraints that reduce the size of the grammar, and produce
structure as a by-product. SEQUITUR breaks new ground by
operating incrementally. Moreover, the method's simple structure
permits a proof that it operates in space and time that is linear
in the size of the input. Our implementation can process 50,000
symbols per second and has been applied to an extensive range of
real world sequences. </p>

<p>Craig G. Nevill-Manning Ian H. Witten <a
href="http://www.sequitur.info/" target="_blank">http://www.sequitur.info
inferring hierarchies from sequences 1997</a></p>

<p>&nbsp;</p>

<p>Im 19. Jahrhundert ist das 20. Jahrhundert imaginiert worden
als Technologie der Mobilisierung und Personalisierung. Mit PC
und Handy etc. sind diese Phantasien eingetreten. Diese
Technologien haben aber auch die Kunst veraendert. Die Geschichte
der Betrachter von Kunst und der Besucher von Museen hat im 20.
Jahrhundert neue Akzente erhalten. Nach 1945 hat in der Neuen
Musik und in der bildenden Kunst die Partizipation des Publikums
als Teil des Kunstwerkes eingesetzt. </p>

<p>User Art _ Nutzerkunst /// Peter Weibel:
http://www02.zkm.de/youser/index.php</p>

<p>&nbsp;</p>

<p>Memes are habits, skills, songs, stories, or any other kind of
information that is copied from person to person. Memes, like
genes, are replicators. That is, they are information that is
copied with variation and selection. Because only some of the
variants survive, memes (and hence human cultures) evolve. Memes
are copied by imitation, teaching and other methods, and they
compete for space in our memories and for the chance to be copied
again. Large groups of memes that are copied and passed on
together are called co-adapted meme complexes, or memeplexes.</p>

<p>Susan Blackmore: <a
href="http://www.susanblackmore.co.uk/memetics/about%20memes.htm"
target="_blank">http://www.susanblackmore.co.uk/memetics/about%20memes.htm</a></p>

<p>Metzinger: Auch das Selbstmodell in Ihrem Gehirn ist jetzt
schon rein virtuell. Der interessante Punkt ist gerade, dass Sie
es nicht als Modell erleben koennen, sozusagen naiv-realistisch
an seinem Inhalt kleben. Stellen Sie sich vor, wir entwickeln
eine Bewusstseinstechnologie, durch die Sie sich erlebnismaeßig
mit ihrer Second-Life-Figur identifizieren koennen. Ein Exodus
des Menschen aus der Realitaet in die Virtualitaet ist keine ganz
neue Idee. Die philosophische Frage waere: Wer oder was ist es
ueberhaupt, das da auswandert? </p>

<p>Thomas Metzinger:
http://www.zeit.de/2007/34/M-Seele-Interview?page=all</p>

<p>&#132;Als Ich, als menschliche Wesen, sind wir alle aus Welt 3
hervorgegangen&#133;&#147;, </p>

<p>Popper,K.: Das Ich und sein Gehirn1989(10), München, S.144</p>

<p>&#132;&#133; wenn wir es doch sagen können, so geht es bloß
darum, einen Algorithmus zu schreiben, der in Software
implementiert werden kann.&#147;</p>

<p>Metzinger,Th.: Der Ego.Tunnel, 2009, S.272</p>

<p>Geisteswissenschaftliche, konstruktivistische und
postmoderne Ansätze sind mir methodisch fremd. Mead, Parsons, Weber,
Simmel, Mannheim/Scheler, Berger/Luckmann, Maturana, Varela,
Habermas und Luhmann habe ich hinter mir gelassen. Albert,
Axelrod, Esser, Diekmann, Troitzsch, Popper, Brezinka, Rössner,
Dawkins, Dennett, Hofstadter, Rucker, Blackmore überzeugen mich
mehr. Persönlich bevorzuge ich eine linguistische evolutionäre
Perspektive und die damit verbundene Modellierung kultureller
Replikatoren mit formalen Sprachen. Aus der diskreten Struktur
der Materie geht die linguistische Struktur der biologischen
Evolution und die linguistische Struktur der kulturellen
Replikatoren hervor. Ich bevorzuge deshalb einen algorithmischen
Strukturalismus. <a
href="http://paul-koop.org/GTGentscheidbarkeit.pdf"
target="_blank">Über die Entscheidbarkeit der GTG, 1994</a> <a
href="http://paul-koop.org/reku.pdf" target="_blank">Rekursive
Strukturen und Prozesse, 1995</a> <a
href="http://paul-koop.org/KSysteme.pdf" target="_blank">K-Systeme:
Das Projekt ARS, 1994</a> <a href="http://paul-koop.org/ars.pdf"
target="_blank">Algorithmisch Rekursive Sequenzanalyse, 1996</a> <a
href="http://paul-koop.org/fallstruktur.pdf" target="_blank">ARS
Fallstruktur, 1996</a> <a href="http://paul-koop.org/oechsle.pdf"
target="_blank">Oevermann, Chomsky, Searle, 1994</a> 
    <?}

   $conn=deconnect($conn);


?>
