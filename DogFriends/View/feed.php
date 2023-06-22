<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="icon" type="image/png" href="imagens/iconeAba.png">
</head>
<body class="fundo">
    <div class="flex vertical center">
    <div id="menu">
				<ul>
					<li><img src="imagens/logoMenu.png" width="100% "  /></li>
					<li><a href= "perfil.php"><img src="imagens/iconeHome.png" width="20%" title="Perfil"/></a></li>
					<li><a href= "amigos.php"><img src="imagens/iconeAmigos.png" width="20%" title="Amigos"/></a></li>
					<li><a href= "caes.php"><img src="imagens/iconeCaes.png" width="20%" title="Cães"/></a></li>
					<li><a href= "feed.php"><img src="imagens/iconeUsers.png" width="20%" title="Sair"/></a></li>
					<li><a href= "index.html"><img src="imagens/sair.png" width="20%" title="Sair"/></a></li>				
				</ul>
		</div>	
        <div class="flex vertical box">	
        <form class="flex vertical" action="../Controller/Post.php" method="post">
            <input type="text" name="post" placeholder="Deixe seu recado pra galera">		
            <input class="button" type="submit" value="POSTAR">
        </form>
		</div>
        <div class="flex vertical box">	
            <?php 
                require("../Model/acessaBD.php");
                session_start();
                exibePosts();
            ?>		
		</div>
    </div>
</body>