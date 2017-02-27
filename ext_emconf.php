<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'News Instant Articles',
	'description' => 'Generates Facebook Instant Articles RSS-Feed',
	'category' => 'frontend',
	'shy' => 0,
	'version' => '1.1.0',
	'dependencies' => 'news,typo3',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Daniel Kestler',
	'author_email' => 'daniel.kestler@medienreaktor.de',
	'author_company' => 'medienreaktor GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-8.9.99',
			'news' => '4.0.0-5.9.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:0:{}',
	'suggests' => array(
	),
);
