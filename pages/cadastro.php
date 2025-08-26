<?php
include __DIR__ . '/../sql/helpers.php';
// Navbar
echo navbar();
?>
<main>
    <div class="container">
        
        <form action="" method="post" class="row g-1 register">
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-user"></i></div>
                <input id="first_name" type="text" placeholder=" " maxlength="20" required="true"/>
                <label for="first_name">Nome completo</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-envelope"></i></div>
                <input id="email" type="text" placeholder=" " maxlength="20" required="true"/>
                <label for="email">E-mail</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-id-card"></i></div>
                <input id="rm" type="number" placeholder=" " maxlength="20" required="true"/>
                <label for="rm">RM</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <div class="prefix"><i class="fa-solid fa-lock"></i></div>
                <input id="password" type="password" placeholder=" " maxlength="20" required="true"/>
                <label for="password">Senha</label>
            </div>
            <div class="s12 m12 l12 input-field outlined">
                <input type="submit" value="Solicitar cadastro" class="btn-large green white-text center-align"/>
                <!-- <a href="" class="btn-large green white-text center-align">&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-paper-plane"></i></a> -->
            </div>
        </form>
    </div>
</main>