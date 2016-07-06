<!DOCTYPE html>
<html lang="<?= $content->lang() ?>">
<head>
    <title><?= $content->title(); ?></title>
</head>
<body>
    <header>
        <section><?= $content->header(); ?></section>
    </header>
    <main>
        <section><?= $content->main(); ?></section>
    </main>
    <footer>
        <section><?= $content->footer(); ?></section>
    </footer>
</body>
</html>
