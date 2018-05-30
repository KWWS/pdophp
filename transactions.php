<?php
		$dbh = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
		$sql="UPDATE contas SET nome=:Nome, saldo=:Saldo WHERE id=:ID";
		
		$dbh->beginTransaction();
		
		$pstmQuery=$dbh->prepare($sql);
 
		$nome = "Pedro";
		$saldo = "900";
		$id = "8";
		
		$pstmQuery->bindParam(":Nome", $nome, PDO::PARAM_STR);
		$pstmQuery->bindParam(":Saldo", $saldo, PDO::PARAM_STR);
		$pstmQuery->bindParam(":ID", $id, PDO::PARAM_INT);
		
		$pstmQuery->execute();

		$dbh->commit();
		




?>