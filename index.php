<!-- 
    Name: [Dylan Corfield]
    South Hills Username: [dcorfield77]
-->
<?php
$shop = array
(
  'T-Shirt' => array('price' => 8, 'stock' => 134),
  'Shoes' => array('price' => 16, 'stock' => 72),
  'Scarf' => array('price' => 4, 'stock' => 10),
);

$username = 'Dylan Corfield';

if (empty($username)){
 $greeting = "welcome to Fancy Threads Boutique";

}
else{
  $greeting = "Welcome, $username";

}

?>
<?php
  $shopName = "Fancy Threads Boutique";
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="stylesheet.css">
    <title><?= $shopName ?></title>
  </head>
  <body>
    <h1>Fancy Threads Boutique</h1>
    <?php require_once 'header.php' ?>
    <h2><?= $greeting ?></h2>
    <ul>
    <?php
    foreach ($shop as $name => $details) {
      $price = $details['price'];
      $stock = $details['stock'];
    ?>
    <li><?= $name ?> - $<?= $price ?> : <?= $stock ?> in stock </li>
    <?php
    }
    ?>
    </ul>
    <footer>&copy; <?php echo date('Y')?></footer>
  </body>
</html>

