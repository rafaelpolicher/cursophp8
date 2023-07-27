<h1>PHP e mySQL</h1>
cliente -> request servidor web <-> base de dados <br>
resultados: nada/ valor unico/ arr associativo/ array de objetos <br>

<h2>MySQLi x PDO</h2><br>
<b>MySQL improved</b> <br>
vantagens: procedural ou orientada a objetos/ bom desempenho/ sintaxe simples <br>
desvantagens: so permite connexao com mysql/ queries parametrizadas nao tem parametros nomeados <br>
<b>php Data objects</b>
vantagens: orientada a objetps/ tem parametros nomeados/ permite conexao com 12 tipos de base de dados <br>
desvantagens: nao é tao performativo <br>
mais recente e tendencia maior <br>
<hr>
<?php

// CONECTAR VIA PDO E CONTROLO DE ERROS

/* 
Vamos começar por aprender como conectar a nossa aplicação à base de dados
importada no vídeo anterior.
*/

// 1. definir as propriedades da ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = '123';

// Efetuar a ligação.
// Para isso vamos criar uma instância da classe PDO.
// Necessitamos de 3 parâmetros: o DNS (Data Source Name), onde vamos
// especificar, no mínimo, o host e o nome da base de dados
// O segundo parâmetro é o nome de usuário do MySQL e o terceiro, a password
// desse usuário
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

// verificar se a ligação foi estabelecida corretamente
$estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado;   // localhost via TCP/IP

/* 
Como podemos ver, conseguimos fazer a ligação à base de dados e estamos
em condições de poder fazer as nossas queries.

É importante perceber que existem 3 etapas numa comunicação com a base de dados:
1. Conectar com a base de dados;
2. Comunicar com a base de dados;
3. Fechar a ligação para libertar recursos.

A ligação vai ficar aberta até à destruíção do objeto PDO().
Para "desligar" a conexão, bastará destruir o onjeto $ligacao
*/

$ligacao = null;

// Se não fechar a ligação de forma explícita, a ligação vai ser interrompida
// quando o nosso script chega ao fim da sua execução.