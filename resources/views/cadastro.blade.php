   <x-layout>
    
   <div class="container">
            <h1>Cadastro de Usuário</h1>

            @if(session('sucesso'))
            <p style="color: green;">{{ session('sucesso') }}</p>
            @endif

            <form action="{{ route('cadastro.salvar') }}" method="POST">
                @csrf
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="name" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="password" required>

                <label for="confirmar-senha">Confirmar Senha:</label>
                <input type="password" id="confirmar-senha" name="password-senha" required>

                <button type="submit">Cadastrar</button>

                <a href="/">Sair</a>

            </form>
        </div>
        </x-layout>