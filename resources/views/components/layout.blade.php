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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<header>
    <div class="container">
        <div class="logo">
            <a href="">
                <img src="{{ Vite::asset('resources/imagens/logoheader.jpeg') }}" alt="logo HayYoga">
            </a>
        </div>
        <div class="brand">HayYoga</div>
        <nav>
            <a href="">Home</a>
            <a href="yoga">Yoga</a>
            <a href="reiki">Reiki</a>
            <a href="cadastro">Cadastrar-se</a>
            <button id="loginBtn">Login</button>
        </nav>
    </div>
</header>

@vite(['resources/css/app.css','resources/js/app.js','resources/imagens/logoheader.png'])

<body>
    

    {{ $slot }}

    <footer>
        <h2>MINHAS REDES SOCIAIS</h2>
        <section class="minhasRedes">

            <div class="redes">


                <a href="https://www.youtube.com/@flowyogadespertar" target="_blank" rel="external">
                    <img src = "{{ Vite::asset('resources/imagens/icons8-logotipo-do-youtube-94.png') }}" alt="Logo youtube">
                    <p>youtube</p>
                </a>
                <a href="https://www.instagram.com/hayyoga/" target="_blank" rel="external">
                    <img src = "{{ Vite::asset('resources/imagens/icons8-instagram-logo-94.png') }}" alt="Logo Instagram">
                    <p>yoga</p>
                </a>

                <a href="https://www.instagram.com/terapiandoavidacmagia/" target="_blank" rel="external">
                    <img src = "{{ Vite::asset('resources/imagens/icons8-instagram-logo-94.png') }}" alt="Logo Instagram">
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