
<?php 
        #adicionando variaveis de sessao 
        session_start();

    if( isset($_POST["cadastro"]) ){
        $usuario = $_POST["usuario"];
        $senha =   $_POST["senha"];
    
        $login ="SELECT * ";
        $login .= "FROM cadastro ";
        $login .= "WHERE usuario = '{$usuario}' and senha = '{$senha}' ";
    
        $acesso = mysqli_query($login);
        if ( !$acesso) {
            die ("Ela morreu");
        }

        $informacao = mysqli_fetch_assoc($acesso);

        if ( empty($informacao)) {
            $mensagem = "Login deu erro";
        } else  {
            $_SESSION["user_portal"] = $informacao["usuario"]; 
            header("location:validar.php");
        }
    }
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::Login::.</title>
    
    </head>

    <body>
        <header>
        </header>
        
        <main>  
            <div id="janela_login">
                
                <form action="validar.php" method="post">
                <h1>LOGIN<h1>
               
                <input type="Text" name="usuario" placeholder="Usuario">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="login">
            </form>
        </main>
    </body>
</html>

