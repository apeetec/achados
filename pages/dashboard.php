<?php
// include $_SERVER['DOCUMENT_ROOT'] . '/achados/sql/helpers.php';
include __DIR__ . '/../sql/helpers.php';
// Navbar
// navbar();
?>
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
        <div class="user-view">
            <div class="background">
            <img src="images/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdoe@example.com</span></a>
        </div>
    </li>
    <li><a href="#!">Itens perdidos</a></li>
    <li><a href="#!">Solicitações recentes</a></li>
    <li><div class="divider"></div></li>
    <!-- <li><a class="subheader" href="#!">Subheader</a></li> -->
</ul>
<main class="dashboard">
    <div class="control">
        <div class="filters">
            <div class="single">
                <select name="" id="">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
            <div class="single"><select name="" id=""></select></div>
            <div class="single"><select name="" id=""></select></div>
        </div>

        <div class="alunos">
            <table class="striped">
                <thead>
                    <tr>
                        <th>RA</th>
                        <th>Nome</th>
                        <th>Grau</th>
                        <th>Classe</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once __DIR__ . '/../sql/class/db.class.php';
// Classe de Usuários
require_once __DIR__ . '/../sql/class/users.class.php';
$usuarioRepo = new Usuarios();
$usuarios = $usuarioRepo->buscarTodosUsuarios();

foreach ($usuarios as $usuario) {
    // echo "ID: {$usuario['id']} | Nome: {$usuario['rm']} | Nome: {$usuario['nome']} | Email: {$usuario['email']}<br>";
    echo "<tr>
        <td>{$usuario['id']}</td>
        <td>{$usuario['rm']}</td>
        <td>{$usuario['nome']}</td>
        <td>{$usuario['email']}</td>
      </tr>";
}
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</main>