<P>Here's an example:</P>
<?php
$test_url = 'http://www.nutrahealthsupply.com/GAT/Nitraflex';
$arrXpaths = array(
					'Price' => '//h2[@id="productPrices"]/text()',
					'Product Name' => '//h1[@id="productName"]/text()',
					'UPC' => '',
					'SKU' => '//input[@name="products_id"]/@value',
					'Image' => '//div[@id="productMainImage"]/a/@href',
					'Retail Price' => '',
				  );

require('includes/main.php');
?>
