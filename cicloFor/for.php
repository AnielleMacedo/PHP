<?php


/*for ate 1000 pulando de 5 emm 5
for($i=0; $i<=1000; $i+=5){
	echo $i ."<br>";
}*/

//do 200 ate o 800 nao quero fazer aparecer na tela entao uso o CONTINUE
//e quando chegar no 900 quero que pare o loop entao uso BREAK
for($i=0; $i<=1000; $i+=5){
	if($i>=200 && $i <=800)
		continue;
	if($i===900)
		BREAK;
	echo $i ."<br>";
}




?>