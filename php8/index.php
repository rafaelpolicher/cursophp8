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
echo adicionar(100,50)<br><br>
o php vai tentar determinar o tipo de dado dos parametros e do retorno, porem é possivel determinar o tipo<br>
function adicionar(a,b): int";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>escopo de variaveis</h1><br>
para usar uma funçao de escopo global dentro de uma funçao, usar 'global'<br>
nome = 'joao'<br>
function funcao(){global nome}";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>Include e require</h1><br>
importaçao de codigo<br>
include - mostra aviso se o arquivo nao existe e continua a execuçao do codigo<br>
require - se o arquivo nao existe gera um fatal error<br><br>

_once - carrega apenas uma vez<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>sessoes</h1><br>
mecanismos do php para manter informaçoes entre diferentes requests - sempre que um pedido é feito, a informçao é perdida<br>
com sessoes podemos guardar dados temporariamente no servidor<br>
por exemplo, em uma unica navegaçao, é possivel que o session guarde informaçoes na sessao até que usuario saia do site<br><br>
devem ter o inicio da sessao<br>
session_start()<br>
deve ser usada'$'_SESSION['variavel'] para acessar a variavel guardada na sessao _SESSION['nome']='joao'<br>
_SESSION contem um array com todas as variaveis que estao na sessao<br>
<b>unset(variavel)</b> remove o valor de uma variavel<br>
<b>session_unset</b> remove todas as variaveis<br>
<b>session_destroy</b> remove a sessao<br>
<br>
-------------------------------------
<br><br>

<h1>cookies</h1><br>
<b>_COOKIE</b><br>
session_name('minha_sessao) <br>
session_set_cookie_params(60*3) - a sessao durará 3 minutos (recomendavel usar até 30 minutos)<br>
session_start() <br><br>
cookies servem para guardar dados do lado do cliente, o uso mais comum é de guardar sessoes do utilizador(login)<br>
setcookie(nome, valor, time() + expiraçao) - criar cookie<br>
setcookie(nome, '', time() -1) - remover cookie<br><br>

exemplo tema claro/escuro:<br>
theme = !empty(_COOKIE['theme']) ? _COOKIE['theme'] : 'ligth'<br>
criar uma tag 'a' com href light.php e outra com dark.php
(css usando classes .light e .dark)<br><br>

criar um arquivo light.php/dark.php e criar um cookie<br>
setcookie('theme', 'light', time() +3600)<br>
header('Location: index.php') - redireciona para index.php<br>
setcookie('theme', 'dark', time() +3600)<br><br>

caso nao exista um cookie definido o tema sera light, caso exista um cookie chamado theme, o tema sera dark";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>FILESYSTEM</h1><br>
php tem um conjunto de funçoes para a manipulaçao de pastas e arquivos no servidor: criar e remover/ efetuar leitura e escrita/ obter informaçoes...<br>
. pasta atual<br>
.. pasta anterior";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>Constantes magicas</h1><br>
sao 9, sao definidas como cinstantes magicas por que seu valor é definido dependendo do local onde estao sendo usadas<br><br>

__LINE__ - indica a linha do codigo<br><br>

__FILE__ - o caminho completo do arquivo<br>

__DIR___ - a pasta a qual pertence o arquivo<br>

__FUNCTION__ - nome da funçao onde o codigo esta sendo executado<br>
__CLASS__ / __TRAIT__ / __METHOD__ / __NAMESPACE__<br>";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>Super globais</h1><br>
variaveis em forma de arrays ques estao sempre disponiveis, e que podemos manipilar atraves da superglobal GLOBALS<br><br>

function apresentar(){ global nome }<br>
ou<br>
echo GLOBALS['nome'] <br><br>

GLOBALS['nome'] = 'joao' - para alterar valor<br>

<h5>SERVER</h5><br>
_SERVER['PHP_SELF'] - nome do script em execuçao<br>
_SERVER['SERVER_ADDR'] - ip do servidor<br>

_SERVER['NAME'] - nome do servidor<br>

entre outros <br>

<h5>SERVER</h5><br>
session_start()<br>
_SESSION[''] = ''<br>

<br>------------------------<br>

<h1>_GET</h1><br>
vera endereços assim:<br>
https://www.nomedosite.com/index.php?id=1Sprd=25<br>
? - da inicio a uma query string que é o cinjunto de parametros que vamos poder captar dentro do nosso script<br>
cada parametro esta definido por um nome e valor id=1<br><br>
$ - permite separar parametros de uma querystring<br><br>
<br>
a super gloal get é um array onde sao automaticamente colocados os parametros de uma querystring<br>
<br>
se o get estiver vazio, quer dizer que nao existem parametros na query string<br><br>

para captar um determinado valor da querystring, recoremos a chave do array associativo de GET<br>
S_GET['id']<br>
se a variavel nao existir gerara um erro<br>
deve-se primeiro identificar se existe com if(iseet(S_GET['id']))";

echo "<br>";
echo "<--------------------->";
echo "<br>";

echo "<h1>fomularios</h1><br>
form action=submissao.php method=post<br>
input type=text name=text_username<br>
input type=submit<br><br>

submissao.php<br>
if(S_SERVER['REQUEST_METHOD'] != 'post'{acesso invalido<br><br>
    
criar uma variavel e adicionar o conteudo inserido no imput<br>
Susername = isset(S_POST['text_username'] ? S_POST['text_username'] : ''<br>
se existir algo escrito no text username, ira postar no text_username<br><br>

verificar se o login é valido<br>
Suser = ['username' => 'joao']<br><br>

if(Susername == Suser['username']{login valido}<br><br>

usar a funçao nativa do php<br>
password_verify()<br><br>

-------------------<br>

<h5>GET x POST</h5><br>
para enviar formulario sempre usar POST<br><br>

---------------------<br>

<h5>Validaçao de fomularios</h5><br><br>
niveis de validaçao<br>
1 html<br>
2 javascript, antes da submissao<br>
3 servidor<br>
boa pratica é ter os 3 niveis<br><br>
form action=submissao.php method=post<br>
input type=text name=text_username<br>
input type=submit<br><br>

<b>3 servidor</b><br>
declarar array erros<br>
se houver algum erro, adicionar o indice ao array e entao mostrar os erros<br><br> 
Serror = []<br>
if(empty(S_POST['text_texto])){ Serros[] = 'o campo é obrigatorio' <br>
} else { if (strlen(S_POST['text_texto']) < 5 <br>
    Serros['o campo deve ser maior que 5']<br><br>
    
if(!empty){ <br>
foreach (Serros as Serro){ Serro } <br
else { ... }<br><br>

<b>2 cliente js</b><br>
https://www.udemy.com/course/desenvolvimento-web-compacto-e-completo/learn/lecture/36050180#content <br><br>


<b>validaçoes</b><br>
simples: possivel tambem fazer a validaçao com is_numeric()/ is_string()/ empty()<br>
complexa: usar strlen() / email valido: filter_var(Semail, FILTER_VALIDATE_EMAIL)/ url valida: filter_var(Surl, FILTER_VALIDATE_URL / 
<br><br>

---------------------<br>

<h1>Funçoes relacionadas a erros</h1><br>

o php contem um conjunto de funçoes ára lidar com erros, e permite definir a regra de apresentaçao ou ocultaçao de erros<br>
podemos tambem usar com registro de logs, que é guardar um historico de evento que vao acontecendo na aplicaçao, é possivel ver os erros e identificar quando eles ocorrem<br><br>

error_reporting(E_WARNING) mostra o tipo de erro (olhar documentaçao)<br><br>

error_log('aconteceu um erro') ficara no registro de logs<br>
phpinfo() mostra o registro de logs<br><br


--------------------<br>

<h1>Tratamento de erros</h1><br>

devemos fazer com que nossa aplicaçao seja capaz de seguir um caminho alternativo caso ocorra um erro<br><br>
exceçao<br>

function adicionar(Sa, Sb){ <br>
    if(!is_numeric(Sa) || !is_numeric(Sb)){ <br>
        trhow new Exception('um dos valores nao é  numerico')<br>
    }<br>
    return Sa - Sb<br>
}<br> gerará um fatal error<br><br>

try catch<br>
try { <br>
    echo adicionar('joao', 10)<br>
} catch (Exception Serro) {<br>
    echo Serro->getMessage()<br>
}<br>
nao gerara um fatal error e o script sera apresentado<br><br>

try { codigo que pretendemos executar }<br>
catch { codigo sera executado caso tenha erro }<br>
finally { sera executado com erro ou nao } <br>";
?>