<?php
$test_url = 'http://www.supplementwarehouse.com/viewitem.asp?idproduct=251408';
$arrXpaths = array(
                    'Price' => '//span[contains(text(),"Our Price")]/text()',
                    'Product Name' => '//div[@id="detailText"]/table[1]//tr[2]/td/ul/li/span[2]/span/span/span/em/strong/text()',
                    'UPC' => './/*[@id="detailText"]/table[1]/tbody/tr[2]/td/ul/strong/strong/strong/strong/strong/strong/strong/strong/strong/strong/em/em/li/span[2]/span/span/span/em/strong',
                    'SKU' => '',
                    'Image' => '//table[@class="listrow"]//table//tr[1]/td[2]/img["src"]',
                    'Retail Price' => '',
                  );

require('includes/main.php');
?>

