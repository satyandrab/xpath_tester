<?php
$test_url = 'http://www.supplementwarehouse.com/viewitem.asp?idproduct=251408';
$arrXpaths = array(
                    'Price' => '//span[contains(text(),'Our Price')]/text()',
                    'Product Name' => '//div[@id='detailText']/table[1]//tr[2]/td/ul/li/span[2]/span/span/span/em/strong/text()',
                    'UPC' => '//*[@style='font-size: 14px;'][1]/em/strong/text()[3]',
                    'SKU' => '',
                    'Image' => '//table[@class='listrow']//tr[1]/td[1]/table//tr/td[2]/img['src']',
                    'Retail Price' => '//table[@class='listrow']//tr[1]/td[1]/table//tr/td[2]/img['src']',
                  );

require('includes/main.php');
?>

