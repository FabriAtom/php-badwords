<?php
$Paragraph_speak = 'Lorem ipsum dolore sit amet, consectetur adipisci elit,
    sed do eiusmod tempor incidunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis dolore exercitationem ullamco laboriosam,
    nisi ut dolore ex ea dolore consequatur.';
$string_length = strlen( $Paragraph_speak );

$user = $_GET['word'];
$newString = str_replace('dolore', '***', $Paragraph_speak, $user);
?>

<h1><?php echo $Paragraph_speak ?></h1>
<p>la stringa è lunga <?php echo $string_length?> caratteri.</p>
<!-- prova concatenazione -->
<h1><?= $newString ?></h1>
<p>la parola è lunga <?= strlen($newString) ?> caratteri.</p>