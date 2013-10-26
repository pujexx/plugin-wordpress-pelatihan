<?php
/**
 * Plugin Name: Pendaftaran pelatihan
 * Plugin URI: http://about.me/pujexx
 * Description: ini adalah latihan membuat plugin.
 * Version: 1.0
 * Author: Puji Rahmadiyanto	
 */

function tampil_form(){?>

	<form class="form-horizontal">
		<div class="form-group">
		    <label for="inputnama" class="col-lg-2 control-label">Nama</label>
		    <div class="col-lg-10">
		      <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Nama Peserta">
		    </div>
  		</div>
  		<div class="form-group">
		    <label for="inputalamat" class="col-lg-2 control-label">Nama</label>
		    <div class="col-lg-10">
		      <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Alamat Peserta">
		    </div>
  		</div>
  		<div class="form-group">
		    <div class="col-lg-offset-2 col-lg-10">
		      <button type="submit" class="btn btn-default">Daftar</button>
		    </div>
		 </div>
	</form>	
<?php 
}

add_shortcode( 'test', 'tampil_form' );