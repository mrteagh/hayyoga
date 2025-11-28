<x-layout>

    @vite(['resources/css/styleyoga.css'])
    <main class="m-0">
        <section class="hero">
            <div class="oYoga fs-3 p-5">
                <h1 class="fw-bold display-1 vw-100 display-1 p-3">O YOGA</h1>
                <p class="fs-3 m-4 p-3">
                    O Yoga é um poderoso instrumento de crescimento e transformação pessoal que através do autoconhecimento
                    e compreensão do ser humano e da vida, propõe um estilo de vida consciente, nos direcionando a um estado
                    natural de liberdade interior, plenitude e felicidade.
                </p>

                <p class="fs-3 m-4 p-3">
                    Esse curso é uma jornada de autoconhecimento através de um programa de prática, estudo e aprofundamento
                    em Yoga, vivenciando e compreendendo as diversas técnicas.
                </p>

            </div>
            <div class="cards">

                <div class="card1">
                    <img src="{{ Vite::asset('resources/imagens/ju.png') }}" alt="Descrição da imagem">
                    <div class="card1-content">
                        <h2>Nosso Objetivo</h2>

                        <!-- Botão para abrir -->
                        <a href="#abrirModal1" class="botao">MAIS INFO</a>

                        <!-- Estrutura do modal -->
                        <div id="abrirModal1" class="modal1">
                            <div class="modal1-conteudo">
                                <a href="#" class="fechar">&times;</a>

                                <p>Orientar suas praticas pessoais, capacitar, reciclar praticantes e todos aqueles que
                                    tiverem dispozição para essa nova jornada, ampliando e aprofundando o entendimento
                                    das bases teóricas e práticas do Yoga.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card2">
                    <img src="{{ Vite::asset('resources/imagens/1446.jpg') }}" alt="Descrição da imagem">
                    <div class="card2-content">
                        <h2>Quem pode participar?</h2>

                        <!-- Botão para abrir -->
                        <a href="#abrirModal2" class="botao">MAIS INFO</a>

                        <!-- Estrutura do modal -->
                        <div id="abrirModal2" class="modal2">
                            <div class="modal2-conteudo">
                                <a href="#" class="fechar">&times;</a>

                                <p>O curso é de livre participação! <br>
                                    Conseguindo alcançar iniciantes e pessoas que buscam autoconhecimento, interessadas
                                    nos estudos da
                                    filosofia do <strong>Yoga</strong> e das técnicas para uso pessoal, em grupos ou
                                    desenvolver uma nova possibilidade de trabalhar com o que gosta!</p>
                                <ul>
                                    <li>São 12 aulas praticas presencias de 5 horas.</li>
                                    <li>24 aulas teoricas, 2 por mes, online ao vivo de 2 horas cada.</li>
                                    <li>Apresentação de exercicios praticos e teoricos mensal.</li>
                                </ul>
                                <p>Ingressar em uma nova profissão se essa for sua vontade, ou cultivar e manter seu
                                    autocuidado, saude e plenitude.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="jornadaAutoconhecimento" class="">
                <h3 class="fw-bold fs-3 p-3 bg-black vw-100">Não é apenas um curso, é uma jornada através do autoconhecimento!</h3>
            </div>

            <section id="meditacao">

                <iframe class="m-3" width="560" height="315" src="https://www.youtube-nocookie.com/embed/niZHJky3f8Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>

            </section>



            <section id="vamosComecar" class="">

                <H2 class="display-1 fw-bold d-flex vw-100 justify-content-center">VAMOS COMEÇAR?</H2>
                <div>
                    <div id="caixa">
                        <img src="{{ Vite::asset('resources/imagens/bracoscruzados.png') }}" alt="Seu navegador nao carrega essa imagem">
                    </div>

                    <div id="texto">
                        <ul class="list-group list-group-numbered">
                            <li class="list-group-item ">
                                O programa é coordenado e ministrado por <strong>HayanaDevi</strong>.
                            </li>

                            <li class="list-group-item ">
                                Desde 2004 leciona e pratica Yoga.
                            </li>

                            <li class="list-group-item ">
                                Praticante de Artes Marciais e estudante de várias filosofias orientais, encontrou no Yoga o seu caminho de vida.
                            </li>

                            <li class="list-group-item ">
                                Bacharel em Educação Física.
                            </li>

                            <li class="list-group-item ">
                                Especialista em Reabilitação.
                            </li>

                            <li class="list-group-item ">
                                Especialista em Neurociência.
                            </li>

                            <li class="list-group-item ">
                                Especialista em Docência da Meditação.
                            </li>

                            <li class="list-group-item ">
                                Terapeuta holística.
                            </li>
                        </ul>
                    </div>

                </div>

            </section>



            <!-- SEÇÃO YOGA -->
            <section class="container">

                <div class="text-center mb-5 d-flex justify-content-center">
                    <h2 class="fw-bold display-2 text-dark">Linhas do Yoga em que Atua</h2>
                </div>

                <div class="row justify-content-center">
                    <div id="curriculoYoga" class="">

                        <div class="d-flex shadow-lg rounded p-4">

                            <div id='areasYoga' class="">
                                <ul class="list-group list-group-flush d-flex flex-column fs-5 m-3 lh-lg mb-4">
                                    <li class="list-group-item fs-3 p-4">Yogaterapia (grávidas, crianças e grupos de reabilitação e terapêutica holística)</li>
                                    <li class="list-group-item fs-3 p-4">Tantra Kundalini Yoga</li>
                                    <li class="list-group-item fs-3 p-4">Hatha Yoga</li>
                                    <li class="list-group-item fs-3 p-4">Vinyasa Flow Yoga</li>
                                </ul>

                                <p class="text-center fs-5 fw-semibold text-secondary mt-3">
                                    CREF: 007897-G/BA
                                </p>
                            </div>

                            <div id="imagemCertificacao" class="d-flex flex-column shadow-lg rounded-3 align-items-center m-5  w-auto">
                                <img src="{{ Vite::asset('resources/imagens/abrath-1.png') }}"
                                    class="img-fluid my-3 mx-5 "
                                    style="max-width:240px;"
                                    alt="Logo da ABRATH">

                                <p class="fs-3 fw-bold text-dark m-3 align-items-center">Terapeuta Habilitada</p>
                                <p class="text-secondary fs-4 m-3">Reconhecida pela ABRATH</p>
                            </div>

                        </div>
                    </div>

                </div>
                </div>
            </section>

            <!-- CERTIFICAÇÃO -->
            <section class="d-flex flex-column justify-content-center my-5 text-center">

                <h2 class="fw-bold display-4 container mb-3 text-dark d-flex justify-content-center">Certificação</h2>
                <div class="mx-auto mb-4" style="height:4px; width:80px; background:#8e44ad; border-radius:4px;"></div>

                <div class="card shadow-sm border-0 p-4" style="border-radius:18px;">

                    <p class="fs-5 lh-lg">
                        Possibilita ao discente, o ingresso e certificação nos sindicatos de terapeutas.
                    </p>

                    <p class="fs-5 lh-lg">
                        Habilitado como instrutor de Yoga do método <strong>DESPERTARYOGA</strong>.
                    </p>

                </div>

            </section>



            <div class="shadow-lg vw-100">

                <h3 id="cronograma" class="container fw-bold display-1 p-3">CRONOGRAMA GERAL</h3>
                <UL class="list-group list-group-flush list-group-numbered p-3">
                    <LI class="list-group-item bg-transparent">Filosofia do Yoga</LI>
                    <LI class="list-group-item bg-transparent">História do Yoga e do Hinduísmo</LI>
                    <LI class="list-group-item bg-transparent">Conceitos e Significados do Yoga</LI>
                    <LI class="list-group-item bg-transparent">Yoga: Samkhya, Vedanta e Tantra</LI>
                    <LI class="list-group-item bg-transparent">Ashtanga Yoga de Patanjali, Hatha Yoga e Outros Tipos de Yoga</LI>
                    <LI class="list-group-item bg-transparent">Práticas Orientais x Comportamento Ocidental</LI>
                    <LI class="list-group-item bg-transparent">Yamas e Niyamas</LI>
                    <LI class="list-group-item bg-transparent">Yoga Sutra de Patanjali</LI>
                    <LI class="list-group-item bg-transparent">Karma e Dharma</LI>
                </UL>
            </div>



            <style>
                /* Cor personalizada dos botões e cabeçalho dos modais */
                :root {
                    --cor-principal: #f86300ff;
                    /* Você pode trocar esta cor */
                }

                .btn-custom {
                    background-color: var(--cor-principal);
                    color: #fff;
                    font-weight: 600;
                }

                .btn-custom:hover {
                    background-color: #692f86;
                    color: #fff;
                }

                .modal-header {
                    background-color: var(--cor-principal);
                    color: #fff;
                }

                /* Cards alinhados */
                .card {
                    border: none;
                    border-radius: 12px;
                    overflow: hidden;
                }

                .card img {
                    height: 220px;
                    object-fit: cover;
                }

                .card-body {
                    padding-bottom: 2rem;
                }

                /* Ajuste das colunas para ficar bonito */
                .card-title {
                    min-height: 60px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>

            <div class="container my-5">

                <div class="row g-4">

                    <!-- CARD 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm h-100 text-center">
                            <img src="{{ Vite::asset('resources/imagens/ju.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Estudo dos Angas</h5>
                                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modal1">Mais info</button>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2 – Práticas do Tantra -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm h-100 text-center">
                            <img src="{{ Vite::asset('resources/imagens/1446.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Práticas do Tantra</h5>
                                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modal2">Mais info</button>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 4 (movido para baixo do Card 2) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm h-100 text-center">
                            <img src="{{ Vite::asset('resources/imagens/1446.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Formas de Abordagem do Yoga</h5>
                                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modal4">Mais info</button>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3 (agora fica por último) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm h-100 text-center">
                            <img src="{{ Vite::asset('resources/imagens/ju.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Anatomia, Biomecânica e Fisiologia</h5>
                                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modal3">Mais info</button>
                            </div>
                        </div>
                    </div>

                </div>





                <section id="areaAtuacao" class="">

                    <H3>AREAS DE ATUAÇÃO</H3>
                    <UL>
                        <LI>AUTO CONHECIMENTO</LI>
                        <LI>GRUPOS E RODAS</LI>
                        <LI>ACADEMIA</LI>
                        <LI>EMPRESAS </LI>
                        <LI>INDIVIDUAL </LI>
                        <LI>CRIANÇAS E GESTANTES.</LI>
                    </UL>

                    <P>QUESTIONARIOS, EXERCICIOS PRATICOS E TEORICOS (OPICIONAL).</P>

                </section>

        </section>

        <div class="cta-buttons">
            <a href="https://hotmart.com/pt-br/marketplace/produtos/jornada-dos-7-chakras-vivencia-pratica-com-yoga/D81754728N"
                target="_blank" class="btn">INSCREVA-SE</a>
        </div>

        <section id="acompanhamento">

            <div>
                <img src="{{ Vite::asset('resources/imagens/hay_meditando400.png') }}" alt="">
                <br>Pre-requisito para participar
                <br><strong>QUERER</strong>
            </div>
            <div>
                <img src="{{ Vite::asset('resources/imagens/curso_online.jpg') }}" alt="">
                <br>Formato do curso
                <br><strong>HIBRIDO</strong>
                <br>AULAS TEORICAS ONLINE E PRATICAS PRESENCIAIS
            </div>
            <div>
                <img src="{{ Vite::asset('resources/imagens/diploma.png') }}" alt="">
                <br>CERTIFICAÇÃO COM 100 HORAS AULAS
                <br>CONTEUDO TEORICO E PRATICOS
            </div>
<<<<<<< HEAD

            <section class="quem-sou">

                <div class="content">
                    <img src="{{ Vite::asset('resources/imagens/fotoinstrutora.png') }}" alt="Foto da instrutora">

                    <div class="textoQuemSou">
                        <h2>QUEM SOU</h2>

                        <P>Desde 2004 leciona e pratica <strong>Yoga</strong></P>
                        <P>Praticante de Artes Marciais e estudante de várias filosofias orientais, encontrou no Yoga o
                            seu
                            caminho de vida. </P>
                        <P>Idealizadora e coordenadora do Metodo DespertarYoga desde 2019.</P>
                        <P>Bacharel em Educação Física, especialista em Reabilitação, NEUROCIENCIA, Docência da
                            Meditação,
                            Bioenergetica e Terapeuta corporal e energetica.</P>
                        <P> <strong>Minha experiência </strong></P>
                        <P>Quando adquirimos uma aula ou um livro, não é só pelo conteúdo escrito ali presente, mas
                            estamos adquirindo as vivencias e experiencias desse professor.</P>
                        <P>As culturas orientais tem um grande respeito pelo professor, por ele poder dedicar a vida a
                            ensinar. Por isso conto aqui parte da minha história.</P>
                        <P>Comecei a dar aulas de artes maciais aos 16 anos, antes disso estive vivendo o movimento
                            desde os 5 anos, onde comecei nas aulas de artes maciais, karate (arte marcial japonesa), já
                            naquela
                            época tínhamos que entrar no Dojo (local da aula), com respeito e em silencio, cumprimentar
                            o
                            Mestre, e no fim da aula existia alguns minutos onde sentávamos para meditar, fechar os
                            olhos e
                            silenciar.</P>
                        <P>Aos cinco anos era o que eu ouvia e fazia, se entendia era outra história, só voltando no
                            passado e me perguntando. Mas eu fazia o que me pediam, e gostava. Cumprimentávamos o mestre
                            e os alunos
                            mais antigos (hierarquia) e saiamos.</P>
                        <P> Nesse espaço de tempo, minha família também frequentava a igreja evangélica, e sempre
                            tínhamos muitos momentos de “oração”, e a orações de pedinte era o que nos ensinavam, mas eu
                            sempre
                            ia observando o que acontecia quando eu estava de olhos fechados, o que acontecia com minha
                            mente, depois de um tempo e pelas dificuldades da vida, eu também comecei a fazer as orações
                            de
                            pedinte, mas nunca perdia o costume de ficar com meu silencio interior.</P>

                    </div>

                </div>
            </section>

            @auth

            <section class="aulasGratis">
                <h2 class="">AULAS GRÁTIS</h2>
                <div class="grid-aulasGratis">

                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/FLbHUQGnz3s?si=rvDNJvHWoJRTfXgy"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/ZOTy9Gzmcqs?si=N8Nlh7F7I3bcK3pm"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/rQrexk86xhM?si=tIFGFDJYgEI8Rs9B"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/Sl1mNNIS9lg?si=B2LaXDY27fJ3hvgH"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/PvlI49KZj6Q?si=c9JXTXFivodOZWfM"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/TOA_2K_yyPc?si=9Xvza82miW9C81aT"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/IS5uFCLi9NY?si=flmMxlah937-1Eqv"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            @endauth

            <section class="cortesLivesVideos">

                <h2>CORTES, LIVES E VIDEOS GRATIS</h2>

                <div class="grid-cortes">

                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/g1iEh4pxULM?si=-sV0xB3soEGUCyIq"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/cITVJVoNSZ4?si=1uP3gBmek2K7nKtw"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/MmJMX8fnSrc?si=jHSmG-4nV8eVnlrs"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/2SaMOosNfIs?si=BvKOEFR2uhmK4W7O"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item"><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/5xyu0Fln3lY?si=sT_iCqfnz3SJux-N"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/XtsvoY6xKP8?si=LOGv0RPdIzDhpDvJ"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/Zccznaqc7ac?si=G5dQUfn6bVRsfFMr"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/JKex0HsWc9s?si=nqyveha4rcxa6JkT"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/lsdzFtOWDok?si=e95lqLi9N00Htqfe"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/NqQWB9f9c5k?si=7wFbDkLlBN_52V-q"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/GZGMMxj3vFQ?si=muVMnsbi4PCSrcEt"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/bUHNWVPrwYQ?si=qNRX3y9vrfbCfJ9n"
                            title="Video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>

                </div>

            </section>

            <h2>MINHAS REDES SOCIAIS</h2>
            <section class="minhasRedes">

                <div class="redes">

                    <a href="https://www.youtube.com/@flowyogadespertar" target="_blank" rel="external">
                        <img src="{{ Vite::asset('resources/imagens/icons8-logotipo-do-youtube-94.png') }}" alt="Logo Youtube">
                        <p>Despertar Yoga</p>
                    </a>
                    <a href="https://www.instagram.com/hayyoga/" target="_blank" rel="external">
                        <img src="{{ Vite::asset('resources/imagens/icons8-instagram-logo-94.png') }}" alt="Logo Instagram">
                        <p>@hayyoga</p>
                    </a>

                    <a href="https://www.instagram.com/terapiandoavidacmagia/" target="_blank" rel="external">
                        <img src="{{ Vite::asset('resources/imagens/icons8-instagram-logo-94.png') }}" alt="Logo Instagram">
                        <p>@terapiandoavidacommagia</p>
                    </a>
                </div>
            </section>
=======
>>>>>>> f4705a7e98ae107efde28dfb064b917209dbfd82

        </section>

        <section id="video2">
            <iframe width="560" height="315"
                src="https://www.youtube.com/embed/Y1HARbJhiR0?si=xOHmNYxuZ2ZnNfQe"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section id="formatoDoCurso">
            <h3>DO FORMATO DO CURSO</h3>
            <p>O formato do curso constitui de encontros semanais, <strong>ONLINE E PRESENCIAIS NAS DATAS
                    ESTIPULADAS.</strong></p>
            <p>
                Um ano, totalizando uma carga horária de 100+ ESTAGIO 100 horas/aula para quem pretende dar aula.
            </p>
            <p id="bonus"> <strong>+ BONUS</strong> </p>
            <ul>
                <li>YOGA DOS 7 CHAKRAS (7 AULAS PRATICAS)</li>
                <li>YOGA DOS 4 ELEMENTOS 4 AULAS PRATICAS </li>
                <li>RITOS TIBETANOS </li>
            </ul>
        </section>

        <section id="avaliacoes">
            <div>
                <img src="{{ Vite::asset('resources/imagens/hay_yoga_mao1.png') }}" alt="">
            </div>
            <div>
                Avaliações para quem deseja <strong> LECIONAR</strong>
                <br>
                <ul>
                    <li>Apresentação de aula completa.</li>
                    <li>Estágio Supervisionado - Obrigatório aos que almejam certificação para
                        <strong>lecionar</strong> - consiste em ministrar 100 horas aulas, e escrever um relatório
                        envolvendo no mínimo 12 aulas, descrevendo sobre as experiências vivenciadas.
                    </li>
                </ul>
                Para garantir sua vaga, inscreva-se efetivando o pagamento e preenchendo o questionário e ficha de
                inscrição.
                <br>
                Os cursos livres fazem parte da modalidade de Educação Profissional e tem base legal no Decreto nº
                5.154/04 e na Portaria Nº 008/02. Não exigem comprovação de escolaridade anterior do ministrante. Os
                certificados de conclusão são emitidos

                Pelas próprias instituições que oferecem os cursos, mas nada disso quer dizer que os cursos livres
                dispensam os critérios acadêmicos utilizados nas modalidades da educação superior.
            </div>
        </section>

        <section id="praticaPessoal">

            <div>
                <img src="{{ Vite::asset('resources/imagens/hay.png') }}" alt="">
            </div>
            <div>
                <h3>SUA PRATICA PESSOAL</h3>
                <p>Deve-se ser regular, para que, de fato, o aluno possa ter aproveitamento do curso.</p>
                <p>Enfatiza- se a importância da prática individual e diária. Assim, surgem as dúvidas e os insights
                    que vão tornar o curso mais enriquecedor, interessante e transformador.</p>
                <p>A prática regular com um professor competente, fora dos encontros da formação, é fundamental para
                    se
                    adquirir um leque maior de técnicas, receber correções e vivenciar os respectivos efeitos. Para
                    isso
                    sugere-se 02 aulas semanais.</p>
                <p>TAMBEM É SUGERIDO A TROCA DE AULAS ENTRE OS PARTICIPANTES DO GRUPO.</p>
            </div>
        </section>

        <section>
            <div id="fotosMenores">
                <img src="{{ Vite::asset('resources/imagens/hay.png') }}" alt="">
                <img src="{{ Vite::asset('resources/imagens/ju.png') }}" alt="">
            </div>
            <div id="fotoJuVermelho">
                <img src="{{ Vite::asset('resources/imagens/juVermelho.png') }}" alt="">
            </div>
        </section>

        <section id="investimento">
            <h2>INVESTIMENTO</h2>
            <p>5,000 mil a vista ou
                <br>12 x de 530 cartão credito
            </p>
            <p>Mais esclarecimentos e ou informações para pagamento, link ou transferência, fale
                conosco clicando no icone <br>
                &#128073;
                <a id="whatsapp"
                    href="https://api.whatsapp.com/send?phone=557196668468&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20seu%20curso%20de%20Reiki!"
                    target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                        width="40">
                </a>
            <p><strong>APENAS MENSAGEM DE TEXTO</strong>.</p>

            </p>
            <h3>Shanti! &#128591; </h3>

        </section>

        <section id="informacoes">

        </section>

        <div class="cta-buttons">
            <a href="https://hotmart.com/pt-br/marketplace/produtos/jornada-dos-7-chakras-vivencia-pratica-com-yoga/D81754728N"
                target="_blank" class="btn">INSCREVA-SE</a>
        </div>

        <section class="quem-sou">

            <div class="content">
                <img src="{{ Vite::asset('resources/imagens/fotoinstrutora.png') }}" alt="Foto da instrutora">

                <div class="textoQuemSou">
                    <h2>QUEM SOU</h2>

                    <P>Desde 2004 leciona e pratica <strong>Yoga</strong></P>
                    <P>Praticante de Artes Marciais e estudante de várias filosofias orientais, encontrou no Yoga o
                        seu
                        caminho de vida. </P>
                    <P>Idealizadora e coordenadora do Metodo DespertarYoga desde 2019.</P>
                    <P>Bacharel em Educação Física, especialista em Reabilitação, NEUROCIENCIA, Docência da
                        Meditação,
                        Bioenergetica e Terapeuta corporal e energetica.</P>
                    <P> <strong>Minha experiência </strong></P>
                    <P>Quando adquirimos uma aula ou um livro, não é só pelo conteúdo escrito ali presente, mas
                        estamos adquirindo as vivencias e experiencias desse professor.</P>
                    <P>As culturas orientais tem um grande respeito pelo professor, por ele poder dedicar a vida a
                        ensinar. Por isso conto aqui parte da minha história.</P>
                    <P>Comecei a dar aulas de artes maciais aos 16 anos, antes disso estive vivendo o movimento
                        desde os 5 anos, onde comecei nas aulas de artes maciais, karate (arte marcial japonesa), já
                        naquela
                        época tínhamos que entrar no Dojo (local da aula), com respeito e em silencio, cumprimentar
                        o
                        Mestre, e no fim da aula existia alguns minutos onde sentávamos para meditar, fechar os
                        olhos e
                        silenciar.</P>
                    <P>Aos cinco anos era o que eu ouvia e fazia, se entendia era outra história, só voltando no
                        passado e me perguntando. Mas eu fazia o que me pediam, e gostava. Cumprimentávamos o mestre
                        e os alunos
                        mais antigos (hierarquia) e saiamos.</P>
                    <P> Nesse espaço de tempo, minha família também frequentava a igreja evangélica, e sempre
                        tínhamos muitos momentos de “oração”, e a orações de pedinte era o que nos ensinavam, mas eu
                        sempre
                        ia observando o que acontecia quando eu estava de olhos fechados, o que acontecia com minha
                        mente, depois de um tempo e pelas dificuldades da vida, eu também comecei a fazer as orações
                        de
                        pedinte, mas nunca perdia o costume de ficar com meu silencio interior.</P>

                </div>

            </div>
        </section>

        <section id="aulasGratis" class="p-3">
            <h2 class="display-2 d-flex vw-100 mt-5 mb-5 justify-content-center">AULAS GRÁTIS</h2>
            <div class="grid-aulasGratis">

                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/FLbHUQGnz3s?si=rvDNJvHWoJRTfXgy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/ZOTy9Gzmcqs?si=N8Nlh7F7I3bcK3pm"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/rQrexk86xhM?si=tIFGFDJYgEI8Rs9B"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/Sl1mNNIS9lg?si=B2LaXDY27fJ3hvgH"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/PvlI49KZj6Q?si=c9JXTXFivodOZWfM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/TOA_2K_yyPc?si=9Xvza82miW9C81aT"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/IS5uFCLi9NY?si=flmMxlah937-1Eqv"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section id="cortesLivesVideos" class="p-3">

            <h2 class="display-2 d-flex vw-100 mt-5 mb-5 justify-content-center">CORTES, LIVES E VÍDEOS GRATIS</h2>

            <div class="grid-cortes">

                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/g1iEh4pxULM?si=-sV0xB3soEGUCyIq"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/cITVJVoNSZ4?si=1uP3gBmek2K7nKtw"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/MmJMX8fnSrc?si=jHSmG-4nV8eVnlrs"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/2SaMOosNfIs?si=BvKOEFR2uhmK4W7O"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/5xyu0Fln3lY?si=sT_iCqfnz3SJux-N"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/XtsvoY6xKP8?si=LOGv0RPdIzDhpDvJ"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/Zccznaqc7ac?si=G5dQUfn6bVRsfFMr"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/JKex0HsWc9s?si=nqyveha4rcxa6JkT"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/lsdzFtOWDok?si=e95lqLi9N00Htqfe"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/NqQWB9f9c5k?si=7wFbDkLlBN_52V-q"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/GZGMMxj3vFQ?si=muVMnsbi4PCSrcEt"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="item">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/bUHNWVPrwYQ?si=qNRX3y9vrfbCfJ9n"
                        title="Video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

            </div>

        </section>

        <h2>MINHAS REDES SOCIAIS</h2>
        <section class="minhasRedes">

            <div class="redes">

                <a href="https://www.youtube.com/@flowyogadespertar" target="_blank" rel="external">
                    <img src="{{ Vite::asset('resources/imagens/icons8-logotipo-do-youtube-94.png') }}" alt="Logo Youtube">
                    <p>Despertar Yoga</p>
                </a>
                <a href="https://www.instagram.com/hayyoga/" target="_blank" rel="external">
                    <img src="{{ Vite::asset('resources/imagens/icons8-instagram-logo-94.png') }}" alt="Logo Instagram">
                    <p>@hayyoga</p>
                </a>

                <a href="https://www.instagram.com/terapiandoavidacmagia/" target="_blank" rel="external">
                    <img src="{{ Vite::asset('resources/imagens/icons8-instagram-logo-94.png') }}" alt="Logo Instagram">
                    <p>@terapiandoavidacommagia</p>
                </a>
            </div>
        </section>



    </main>

    <script>
        const modal = document.getElementById("loginModal");
        const btn = document.getElementById("loginBtn");
        const span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</x-layout>