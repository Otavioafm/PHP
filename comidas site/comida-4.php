<?php 
	if (isset($_POST['calcular'])) {
		$Qantidade = $_POST['Qantidade'];
		$multiplicador = 11;
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


    <title>Porçao De Nuggets Mágicos</title>
</head>
<body>
  
    <div class="conteiner">
     <h1 class="nome">Food Express</h1>
     <img class="foto" src="/img/comida/Nuggets.webp" alt="hamburger">

     <h2 class="titulo"> Porçao De Nuggets Mágicos</h2>
         <p class="ficha" > Calorias: 155kcal<br> <br> Gorduras Totais: 9g<br> <br> Colesterol: 27mg<br> <br> Sodio: 300mg<br> <br> Fibra alimentar 1g<br>
          <br>Carboidratos: 10g </p>
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







