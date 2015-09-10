<?php

$isik=(object) array('eesnimi'=>'Margo', 'perenimi'=>'Junker','vanus'=>21,'sugu'=>'Mees');
$eesnimi_algab_vokaaliga = strstr("AEIOUÕÄÖÜ",$isik->{'eesnimi'}[0]);

$arv1=1.23;
$arv2=2.34;
$summa=$arv1+$arv2;
echo "Arvude ".$arv1." ja ".$arv2." summa on ".$summa."<br>";

echo $isik->{'eesnimi'}." ".$isik->{'perenimi'}." (".$isik->{'vanus'}.") ".$isik->{'sugu'}."<br>";

if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga!";
}

?>