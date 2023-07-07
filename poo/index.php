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
 final public function naoherdar() }<br><br>"
?>