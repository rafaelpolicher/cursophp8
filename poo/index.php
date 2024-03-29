<?php 
echo "<h1>programaçao orientada a objetos</h1><br>

<h2>classes</h2><br>
bloco de codigo que serve de modelo para criar objetos, com propriedades e metodos<br><br>
class Fruto { } <br>
Slaranja = new Fruto <br>
Sbanana = new Fruto <br><br>

hereditariedade<br>
classe veiculo > classe terrestre > carro <br>
classe veiculo > classe maritimo > barco <br><br>

class Fruto { //classe <br>
public Snome; //prorpiedade <br>
public function mostrar(){ //metodo<br>
    return 'meu nome é Sthis->nome' <br>
}<br>
} <br>
<br>

Slaranja = new Fruto <br>
Slaranja->nome = 'Laranja';<br><br>

echo Slaranja->mostrar()<br><br>

classes<br>
prorpiedades sao variaveis da classe<br>
metodos sao funçoes da classe

<h2>objetos</h2><br>
instancias de uma classe, qiando criada cada objeto vai conter as prorpiedades e metodos da classe, cada objeto tera vida propria<br><br>

<h2>acess modifiers</h2><br>
os metodos e prorpiedades podem ter niveis de acesso distintos<br><br>

PUBLIC acessado de qualuqer lado<br><br>

PROTECTED acessado apenas dentro da classe e de classes derivadas dela<br><br>

PRIVATE so pode ser acessado dentro da classe<br><br>

<h2>Construtor</h2><br>
metodo especial dentro da classe que vai ser executado sempre que um novo objeto é criado<br><br>

class Mulher { <br>
    public Snome; <br>
}<br><br>

function __construct(Sn){ <br>
    Sthis->nome = Sn <br>
} <br><br>

Sn = new Mulher('ana')<br><br>


<h2>Destrutor</h2><br>
assim como construtor, existe um metodo que sera executado quando o objeto é destruido e termina sua execuçao<br><br>

function __destruct(){<br>
    echo o objeto foi destruido, tinha o nome Sthis->nome } <br><br>
    
    unset(Sn)<br><br>
    
<h2>hereditariedade</h2><br>
é possivel herdar prorpiedades e metodos de outras classes<br><br>

class Automovel extends Veiculo{} <br>
todas as prorpiedades e metodos que existem em veiculo, tambem existira em automovel<br>

<h2>Sobreposiçao de metodos herdados</h2><br>
podemos ter uma classe mae e alterar o codigo da classe filho<br><br>
basta usar o mesmo nome do metodo da classe mae, e entao alterar o codigo da classe filho<br><br>

<h2>impedir herança de classe ou metodo</h2><br>
impedir que uma classe nao possa ser herdada por outra, ou impedir que um metodo seja sobreposto na classe filha<br><br>

final class Classe{  <br>
 final public function naoherdar() }<br><br>
 
<h2>Classes e metodos abstratas</h2><br>
metodos declarados, porem havera codigo apenas nos filhos<br><br>

abstract class Pessoa{ <br>
    absctract public function falar() } <br><br>
    
class Cliente extends Pessoa{ <br>
    public function falar() codigo } <br><br>

caso cliente nao haja todos os metodos de pessoa, gerara um fatal error<br>


<h2>traits</h2><br>
trait funçoes_matematicas{ <br>
    public function somar(Sa, Sb){ <br>
        return Sa + Sb } } <br><br>
        
class calculadora{ <br>
    use funcoes matemaricas} <br><br>
    
Scalc = new Calculadora(): <br>
Scalc->somar(10,20)<br><br>


<h2>metodos estaticos</h2><br>
nao é necessario instanciar uma nova classe para acessar um metodo<br><br>

Class Matematica{ <br>
    public static function adicionar(Sa, Sb){<br>
        return Sa + Sb } } <br><br>
        
Matematica::adicionar(20,10)<br><br>

<h2>prorpiedades estaticas</h2><br>
class Matematica{ <br>
    public static Spi = 3,14 } <br><br>
    
echo Matematica::Spi<br><br>


<h2>namespace</h2><br>
seve para organizar as classes permitindo agrupa-las<br>
dentro do mesmo projeto, existir classes com o mesmo nome em namespaces diferentes para caso use varios progamadores no mesmo projeto, pode ser que que hajam classes com o mesmo nome<br><br>

namespace classes_principais<br><br>

todas as classes criadas dentro desse arquivo pertencerao a este arquivo <br><br>

precisa importar o aquivo require<br>
use classes_principais\Matematica
Smatematica = new Matematica()<br><br>

<h2>Declaraçao stricted types</h2><br>

PHP é conhecida por ser fracacamente tipada, porem com a evoluçao do php é possivel definir o tipo de metodos e prorpiedades<br><br>

function apresentar(String Svariavel){ echo Svariavel }<br><br>

declare(strict_types = 1) faz com que a definiçao de tipo seja obrigatoria <br><br>
";
?>