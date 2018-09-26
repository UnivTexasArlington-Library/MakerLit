<?php

/**
 * @file
 * The primary PHP file for this theme.
 */
function makerlit_sass_preprocess_block (&$vars) {
	 if ($vars['block']->bid === 'block_block_8') {
	 	$title_classes = &$vars['title_attributes_array']['inline'];
	 	$content_classes = &$vars['content_attributes_array']['inline inline-link'];
  }	 
}