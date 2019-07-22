<?php

use jet\App;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<title><?= App::$app->getProperty('blog_name');?></title>
<body>
  <h1><a class="navbar-brand ml-4 mr-md-2" href="/"><?= App::$app->getProperty('blog_name');?></a></h1>

  <?= $content; ?>

</body>
</html>