<html>
	<body>

	<?php   

		$comentario = $_POST['campoTexto'];

			$banco.transaction(
				function(transaction) {

				 	transaction.executeSql('INSERT INTO Comentario (Numero, ComentarioCirc1, ComentarioCirc2, ComentarioCirc3, ComentarioBRT, ComentarioOutro) VALUES ("numero",$comentario.value, "teste2", "teste3", "testebrt", "testeoutro")');
				}
			);
			
		

	?>

	</body>
	</html>
	