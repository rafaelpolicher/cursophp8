<?php
session_start();
// mostrar erro se nao for acessado via POST
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso invalido');
}


//mostrar erro se algum dos valores nao forem numericos (validaçao de formulario)
if(empty($_POST['text_valor_1']) || empty($_POST['text_valor_2'])){
    $_SESSION['erro'] = 'os dois valores sao de preencinhmento obrigatorio';
    header('location: index.php');
    return;
}



//mostrar a multiplicaçao do 1 por 2
$valor1 = $_POST['text_valor_1'];
$valor2 = $_POST['text_valor_2'];
if(!is_numeric($valor1) || !is_numeric($valor2)){
    $_SESSION['erro'] = 'os dois valores precisam ser numericos';
    header('location: index.php');
    
    return;
}
$resultado = $valor1 * $valor2;
?>

<p><?= $valor1 ?> * <?= $valor2 ?></p>
<p>resultado = <?= $resultado ?></p>