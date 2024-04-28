<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'steffunky-backoffice-light-theme-base/0.1.0',
	array(
		// Identification
		//
		'label' => 'Steffunky\'s light theme base',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			
		),
		'mandatory' => true,
		'visible' => false,

		// Components
		//
		'datamodel' => array(
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
