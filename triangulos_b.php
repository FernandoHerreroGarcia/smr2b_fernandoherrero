<?php

function tipo_angulo($a,$b,$c){
	$r='acutangulo';
		if($a==90 or $b==90 or $c==90)
			$r='rectangulo';
		if($a>90 or $b>90 or $c>90)
			$r='obtusangulo';
	return $r;
}

echo tipo_angulo(90,30,60).' ¿rectangulo?<br>';
echo tipo_angulo(100,40,40).' ¿obtusangulo?<br>';
echo tipo_angulo(90,45,45).' ¿rectangulo?<br>';
echo tipo_angulo(110,40,30).' ¿obtusangulo?<br>';
echo tipo_angulo(80,40,60).' ¿acutangulo?<br>';






?>