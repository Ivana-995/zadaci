<?php
//za primljeni parametar boja, stranica je obojana tom bojom
$boja= isset($_GET['boja']) ? $_GET['boja'] :'Upiši boju u adresnu traku.';

    echo $boja;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: <?php echo $boja; ?>">
    
</body>
</html>


