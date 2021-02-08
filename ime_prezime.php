<?php 
/*stranica prima ime i prezime i ispisuje sljedeći tekst
poštovani imeprezime, danas ste postali programer. */

$ime= isset($_GET['ime']) ? $_GET['ime'] : 'ime';
$prezime= isset($_GET['prezime']) ? $_GET['prezime'] : 'prezime';

echo 'Poštovani '.$ime. ' ' .$prezime. ', danas ste postali programer. :)';
