<?php

use wfm\Router;

Router::add('^$', ['controller' => 'Group', 'action' => 'showGroups']);

Router::add('^group/(?P<action>[A-Za-z-]+)/?$' , ['controller' => 'Group']);
Router::add('^product/(?P<action>[A-Za-z-]+)/?$' , ['controller' => 'Product']);
Router::add('^Full/(?P<action>[A-Za-z-]+)/?$' , ['controller' => 'Full']);

Router::add('^group/product/(?P<product>[A-Za-z0-9- .]+)/?$' , ['controller' => 'Product', 'action' => 'show']);

Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');


