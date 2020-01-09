<?php

$router->get( '' , 'controllers/index.php' );
$router->get( 'about' , 'controllers/about.php' );
$router->get( 'blog' , 'controllers/blog.php' );
$router->get( 'contact' , 'controllers/contact.php' );
$router->post( 'names' , 'controllers/add-name.php' );
