<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My MVC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">


        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Home
                </a>

                <a class="navbar-item" href="/contact">
                    Kapcsolat
                </a>

            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="/signup">
                            <strong>Regisztráció</strong>
                        </a>
                        <a class="button is-light" href="/login">
                            Bejelentkezés
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container is-max-desktop" style="max-width: 25rem">
        <div class="box">
            {{content}}

        </div>
    </div>

</body>

</html>