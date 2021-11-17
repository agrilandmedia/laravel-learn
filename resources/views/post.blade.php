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
        <article>
            <h1><?= $post->title ?></h1>
            <p class="post-date">
                <?= $post->date ?>
            </p>
            <div>
                <?= $post->body ?>
            </div>
        </article>
        <a href="/">Go Back to Posts Page</a>
    </body>
</html>