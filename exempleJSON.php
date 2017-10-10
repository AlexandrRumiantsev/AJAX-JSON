<script type="text/javascript">

var cart = {
  "orderID": 12345,
  "shopperName": "John Smith",
  "shopperEmail": "johnsmith@example.com",
  "contents": [
    {
      "productID": 34,
      "productName": "SuperWidget",
      "quantity": 1
    },
    {
      "productID": 56,
      "productName": "WonderWidget",
      "quantity": 3
    }
  ],
  "orderCompleted": true
};

//конвертация в строку и вывод в модалке
alert ( JSON.stringify( cart ) ); 

</script>

<?php
$cart = array(
  "orderID" => 12345,
  "shopperName" => "John Smith",
  "shopperEmail" => "johnsmith@example.com",
  "contents" => array(
    array(
      "productID" => 34,
      "productName" => "SuperWidget",
      "quantity" => 1
    ),
    array(
      "productID" => 56,
      "productName" => "WonderWidget",
      "quantity" => 3
    )
  ),
  "orderCompleted" => true
);

//конвертация в строку и вывод
echo json_encode( $cart );
?>