<!-- Creare una variabile che contiene del testo. Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla, ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*". -->


<?php

$badword = $_GET['badword'];

$text = 'sempre caro mi fu questo ermo colle';

// echo '<pre>';
// echo '</pre>';

$presenzaBadword = strpos($text, $badword);

if ($presenzaBadword !== false) {
    $newText = str_replace($badword, '***', $text);

} else {
    echo "non hai inserito la parola giusta";
}
 ?>

 <p><?php echo$newText ?></p>
