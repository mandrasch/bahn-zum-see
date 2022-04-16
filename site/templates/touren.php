<?php snippet("header"); ?>

  <main>

    <div class="container">
      <h1><?= $page->title() ?></h1>
      <?= $page->text() ?>

      <ul class="tours">
        <?php foreach ($page->children() as $tour): ?>
          <li>
          <a href="<?= $tour->url() ?>"><?= $tour->title() ?></a>
          </li>
          <?php endforeach; ?>
      </ul>

    </div>

  </main>

<?php snippet("footer"); ?>
