<?php
	function meses($n){
			$meses=[
			'Enero',
			'Febrero',
			'Marzo',
			'Abril',
			'Mayo',
			'Junio',
			'Julio',
			'Agosto',
			'Septiembre',
			'Octubre',
			'Noviembre',
			'Diciembre',
			];
	return $meses[$n-1];
}	
for($i=1;$i<=12;$i=$i+1)
		if(!strstr(meses($i),'r'))
			echo meses($i).'<br>';
		