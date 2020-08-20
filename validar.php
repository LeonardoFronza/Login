 <!DOCTYPE html>

<html>
    <head>
        <title>Sucesso!</title>
        <meta charset="utf8"/>
        
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
       
         <link rel="stylesheet" href="_css/validar.css"/>
         <link rel="stylesheet" href="_css/texto.css"/>
    </head>

    <body>
   
    <?php 
        require_once('conexao.php');

        $usuario = $_POST['usuario'];
        $email   = $_POST['email'];
        $senha   = $_POST['senha'];

        $bancoDados = new db();

        $link = $bancoDados->conecta_mysql();

       $sql = "insert into usuarios(usuario, email, senha) values ('$usuario','$email','$senha')";

        mysqli_query($link, $sql);
    ?> 
    <header>
    <nav>
	        <div>
	          <ul id="naveg">
	           	 <li><a href="index.php">Voltar</a></li>
	          </ul>
	        </div>
        </nav>
        </header>

    <main> 
        <section id="text">
            <h1>Seu cadastro foi um Sucesso!!</h1>
            
        </section>   
    </main>
    </body>
</html>