<?php
  
$Barang =[
    [
        'namabarang' => "Jagung",
        'kg' => 50,
        'gr' => 500,
        'ml' => 5000,
        'ltr' => 50000,

    ],
    [
        'namabarang' => "Sagu",
        'kg' => 40,
        'gr'=> 396,
        'ml'=> 499,
        'ltr'=> 520,
    ],
    [
        'namabarang' => "Terigu",
        'kg' => 60,
        'gr'=> 600,
        'ml'=> 6500,
        'ltr'=> 7500,
    ],
    [
        'namabarang' => "Cabai Bubuk",
        'kg' => 1,
        'gr'=> 100,
        'ml'=> 0,9,
        'ltr'=> 0.1,
    ],
    [
        'namabarang' => "Bumbu Atom",
        'kg' =>0.5,
        'gr'=> 500,
        'ml'=> 4200,
        'ltr'=> 0,3,
    ],
    [
        'namabarang' => "Aqua Galon",
        'kg' => 2,
        'gr'=> 180,
        'ml'=> 200,
        'ltr'=> 1,
    ],
];
$index=0

  ?>

<!DOCTYPE html>
  <html>
    <div class="container">

<h1><font face="Georgia"> Konversi Barang Pak Joy</font></h1>
<table border="4.5pt">

<tr style="background-color:#fff000;">
<th>No</th>
<th>Nama Barang</th>
<th>Berat (kg) </th>
<th>Berat (gram)</th>
<th>Berat (miligram)</th>
<th>Berat (Liter)</th>
</tr>
</thead>
<tbody>

<?php
foreach($Barang as $Benda)

{$index +=1?>
<tr>

<td><?=$index?></td>
<td style="background-color:#ff050f;"><?=$Benda[ 'namabarang' ]?></td>
<td style="background-color:#21f0d5;"><?=$Benda[ 'kg' ]?></td>
<td style="background-color:#01c0d5;"><?=$Benda[ 'gr' ]?></td>
<td style="background-color:#91d0d5;"><?=$Benda[ 'ml' ]?></td>
<td style="background-color:#ff00f0;"><?=$Benda[ 'ltr' ]?></td>
</tr>
<?php
}?>
</table>
</div>
</body>
</html>