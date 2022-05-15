<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thesisku</title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

    <!-- mulai form -->
    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="<?=site_url('bagian/simpan')?>">
    			<legend> Form Tambah Bagian </legend>
                <div class="form-group">
                	<label for="nama_bagian" class="col-md-2"> Nama Bagian </label>
                	<div class="col-md-7">
                    	<input required type="text" class="form-control" id="nama_bagian" placeholder="nama bagian" name="nama_bagian">
                    </div>
                </div>
                <br>
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">

                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        	<a class="btn btn-danger" href="#" role="button">Batal</a>
                    </div>
                </div>
    		</form>
        </div>
    </div>

    <!-- akhir form -->


    <!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Bagian </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <tr>
                    <?php
                        foreach ($DaftarBagian as $val) {
                    ?>
                        <td> <?php //echo $key+1 ?> </td>
                        <td> <?php echo $val->nama_bagian ?> </td>

                        <td>
                            <a href="bagian_form_edit.php?id=<?php echo $val->id_bagian; ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a>
                        </td>
                        <td>
                            <a href="bagian_delete.php?id=<?php echo $val->id_bagian ?>">
                            <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash">
                                    Delete
                                </span>
                            </button>
                            </a>
                        </td>

                        </tr>
                        <?php
                        }
                    ?>
                </table>
            </div>
        </div>
	</div>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>
  </body>
</html>
