<?php snippet("header"); ?>

  <main>

    <div class="container">
      <h1><?= $page->title() ?></h1>
      <?= $page->text() ?>

      <div class="tours row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($page->children() as $tour): ?>
        <div class="col">
          
        <div class="card shadow-sm">
          <?php if ($image = $tour->image()): ?> 
            <a href="<?= $tour->url() ?>">
              <img src="<?= $image->resize(600)->url() ?>" class="card-img-top" alt="">
              </a>
            </a>
          <?php endif; ?>
            <div class="card-body">
            <a href="<?= $tour->url() ?>">
              <h2><?= $tour->title() ?></h2>
            </a>
            
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
      <?php endforeach; ?>
        </div> <!-- eo .row -->
      </div>
  </main>

<?php snippet("footer"); ?>
