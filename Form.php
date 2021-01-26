<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<form action="#" method="get">
		Masukan Angka 1 : <input type="text" name="angka1">
		<br><br>
		Masukan Angka 2 : <input type="text" name="angka2">
		<br><br>
		<button>Proses</button>
	</form>
</body>

</html>
<?php 
	@$angka1 = $_GET['angka1'];
	@$angka2 = $_GET['angka2'];
	@$ditambah = @$angka1+@$angka2;
	@$dikurang = @$angka1-@$angka2;
	@$dikali = @$angka1*@$angka2;
	@$dibagi = @$angka1/@$angka2;
	if($angka1 != ""){
		@$modulus = @$angka1%@$angka2;
	}else
	{
		@$modulus = "Tidak Terdefinisi";
	}
?>
<br>
<table width="20%">
	<tr>
		<td>Angka 1</td>
		<td>=</td>
		<td><?php echo @$angka1 ?></td>
	</tr>
	<tr>
		<td>Angka 2</td>
		<td>=</td>
		<td><?php echo @$angka2 ?></td>
	</tr>
	<tr>
		<td>Ditambah</td>
		<td>=</td>
		<td><?php echo @$ditambah ?></td>
	</tr>
	<tr>
		<td>Dikurang</td>
		<td>=</td>
		<td><?php echo @$dikurang ?></td>
	</tr>
	<tr>
		<td>Dikali</td>
		<td>=</td>
		<td><?php echo @$dikali ?></td>
	</tr>
	<tr>
		<td>Dibagi</td>
		<td>=</td>
		<td><?php echo @$dibagi ?></td>
	</tr>
	<tr>
		<td>Modulus</td>
		<td>=</td>
		<td><?php echo @$modulus ?></td>
	</tr>
</table>
