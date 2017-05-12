<?php
$hamburger = 4.95;
$milk_shake = 1.95;
$cola = .85;

print "Hambuger: ".$hamburger."$ Quantity: 2 ".($hamburger * 2)."<br/>";
print "Milk shake: ".$milk_shake."$ Quantity: 1 ".($milk_shake * 1)."<br/>";
print "Cola: ".$cola."$ Quantity: 1 ".($cola * 1)."<br/>";
$subtotal = ($hamburger * 2) + ($milk_shake * 1) + ($cola * 1);
print "Subtotal: ".$subtotal."<br/>";
$tip = ($subtotal*0.16);
print "Tip: ".$tip."<br/>";
$tax = ($subtotal+tip)*0.075;
print "Tax: ".$tax."<br/>";
$total = $subtotal + $tip + $tax;
print "Total: ".$total."<br/>";
?>

