<link rel="stylesheet" href="estilo.css">
<header>
    <div class="menu-principal navbar bg-primary">
        <div class="logo"><a href="index.php"><img class="logo-img" src="Logo.jpg"></a></div>
        <div class="navegacao"><a href="listarImoveis.php">Reservas</a></div>
        <?php
        session_start();
        if(!isset($_SESSION['email'])) {
            echo " <div class='navegacao'><a href='criarconta.php'>Criar Conta</a></div>";
            echo  "<div class='navegacao'><a href='login.php'>Login</a></div>";
        }
        else{
            if(!isset($_SESSION['instituicao_ensino'])){
                echo "<div class='navegacao'><a href='imovel.php'>Cadastrar Imóvel</a></div>";
            }
        }
        ?>
    </div>
</header>