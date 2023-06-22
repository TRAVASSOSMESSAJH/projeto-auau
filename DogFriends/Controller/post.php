<html>
<?php
	require("../Model/acessaBD.php");
    session_start();
	$username = $_SESSION['username'];
	if(insereNovoPost($username, $_POST['post'])){
        echo  "<form action='../View/feed.php' method='post'>";
        echo "<input type='submit' class='btn btn-light' value='Recarregar'>";
        echo "</form>";
	}
	else{
	    echo "<br><br>Erro no cadastro";
	    echo  "<form action='../View/index.html' method='post'>";
	    echo "<input type='submit' class='btn btn-light' value='Tentar novamente'>";
	    echo "</form>";
	}	
?>
</html>
