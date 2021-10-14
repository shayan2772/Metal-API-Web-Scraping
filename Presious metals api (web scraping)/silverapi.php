<?php 
include ('simple_html_dom.php');

$websiteurl ="https://www.moneymetals.com/precious-metals-charts/silver-price";
$html = file_get_html($websiteurl);


// spot-prices-list


foreach ($html->find('.spot-prices-list') as $postDiv)
 {
	// echo "<pre>";
	// die(var_dump($postDiv));
	foreach ($postDiv->find('#sp-price-gold') as $gold) 
	{
		$response["gold"] = $gold->plaintext;
		// echo $gold->plaintext;
		// echo (explode("$",$gold));
	// 	echo "<pre>";
	// die(var_dump($gold));
	}
	foreach ($postDiv->find('#sp-price-silver') as $silver) 
	{
		// echo $silver->plaintext;
		$response["silver"] = $silver->plaintext;
	}

	foreach ($postDiv->find('#sp-price-platinum') as $platinum) 
	{
		// echo $silver->plaintext;
		$response["platinum"] = $platinum->plaintext;
	}
// rhodium
			
     foreach ($postDiv->find('#sp-price-palladium') as $palladium) 
	{
		// echo $silver->plaintext;
		$response["palladium"] = $palladium->plaintext;
	}       


foreach ($postDiv->find('#sp-price-rhodium') as $rhodium) 
	{
		// echo $silver->plaintext;
		$response["rhodium"] = $rhodium->plaintext;
	}       



$json_response = json_encode($response);
    echo $json_response;    

}

?>