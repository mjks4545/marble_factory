<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
</style>
</head>
<body>
<h2>Khurasan Marble Factory</h2>
<p>
    Phone: Habib Ullah 03459409961<br>
    Phone: Munshe      03130091005
</p>
<div>
    <b>Buyer Name:</b>&nbsp;<?=$sale[0]->buyer_name?>
</div>
<div style="text-align: right;">
    <b>Marble Type:</b>&nbsp;<?=$sale[0]->marble_type?>
</div>
<table>
  <tr>
    <th>Date:</th>
    <th>Size</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
  </tr>
  <?php
	$tota_quantity = 0;
	$tota_price = 0;
	$tota_total = 0;
	foreach ( $size as $array ) : 
	    $tota_quantity += $array->quantity;
	    $tota_price    += $array->price;
	    $tota_total    += $array->price * $array->quantity;
  ?>
  <tr>
    <td><?=$array->date_added?></td>
    <td><?=$array->size?></td>
    <td><?=$array->quantity?></td>
    <td><?=$array->price?></td>
    <td><?=$array->price * $array->quantity ?></td>
  </tr>
  <?php
    endforeach;
  ?>
</table>
<p>
    Nezd Khazana Sugar Mill
    Haryana Bala
    Peshawar
</p>
Sofware Designed and Develope by sstechnologies Contact: 03018989553 / 03159869980

</body>
</html>
