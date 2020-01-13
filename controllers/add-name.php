<?php

$app['database']->insert('users',[
    'username' => $_POST['username']
]);

header('Location: /');