<?php
// Função para verificar se o usuário está logado
// include __DIR__ . '/sql/scripts/verifyLoggin.php';
// include $_SERVER['DOCUMENT_ROOT'] . '/achados/sql/scripts/verifyLoggin.php';

// Funções de ajudas rápidas
include __DIR__ . '/sql/helpers.php';

// include $_SERVER['DOCUMENT_ROOT'] . '/achados/sql/helpers.php';

// Função para chamar o Head com as estilizações e outras metatags
// require __DIR__ . '/template-parts/header.php';
// require $_SERVER['DOCUMENT_ROOT'] . '/achados/template-parts/header.php';
?>
  
    <?php
      // Navbar
      echo navbar();
    ?>
    <main>     
      <div class="parallax-container">
        <div class="parallax"><img src="<?php echo $path;?>img/test1.jpg"></div>
      </div>
      <article class="container">
        <section class="login mt-6 mb-6">
          <h5 class="center-align" id="missao">Faça o login e realize todo o processo de recuperação do seu item.</h5>
          <form class="row g-1" action="./sql/scripts/process_login.php" method="post">
            <div class="col s12 m12 l12 mt-4">
              <div class="input-field outlined">
                <i class="material-icons prefix">account_circle</i>
                <input id="rm" type="number" name="rm" class="validate" required placeholder=" ">
                <label class="active" for="rm">RM</label>
              </div>
            </div>
            <div class="col s12 m12 l12">
              <div class="input-field outlined">
                <span class="material-icons prefix">key</span>
                <input id="senha" type="password" name="senha" class="validate" required placeholder=" ">
                <label class="" for="senha">Senha</label>
              </div>
            </div>
            <div class="col s12 m12 l12">
              <div class="row g-1">
                <div class="col s12 m12 l4">
                  <input class="btn icon-right waves-effect waves-light acess center-align" type="submit" value="Acessar">
                </div>
                <div class="col s12 m12 l4">
                  <button class="btn icon-right waves-effect waves-light forgot center-align" type="submit" name="action">
                    Esqueci minha senha
                  </button>
                </div>
                <div class="col s12 m12 l4">
                  <button class="btn icon-right waves-effect waves-light signup center-align" type="submit" name="action">
                    Cadastre-se
                  </button>
                </div>
              </div>
            </div>
          </form>
        </section>
      </article>
    </main>
<?php
echo footer();
?>