   <x-layout>
   @vite(['resources/css/stylecadastro.css'])
       <div class="container">
           <h1>Cadastro de Usuário</h1>
           <form action="#" method="post">
               <label for="nome">Nome completo:</label>
               <input type="text" id="nome" name="nome" required>

               <label for="email">E-mail:</label>
               <input type="email" id="email" name="email" required>

               <label for="senha">Senha:</label>
               <input type="password" id="senha" name="senha" required>

               <label for="confirmar-senha">Confirmar Senha:</label>
               <input type="password" id="confirmar-senha" name="confirmar-senha" required>

               <button type="submit">Cadastrar</button>

               <a href="home.html">
                   Sair
               </a>

           </form>
       </div>
   </x-layout>