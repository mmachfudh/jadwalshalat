<?php require 'databaseKota.php'; ?>
<?php require 'index.v04.php'; ?>



<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jadwal Shalat</title>
    <Link rel="icon" href="img/pray.png" >

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!--link href="vendor/fontGoogleapis/fontGoogleApis.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontGoogleapis/fontGoogleApis1.css" rel="stylesheet" type="text/css"-->

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <script src="real_time.js"></script>
    <link href="css/freelancer.min.css" rel="stylesheet"></head><?php
    if(isset($_POST['days'])) { ?>
    <script type="text/javascript">window.location.href='#portfolio';</script><?php
	} ?>
    <style type="text/css">
    	.display-jadwal {
    		/*box-shadow: #ddd 0px 0px 0.3px 2px;*/
    		padding: 20px;
    	}

    	.display-jadwal .jadwal {
    		padding: 40px 0;
    		box-shadow: #666 3px 3px 3px 0.4px;
  			font-size: 2.5em;
  			text-align: center;
  			font-family: Montserrat;
  			font-weight: 700;
  			border: 1px solid #999;
  			color:#666;
    	}

    	.display-jadwal .jadwal .warna {
    		color: 	#3a4858;
    		font-size: 1.75em;
    	}

    	.datePicker {
    		margin-top: 20px;
    	}

    	#submit_position {
    		text-align: right;
    	}
      /*Monstreet*/
      @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url('/font/Montserrat-Bold.woff2') format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }

      /*Lato*/
      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: local('Lato Regular'), local('Lato-Regular'), url('/font/Lato-Regular.woff2') format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }

    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Jadwal Shalat<br><h6><span id="date_time" style="text-align: right; color: #999; font-size:13px;"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
        </h6></a>
        
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Hari ini</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Lokasi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Periode</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" style="width: 300px; height: 300px; border-radius: 50%" src="img/pray.png" alt="">
        <h1 class="text-uppercase mb-0">Yukk Shalat!!!</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Jadwal untuk semua tempat, dimanapun anda berada</h2>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light rounded js-scroll-trigger" href="#portfolio">
            <h4>Hari ini!</h4>
          </a>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
      	<h1 class="text-center text-uppercase"style="color: #666;"><?php echo($city); ?></h1>
        <h1 class="text-center text-uppercase text-secondary" style="font-size: 3em;" value="Hari ini "><?php echo($hari[($Jd) % 7].", ".$tanggal."-".$bulan."-".$tahun." "); ?></h1>
        <hr class="star-dark mb-5">
        <div class="row">
           <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Subuh<br> <span class="warna"><?php echo($shalat[0]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Terbit<br><span class="warna"><?php echo($shalat[1]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Dhuhur<br><span class="warna"><?php echo($shalat[2]); ?></span></div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Ashar<br><span class="warna"><?php echo($shalat[3]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Magrib<br><span class="warna"><?php echo($shalat[4]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Isya'<br><span class="warna"><?php echo($shalat[5]); ?></span></div>
          </div>
        </div>

      </div>
     
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Lokasi</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">

          <form target="" method="POST">
            <div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Kota</label>
			  </div>
        
			  <select class="custom-select" id="inputGroupSelect01" name="kota" >
					<option value="0" >Ambarawa </option>
          <option value="1" >Ambon </option>
          <option value="2" >Amuntai </option>
          <option value="3" >Arga makmur </option>
          <option value="4" >Atambua </option>
          <option value="5" >Badung </option>
          <option value="6" >Bajawa </option>
          <option value="7" >Balige </option>
          <option value="8" >Balikpapan </option>
          <option value="9" >Banda Aceh </option>
          <option value="10" >Bandung </option>
          <option value="11" >Banggai </option>
          <option value="12" >Bangil </option>
          <option value="13" >Bangkalan </option>
          <option value="14" >Bangkinang </option>
          <option value="15" >Bangko </option>
          <option value="16" >Bangli </option>
          <option value="17" >Banjarbaru </option>
          <option value="18" >Banjarmasin </option>
          <option value="19" >Banjarnegara </option>
          <option value="20" >Bantaeng </option>
          <option value="21" >Bantul </option>
          <option value="22" >Banyumas </option>
          <option value="23" >Banyuwangi </option>
          <option value="24" >Barabai </option>
          <option value="25" >Barru </option>
          <option value="26" >Batam </option>
          <option value="27" >Batang </option>
          <option value="28" >Batu </option>
          <option value="29" >Baturaja </option>
          <option value="30" >Batusangkar </option>
          <option value="31" >Bau-Bau </option>
          <option value="32" >Bawean </option>
          <option value="33" >Bekasi </option>
          <option value="34" >Bengkalis </option>
          <option value="35" >Bengkayang </option>
          <option value="36" >Bengkulu </option>
          <option value="37" >Biak </option>
          <option value="38" >Bima </option>
          <option value="39" >Binjai </option>
          <option value="40" >Bireun </option>
          <option value="41" >Bitung </option>
          <option value="42" >Blambangan Umpu </option>
          <option value="43" >Blangkejeren </option>
          <option value="44" >Blitar </option>
          <option value="45" >Blora </option>
          <option value="46" >Bogor </option>
          <option value="47" >Bojonegoro </option>
          <option value="48" >Bondowoso </option>
          <option value="49" >Bontang </option>
          <option value="50" >Boyolali </option>
          <option value="51" >Brebes </option>
          <option value="52" >Bukit Tinggi </option>
          <option value="53" >Bulukumba </option>
          <option value="54" >Bungku </option>
          <option value="55" >Buntok </option>
          <option value="56" >Buol </option>
          <option value="57" >Calang </option>
          <option value="58" >Ciamis </option>
          <option value="59" >Cianjur </option>
          <option value="60" >Cibadak </option>
          <option value="61" >Cibinong </option>
          <option value="62" >Cikarang </option>
          <option value="63" >Cilacap </option>
          <option value="64" >Cilegon </option>
          <option value="65" >Cimahi </option>
          <option value="66" >Cirebon </option>
          <option value="67" >Cump </option>
          <option value="68" >Dabo Singkap </option>
          <option value="69" >Demak </option>
          <option value="70" >Denpasar </option>
          <option value="71" >Depok </option>
          <option value="72" >Dompu </option>
          <option value="73" >Donggala </option>
          <option value="74" >Dumai </option>
          <option value="75" >Ende </option>
          <option value="76" >Enrekang </option>
          <option value="77" >Fak-Fak </option>
          <option value="78" >Garut </option>
          <option value="79" >Gianyar </option>
          <option value="80" >Giri Menang </option>
          <option value="81" >Gorontalo </option>
          <option value="82" >Gresik </option>
          <option value="83" >Gunung Sitoli </option>
          <option value="84" >Gunung Sugih </option>
          <option value="85" >Idi </option>
          <option value="86" >Indramayu </option>
          <option value="87" >Jakarta </option>
          <option value="88" >Jakarta Barat </option>
          <option value="89" >Jakarta Pusat </option>
          <option value="90" >Jakarta Selatan </option>
          <option value="91" >Jakarta Timur </option>
          <option value="92" >Jakarta Utara </option>
          <option value="93" >Jambi </option>
          <option value="94" >Jantho </option>
          <option value="95" >Jayapura </option>
          <option value="96" >Jember </option>
          <option value="97" >Jeneponto </option>
          <option value="98" >Jepara </option>
          <option value="99" >Jombang </option>
          <option value="100" >Kabanjahe </option>
          <option value="101" >Kafamenanu </option>
          <option value="102" >Kajen </option>
          <option value="103" >Kalabahi </option>
          <option value="104" >Kalianda </option>
          <option value="105" >Kandangan </option>
          <option value="106" >Kangean </option>
          <option value="107" >Karang Asem </option>
          <option value="108" >Karanganyar </option>
          <option value="109" >Karawang </option>
          <option value="110" >Kayu Agung </option>
          <option value="111" >Kebumen </option>
          <option value="112" >Kediri </option>
          <option value="113" >Kendal </option>
          <option value="114" >Kendari </option>
          <option value="115" >Ketapang </option>
          <option value="116" >Kisaran </option>
          <option value="117" >Klaten </option>
          <option value="118" >Klungkung </option>
          <option value="119" >Kolaka </option>
          <option value="120" >Kotabaru </option>
          <option value="121" >Kotabumi </option>
          <option value="122" >Kotamobagu </option>
          <option value="123" >Koto Baru </option>
          <option value="124" >Kraksaan </option>
          <option value="125" >Krui </option>
          <option value="126" >Kuala Kapuas </option>
          <option value="127" >Kuala Tungkal </option>
          <option value="128" >Kualasimpang </option>
          <option value="129" >Kudus </option>
          <option value="130" >Kuningan </option>
          <option value="131" >Kupang </option>
          <option value="132" >Kutacane </option>
          <option value="133" >labanan </option>
          <option value="134" >Labuha </option>
          <option value="135" >Lahat </option>
          <option value="136" >Lamongan </option>
          <option value="137" >Langsa </option>
          <option value="138" >Larantuka </option>
          <option value="139" >Lewoleba </option>
          <option value="140" >Lhokseumawe </option>
          <option value="141" >Lhoksukon </option>
          <option value="142" >Limboto </option>
          <option value="143" >Lubuk Basung </option>
          <option value="144" >Lubuk Linggau </option>
          <option value="145" >Lubuk Pakam </option>
          <option value="146" >Lubuk Sikaping </option>
          <option value="147" >Lumajang </option>
          <option value="148" >Luwuk </option>
          <option value="149" >Madiun </option>
          <option value="150" >Magelang </option>
          <option value="151" >Magetan </option>
          <option value="152" >Majalengka </option>
          <option value="153" >Majene </option>
          <option value="154" >Makale </option>
          <option value="155" >Makassar </option>
          <option value="156" >Malang </option>
          <option value="157" >Mamuju </option>
          <option value="158" >Manado </option>
          <option value="159" >Maninjau </option>
          <option value="160" >Manna </option>
          <option value="161" >Manokwari </option>
          <option value="162" >Marabahan </option>
          <option value="163" >Maros </option>
          <option value="164" >Martapura </option>
          <option value="165" >Masamba </option>
          <option value="166" >Masohi </option>
          <option value="167" >Mataram </option>
          <option value="168" >Maumere </option>
          <option value="169" >Medan </option>
          <option value="170" >Mempawah </option>
          <option value="171" >Merauke </option>
          <option value="172" >Metro </option>
          <option value="173" >Meulaboh </option>
          <option value="174" >Meureudu </option>
          <option value="175" >Mimika </option>
          <option value="176" >Mojokerto </option>
          <option value="177" >Morotai </option>
          <option value="178" >Muara Bulian </option>
          <option value="179" >Muara Bungo </option>
          <option value="180" >Muara Enim </option>
          <option value="181" >Muara Labuti </option>
          <option value="182" >Muara Sabak </option>
          <option value="183" >Muara Tebo </option>
          <option value="184" >Muara Teweh </option>
          <option value="185" >Mungkit </option>
          <option value="186" >Nabire </option>
          <option value="187" >Natuna </option>
          <option value="188" >Negara </option>
          <option value="189" >Negara </option>
          <option value="190" >Nganjuk </option>
          <option value="191" >Ngawi </option>
          <option value="192" >Pacitan </option>
          <option value="193" >Padang </option>
          <option value="194" >Padang Panjang </option>
          <option value="195" >Padang Sidempuan </option>
          <option value="196" >Painan </option>
          <option value="197" >Palangkaraya </option>
          <option value="198" >Palembang </option>
          <option value="199" >Palopo </option>
          <option value="200" >Palu </option>
          <option value="201" >Pamekasan </option>
          <option value="202" >Pandan </option>
          <option value="203" >Pandeglang </option>
          <option value="204" >Pangkal Pinang </option>
          <option value="205" >Pangkalan Bun </option>
          <option value="206" >Pangkalan Kerinci </option>
          <option value="207" >Pangkep </option>
          <option value="208" >Paniai </option>
          <option value="209" >Panyabungan </option>
          <option value="210" >Pare-Pare </option>
          <option value="211" >Pariaman </option>
          <option value="212" >Pasir Pangarayan </option>
          <option value="213" >Pasuruan </option>
          <option value="214" >Pati </option>
          <option value="215" >Payakumbuh </option>
          <option value="216" >Pekalongan </option>
          <option value="217" >Pekanbaru </option>
          <option value="218" >Pelaihari </option>
          <option value="219" >Pemalang </option>
          <option value="220" >Pematang Siantar </option>
          <option value="221" >Pinrang </option>
          <option value="222" >Polewali </option>
          <option value="223" >Ponorogo </option>
          <option value="224" >Pontianak </option>
          <option value="225" >Poso </option>
          <option value="226" >Praya </option>
          <option value="227" >Probolinggo </option>
          <option value="228" >Purbalingga </option>
          <option value="229" >Purwakarta </option>
          <option value="230" >Purwodadi </option>
          <option value="231" >Purwokerto </option>
          <option value="232" >Purworejo </option>
          <option value="233" >Putussibau </option>
          <option value="234" >Raha </option>
          <option value="235" >Rangkasbitung </option>
          <option value="236" >Rantauprapat </option>
          <option value="237" >Rantauprapat </option>
          <option value="238" >Rembang </option>
          <option value="239" >Rengat </option>
          <option value="240" >Ruteng </option>
          <option value="241" >Sabang </option>
          <option value="242" >Salatiga </option>
          <option value="243" >Samarinda </option>
          <option value="244" >Sambas </option>
          <option value="245" >Sampang </option>
          <option value="246" >Sampit </option>
          <option value="247" >Sangatta </option>
          <option value="248" >Sangeti </option>
          <option value="249" >Sanggau </option>
          <option value="250" >Sarolangun </option>
          <option value="251" >Sawah Lunto </option>
          <option value="252" >Sekayu </option>
          <option value="253" >Selat Panjang </option>
          <option value="254" >Selayar </option>
          <option value="255" >Selong </option>
          <option value="256" >Semarang </option>
          <option value="257" >Sengkang </option>
          <option value="258" >Sentani </option>
          <option value="259" >Serang </option>
          <option value="260" >Serui </option>
          <option value="261" >Sibolga </option>
          <option value="262" >Sidikalang </option>
          <option value="263" >Sidoarjo </option>
          <option value="264" >Sigli </option>
          <option value="265" >Sijunjung </option>
          <option value="266" >Simalungun </option>
          <option value="267" >Sinabang </option>
          <option value="268" >Sindenreng Rappang </option>
          <option value="269" >Singaraja </option>
          <option value="270" >Singkil </option>
          <option value="271" >Sinjai </option>
          <option value="272" >Sintang </option>
          <option value="273" >Situbondo </option>
          <option value="274" >Slawi </option>
          <option value="275" >Sleman </option>
          <option value="276" >Soa-Sio </option>
          <option value="277" >Soe </option>
          <option value="278" >Solok </option>
          <option value="279" >Sorong </option>
          <option value="280" >Sragen </option>
          <option value="281" >Stabat </option>
          <option value="282" >Subang </option>
          <option value="283" >Sukabumi </option>
          <option value="284" >Sukoharjo </option>
          <option value="285" >Sumbawa Besar </option>
          <option value="286" >Sumber </option>
          <option value="287" >Sumedang </option>
          <option value="288" >Sumenep </option>
          <option value="289" >Sungai Penuh </option>
          <option value="290" >Sungailiat </option>
          <option value="291" >Sungguminasa </option>
          <option value="292" >Surabaya </option>
          <option value="293" >Surakarta </option>
          <option value="294" >Tahuna </option>
          <option value="295" >Takalar </option>
          <option value="296" >Takengon </option>
          <option value="297" >Talu </option>
          <option value="298" >Tanah Grogot </option>
          <option value="299" >Tangerang </option>
          <option value="300" >Tanggamus </option>
          <option value="301" >Tanjung </option>
          <option value="302" >Tanjung halal </option>
          <option value="303" >Tanjung Pandan </option>
          <option value="304" >Tanjung Pati </option>
          <option value="305" >Tanjung Pinang </option>
          <option value="306" >Tanjung Redeb </option>
          <option value="307" >Tanjung Selor </option>
          <option value="308" >Tanjungkarang </option>
          <option value="309" >Tapaktuan </option>
          <option value="310" >Tarakan </option>
          <option value="311" >Tarempa </option>
          <option value="312" >Tarutung </option>
          <option value="313" >Tasikmalaya </option>
          <option value="314" >Tebing Tinggi </option>
          <option value="315" >Tegal </option>
          <option value="316" >Temanggung </option>
          <option value="317" >Tembilahan </option>
          <option value="318" >Tenggarong </option>
          <option value="319" >Ternate </option>
          <option value="320" >Tiga Raksa </option>
          <option value="321" >Tilamuta </option>
          <option value="322" >Tj. Balai Karimun </option>
          <option value="323" >Toli - Toli </option>
          <option value="324" >Tondano </option>
          <option value="325" >Trenggalek </option>
          <option value="326" >Tual </option>
          <option value="327" >Tuban </option>
          <option value="328" >Tulang Bawang </option>
          <option value="329" >Tulungagung </option>
          <option value="330" >Ujung Tanjung </option>
          <option value="331" >Unauna </option>
          <option value="332" >Waikabubak </option>
          <option value="333" >Waingapu </option>
          <option value="334" >Wales </option>
          <option value="335" >Wamena </option>
          <option value="336" >Watampone </option>
          <option value="337" >Watansoppeng </option>
          <option value="338" >Wonogiri </option>
          <option value="339" >Wonosari </option>
          <option value="340" >Wonosobo </option>
          <option value="341" >Yogyakarta </option>
          <option value="342" >Masjid Istiqlal </option>
          <option value="343" >Fukuoka </option>
          <option value="344" >New York </option>
          <option value="345" >Aberdeen- Scotland </option>
          <option value="346" >Adelaide- Australia </option>
          <option value="347" >Algiers- Algeria </option>
          <option value="348" >Amsterdam- Netherlands </option>
          <option value="349" >Ankara- Turkey </option>
          <option value="350" >Asunción- Paraguay </option>
          <option value="351" >Athens- Greece </option>
          <option value="352" >Auckland- New Zealand </option>
          <option value="353" >Bangkok- Thailand </option>
          <option value="354" >Barcelona- Spain </option>
          <option value="355" >Beijing- China </option>
          <option value="356" >Belém- Brazil </option>
          <option value="357" >Belfast- Northern Ireland </option>
          <option value="358" >Belgrade- Serbia </option>
          <option value="359" >Berlin- Germany </option>
          <option value="360" >Birmingham- England </option>
          <option value="361" >Bogotá- Colombia </option>
          <option value="362" >Bombay- India </option>
          <option value="363" >Bordeaux- France </option>
          <option value="364" >Bremen- Germany </option>
          <option value="365" >Brisbane- Australia </option>
          <option value="366" >Bristol- England </option>
          <option value="367" >Brussels- Belgium </option>
          <option value="368" >Bucharest- Romania </option>
          <option value="369" >Budapest- Hungary </option>
          <option value="370" >Buenos Aires- Argentina </option>
          <option value="371" >Cairo- Egypt </option>
          <option value="372" >Calcutta- India </option>
          <option value="373" >Canton- China </option>
          <option value="374" >Cape Town- South Africa </option>
          <option value="375" >Caracas- Venezuela </option>
          <option value="376" >Cayenne- French Guiana </option>
          <option value="377" >Chihuahua- Mexico </option>
          <option value="378" >Chongqing- China </option>
          <option value="379" >Copenhagen- Denmark </option>
          <option value="380" >Córdoba- Argentina </option>
          <option value="381" >Dakar- Senegal </option>
          <option value="382" >Dawson- Canada </option>
          <option value="383" >Darwin- Australia </option>
          <option value="384" >Djibouti- Djibouti </option>
          <option value="385" >Dublin- Ireland </option>
          <option value="386" >Durban- South Africa </option>
          <option value="387" >Edinburgh- Scotland </option>
          <option value="388" >Frankfurt- Germany </option>
          <option value="389" >Georgetown- Guyana </option>
          <option value="390" >Glasgow- Scotland </option>
          <option value="391" >Guatemala City- Guatemala </option>
          <option value="392" >Guayaquil- Ecuador </option>
          <option value="393" >Hamburg- Germany </option>
          <option value="394" >Hammerfest- Norway </option>
          <option value="395" >Havana- Cuba </option>
          <option value="396" >Helsinki- Finland </option>
          <option value="397" >Hobart- Tasmania </option>
          <option value="398" >Hong Kong- China </option>
          <option value="399" >Iquique- Chile </option>
          <option value="400" >Irkutsk- Russia </option>
          <option value="401" >Johannesburg- South Africa </option>
          <option value="402" >Kingston- Jamaica </option>
          <option value="403" >Kinshasa- Congo </option>
          <option value="404" >Kuala Lumpur- Malaysia </option>
          <option value="405" >La Paz- Bolivia </option>
          <option value="406" >Leeds- England </option>
          <option value="407" >Lima- Peru </option>
          <option value="408" >Lisbon- Portugal </option>
          <option value="409" >Liverpool- England </option>
          <option value="410" >London- England </option>
          <option value="411" >Lyons- France </option>
          <option value="412" >Madrid- Spain </option>
          <option value="413" >Manchester- England </option>
          <option value="414" >Manila- Philippines </option>
          <option value="415" >Marseilles- France </option>
          <option value="416" >Mazatlán- Mexico </option>
          <option value="417" >Mecca- Saudi Arabia </option>
          <option value="418" >Melbourne- Australia </option>
          <option value="419" >Mexico City- Mexico </option>
          <option value="420" >Milan- Italy </option>
          <option value="421" >Montevideo- Uruguay </option>
          <option value="422" >Moscow- Russia </option>
          <option value="423" >Munich- Germany </option>
          <option value="424" >Nagasaki- Japan </option>
          <option value="425" >Nagoya- Japan </option>
          <option value="426" >Nairobi- Kenya </option>
          <option value="427" >Nanjing (Nanking)- China </option>
          <option value="428" >Naples- Italy </option>
          <option value="429" >New Delhi- India </option>
          <option value="430" >Newcastle-on-Tyne- England </option>
          <option value="431" >Odessa- Ukraine </option>
          <option value="432" >Osaka- Japan </option>
          <option value="433" >Oslo- Norway </option>
          <option value="434" >Panama City- Panama </option>
          <option value="435" >Paramaribo- Suriname </option>
          <option value="436" >Paris- France </option>
          <option value="437" >Perth- Australia </option>
          <option value="438" >Plymouth- England </option>
          <option value="439" >Port Moresby- Papua New Guinea </option>
          <option value="440" >Prague- Czech Republic </option>
          <option value="441" >Rangoon- Myanmar </option>
          <option value="442" >Reykjavík- Iceland </option>
          <option value="443" >Rio de Janeiro- Brazil </option>
          <option value="444" >Rome- Italy </option>
          <option value="445" >Salvador- Brazil </option>
          <option value="446" >Santiago- Chile </option>
          <option value="447" >St. Petersburg- Russia </option>
          <option value="448" >São Paulo- Brazil </option>
          <option value="449" >Shanghai- China </option>
          <option value="450" >Singapore- Singapore </option>
          <option value="451" >Sofia- Bulgaria </option>
          <option value="452" >Stockholm- Sweden </option>
          <option value="453" >Sydney- Australia </option>
          <option value="454" >Tananarive- Madagascar </option>
          <option value="455" >Teheran- Iran </option>
          <option value="456" >Tokyo- Japan </option>
          <option value="457" >Tripoli- Libya </option>
          <option value="458" >Venice- Italy </option>
          <option value="459" >Veracruz- Mexico </option>
          <option value="460" >Vienna- Austria </option>
          <option value="461" >Vladivostok- Russia </option>
          <option value="462" >Warsaw- Poland </option>
          <option value="463" >Wellington- New Zealand </option>
          <option value="464" >Zürich- Switzerland </option>
			  </select>
        
			  <!-- Tanggal -->
			  <div class="datePicker input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Tanggal</span>
				  </div>
				  <input type="date" name="days" value="<?php echo($tahun."-".$bulan."-".$tanggal); ?>">

			 </div>		
	
			</div>
		</div>	

         <div class="col-lg-4 mr-auto">
            <div class="input-group mb-3">
			<div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Metode</label>
			  </div>
			  <select class="custom-select form-control" id="inputGroupSelect01" name="KA" onchange="changeKA(this.value)">
					<option value="1" <?php echo isset($_POST['KA']) && $_POST['KA'] == 1 ? 'selected' : ''; ?>>Imam Syafi'i      </option>
					<option value="2" <?php echo isset($_POST['KA']) && $_POST['KA'] == 2 ? 'selected' : ''; ?>>Imam Hanafi       </option>
			  </select>
			  <input type="text" aria-label="Last name" class="form-control" id="labelKA" value="KA=<?php echo($KA) ?>"disabled>
			</div>
			<div class="input-group">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Sudut Subuh dan Isya'</span>
			  </div>
			  <input type="text" aria-label="sudutSubuh" class="form-control" name="sudutSubuh" value="<?php echo($sudutSubuh) ?>">
			  <input type="text" aria-label="SudutIsya" class="form-control" name="sudutIsya" value="<?php echo($sudutIsya) ?>">
			</div>
          </div>          
        </div>
        <div class="text-center">
          	<input class="btn btn-xl btn-outline-light rounded js-scroll-trigger" type="submit" value="Klik">
        </div>
      </form>
    </div>
  </div>


    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <?php   
          $month =array("1"=>"Januari","2"=>"Februari","3"=>"Maret","4"=>"April","5"=>"Mei","6"=>"Juni","7"=>"Juli","8"=>"Agustus","9"=>"September","10"=>"Oktober","11"=>"November","12"=>"Desember");
          $tanggalAwal=jdToTgl($Jd);
          $monthNum=$tanggalAwal['1'];
          $monthNew= $month[$monthNum];
             ?>
        <h2 class="text-center text-uppercase text-secondary mb-0">Periode <?php echo $monthNew." ".$tahun; ?></h2>
        <br>
        
        <?php require 'periode.php';?>
               
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Jl Sarimun Beji Kota Batu
              <br>Machfudh, Kode Pos 65326</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Yukk Shalat</h4>
            <p class="lead mb-0">Aplikasi ini dibuat untuk memenuhi tugas Komputasi Astronomi</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy;2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

    <script>
      function changeKA(value) {
        var labelKA = document.getElementById('labelKA');
        labelKA.value = 'KA='+value;
      }
    </script>

  </body>

</html>


