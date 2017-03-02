<?php
	// Router::connectNamed(array('lang'));
	Router::redirect('/index.php', '/', array('status' => 301));
	Router::redirect('services/Plastika_vek', '/services/blefaroplastika', array('status' => 301));
	//Router::redirect('services/Rinoplastika', '/services/plastika_nosa', array('status' => 301));
	Router::redirect('services/Nosogubnye_skladki', '/services/konturnaja_plastika', array('status' => 301));
	Router::redirect('services/Korrektsiya_goleneyi', '/services/plastika_goleni', array('status' => 301));
	Router::redirect('services/abdominoplastika', '/services/plastika_zhivota', array('status' => 301));
	Router::redirect('services/Korrektsiya_oblasti_zhivota', '/services/podtjazhka_zhivota', array('status' => 301));
	Router::redirect('/services/abdominoplastika_s_perenosom_pupka_i plastikoj_prjamyh_myshc_zhivota', '/services/abdominoplastika_zhivota', array('status' => 301));
	Router::redirect('/services/endoprotezirovanie_v_sochetanii_s_podtyazhkoy', '/services/endoprotezirovanie', array('status' => 301));
	// Router::redirect('/services/plastika_nosa', '/services/rinoplastika', array('status' => 301));
	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin/blog', array('controller' => 'blogs','admin' => true));
	Router::connect('/admin/blog/:action/*', array('controller' => 'blogs','admin' => true));
	Router::connect('/admin/service/:action/*', array('controller' => 'services', 'admin' => true));
	Router::connect('/admin', array('controller' => 'services', 'action' => 'index', 'admin' => true));

	Router::connect('/', array('controller' => 'main', 'action' => 'index'));
	Router::connect('/services/sendmail', array('controller' => 'services', 'action' => 'sendmail'));
	Router::connect('/services/*', array('controller' => 'services', 'action' => 'index'));
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/blog', array('controller' => 'blogs', 'action' => 'index'));
	Router::connect('/blog/*', array('controller' => 'blogs', 'action' => 'view'));
	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/news/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/price/*', array('controller' => 'prices', 'action' => 'index'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
