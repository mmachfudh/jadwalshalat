<?php
$hari = array(
	'6' => 'Minggu',
	'0' => 'Senin',
	'1' => 'Selasa',
	'2' => 'Rabu',
	'3' => 'Kamis',
	'4' => 'Jumat',
	'5' => 'Sabtu');


if(isset($_POST['days'])) {
      $datePicker = date_parse($_POST['days']);
      // print_r($datePicker);
  }

$tahun   = isset($datePicker['year']) ? $datePicker['year'] : date('Y');
$bulan   = isset($datePicker['month']) ? $datePicker['month'] : date('m');
$tanggal = isset($datePicker['day']) ? $datePicker['day'] : date('d');
// $latlng  = isset($_POST['latlng']) ? $_POST['latlng'] : '-139.0972,64.0566';
// $pisah   = explode(',', $latlng);
// Input
$city=isset($kota['kota']) ? $kota['kota'] : $Batu['kota'];
$z  =isset($kota['H']) ? $kota['H'] : $Batu['H'];
$B  =isset($kota['bujur']) ? $kota['bujur'] : $Batu['bujur'];
$L  =isset($kota['lintang']) ? $kota['lintang'] : $Batu['lintang'];
$H  =50;
$sudutSubuh=isset($_POST['sudutSubuh']) ? $_POST['sudutSubuh'] : 20;
$sudutIsya=isset($_POST['sudutIsya']) ? $_POST['sudutIsya'] : 18;
$KA=isset($_POST['KA']) ? $_POST['KA'] :1;

$tahun= substr("0000{$tahun}", -4);
$bulan= substr("00{$bulan}", -2);
$tanggal= substr("00{$tanggal}", -2);

$tanggalKotor=$tahun.$bulan.$tanggal;
// echo($tanggalKotor."<br>");

$valid =(validasi($tanggal,$bulan,$tahun)? "valid":"invalid");
// echo ($valid."<br>");
if ($valid=="valid") 
{
	$jd1=masehiToJD($tanggalKotor, $tanggal, $bulan, $tahun);
	// echo($jd1."<br>");
	$Jd=ceil($jd1);
	$shalat= shalatSatuhari($Jd,$z,$B,$L,$H,$sudutSubuh,$sudutIsya,$KA);
}

		// echo("JD0:".$Jd."<br>");

function masehiToJD($tanggalBersih, $tanggal, $bulan, $tahun)
{
	$c="ok";
	if ($tanggalBersih<15821005)  //Julian
	{
		$b=0;
		if ($bulan<=2) 
		{
			$bulan=$bulan+12;
			$tahun=$tahun-1;
		}
	}elseif ($tanggalBersih>15821014) //Gregorian
	{
		if ($bulan<=2) 
		{
			$bulan=$bulan+12;
			$tahun=$tahun-1;
		}
		$a=floor($tahun/100);
		$b=2+floor($a/4)-$a;
	}else
	{
		$c="no";
	}

	if ($c=="ok")
	{
		$jd= 1720994.5 + floor(365.25*$tahun) + floor(30.6001*($bulan+1)) + $b + $tanggal;
	}else
	{
		$jd="Error!";
	}
	return $jd;
}

function validasi($dd,$mm,$yy)
{
	if ($yy<-4712) 
	{
		return 0;
	}
	if ($dd<1 || $dd>31)
	{
		return 0;
	}
	$days=31;
	if ($mm==2) 
	{
		$days=28;
		if ($yy%400==0 || ($yy%4==0 && $yy%100 !=0))
		{
			$days=29;
		}
	}elseif ($mm==4 || $mm==6 || $mm==9 || $mm=11) 
	{
		$days=30;
	}
	if ($dd>$days) 
	{
		return 0;
	}
	return 1;
}

function shalatSatuhari($Jd,$z,$B,$L,$H,$sudutSubuh,$sudutIsya,$KA){

	//Waktu Lokal
	$Jd = $Jd - $z/24;
	$T  = 2*Pi()*($Jd-2451545)/365.25;

	// Sudut Deklinasi
	$deklinasi =  0.37877 
	           + 23.264   * sin(piRad(1*57.297*$T-79.547)) 
	           +  0.3812  * sin(piRad(2*57.297*$T-82.682)) 
	           +  0.17132 * sin(piRad(3*57.297*$T-59.722));

	$U = ($Jd-2451545)/36525;

	// Bujur rata-rata
	$L0 =280.46607 + 36000.7698*$U;
	$L1 = floor($L0/360);
	$L0 = ($L0 - $L1 * 360);

	// Eot
	$Eot=-(1789+237*$U) *sin(piRad(  $L0))-(7146-62*$U)
	                    *cos(piRad(  $L0))+(9934-14*$U)
	                    *sin(piRad(2*$L0))-(  29+ 5*$U)
	                    *cos(piRad(2*$L0))+(  74+10*$U)
	                    *sin(piRad(3*$L0))+( 320- 4*$U)
	                    *cos(piRad(3*$L0))-  212
	                    *sin(piRad(4*$L0));
	$Eot=$Eot/1000;

	// ======== Perhitungan Waktu Shalat =======
	// --- Waktu Transit ---
	$wTransit = 12 + $z-$B/15-$Eot/60;

	// Dhuhur
	// Koreksi Tergelincir matahari 2 menit
	$waktuDhuhur=$wTransit+2/60;

	// Ashar
	$Theta = $KA + tan(abs(piRad($deklinasi-$L)));
	$acotan= atan(1/$Theta);

	$cosHAS=(sin($acotan)-sin(piRad($L))*sin(piRad($deklinasi)))/(cos(piRad($L))*cos(piRad($deklinasi)));
	$HAS = piDeg(acos($cosHAS));
	$waktuAshar = $wTransit + $HAS/15;

	// Magrib
	$cosHAM=(sin(piRad(-0.833-0.0347*sqrt($H)))-sin(piRad($L))*sin(piRad($deklinasi)))/(cos(piRad($L))*cos(piRad($deklinasi)));
	$HAM= piDeg(acos($cosHAM));
	$waktuMagrib = $wTransit + $HAM/15;

	// Waktu Terbit Matahari
	$cosHATM= (sin(piRad(-0.833-0.0347*sqrt($H)))-sin(piRad($L))*sin(piRad($deklinasi)))/(cos(piRad($L))*cos(piRad($deklinasi)));
	$HATM= piDeg(acos($cosHATM));
	$waktuTerbit = $wTransit-$HATM/15;

	// Isya'
	$cosHAI =(sin(piRad(-$sudutIsya))-sin(piRad($L))*sin(piRad($deklinasi)))/(cos(piRad($L))*cos(piRad($deklinasi)));
	if (abs($cosHAI) >1) 
	{
		echo "Lintang Extrim";
		$deltaMalam= 24 + $waktuTerbit-$waktuMagrib;
		$waktuIsya =$waktuMagrib+ $sudutIsya*$deltaMalam/60;
		$waktuSubuh= $waktuTerbit- $sudutSubuh*$deltaMalam/60;
	}else 
	{
		$HAI= piDeg(acos($cosHAI));
		$waktuIsya= $wTransit+ $HAI/15;

		// Subuh
		$cosHASub =(sin(piRad(-$sudutSubuh))-sin(piRad($L))*sin(piRad($deklinasi)))/(cos(piRad($L))*cos(piRad($deklinasi)));
		$HASub=piDeg(acos($cosHASub));
		$waktuSubuh= $wTransit - $HASub/15;
	}
		
	// Data2 yang ditampilkan
	// echo("<br>");
	// echo("<br>");
	// echo("<br>");
	// echo("<br>");
	// echo("<br>");
	// echo("<br>");
	
	// 	echo("JD:".$Jd."<br>");
	// 	echo("T= ".$T ."<br>");
	// 	echo("Deklinasi= ".$deklinasi ."<br>");
	// 	echo("U= ".$U."<br>");
	// 	echo("L0= ".$L0."<br>");
	// 	echo("Eot= ".$Eot."<br>");
	// 	echo("waktu Transit= ".$wTransit."<br>");
	// 	echo(piDeg($acotan)."<br>");
	// 	echo("HAI= ".$HAI."<br>");
	// 	echo("HAS= ".$HAS."<br>");
	// 	echo("Waktu Dhuhur= ".$waktuDhuhur."<br>");
	// 	echo("Waktu Ashar= ".$waktuAshar."<br>");
	// 	echo("Waktu Magrib= ".$waktuMagrib."<br>");
	// 	echo("Waktu Isya'= ".$waktuIsya."<br>");
	// 	echo("Waktu Subuh= ".$waktuSubuh."<br>");
	// 	echo("Waktu Terbit= ".$waktuTerbit."<br>");
	// shalat

	$subuh=waktu($waktuSubuh);
	$terbit=waktu($waktuTerbit);
	$dhuhur=waktu($waktuDhuhur);
	$ashar=waktu($waktuAshar);
	$magrib=waktu($waktuMagrib);
	$isya=waktu($waktuIsya);

	return [$subuh,$terbit,$dhuhur,$ashar,$magrib,$isya];

	}


	function piRad($x){
		$rad = $x*Pi()/180;
		return $rad;
	}

	function piDeg($x){
		$deg = $x*180/Pi();
		return $deg;
	}

	function waktu($time)
	{
		$jam=floor($time);
		$menit=($time-$jam)*60;
		$menitFix=ceil($menit);
		if ($menitFix>=60) {
			$menitFix=$menitFix-60;
			$jam=$jam+1;
			
		}
		if ($jam==24) {
			$jam=$jam-24;
		}
		$jam= substr("00{$jam}", -2);
		$menitFix= substr("00{$menitFix}", -2);
		$waktu=$jam.":".$menitFix."<br>";	
		return $waktu;
	}

	function jdToTgl($jd){
		$jd=$jd+0.5;
		$z=floor($jd);
		$f = $jd-$z;

		if($z < 2299161) 
		{
			$a=$z;
		}else 
		{
			$aa= floor(($z-1867216.25)/36524.25);
			$a=$z+1+$aa-floor($aa/4);
		}

		$b=$a+ 1524;
		$c=floor(($b-122.1)/365.25);
		$d=floor(365.25*$c);
		$e=floor(($b-$d)/30.6001);

		// Tanggal, bulan, dan tahun
		$tgl=$b-$d-floor(30.6001*$e) + $f;
		$tgl=floor($tgl);

		if($e>13) 
		{
			$m=$e-13;
		}else
		{
			$m=$e-1;
		}

		if($m<3) 
		{
			$y= $c-4715;
		}else
		{
			$y= $c-4716;
		}
		return [$tgl,$m,$y];
}


 ?>
