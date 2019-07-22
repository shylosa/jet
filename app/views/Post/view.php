<?php if(!empty($posts)):?>
  <div class="container">
    <?php foreach ($posts as $post): ?>
      <div class="card mb-md-3">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <h6 class="card-subtitle mb-2 text-muted">
              <?= 'Автор: ' . $post['author'] . ' | Опубликовано: ' .  $post['published_at'] ?>
          </h6>
          <p class="card-text"><?= $post['text_post'] ?></p>
          <a href="/" class="card-link">(вернуться на главную)</a>
        </div>
      </div>
    <?php endforeach; ?>

    <?php if(!empty($comments)):?>
      <h2>Комментарии:</h2>
      <?php foreach ($comments as $comment): ?>
        <div class="card mb-md-3">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                  <?= 'Автор: ' . $comment['author'] . ' | Опубликовано: ' .  $comment['published_at'] ?>
            </h6>
            <p class="card-text"><?= $comment['text_comment'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif;?>
  <div>
<?php endif;?>