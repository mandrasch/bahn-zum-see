<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $site->title() ?>: <?= $page->title() ?></title>

  <p>First text!</p>
  <?php echo mix("/main.css"); ?>
</head>

<body>
  <!-- TODO: add skiplinks -->
  <!-- <a href="#main" class="visually-hidden-focusable">Skip to main content</a>-->




  <main>

  <div class="container">
    <h1><?= $page->title() ?></h1>

    <?= $page->text() ?>
</div>
  </main>

  <?php echo mix("/main.js"); ?>

</body>

</html>