<?php
return array(

	//Tasks
	'tasks/page-([0-9]+)'=>'task/index/$1', 
	
	'tasks/update/([0-9]+)'=>'task/update/$1',
	'tasks/delete/([0-9]+)'=>'task/delete/$1',
	'tasks/create'=>'task/create', 
	'tasks'=>'task/index', 





	'cabinet'=>'cabinet/index',
	// 'register'=>'user/register',
	'login'=>'user/login',
	'logout'=>'user/logout',
	// 'banner'=>'cabinet/banner',

	// Главная страница
	// '([0-9]+)' => 'site/view/$1', // actionView в SiteController

    'index.php' => 'site/index',
     '' => 'site/index', // actionIndex в SiteController


	);