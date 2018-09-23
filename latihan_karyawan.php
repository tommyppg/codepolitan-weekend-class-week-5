<!DOCTYPE html>
<html>
<head>
	<title>Latihan Daftar Karyawan</title>
</head>
<body>
	<?php
		$kumpulan_karyawan = array(
			array(
				"nama" => "Tommy",
				"jabatan" => "CEO"
			),
			array(
				"nama" => "Handoko",
				"jabatan" => "OB"
			),
			array(
				"nama" => "Bambang Rahmanto",
				"jabatan" => "Sekretaris"
			),
			array(
				"nama" => "Eko",
				"jabatan" => "Polisi"
			)
		);
	?>
	
	<h1>Tabel Karyawan</h1>
	
	<table border="1">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($kumpulan_karyawan as $karyawan){
					echo "<tr>";
						echo "<td>".$karyawan["nama"]."</td>";
						echo "<td>".$karyawan["jabatan"]."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>