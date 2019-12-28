<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="table-responsive">
	<table class="table table-bordered table-striped" border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Tanggal</th>
				<th>Subuh</th>
				<th>Terbit</th>
				<th>Dhuhur</th>
				<th>Ashar</th>
				<th>Magrib</th>
				<th>Isya'</th>
			</tr>
		</thead>

		<tbody>

			<?php 
			$n=0;
			$monthNum=$tanggalAwal['1'];
			$jdp=masehiToJD($tanggalKotor,1, $monthNum, $tahun);
			$jdp=$jdp-1;
				
			for ($i=1; $i <=30 ; $i++) { 
			 	$jdp=$jdp+1;
			 	$tanggal=jdToTgl($jdp);
			 	$shalat=shalatSatuhari(ceil($jdp),$z,$B,$L,$H,$sudutSubuh,$sudutIsya,$KA);
			 	$n=$n+1;

			 	// tabel
			 	echo"<tr>";
			 	echo"<td>".$n."</td>";
			 	echo"<td>".$hari[($jdp+1) % 7].", ".$tanggal['0']."/".$tanggal['1']."/".$tanggal['2']."</td>";
			 	echo"<td>".$shalat['0']."</td>";
			 	echo"<td>".$shalat['1']."</td>";
			 	echo"<td>".$shalat['2']."</td>";
			 	echo"<td>".$shalat['3']."</td>";
			 	echo"<td>".$shalat['4']."</td>";
			 	echo"<td>".$shalat['5']."</td>";
			 	echo"<tr>";
			 } 
			 ?>
			 
		</tbody>
	</table>
	</div>

</body>
</html>


