<!DOCTYPE html>
<html>

<head>
    <title>Tekst</title>
</head>

<body>
    <h1>Tekst</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];

        if (strlen($text) > 250) {
            echo "<p>De ingevoerde tekst is te lang.maximaal 250 tekens.</p>";
        } else {
            $character_count = strlen($text);
            $word_count = str_word_count($text);
            $space_count = substr_count($text, ' ');
            $sentence_count = substr_count($text, '.') + substr_count($text, '!') + substr_count($text, '?');
            $vowel_count = preg_match_all('/[aeiou]/i', $text);
            $consonant_count = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $text);
            $punctuation_count = preg_match_all('/[.,: "]/', $text);

            // Druk af
            echo "<p>Aantal tekens: " . $character_count . "</p>";
            echo "<p>Aantal woorden: " . $word_count . "</p>";
            echo "<p>Aantal spaties: " . $space_count . "</p>";
            echo "<p>Aantal zinnen: " . $sentence_count . "</p>";
            echo "<p>Aantal klinkers: " . $vowel_count . "</p>";
            echo "<p>Aantal medeklinkers: " . $consonant_count . "</p>";
            echo "<p>Aantal leestekens: " . $punctuation_count . "</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="text">Voer een tekst in:</label><br>
        <textarea name="text" id="text" rows="5" cols="50" maxlength="251"></textarea><br>
        <input type="submit" value="send">
    </form>
</body>

</html>