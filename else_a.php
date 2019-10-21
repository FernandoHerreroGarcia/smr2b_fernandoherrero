<?php
	function notas($n){
			$notas=[
			'1',
			'2',
			'3',
			'4',
			'5',
			'6',
			'7',
			'8',
			'9',
			'10',
			];
	return $notas[$n-1];
}	
for($i=1;$i<=12;$i=$i+1)
		if(!strstr(meses($i),'r'))
			echo meses($i).'<br>';