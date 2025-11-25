<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @isset($pageTitle)
    <title>{{ $pageTitle }}</title>
    @else
    <title>HayYoga</title>
    @endisset
</head>

<header>
    <div class="container">
        <div class="logo">
            <a href="home.html">
                <img src="{{ Vite::asset('resources/imagens/logoheader.jpeg') }}" alt="logo HayYoga">
            </a>
        </div>
        <div class="brand">HayYoga</div>
        <nav>
            <a href="home.html">Home</a>
            <a href="yoga.html">Yoga</a>
            <a href="reiki.html">Reiki</a>
            <a href="cadastro.html">Cadastrar-se</a>
            <button id="loginBtn">Login</button>
        </nav>
    </div>
</header>

@vite(['resources/css/app.css','resources/js/app.js','resources/css/styleHY.css','resources/imagens/logoheader.jpeg','resources/css/styleMain.css'])

<body>
    

    {{ $slot }}

    <footer>
        <h2>MINHAS REDES SOCIAIS</h2>
        <section class="minhasRedes">

            <div class="redes">


                <a href="https://www.youtube.com/@flowyogadespertar" target="_blank" rel="external">
                    <img src="Imagem/icons8-logotipo-do-youtube-94.png" alt="Logo Youtube">
                    <p>youtube</p>
                </a>
                <a href="https://www.instagram.com/hayyoga/" target="_blank" rel="external">
                    <img src="Imagem/icons8-instagram-logo-94.png" alt="Logo Instagram">
                    <p>yoga</p>
                </a>

                <a href="https://www.instagram.com/terapiandoavidacmagia/" target="_blank" rel="external">
                    <img src="Imagem/icons8-instagram-logo-94.png" alt="Logo Instagram">
                    <p>Reiki</p>
                </a>
            </div>
        </section>

        </section>


        </main>
        <p>HayYoga 2025, todos os direitos reservados</p>
    </footer>
</body>

</html>