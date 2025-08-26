<?php
include __DIR__ . '/../sql/helpers.php';
// verifyLogin();
// Navbar
// navbar();
?>
<!-- <ul id="slide-out" class="sidenav sidenav-fixed">
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
    <li>
        <a href="#!">
            Itens perdidos
        </a>
    </li>
    <li>
        <a href="#!">
            Solicitações recentes
        </a>
    </li>
    <li><div class="divider"></div></li>
    <li><a class="subheader" href="#!">Subheader</a></li>
</ul> -->
<aside class="sidenav sidenav-fixed controle">
    <div class="user-view">
        <div class="background">
            <img src="images/office.jpg">
        </div>
        <a href="#user">
            <img class="circle" src="images/yuna.jpg">
        </a>
        <a href="#name">
            <span class="white-text name">John Doe</span>
        </a>
        <a href="#email">
            <span class="white-text email">jdoe@example.com</span>
        </a>
    </div>
    <ul id="controle-de-guias" class="tabs">
        <li class="tab col s3"><a class="active" href="#guia-alunos"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;Alunos</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">Test 2</a></li>
        <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
    </ul>
</aside>
<main class="dashboard">
    <div class="control">
        <div id="guia-alunos" class="col s12">
            
            <div class="filters">
                <div class="single">
                    <select name="" id="">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="single">
                    <select name="" id=""></select>
                </div>
                <div class="single">
                    <select name="" id=""></select>
                </div>
            </div>



            <div class="alunos">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>RM</th>
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="list">
                        <?php
                            // Classe de Usuários
                            require_once __DIR__ . '/../sql/class/users.class.php';
                            $TodosUsuarios = new Usuarios();
                            $usuarios = $TodosUsuarios->buscarTodosUsuarios();
                            foreach ($usuarios as $usuario) {
                                echo "<tr>
                                        <td>{$usuario['id']}</td>
                                        <td>{$usuario['rm']}</td>
                                        <td>{$usuario['nome']}</td>
                                        <td>{$usuario['email']}</td>
                                        <td><button class='delete'>Deletar</button><button class='update'>Atualizar</button></td>
                                    </tr>";
                            }
                        ?>
                        <!-- <tr>
                            <td>1</td>
                            <td>4540</td>
                            <td>Gabriel</td>
                            <td>gabriel938@gmail.com</td>
                            <td><button class='delete'><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;&nbsp;Deletar</button><button class='update'><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Atualizar</button></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

            





        </div>

        </div>
        <div id="test-swipe-2" class="col s12 red">Test 2</div>
        <div id="test-swipe-3" class="col s12 green">Test 3</div>
    </div>
</main>
<?php
echo footer();
?>
