<?php
//Autor: Tobias Schwindl
include_once($_SERVER["DOCUMENT_ROOT"] . "/test_02/scripts/session.php");       // Inkludiert die Session

$titel = "Nachrichten"; // Name der Seite die im Browser angezeigt werden soll

$_SESSION['sprache'] = "de";

include($_SERVER["DOCUMENT_ROOT"] . "/test_02/layout/header.php");   // Inkludiert den Header
//print_r($_POST); // Debug Ausgabe fuer den Inhalt von $_POST
//echo nl2br(print_r($_SESSION,true));  // Debug Ausgabe fuer Session

if ($_SESSION['admin'] == true) {
    //$lang = $_SESSION['sprache'];
    ?>
    <div style="height:200px;">
        <form name="News" id="newsform">
            <script src="/js/newsvalidation.js" type="text/javascript"></script>
            <input type="hidden" name="sprache" value="<?php echo $_SESSION['sprache']; ?>">
            <input type="hidden" name="user" value="<?php echo $_SESSION['user']; ?>">
            <div><label for ="betreff"></label><input type="text" size="44" maxlength = "60" placeholder = "Betreff" name="subject" id="betreff" required></div>
            <div><label for ="nachrichtentext"></label>
                <p><textarea name="nachricht" cols="33" rows="5" maxlength="300" id="nachrichtentext" placeholder ="Schreiben Sie hier ihre Nachricht..." required></textarea>
                </p>
            </div>
            <div class="line submit"><input type="submit" value="Absenden"></div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#scrollablecontentboxnews_de").height(550);
        });
    </script>
    <?php
}
include($_SERVER["DOCUMENT_ROOT"] . "/test_02/de/content/nachrichten.html");
include($_SERVER["DOCUMENT_ROOT"] . "/test_02/layout/footer.php"); // Inkludiert den Footer
?>