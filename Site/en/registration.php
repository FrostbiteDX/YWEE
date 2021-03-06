<?php
    // Anpassung und Aufteilung des Layouts: Daniel Tatzel
    // Muss in der Reihenfolge bleiben
    include_once($_SERVER["DOCUMENT_ROOT"] . "/test_02/scripts/session.php");       // Inkludiert die Session

    $titel = "Registration"; // Name der Seite die im Browser angezeigt werden soll

    $_SESSION['sprache'] = "en";
    
    include($_SERVER["DOCUMENT_ROOT"] . "/test_02/layout/header.php");   // Inkludiert den Header
    
    //print_r($_POST); // Debug Ausgabe fuer den Inhalt von $_POST
    //echo nl2br(print_r($_SESSION,true));  // Debug Ausgabe fuer Session

    if ( !isset($_SESSION['logged-in']) )
    {
        include_once($_SERVER["DOCUMENT_ROOT"] . "/test_02/en/content/registration.html");       // Inkludiert den Inhalt
    }
    else
    {
?>
        <script type="text/javascript">
            <!--
            window.location = "http://ebenezer-kunatse.net/de/profile.php";
            //-->
        </script>
<?php
    }
    

    include($_SERVER["DOCUMENT_ROOT"] . "/test_02/layout/footer.php"); // Inkludiert den Footer
?>
