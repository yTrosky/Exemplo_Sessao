<?php
    session_start();
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
    header('location:index.php');

}

$logado = $_SESSION['login'];
?>

<html>
    <head>
        <title>SESSÃO LOGADA</title>
    </head>
    <body>
        <?php echo "usuário logado: " . $logado; ?>
        <form  action="deslogar.php" method="POST">
            <button type="submit" name="sair">Sair</button>
       </form>
    </body>
</html>           