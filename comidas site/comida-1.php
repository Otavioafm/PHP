<?php 
	if (isset($_POST['calcular'])) {
		$Qantidade = $_POST['Qantidade'];
		$multiplicador = 12;
		$resultado = $Qantidade * $multiplicador;
		echo "";
	}
	?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static css/comidas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Figtree:ital@1&family=Play&display=swap" rel="stylesheet">


    <title>Hamburger Expresso</title>
</head>
<body>
  
    <div class="conteiner">
     <h1 class="nome">Food Express</h1>
     <img class="foto" src="/img/comida/hamburger.webp" alt="hamburger">

     <h2 class="titulo">Hamburger Expresso</h2>
         <p class="ficha" > Calorias: 250g<br> <br> Gorduras Totais: 10g<br> <br> Colesterol: 27mg<br> <br> Sodio: 494mg<br> <br> Potássio 192mg<br>
          <br>Fibra Alimentar: 1,3g </p>
    </div>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="calculo">
          <h3 class="titulo-calculo">Qantidade</h3>
		 <input type="number" id="numero" name="Qantidade" required class="quantidade" value="1" min="1">

         <button type="number" class="preco">R$:<?php echo $resultado ?? ''; ?></button>

          <h3 class="titulo-preco">Preço</h3>
		<input type="submit" name="calcular" value="Calcular" class="btn-calcular">
	</form>
  
</body>
</html>







