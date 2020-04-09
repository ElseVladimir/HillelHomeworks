<?php
session_start();
$currency =
[
 [
	      'name' => 'UAH',
	      'course' => 1
 ],
 [
	      'name' => 'USD',
	      'course' => 27.1
 ],
 [
	      'name' => 'Euro',
	      'course' => 30.2
 ]
];

$products = 
[
 [
'name' => 'Чашка',
'price' => '150'
 ],
  [
'name' => 'Ложка',
'price' => '50'
 ],
  [
'name' => 'Вилка',
'price' => '60'
 ],
  [
'name' => 'Тарелка',
'price' => '100'
 ],
  [
'name' => 'Чайник',
'price' => '500'
 ],
  [
'name' => 'Кастрюля',
'price' => '1000'
 ],
  [
'name' => 'Термос',
'price' => '400'
 ],
  [
'name' => 'Ножик',
'price' => '300'
 ],
  [
'name' => 'Половник',
'price' => '330'
 ],
  [
'name' => 'Графин',
'price' => '410'
 ]
];
$_SESSION = $currency;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Homework</title>
</head>
<body>
	<form action="index.php" method="post" >
		<h1 style="margin-left:30%;">Домашнее задание:список товаров</h1>
		<select name="operation" class="" required>

			<option value="uah">uah</option>
			<option value="usd">usd</option>
			<option value="eur">eur</option>
			
		</select>
	<input type="submit" name="submit" value="Результат" class="" /><br/>
<?php
	if($_POST['submit'])
{
		if($_POST['operation'] == 'usd')
	foreach($products as $product){echo $product['name'].' = '.($product['price'] / $_SESSION[1]['course'].' '.$_SESSION[1]['name'].'<hr>');}

		else if($_POST['operation'] == 'eur')
	foreach($products as $product){echo $product['name'].' = '.($product['price'] / $_SESSION[2]['course'].' '.$_SESSION[2]['name'].'<hr>');}
	
		else if($_POST['operation'] == 'uah')
	foreach($products as $product){echo $product['name'].' = '.($product['price'] / $_SESSION[0]['course'].' '.$_SESSION[0]['name'].'<hr>');}

}
		else if(empty($_POST['submit']))
{
	foreach($products as $product){echo $product['name'].'<hr>';}
}

?>
	</form>

<?php session_destroy(); ?>
</body>
</html>