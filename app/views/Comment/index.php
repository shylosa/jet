<?php if(!empty($posts)):?>
<div class="container">

    <?php foreach ($posts as $post): ?>

        <div class="card mb-md-3">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?= 'Автор: ' . $post['author'] . ' | Опубликовано: ' .  $post['published_at'] ?>
            </h6>
            <p class="card-text"><?= mb_substr($post['text_post'], 0, 100) . '...' ?></p>
            <a href="/post/?id=<?=$post['id']?>" class="card-link">(Читать полностью)</a>
          </div>
        </div>

    <?php endforeach; ?>
<div>
<?php endif;?>
