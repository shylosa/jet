<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<title><?= jet\App::$app->getProperty('blog_name');?></title>
<body>

  <h1><a class="navbar-brand ml-4 mr-md-2" href="/"><?= jet\App::$app->getProperty('blog_name');?></a></h1>
  <div class="container">
      <?php if(isset($_SESSION['error'])):?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error']; unset($_SESSION['error']);?>
        </div>
      <?php endif;?>

      <?php if(isset($_SESSION['success'])):?>
        <div class="alert alert-success" role="alert">
            <?= $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
      <?php endif;?>
  </div>
  <?php if(!empty($popularPosts)):?>
    <h3 class="ml-4 mr-md-2">Популярные записи</h3>
    <div class="container" style="background: #26D0FF">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner justify-content-center">
          <div class="carousel-item active">
            <h4><?= $popularPosts[0]['author']?></h4>
            <p><?= mb_substr($popularPosts[0]['text_post'], 0, 100) . '...' ?></p>
          </div>
            <?php foreach (array_slice($popularPosts, 1) as $popularPost): ?>
              <div class="carousel-item">
                <h4><?= $popularPost['author']?></h4>
                <p><?= mb_substr($popularPost['text_post'], 0, 100) . '...'?></p>
              </div>
            <?php endforeach;?>
        </div>
      </div>
    </div>
  <?php endif;?>

  <?= $content; ?>


  <!--Form start -->
  <form method="post" action="" >
    <div class="form-group">
      <h5><label for="exampleInputEmail1">Create new post</label></h5>

      <input type="text" name="author" class="form-control" id="exampleInputName" aria-describedby="NameHelp"
             placeholder="Enter your name">
    </div>
    <div class="form-group">
      <textarea class="form-control" id="exampleInputMessage" name="text_post" placeholder="Message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create post</button>
  </form>
  <!--Form end -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
          crossorigin="anonymous"></script>
</body>
</html>