<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Básico</title>
        <link rel="stylesheet" href="/css/app.css">

    </head>
    
    <body>
        <main>
            <header>
                @include("inc.navbar")
            </header>
            <article>
                <div class="container">
                    @if(Request::is("/"))
                        @include("inc.showcase")
                    @endif
                    <div class="row">
                        <div class = "col-md-8 col-lg-8"> <!-- main content, 8 colunas-->

                            @include('inc.messages')

                            @yield("content")
                        </div>
                        <div class = "col-md-4 col-lg-4"><!-- sidebar, 4 colunas-->
                            @include("inc.sidebar")
                        </div>
                    </div>
                </div>
            </article>
            <footer id="footer" class="text-center card-footer">
                <p>Copyright 2017 &copy; TESTE</p>

                @if(!Auth::check())
                <div><a class="nav-link" href="/login" >Admin Login</a></div>
                @endif

            </footer>
        </main>
    </body>
</html>