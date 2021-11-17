<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Learn</title>
        <link rel="stylesheet" href="/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Posts</h1>
        <?php foreach ($posts as $post) : ?>
            <article>
                <a href="/posts/<?= $post->slug ?>">
                    <h3><?= $post->title; ?></h3>
                    <p class="post-date">
                        <?= $post->date; ?>
                    </p>
                    <p>
                        <?= $post->excerpt; ?>
                    </p>
                </a>
            </article>
        <?php endforeach; ?>
    </body>
</html>
