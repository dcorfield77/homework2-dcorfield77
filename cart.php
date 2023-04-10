<?php
    $cart = [
        'T-Shirt' => ['quantity' => 3, 'price' => 15.99],
        'Shoes' => ['quantity' => 12, 'price' => 79.99],
        'Scarf' => ['quantity' => 7, 'price' => 9.99],
    ];

    $total = 0;
    $discount = 0.02;
  

    foreach ($cart as $item => $details) {
        $subtotal += $details['quantity'] * $details['price'];
        
        

    }
    $total = ($subtotal * 0.06) + $subtotal;
    $total -= $total * (count($cart)-1) * $discount;
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="stylesheet.css">
    <title>Your Cart</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
  <?php require_once 'header.php' ?>
    <?php foreach ($cart as $item => $details) { ?>
        <p><?php echo $item . ': $' . $details['price'] . ' x ' . $details['quantity']; ?></p>
    <?php } ?>

    <h2>Subtotal: $<?php echo number_format($subtotal, 2); ?></h2>
    <h2>Total: <?= $total?> </h2>
  </body>
</html>