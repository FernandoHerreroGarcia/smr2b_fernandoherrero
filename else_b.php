<?php

	$nota = 7;
		$r= 'NOTABLE';
	
	if ($nota>=5)
		$r= 'APROBADO';

	if($nota>=7)
		$r='NOTABLE';

	if ($nota>=8.5)
		$r= 'SOBRESALIENTE';
	
	echo $r;