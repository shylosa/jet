<?php

use jet\Router;

// default routes
Router::add('^$', [
    'controller' => 'Post',
    'action' => 'index'
]);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');