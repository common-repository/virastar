<?php

/* Punctuation Pattern and functions  */

/* TODO Not complete */


// Punctuation  Patterns

	// general
	$pt_spaces=  '([ ]+)';//"/[ ]+/u";


/*  -- comma -- */
	// detect spaces before persian comma
	// تشخیص فاصله‌های قبل از ویرگولModify me
	$pt_comma_space_before = '([ ]+(،))';
	
	
	// one space after comma 
	// تشخیص فاصله‌های بعد از ویرگول
	// ویرگول ، ویرگول
	$pt_comma_space_after = '/(،)[ ]+/u';

	// detect charachters after persian comma 
	// TODO fix this pattern
	// تشخصی کاراکترهای بعد از ویرگول
	$pt_comma_charachters_after = '((،)([ ‌]+)?([،؛:!؟\-][\.،؛:!؟\-]*|\.(?!\.)))';
	

// Space corection function
	// TODO ciomplete this function
function wpvirastar_spaces($space_content){
	global 	$pt_spaces;
			
	// delete spaces beffore comma
	$space_content = preg_replace($pt_spaces, " ",$space_content);
	
	return $space_content;
}


 // comma corection function
	// TODO complete this 
function wpvirastar_comma( $comma_content ){
	global 	$pt_comma_space_before ,
				$pt_comma_charachters_after , 
				$pt_comma_space_after
	;
	
	// delete spaces beffore comma
	$comma_content = preg_replace($pt_comma_space_after, "",$comma_content);
	
	// add one space after comma
	// $comma_content = preg_replace($pt_comma_space_after , ' ' , $comma_content );
	
	return $comma_content;
}