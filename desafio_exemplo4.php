<?php
$mensagem = "";
$peso = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$peso = $_POST['peso'];

	if ($peso >= 70.0) {
		$mensagem = "Seu peso está acima do recomendado.";
	} elseif ($peso >= 50.0 && $peso < 70.0) {
		$mensagem = "Seu peso está dentro do recomendado.";
	} else {
		$mensagem = "Seu peso está abaixo do recomendado.";
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Peso</title>
</head>
<body>
    <h1>Verificação de Peso</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Peso: <input type="number" name="peso" step="0.01" required><br><br>
		<input type="submit" name="submit" value="Calcular">
	</form>
    <p>Retorno: <?php echo $mensagem; ?></p>
    <p>Seu peso: <?php echo $peso; ?> kg</p>
</body>
</html>
