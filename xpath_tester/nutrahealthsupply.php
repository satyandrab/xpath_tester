<P>Here's an example:</P>
<?php
$test_url = 'http://www.nutrahealthsupply.com/GAT/Nitraflex';
$arrXpaths = array(
					'Price' => '//h2[@id="productPrices"]/text()',
					'Product Name' => '//h1[@id="productName"]/text()',
					'UPC' => '',
					'SKU' => '',
					'Image' => '//div[@id="productMainImage"]/script/text()',
					'Retail Price' => '',
				  );

require('includes/main.php');
?>
