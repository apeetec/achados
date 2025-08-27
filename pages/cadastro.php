<?php
include __DIR__ . '/../sql/helpers.php';
// Navbar
echo navbar();
?>
<main>
    <div class="container">
        
        <form action="../sql/scripts/process_register.php" method="post" class="row g-1 register">
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-user"></i></div>
                <input name="nome" id="first_name" type="text" placeholder=" " maxlength="32" required="true"/>
                <label for="first_name">Nome completo</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-envelope"></i></div>
                <input name="email" id="email" type="text" placeholder=" " maxlength="40" required="true"/>
                <label for="email">E-mail</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-id-card"></i></div>
                <input name="rm" id="rm" type="number" placeholder=" " maxlength="20" required="true"/>
                <label for="rm">RM</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-lock"></i></div>
                <input name="senha" id="password" type="password" placeholder=" " maxlength="20" required="true"/>
                <label for="password">Senha</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <input type="submit" value="Solicitar cadastro" class="btn-large green white-text center-align"/>
                <!-- <a href="" class="btn-large green white-text center-align">&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-paper-plane"></i></a> -->
            </div>
        </form>
    </div>
</main>