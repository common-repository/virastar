<?php
	// Other language numbers in farsi is a problem. with this methods we can solve that
	
// Language numbers for correction 
$en_num	=	array ("1","2","3","4","5","6","7","8","9","0");
$ar_num	=	array ("١","٢","٣","٤","٥","٦","٧","٨","٩","٠");
$fa_num	=	array ("۱","۲","۳","۴","۵","۶","۷","۸","۹","۰");


// Convert English numbers in text to Farsi number
function wpvirastar_fix_en_nums($content){
	global 	$en_num,$fa_num;
	
	// Fix English Number
	$content = str_replace ($en_num , $fa_num , $content);
	
	return $content;
}

// Convert Arabic numbers in text to Farsi number
function wpvirastar_fix_ar_nums($content){
	global 	$ar_num,$fa_num;
	
	// Fix Arabic Number
	$content = str_replace ($ar_num , $fa_num , $content);
	
	return $content;
}


// Convert Arabic numbers in text to Farsi number
function wpvirastar_fix_nums($content){
	
	// Fix Arabic Number
	$content = wpvirastar_fix_ar_nums($content);
	
	// Fix Arabic Number
	$content = wpvirastar_fix_en_nums($content);
	
	return $content;
}

