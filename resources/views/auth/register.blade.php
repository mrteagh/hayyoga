<x-layout :showLoginModal="$showLoginModal ?? ($errors->any() ? true : false)">
    <div class="container-body">
        <div class="register-container">

            <h1>Crie sua conta</h1>

            {{-- Erros --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Formulário de cadastro --}}
            <form method="POST" action="{{ route('register.enviar') }}">
                @csrf

                <input type="text" name="name" placeholder="Nome completo" value="{{ old('name') }}" required>

                <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                <input type="password" name="password" placeholder="Senha" required>

                <input type="password" name="password_confirmation" placeholder="Confirmar senha" required>

                <button type="submit">Cadastrar</button>
            </form>

            <div class="login-link">
                Já tem conta?
                <a href="#" id="openLoginFromRegister">Faça login</a>
            </div>

        </div>
    </div>
    {{-- Script para abrir modal de login --}}
    <script>
        document.getElementById('openLoginFromRegister')?.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById("loginModal").style.display = "block";
        });
    </script>

</x-layout>