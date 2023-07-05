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

PROTECTED acessado apenas dentro da classe (classes derivadas)<br><br>

PRIVATE so pode ser acessado dentro da classe"
?>