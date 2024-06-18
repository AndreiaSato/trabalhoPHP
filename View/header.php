<link rel="stylesheet" href="estilo.css">
<header class="cabecalho">
        <div class="logo"><a href="index.php"><img class="logo-img" src="../imagens/Logo.jpg"></a></div>
        <nav class="menu">
            <ul>
                <li><a href="listarImoveis.php">Reservas</a></li> 
                <?php
                    session_start();
                    if(!isset($_SESSION['email'])) { // se não tiver a variavel email definida
                        echo " <li><a href='criarconta.php'>Criar Conta</a></li>"; // direciona para a pagina criar conta (botão)
                        echo  "<li><a href='login.php'>Login</a></li>"; // direciona para a pagina de login (botão)
                    }
                    else{
                        if(!isset($_SESSION['instituicao_ensino'])){ // se a variável instituição de ensino não estiver definida
                            echo "<li><a href='imovel.php'>Cadastrar Imóvel</a></li>";// direciona para a pagina de cadastrar imovel (botão)
                        }
                        echo "<li><a href='logout.php'>Logout</a></li>";// ambos tem o botão logout
                    }
                    ?>
            </ul>
        </nav>
</header>