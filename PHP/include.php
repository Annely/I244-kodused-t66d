<?php
$kassid= array( 
		array('nimi'=>'Miisu', 'vanus'=>2, 'omanik' =>'Minni', 'värvus'=>'punane'), 
		array('nimi'=>'Tom', 'vanus'=>1, 'omanik' =>'Miki', 'värvus'=>'must')
	);
	foreach ($kassid as $nimi){
		include 'info.html';
	}
	
?>