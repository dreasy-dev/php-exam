<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8" />
    	<title>Tous nos articles en vente - <?= SITE_NAME ?></title>
    	<link href="./view/assets/css/style.css" rel="stylesheet" />

        <!-- FAVICON SETTINGS -->
        <link rel="apple-touch-icon" sizes="180x180" href="./view/assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./view/assets/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./view/assets/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="./view/assets/images/favicons/site.webmanifest">
        <link rel="mask-icon" href="./view/assets/images/favicons/safari-pinned-tab.svg" color="#57aea2">
        <link rel="shortcut icon" href="./view/assets/images/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#57aea2">
        <meta name="msapplication-config" content="./view/assets/images/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <section id="hero-page">
                <h1>Tous nos articles</h1>
                <p><a href="/">Accueil</a> > Tous les articles</p>
            </section>
        </header>

        <main>
            <section id="articles-home" class="home-section">
                <div class="section-content">
                    <div class="articles">
                        <?php foreach($articles as $article): ?>
                            <a class="article-card" href="article?id=<?= $article['id']; ?>">
                                <?php if (isset($article['picture'])): ?>
                                    <img src="<?= htmlspecialchars($article['picture']); ?>" alt="<?= htmlspecialchars($article['name']); ?>">
                                <?php else: ?>
                                    <img src="./view/assets/images/articles/default.png" alt="<?= htmlspecialchars($article['name']); ?>">
                                <?php endif ?>
                                <h3><?= htmlspecialchars($article['name']); ?></h3>
                                <div class="article-sizes">
                                    <?php foreach($article['stocks'] as $stock): ?>
                                        <?php if ($stock['number'] > 0): ?>
                                            <p class="in-stock"><?php print_r($stock['size']); ?></p>
                                        <?php else: ?>
                                            <p class="out-stock"><?php print_r($stock['size']); ?></p>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </main>

        <footer>

        </footer>
    </body>
</html>