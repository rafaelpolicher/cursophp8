<?php 
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


echo "para converteu uma string em numero coloca-se o sinal de + antes da string"
?>

