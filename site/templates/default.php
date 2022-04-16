<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $site->title() ?>: <?= $page->title() ?></title>
  <!-- TODO: add seo desc + open graph tags! -->
  <?php echo mix("/main.css"); ?>
</head>

<body>
  <!-- Skiplinks -->
  <a href="#main" class="visually-hidden-focusable">Skip to main content</a>

  <!-- Header and navigation -->
  <div class="container py-4">
  <header class="pb-3 mb-4 border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a href="<?= $site->url() ?>" class="d-flex align-items-center text-dark text-decoration-none">
         <img src="<?= url("assets/images/logo.png") ?>" alt="Logo">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">

        <?php
// TODO: add .active for current link
?>
        <?php
// TODO: add nested pages
?>
       <?php foreach ($site->children->listed() as $subpage): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
            </li>
          <?php endforeach; ?>
        </ul>


        </div>
      </div>
    </nav>
  </header>
</div>


  <main>

  <div class="container">
    <h1><?= $page->title() ?></h1>

    <?= $page->text() ?>
</div>
  </main>


  <footer>
  <p dir="auto">All emojis designed by <a href="https://openmoji.org/" rel="nofollow">OpenMoji</a> – the open-source emoji and icon project. License: <a href="https://creativecommons.org/licenses/by-sa/4.0/#" rel="nofollow">CC BY-SA 4.0</a></p>
  </footer>

  <?php echo mix("/main.js"); ?>

</body>

</html>