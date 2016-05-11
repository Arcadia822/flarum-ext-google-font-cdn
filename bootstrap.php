<?php

use Flarum\Event\ConfigureClientView;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
	$events->listen(ConfigureClientView::class, function (ConfigureClientView $event) {
    		$event->view->addHeadString('<link rel="stylesheet" href="//fonts.lug.ustc.edu.cn/css?family=Open+Sans:400italic,700italic,400,700,600">', 'font');
	});
};
