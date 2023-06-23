<?php
echo "<h5>https://www.php.net/manual/pt_BR/index.php</h5><br>" ;
echo "declarar contantes" . PHP_EOL;
define('VALOR', 10); //letras maiusculas
echo VALOR;
echo "<br>";
echo "<--------------------->";
echo "<br>";
?>

<?php
echo "constantes do php" . "<br>";
echo PHP_VERSION . "<br>";
echo "este codigo esta na linha " . __LINE__ . " (constante dinamica)";




echo "<br>";
echo "<--------------------->";
echo "<br>";


echo "<h1>data types</h1><br>";
echo "bol = true/false true=1; false=(nada)<br>
int/inteiros/integers: numero sem decimais <br>
float: numeros com decimais(flutuante)<br>
string: alfanumericos entre aspas usando aspas duplas é possivel mostrar variaveis dentro da string <br><br>
para mostrar o tipo de dado: gettype(nomedavariavel)<br>
mostrar tipo de dado e o valor: var_dump(nomedavariavel)<br>
var_dump(is_bol/int/float/string/null(VAR)";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "para transformar str em int:<br>
var-str = '123' <br>
var-int = (int)var-str <br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "VAR = 10<br>
unset(VAR) //apaga a variavel, vira null<br>
is_null(var) ou empty(var)";
  

echo "<br>";
echo "<--------------------->";
echo "<br>";


echo "<h1>ARRAYS</h1><br>";
echo "verifiar se a chave do array existe: var_dump(isset(arr[200]));<br>
arr[]='novo-valor'   sera adicionado ao final do array, igual array_push(arr, valor)<br>
adicionar: array_push(arr, valor)<br>
remover: unset(arr[5])<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";
echo "<h1>ARRAYS MUKTIDIMENCIONAIS(array que contem arrays</h1><br>";
echo "lojas = ['sp' => ['tel' => 123], 'rj' => ['tel' => 321]]<br>
apresentar valor especifico: lojas['sp']['tel']<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>Funçoes acossiadas a arrays</h1><br>
verificar se é array: is_array(ARRAY)<br>
veficar quantos elementos tem na array: count(ARRAY)<br>
adicionar ao final: array_push(ARRAY, 'itemnofinal')<br>
adicionar no inicio: array_unshift(ARRAY, 'itemnoinicio')<br>
excluir do final: array_pop(ARRAY)<br>
excluir do inicio: array_shift(ARRAY, )<br>
excluir específico: unset(ARRAY[3])";

echo "para converteu uma string em numero coloca-se o sinal de + antes da string";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>Comparaçao</h1><br>
resultado booleano<br>
==  igual<br>
=== identico<br>
!=  diferente<br>
!== difrente (valor e tipo)<br>
<>  diferente<br>
>   maior<br>
<   menor<br>
>=  maior ou igual<br>
<=  menor ou igual<br>
<=> primeiro é maior que o segundo?(sim =1/ igual = 0/ nao =-1<br>
++  auto incremento +1<br>
--  auto decremento -1";

echo "<h3>condicionais ternario if else</h3><br>
? se sim<br>
: senao<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>operadores logicos</h1><br>
&& 'e' true se todas forem verdadeiras<br>
|| 'ou' true se uma for verdadeira<br>
!  'nao' ";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo"<h1>condicional if, elseis, else</h1><br>
se(condiçao){<br>
    codigo<br>
} senao se(condiçao){<br>
    codigo<br>
} senao{<br>
    codigo<br>
}<br>";

echo"exercicios:<br>";
$produtos = ['arroz', 'batata', 'laranja'];
foreach($produtos as $produto){
    echo "<ul><br>";
    echo "<li>$produto</li>";
    echo "</ul><br>";
}
echo "-----------";

array_reverse($produtos);
array_push($produtos, 'maça', 'pera');
?>
<?php foreach($produtos as $produto):?>
    <ul>
        <li><?=$produto?></li>
    </ul>
<?php endforeach;?><br>
---------------------<br>
<?php sort($produtos)?>
<?php foreach($produtos as $produto):?>
    <ul>
        <li><?=$produto?></li>
    </ul>
<?php endforeach;?><br>
---------------------<br>
<?php $nome = 'joao'?>
<?php if($nome = 'joao'):?>
    o nome é joao
<?php endif;?><br>
---------------------<br>
<?php $lojas = [
    'lisboa' => 'lisboa@gmail.com',
    'porto'  => 'porto@gmail.com',
];
$cidade = 'lisboa'?>

<?php if(key_exists($cidade, $lojas)):?>
    <?= $cidade?><br>
    <?= $lojas[$cidade]?>
<?php else:?>
    <p>nao existe loja nessa cidade</p>
<?php endif;?><br>
---------------------<br>
<?php $erro = ''?>

<?php if(empty($erro)):?>
    <p>nao ha erros</p><br>
<?php else:?>
    <p><?= $erro?></p>
<?php endif;?>