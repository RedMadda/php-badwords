<!-- Creare una variabile con un paragrafo di testo a vostra scelta. -->

<!-- variabili -->
<?php
    $string = "Noi.</br>Noi amanti perduti nella tempesta.</br>Noi amanti battuti dal vento.</br>Noi amanti frustati dall'uragano.</br>Amore, ma vaffanculo te e il picnic.";

    $bad_word = trim($_GET["word"]);
    // var_dump($bad_word);

    $replace = "***";

    $joke_censored = str_ireplace($bad_word, $replace, $string);
    // var_dump( $joke_censored )
?>





<!--   Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BAD WORDS</title>
</head>
<body>
<!-- Stampare a schermo il paragrafo  -->
<h1 style="text-align:center; margin-top:30px;font-size:2rem;">Facciam due risate con una freddura?</h1>
<p style="text-align:center; margin-top:80px;font-size:1.7rem;line-height:1.6em;">
    <?php 
        if($bad_word == "scriviQuiParolaOffensiva"){
            echo $string;
        } elseif(strlen($bad_word) > 0){
            echo $joke_censored;
        }
    ?>

</p>
<!-- e la sua lunghezza. -->
<p style="text-align:center; margin-top:70px;">
    Questa freddura super offensiva contiene 
    <span style="font-weight:800;">
    <!-- </br> = 5 caratteri. da togliere  -->
        <?php echo strlen($string) - 16 ?>
    </span> caratteri.
</p>

<h3  style="text-align:center; margin-top:70px;">Se una parola urta la tua sensibilità, inseriscila nella barra di ricerca in alto, al posto di 
    <p style="text-align:center; font-size:1.3rem">"scriviQuiParolaOffensiva". </p>
Provvederemo subito a difenderti e toglierla, ci teniamo.
</h3>




</body>
</html>