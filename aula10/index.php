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
    <p>sucesso</p><br>
<?php else:?>
    <p><?= $erro?></p>
<?php endif;?>

<?php 
echo "<br>";
echo "<--------------------->";
echo "<br>";

echo"<h1>Condicional switch case</h1><br>
switch = declarar<br>
case = se sim <br>
default = senao<br>
break = sair do swtch<br>
é possivel usar dois case, para ser um OU outro<br>
case<br>
case<br>
codigo<br>
break<br><br>
var = 1<br>
switch (var){ <br>
    case '0' <br>
        (codigo) <br>
    break; <br><br>
    
    case '1' <br>
        (codigo) <br>
    break; <br><br>

    default <br>
    (codigo)<br>
    break<br>
";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo"<h1>Condicional match (PHP8)</h1><br>
permite um if else em estrutura de array<br>
var = 5 <br>
res = match(var){<br>
    '1' => 'codigo'<br>
    '2' '3' => 'codigo<br>
    default => nenhum dos anteriores<br><br>
    
res(match){<br>
    var > 100 => 'maior que 100'<br>
    var < 100 => 'menor que 100'<br>
    default => 'igual a 100'<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>Operador ternario</h1><br>
idade=15<br>
eu sou . (idade => 18 ? 'maior de idade' : 'menor de idade)";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>WHILE</h1><br>
var = 1<br>
while(var <= 10){ <br>
    var<br>
    var++<br><br>
enquanto var for <= 10<br>
faça<br>
var +1";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>DO WHILE</h1><br>
var = 1<br>
do{<br>
    var<br>
    var ++<br>
} while(var <= 10)<br><br>

faça<br>
...<br>
enquanto var for <= 10";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>FOR</h1><br>
for(VAR = 1; VAR <= 10; VAR++){<br>
    VAR<br>
}<br><br>

para(valor da variavel; ate; incremento){<br>
    faça<br>
}<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>FOREACH</h1><br>
NOMES = ['jose', 'maria', 'joao']<br>
foreach(NOMES as NOME){<br>
    NOME<br><br>
    
por cada(array em item) faça<br>
por cada(array em chave => valor) faça<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "break e continue<br>
break interrompe o ciclo<br>
continue ignora o item<br>
NOMES = ['jose', 'maria', 'joao']<br>
foreach(NOMES as NOME){<br>
    NOME<br>
    if(nome == 'maria'){<br>
        break<br>
    }
        <br>";

        echo "<br>";
        echo "<--------------------->";
        echo "<br>";

echo "<h5> exercicios repetiçoes</h5><br>"
?>
<?php for($i=1; $i<=10; $i++):?>
    <p><?=$i?>x5 = <?= $i*5 ?></p>
    
<?php endfor;?>

<br>------------------------<br>

<?php $res327 = [1,2,3,4,5,6,7,8,9,10]?>
<?php foreach($res327 as $res):?>
    <p><?= $res * 327?></p>
<?php endforeach; ?>

<br>------------------------<br>

<?php $nomes = ["joao", 'jose', 'maria', 'rosa']?>
<?php foreach($nomes as $nome):?>
    <?php if($nome ==='maria') continue?>
            <?= $nome ?> ,
<?php endforeach;?>

<br>------------------------<br>
<style>
    .red{
        color: red;
    }
</style>
<?php foreach($nomes as $nome):?>
    <?php if($nome >= $nomes[1]):?>
        <p class="red"><?= $nome ?></p>
    <?php else:?>
        <?= $nome ?>
    <?php endif;?>
<?php endforeach;?>

<br>------------------------<br>

<?php 
echo "<h1>funções</h1><br>
function nome_da_funçao(parametros){codigo};<br>
nome_da_funçao()<br>
case INSENSITIVES<br><br>
return...
usadas para devolver um valor<br>
retornar é diferente de apresentar<br>
podemos atribuir o valor de retorno a uma variavel<br>
var = funcao()<br>
";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h2>Parametros</h2><br>
parametros: variaveis disponiveis para ser usadas na funçao<br>
argumentos: sao os valores que passamos dentro dessa funçao<br>
function adicionar(a,b){return a+b}<br>
echo adicionar(100,50)<br>"
?>