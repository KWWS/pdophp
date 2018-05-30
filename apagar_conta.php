<?php
	if(isset($_GET["id"])){
		$dbh = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
		$sql="DELETE FROM contas WHERE id= :Id";
		$pstmQuery=$dbh->prepare($sql);
 
		$pstmQuery->bindParam(":Id", $_GET["id"], PDO::PARAM_INT);
		$pstmQuery->execute();
		
		if ($pstmQuery->rowCount()>0){
			echo "Conta apagada com sucesso";
		}

	}
?>
