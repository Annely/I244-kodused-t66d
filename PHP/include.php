<?php
$kassid= array( 
		array('nimi'=>'Miisu', 'vanus'=>2, 'omanik' =>'Minni', 'v�rvus'=>'punane'), 
		array('nimi'=>'Tom', 'vanus'=>1, 'omanik' =>'Miki', 'v�rvus'=>'must')
	);
	foreach ($kassid as $nimi){
		include 'info.html';
	}
	
?>