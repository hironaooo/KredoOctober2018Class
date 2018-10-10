<?php 
// 買い物　自分で書いたコード
$clothing = 1;
$quantity = 2;
$amount = 800;

if ($clothing == 1) {
	$paidamount = 250 * $quantity * 0.8;
	$change = $amount - $paidamount;
	if ($change == 0) {
		echo "Clothing is Tshirt and<br> Quantity is $quantity.<br>The amount to be paid is $paidamount.<br>Your don't have a change";
	}else{
	echo "Clothing is Tshirt and<br> Quantity is $quantity.<br> The amount to be paid is $paidamount.<br> Your change is $change";
	}
}elseif($clothing == 2){
	$paidamount = 500 * $quantity * 0.7;
	$change = $amount - $paidamount;
	if ($change == 0) {
		echo "Clothing is Long pants and<br> Quantity is $quantity.<br> The amount to be paid is $paidamount.<br> Your don't have a change";
	}else{
	echo "Clothing is Long pants and<br> Quantity is $quantity.<br> The amount to be paid is $paidamount.<br> Your change is $change";
	}
}elseif($clothing == 3){
	$paidamount = 50 * $quantity;
	$change = $amount - $paidamount;
	if ($change == 0) {
		echo "Clothing is Short pants and<br> Quantity is $quantity.<br> The amount to be paid is $paidamount.<br> Your don't have a change";
	}else{
	echo "Clothing is Short pants and<br> Quantity is $quantity.<br> The amount to be paid is $paidamount.<br> Your change is $change";
	}
}
	echo "<hr>"
 ?>
  <?php 
// 先生のコード見てから直したもの
$clothing = 1;
$quantity = 2;
$amount = 800;

if ($clothing == 1) {
	$paidamount = 250 * $quantity * 0.8;
	$change = $amount - $paidamount;
	$cloth = "Thirts";
}elseif($clothing == 2){
	$paidamount = 500 * $quantity * 0.7;
	$change = $amount - $paidamount;
	$cloth = "Long pants";
}elseif($clothing == 3){
	$paidamount = 50 * $quantity;
	$change = $amount - $paidamount;
	$cloth = "Short pants";
}
if ($change == 0) {
		echo "Clothing is $cloth and<br> Quantity is $quantity.<br>The amount to be paid is $paidamount.<br>Your don't have a change";
	}else{
	echo "Clothing is $cloth and<br> Quantity is $quantity.<br> The amount to be paid is $paidamount.<br> Your change is $change";
	}
 ?>