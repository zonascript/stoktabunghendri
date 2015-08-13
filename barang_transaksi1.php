<?php
include 'db/pdo.php';

$no_seri = $_GET['no_seri'];
$barangs = getDataBarang($no_seri);

//var_dump($barangs);
foreach ($barangs as $row):
?>
<tr style="border: none;">
  	<td style="border-bottom:none;">1</td>
    <td style="border-bottom:none;"><?php echo $row['no_seri']; ?> <input type="hidden" name="no_seri_1" value="<?php echo $row['no_seri']; ?>"/></td>
    <td style="border-bottom:none;"><?php echo $row['no_ketok']; ?> <input type="hidden" name="no_ketok_1" value="<?php echo $row['no_ketok']; ?>"/></td>
    <td style="border-bottom:none;" id="harga1"><?php echo $row['harga_jual']; ?> <input type="hidden" name="harga_jual_1" value="<?php echo $row['harga_jual']; ?>"/></td>
  </tr>
<?php

endforeach;
?>
