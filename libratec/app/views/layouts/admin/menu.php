<!--DOBRA CABEÇALHO-->

<header class="main_header">
    <div class="main_header_content">
        <a href="../../index.php" class="logo">
            <img src="assets/img/LIBRATEC-cortado.png" alt=""></a>

        <nav class="main_header_content_menu">
            <ul>
                <li><a href="index.php">Início</a></li>
                <?php 
                    # verifica se existe sessão de usuario e se ele é administrador.
                    # se não for o primeiro caso, verifica se a sessao existe.
                    # por ultimo adiciona somente o link para o login se a sessão não existir. 
                    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 'ADM' )  {
                        echo "<li><a href='usuario_admin.php'>Admin</a></li>";
                        echo "<li><a href='logout.php'>Sair</a></li>";
                    } else if(isset($_SESSION['usuario'])) {
                        echo "<li><a href='logout.php'>Sair</a></li>";
                    } 
                ?>
            </ul>
        </nav>
    </div>
</header>

<style>
    .main_cta {
        width: 100%;
        background-image: url('../assets/img/LIBRATEC-cortado.png');
        background-color: #2d3142;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
</style>