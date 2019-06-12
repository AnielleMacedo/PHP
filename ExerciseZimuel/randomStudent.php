<pre> 
<?php //declare(strict_types=1);


	echo "Programa Random ITS";
	echo "<hr>";

	

	$alievi = array("Bert Lorenzo","Buscema	Antonio","Carbonati Davide",
					"Cella	Marco","D'Augelli Mario","Dumitru Adrian",
					"Faoro	Claudio","Ferrero Leonardo","Fornaro Roberto",
					"Macedo	Anielle","Gregoricchio Matteo","Iacobelli Sara",
					"Laurenti Diana","Linari Matteo","Lo Presti Ilaria",
					"Mason Alessandro","Morales	Yusdel","Pietrapertosa Fabio",
					"Presutti Edoardo","Reale Andrea","Revelli Ruben",
					"Sacchet Gabriele","Sartori	Alessandro","Schutt	Daniele",
					"Sinatra Gianpaolo","Soncin	Erika","Vellano Marco","Velocci Giuseppe");





	function divide_groups( $my_array, $n_groups ) {
	    $arr_len = count( $my_array );
	    $partlen = floor( $arr_len / $n_groups );
	    $partresto = $arr_len % $n_groups;
	    $partition = array();
	    $mark = 0;

	    for ($px = 0; $px < $n_groups; $px++) {
	        $incr = ($px < $partresto) ? $partlen + 1 : $partlen;
	        $partition[$px] = array_slice( $my_array, $mark, $incr );
	        shuffle($partition);
	        $mark += $incr;
	    }
	    return $partition;
	}

	//insere na funcao o array desejado e o numero de grupos que vc quer fazer
	print_r(divide_groups($alievi, 10)) ; //escolhe 10 ou 9


		

?>
</pre>