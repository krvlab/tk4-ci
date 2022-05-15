<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thesisku</title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/');?>css/stylesheet.css" rel="stylesheet">

    <!--[endif]-->
  </head>
  <body>

    <!-- Nav BAr -->

     <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            Thesisku
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">

          <li><a href="<?=site_url('')?>"> Home </a></li>
                <li><a href="<?=site_url('bagian')?>"> Bagian </a></li>
                <li><a href="<?=site_url('barang')?>"> Barang </a></li>
                <li><a href="<?=site_url('pegawai')?>"> Pegawai </a></li>
        </ul>

    <!-- Navbar Right-->
        <ul class="nav navbar-nav navbar-right">
              <li><a href="#"> <?php echo $this->session->userdata('nama');?> </a></li>
          <li><a href="<?=site_url('user/logout')?>"> Log out </a></li>
        </ul>

          </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Nav Bar End -->
	<!--strat-->
<div class="accordion horizontal">
    <ul>
        <li>
            <input type="radio" id="vert-1" name="vert-accordion" checked="checked" />
            <label for="vert-1">Bullwhip&nbsp;Effect</label>
            <div class="content">
				<div class="col-md-7">
				<img src="<?=base_url('assets/');?>gambar/The-Bullwhip-Affect.jpg" />
				</div>
				<div class="col-md-5 .col-md-offset-7">
                <p align="justify">
                	Untuk mencapai efesiensi supply chain dibutuhkan tiga aspek kunci dari supply chain management yaitu
                    mengatur aliran fisik material, mengatur aliran informasi, dan mengatur struktur organisasi dari
                    kegiatan supply chain. Hambatan yang mungkin dialami dalam supply chain management yaitu semakin
                    banyaknya variasi produk, menurunnya daur hidup produk, peningkatan permintaan konsumen, fragmentation
                     of supply chain ownership, era globalisasi ( Chopra dan Meindl, 2001).
                </p>
				<p align="justify"><b>BULLWHIP EFFECT</b> adalah fenomena permintaan yang sebenarnya cukup stabil
                pada tingkat konsumen akhirnya akan berubah menjadi fluktuatif di bagian hulu
                 supply chain, makin ke hulu maka peningkatan itu akan semakin besar
				</p>
			</div>
			</div>
        </li>
        <li>
            <input type="radio" id="vert-2" name="vert-accordion" />
            <label for="vert-2">Demand&nbsp;</label>
            <div class="content">
                <div class="col-md-8">
			<img src="<?=base_url('assets/');?>gambar/102215_1735_SupplyChain2.png" />
				</div>
				<div class="col-md-4 .col-md-offset-8">
				<p align="justify">Permintaan biasanya diupdate sesuai dengan permintaan pemesan. Dimana  variabilitas permintaan yang dipesan dari pemesan lebih tinggi dibandingkan variabilitas permintaan pemesan akhir
				</p>
			</div>

			</div>
        </li>
        <li>
            <input type="radio" id="vert-3" name="vert-accordion" />
            <label for="vert-3">Order&nbsp;</label>
            <div class="content">
                <div class="col-md-6">
					<img src="<?=base_url('assets/');?>gambar/bullwhip-effect1.png" />
				</div>
				<div class="col-md-6 .col-md-offset-3">
				<p align="justify">Terjadinya penumpukan beberapa pesanan dengan
                jumlah kecil yang kemudian setelah beberapa waktu
                akan diberikan pada produksi. Pola penumpukan ini akan
                mengakibatkan meningkatnya variabilitas pada produksi.
				</p>
			</div>
			</div>
        </li>
        <li>
            <input type="radio" id="vert-4" name="vert-accordion" />
            <label for="vert-4">Lead&nbsp;Time</label>
            <div class="content">
                <div class="col-md-6">
					<img src="<?=base_url('assets/');?>gambar/Bullwhip-Effect-graph.jpg" />
				</div>
				<div class="col-md-6 .col-md-offset-3">
				<p>Lamanya waktu tiba pesanan yang diterima oleh pemesan.
                Dengan keadaan lead time yang lebih panjang akan meningkatkan variabilitas
                yang terjadi di suatu supply chain.
				</p>
               	<p> Lead Time Berarti waktu produksi yang dijanjikan, sehingga pemesan dapat mengambil barang.
                </p>
			</div>


			</div>
        </li>
			</div>
        </li>
    </ul>
</div>
    <!--end-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>
  </body>
</html>
