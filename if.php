<?php
//if, elseif naredbe

$kisa_pada=true;
$trava_raste=false;

if($kisa_pada && $trava_raste)
{
    echo 'Kiša pada. Trava raste.';
    
}elseif($kiša_pada && !$trava_raste)
    {
        echo 'Kiša pada.Trava ne raste.';
    }else
        {
            echo 'Ne pada kiša.';
        }
}
echo '<hr />';