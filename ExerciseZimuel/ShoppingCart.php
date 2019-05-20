<pre> 
<?php 

/**
 * fazer uma classe chamada ShoppingCart e criar os metodos com os seguintes parametros:
 addProduct($product, $quantity):bool
 changeQuantity($product, $quantity)
 removeProduct($product):bool
 removeAllProducts():bool
 */
class ShoppingCart
{

	public $ordine = [];
	//public $product;
	//public $quantity;
	

	/*function __construct($prod, $quant)
	{
		$this->ordine = 0;
		$this->product = $prod;
		$this->quantity = $quant;
	}*/

	public function addProduct($newProduct,$newQuantity):bool {

		return $this->ordine[$newProduct]= $newQuantity; 
			
	}
	

	public function removeProduct($product) {

    if (isset($this->ordine[$product])) {
        unset($this->ordine[$product]);
    }

    else {

        echo "Impossibile rimuovere un prodotto inesistente.";
    }
		}


	public function removeAllProducts(){

		$this->ordine = [];

		}

	public function changeQuantity($product,$newQuantity): bool{

		 if (isset($this->ordine[$product])){
		 	//se o produto existe na lista da a esse produto uma nova quantidade
		 	return $this->ordine["$product"] = $newQuantity;
		 }
		 else
		 	return "Produto inexistente";

		}

}


//instacio classe
$p1 = new ShoppingCart();

print_r($p1);//se imprimo n tem nda dentro per ora

echo "<hr>";
$p1->addProduct("televisao",1);
$p1->addProduct("camera fotografica",4);
$p1->addProduct("goPro", 3);
$p1->addProduct('mobile phone',4);
print_r($p1);


echo "<hr>";
$p1->changeQuantity("televisao",80);
$p1->changeQuantity("mobile phone",45);
print_r($p1);

echo "Metodo booleano se true retorna: ". $p1->addProduct("Suplemento", 2);

echo "<hr>";

//removendo um produto especifico
$p1->removeProduct("televisao"); //apagou a tv e quantidade
$p1->removeProduct("goPro"); 
$p1->removeProduct("goPro"); //prov a rimuovere prodotto insistente
echo "<hr>";
print_r($p1);

//removendo todos os produtos 
echo "<hr>";
$p1->removeAllProducts();
print_r($p1);




 ?>
 </pre>