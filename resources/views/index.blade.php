<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="..\resources\css\style.css"/>
        <title>Mon Blog</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
            </header>
            <div id="contenu">
                @foreach ($billets as $billet)
                    <article>
                        <header>
                            <h1 class="titreBillet">{{ $billet->BIL_TITRE }}</h1>
                            <time>{{ $billet->BIL_DATE }}</time>
                        </header>
                        <p> {{ $billet->BIL_CONTENU }}</p>
                    </article>
                    <hr />
                @endforeach
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
