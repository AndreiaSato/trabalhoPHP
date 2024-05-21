<link rel="stylesheet" href="estilo.css">
<header class="cabecalho">
        <div class="logo"><a href="index.php"><img class="logo-img" src="Logo.jpg"></a></div>
        <nav class="menu">
            <ul>
                <li><a href="listarImoveis.php">Reservas</a></li>
                <?php
                    session_start();
                    if(!isset($_SESSION['email'])) {
                        echo " <li><a href='criarconta.php'>Criar Conta</a></li>";
                        echo  "<li><a href='login.php'>Login</a></li>";
                    }
                    else{
                        if(!isset($_SESSION['instituicao_ensino'])){
                            echo "<li><a href='imovel.php'>Cadastrar Imóvel</a></li>";
                        }
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                    ?>
            </ul>
        </nav>
</header>