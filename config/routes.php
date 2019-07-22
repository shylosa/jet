<?php

use jet\Router;

Router::add('^post$', ['controller' => 'Post', 'action' => 'view']);

// default routes
Router::add('^$', ['controller' => 'Post', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');