<html>
<head>
	<title>Tampil Data Matakuliah</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					Tampil Data Matakuliah
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>kode mtk</th>
				<th>:</th>
				<td>
					<?= $kode; ?>
				</td>
			</tr>
			<tr>
				<th>nama mtk</th>
				<th>:</th>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<th>SKS</th>
				<th>:</th>
				<td>
					<?= $sks; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url("matakuliah")?>">kembali</a>
				</td>
			</tr>
		</table>
	</center>

</body>
</html>