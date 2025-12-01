<x-layout :showLoginModal="$showLoginModal ?? ($errors->any() ? true : false)">

    @vite(['resources/css/styleMain.css'])

    <body>

        <section class="fotoHeader">
            <div class="juVermelho">
                <img src="{{Vite::asset('resources/imagens/juVermelho.png')}}" alt="Imagem de uma Yogui praticando assanas">
            </div>
        </section>
        <main>

            <section class="hero">
                <div class="overlay">
                    <h1>Transforme sua vida com Yoga e Reiki!
                        <br>Aprenda a se reconectar com sua energia vital!
                    </h1>

                </div>
            </section>
            <section id="cursos">
                <div class="caixa">
                    <a href="/yoga">
                        <img src="{{Vite::asset('resources/imagens/hay_yoga_mao1.png')}}" alt="Seu navegador nao carrega esta imagem">
                    </a>
                </div>
                <a href="/reiki">
                    <div class="caixa">
                        <img src="{{Vite::asset('resources/imagens/hay_reiki_mao1.png')}}" alt="Seu navegador nao carrega esta imagem">
                    </div>
                </a>

                <section class="hero">
                    <div class="overlay">
                        <h1>
                            Transforme sua vida com Yoga e Reiki! <br>
                            Aprenda a se reconectar com sua energia vital!
                        </h1>
                    </div>
                </section>

                <section id="cursos">
                    <div class="caixa">
                        <a href="/yoga">
                            <img src="{{Vite::asset('resources/imagens/hay_yoga_mao1.png')}}" alt="Curso de Yoga">
                        </a>
                    </div>

                    <div class="caixa">
                        <a href="/reiki">
                            <img src="{{Vite::asset('resources/imagens/hay_reiki_mao1.png')}}" alt="Curso de Reiki">
                        </a>
                    </div>
                </section>

            </section>

            <section class="quem-sou">
                <div class="content">
                    <img src="{{ Vite::asset('resources/imagens/fotoinstrutora.png') }}" alt="Foto da instrutora">

                    <div class="textoQuemSou">
                        <h2>QUEM SOU</h2>

                        <p>Leciono e pratico <strong>Yoga</strong> desde 2004. Minha jornada sempre passou pelas artes marciais e por diferentes filosofias orientais, e foi nesse caminho que encontrei no Yoga o meu verdadeiro propósito de vida. Desde 2019, idealizo e coordeno o Método DespertarYoga. Sou bacharel em Educação Física, com especializações em Reabilitação, Neurociência, Docência da Meditação, Bioenergética, além de atuar como terapeuta corporal e energética.</p>


                        <p><strong>Minha experiência</strong></p>

                        <p>
                            Quando adquirimos uma aula ou um livro, não é apenas pelo conteúdo escrito,
                            mas também pelas vivências e experiências do professor.
                        </p>

                        <p>
                            Nas culturas orientais, o professor é profundamente respeitado por dedicar sua vida a ensinar.
                            Por isso, compartilho aqui parte da minha história.
                        </p>

                        <p>
                            Comecei a dar aulas de artes marciais aos 16 anos. Antes disso, já vivenciava o movimento desde os
                            5 anos, quando iniciei no Karatê (arte marcial japonesa). Naquela época precisávamos entrar no
                            <em>dojo</em> (local da aula) com respeito e em silêncio, cumprimentar o mestre e, ao final,
                            reservar alguns minutos para meditar, fechar os olhos e silenciar.
                        </p>

                        <p>
                            Aos cinco anos eu apenas fazia o que me era pedido — compreender era outra história.
                            Mas eu gostava. Cumprimentávamos o mestre e os alunos mais antigos (hierarquia) e então saíamos.
                        </p>

                        <p>
                            Nesse período, minha família também frequentava uma igreja evangélica, onde havia muitos momentos
                            de oração. As orações de pedido eram as mais ensinadas, mas eu sempre observava o que acontecia ao
                            fechar os olhos — o que se passava na minha mente. Com o tempo, pelas dificuldades da vida,
                            também fiz minhas orações de pedido, mas nunca perdi o hábito de cultivar meu silêncio interior.
                        </p>
                    </div>
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