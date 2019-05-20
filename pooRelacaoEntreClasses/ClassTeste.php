<pre> 
<?php 

//Na classe teste em vez de instanciar a classe e ter que criar varios lutadores como por ex ($l1, $l2, $l3..) criamos um vetor com os 6 lutadore

require_once "ClassLutador.php";

//instancio a classe Lutador agora como um vetor
//forma antiga $lut= new Lutador("Pretty Boy", "Franca", 1.75, 31, 68.9, 11, 3, 1); agora crio vetor:

$lut = [];// ou $lut = array();



//preciso colocar a mesma qttidade de parametros declaradas no construtor
$lut[0] = new Lutador("Pretty Boy", "Franca", 1.75, 31, 68.9, 11, 3, 1);

$lut[1] = new Lutador("Putscript", "Brasil", 1.68, 29, 57.8, 14, 2, 3);

$lut[2] = new Lutador("Snapshadow", "EUA", 1.65, 35, 80.9, 12, 2, 1);

$lut[3] = new Lutador("Dead Code", "Australia", 1.93, 28, 81.6, 13, 0, 2);

$lut[4] = new Lutador("UfoCobol", "Brasil", 1.70, 37, 119.3, 5, 4, 3);

$lut[5] = new Lutador("Nerdart", "EUA", 1.81, 30, 105.7, 12, 2, 4);


//stampo
$lut[3]->apresentar();//apresentacao lutador 3
$lut[3]->perderLuta();
echo "<hr>";
$lut[3]->apresentar();//apresentacao lutador 3 com 1 derrota depois de chamar metodo perderLuta


echo "<hr>";
$lut[2]->status();//status lutador 2

echo "<hr>";
echo $lut[3]->getCategoria();
echo "<hr>";
echo $lut[4]->getCategoria();
echo "<hr>";
echo $lut[5]->getCategoria();

echo "<hr>";

//essa forma melhor pq com 1 print de $lut eu mostro 1 array com todos os lutadores
print_r($lut);







 ?>
 </pre>