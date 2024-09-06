<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="demo-page">
    <section>
      <div class="href-target" id="input-types"></div>
      <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10" /><line x1="21" y1="6" x2="3" y2="6" /><line x1="21" y1="14" x2="3" y2="14" /> <line x1="21" y1="18" x2="3" y2="18" /></svg>
          Fundamentos do PHP </h1>
      <p> Lista 1 </p>
 
    <?php
 
    $nomeDoAluno = $_POST["nome-do-aluno"]; 

  $nota1 = $_POST["nota1"];
  $peso1 = $_POST['peso1'];
  $nota2 = $_POST['nota2'];
  $peso2 = $_POST["peso2"];
  $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

  echo "<p> Caro(a) aluno(a) <span> $nomeDoAluno </span>, de acordo com os dados fornecidos, sua média final é igual a <span><strong> $media </span> </strong></p>";
 ?>
</div>
</section>
</div>
</body>
</html>
