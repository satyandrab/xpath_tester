<P>Here's an example:</P>
<?php
$test_url = 'http://www.totalhealthvitamins.com/ohh-12111.html';
$arrXpaths = array(
					'Price' => '//form/font/b/font/text()',
					'Product Name' => '//title',
					'UPC' => '',
					'SKU' => '//form/font/text()[1]',
					'Image' => '',
					'Retail Price' => '//form/font/text()[2]',
				  );

require('includes/main.php');
?>
