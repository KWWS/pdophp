<h1>Banco do Brasil </h1> 
<table width="100%" border="1">
<tr>
	<td> ID </td>
	<td> Cliente </td>
	<td> Saldo </td>
	<td> Transferir </td>
	<td> Apagar </td>
	<td> Editar </td>
</tr>	
<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
	
	$sql="SELECT * FROM contas ORDER BY id ASC";

	foreach($dbh->query($sql) as $row) {
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["nome"]."</td>";
		echo "<td>".$row["saldo"]."</td>";
		echo "<td><a href='acao.php?id=".$row["id"]."'> Transferir Valor </td>";
		echo "<td><a href='apagar_conta.php?id=".$row["id"]."'> X </td>";
		echo "<td><a href='editar_conta.php?id=".$row["id"]."'> OK </td>";
		echo "</tr>";
		//echo "A";
		//echo $row["nome"]."<br>";
		//echo $row["saldo"]."<br>";
      //  print_r($row);
	}
   // $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?> 
</table>
<a href="nova_conta.php">Cadastrar</a>
