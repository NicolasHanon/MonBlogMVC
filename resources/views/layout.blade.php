<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <!--<link rel="stylesheet" href="..\resources\css\style.css"/>-->
        <link rel="stylesheet" href="{{ URL::asset('..\resources\css\style.css') }}" />
        <title>Mon Blog</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="{{ route('billets.index') }}"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
            </header>
            <div id="contenu">
                @yield('contenu')
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>