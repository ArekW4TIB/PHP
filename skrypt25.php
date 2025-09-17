array_unshift() - dodaje pierwszy element z tablicy
<?php
    $kolory=array("b"=>"green", "c">"blue");
    array_unshift($kolory,"red")."<br>";
    print_r($kolory);