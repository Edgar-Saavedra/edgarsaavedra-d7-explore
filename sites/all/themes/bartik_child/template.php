<?php
/**
	* implements hook_theme
	* used to completly override theme_funcitons
	* @param $existing
	* @param $type
	* @param $theme
	* @param $path
	* @return array
	*/
//function bartik_child_theme($existing, $type, $theme, $path) {
//	return array(
//		'custom_block_listing' => array(
//			'render element' => 'variables',
//			'variables' => array(
//				'da_items' => array(),
//				'da_wrappa' => null
//			),
//			'template' => 'templates/childoverride-template'
//		),
//	);
//}

/**
	*  Preprocess functions allow one module to alter the variables used by another module when it calls a theme hook.
	* @param $variables
	*/
function bartik_child_preprocess_custom_block_print_form(&$variables)
{
//	$variables['myrenderable']['extras'][] = 'cool';
//	$variables['myrenderable']['extras'][] = 'zzzzzzzzz';
}

function bartik_child___custom_block_print_form()
{
	return 'hi';
}