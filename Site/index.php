<?php
include("$_SERVER[DOCUMENT_ROOT]/scripts/counter.php");
include("$_SERVER[DOCUMENT_ROOT]/scripts/login.php");   // Bleibt vorerst so, muesste mit AJAX implementiert werden

// Anpassung und Aufteilung des Layouts: Daniel Tatzel

// Muss in der Reihenfolge bleiben
$titel = "Die Tutoren Agentur"; // Name der Seite die im Browser angezeigt werden soll

include("$_SERVER[DOCUMENT_ROOT]/layout/header.php");   // Inkludiert den Header
include("$_SERVER[DOCUMENT_ROOT]/layout/nav.php");      // Inkludiert die Navigationsleiste
include("$_SERVER[DOCUMENT_ROOT]/layout/leftbar.php");  // Inkludiert den linken Balken
include("$_SERVER[DOCUMENT_ROOT]/layout/rightbar.php"); // Inkludiert den rechten Balken

// $_POST Debug
//print_r($_POST);

// Inhalt von: Daniel Tatzel
?>


<h2>Inhalt</h2>

<p>
Blablabla Mr. Freeman!!
</p>
<p>
Farben m&uuml;ssen noch gew&auml;hlt werden, ich hab sie einfach mal so gew&auml;hlt, dass man die einzelnen Bereiche unterscheiden kann. Jeder Bereich ist in eine einzelne Datei ausgelagert, um den Aufwand bei &Auml;nderungen zu minimieren.
</p>
<p>
Dass CSS Template ist nicht ganz 100% toll, vor allem da die Einr&uuml;ckungen in den Balken und im Inhalt &uuml;ber Abs&auml;tze usw realisiert wird, aber nicht &uuml;ber den Bereich in dem sie sind. Da kann sich dann mal jemand mit CSS austoben und das richtig hinbiegen. ;-)
</p>

<?php include("layout/footer.php"); // Inkludiert den Footer ?>
