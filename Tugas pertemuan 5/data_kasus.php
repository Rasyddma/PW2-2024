<?php

    require_once 'class_kasus.php';

    //object
    $indonesia = new Indonesia('Indonesia', 'The RAID', 'Iko Uwais');
    $China = new China('China', 'Shaolin', 'Andy Lau');
    $India = new India('India', 'PATHAAN', 'Shah Rukh Khan');
    
    

    //echo
    echo "Info Negara:<br>";
    $indonesia->getInfoArtis();
    echo"<br>";

    echo "Info Negara:<br>";
    $China->getInfoArtis();
    echo"<br>";

    echo "Info Negara:<br>";
    $India->getInfoArtis();
    echo"<br>";
    
    
?>