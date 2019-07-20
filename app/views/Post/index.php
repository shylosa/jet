<h1><?= $title?></h1>

<?php if(!empty($posts)):?>
  <div class="container">
    <?php foreach ($posts as $post): ?>
      <div><?= 'Автор: ' . $post['author'] . ' | Отправлено: ' .  $post['published_at']; ?>
          <div><?= $post['text_post'] ?></div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif;?>
