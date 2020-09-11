<?php  
include 'header.php';

$urunsor=$db->prepare("SELECT * FROM urun where urun_seourl=:seourl");
$urunsor->execute(array(

'seourl'=> $_GET['sef']

));


$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);


?>

<head>
	
<?php
if ($_GET['durum']=="ok") {  ?>
	
<script type="text/javascript">

	alert("Yorumunuz göndərildi...");

</script>


<?php  }


?>






</head>
	<div class="container">
	
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
						
							<div class="bigtitle">Məhsul məlumatları</div>
						</div>
					
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title"><?php echo $uruncek['urun_ad'] ?></div>
				</div>
				<div class="row">
					<div class="col-md-6">


<?php 

$urun_id=$uruncek['urun_id'];

$urunfotosor=$db->prepare("SELECT * FROM urun_foto where  urun_id=:urun_id order by urunfoto_sira ASC limit 1");
$urunfotosor->execute(array(

'urun_id' => $urun_id

));

$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);




  ?>



						<div class="dt-img">
					
							<a class="fancybox" href="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" alt="" class="img-responsive"></a>
						</div>
						


<?php 

$urun_id=$uruncek['urun_id'];

$urunfotosor=$db->prepare("SELECT * FROM urun_foto where  urun_id=:urun_id order by urunfoto_sira DESC limit 3");
$urunfotosor->execute(array(

'urun_id' => $urun_id

));

while($urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC)){




  ?>



						<div class="thumb-img">
							<a class="fancybox" href="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" alt="" class="img-responsive"></a>
						</div>



					<?php  } ?>

					</div>
					<div class="col-md-6 det-desc">
						<div class="productdata">
							<div class="infospan">Model <span><?php echo $uruncek['urun_id']; ?></span></div>
							<div class="infospan">Qiymət(manatla) <span><?php  echo $uruncek['urun_fiyat']; ?> </span></div>
							<div class="infospan">Manufacturer <span>Nikon</span></div>
							
						<div class="clearfix"></div>
								<hr>











								
<form action="nedmin/netting/islem.php" method="POST">

								<div class="form-group">
									<label for="qty" class="col-sm-2 control-label">Ədəd</label>
									<div class="col-sm-4">
									
											<input type="text" value="1" name="urun_adet" class="form-control" >
									
									</div>
									<div class="col-sm-4">


                        <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>" >
						<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>" >

								

<?php if (isset($_SESSION['userkullanici_mail'])) { ?>

										<button type="submit" name="sepetekle" class="btn btn-default btn-red btn-sm"><span class="addchart">
										Səbətə əlavə et</span></button>

<?php  } else { ?>

<button type="submit" name="sepetekle" disabled="" class="btn btn-default btn-red btn-sm"><span class="addchart">
										Səbətə əlavə et</span></button>

<?php 
} ?>


									</div>
									<div class="clearfix"></div>
								</div>
							
							</form>
















							
							<div class="sharing">
								<div class="share-bt">
									<div class="addthis_toolbox addthis_default_style ">
										<a class="addthis_counter addthis_pill_style"></a>
									</div>
								
								
								</div>
								<div class="">

									<?php  if ($uruncek['urun_stok']>=1) {

										echo "Mal sayi: ".$uruncek['urun_stok'];
									}else{

										echo "Bazada məhsul yoxdu.";

									} ?>
									




								</div>
							</div>
							
						</div>

					</div>
				



				</div>



				<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						<li class="active"><a href="#desc" data-toggle="tab">Haqqında</a></li>



<?php  


$kullanici_id=$kullanicicek['kullanici_id'];
$urun_id=$uruncek['urun_id'];


$yorumsor=$db->prepare("SELECT * FROM yorum where urun_id=:urun_id and yorum_durum=:yorum_durum");
$yorumcek=$yorumsor->execute(array(

'urun_id' => $urun_id,
'yorum_durum' => 1
));

$say=$yorumsor->rowCount();



 ?>




						<li class=""><a href="#rev" data-toggle="tab">Yorumlar (<?php echo $say ?>)</a></li>
						<li class=""><a href="#video" data-toggle="tab">Video</a></li>
					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade active in" id="desc">
							<p>
							<?php  echo  $uruncek['urun_detay']  ?>
							</p>
						</div>


						<div class="tab-pane fade" id="rev">

<?php 

while ($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {

$ykullanici_id=$yorumcek['kullanici_id'];
	$ykullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$ykullanicisor->execute(array(

'id'=> $ykullanici_id

));


$ykullanicicek=$ykullanicisor->fetch(PDO::FETCH_ASSOC);


$zaman=explode(" ", $yorumcek['yorum_zaman'] );

 ?>


							<p class="dash">
							<span><?php echo $ykullanicicek['kullanici_adsoyad']  ?></span> <?php echo $zaman[0] ?><br><br>
							<?php echo $yorumcek['yorum_detay'] ; ?>
							</p>

<?php  }
if (isset($_SESSION['userkullanici_mail'])) { ?>
	     <h4>Yorum yazın</h4>

							<form action="nedmin/netting/islem.php" method="POST" role="form">
							
							<div class="form-group">

								<textarea class="form-control" name="yorum_detay" placeholder="Yorumunuzu daxil edin..." id="text"></textarea>
							</div>
							<input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>" >
						<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>" >
						<input type="hidden" name="gelen_url" value="<?php  echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";?>" >

							<button type="submit" name="yorumkaydet"  class="btn btn-default btn-red btn-sm">Göndər</button>
						</form>
<?php  } else {  ?>

   <p>Yorum yaza bilmək üçün <a href="register">Qeydiyyatdan</a> keçin...</p>



<?php  } ?>

							
							
						</div>

						<div class="tab-pane fade" id="video">
							<p>

								<?php 
if (strlen($uruncek['urun_video'])>0) {  ?>
	
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $uruncek['urun_video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
<?php  }else {  ?>

  <p>Bu məhsula video yerləşdirilməyib...</p>

 <?php  }
								 ?>



							</p>
						</div>
					</div>
				</div>
				
				<div id="title-bg">


					<div class="title">Bənzər məhsullar</div>
				</div>
				<div class="row prdct"><!--Products-->
					
<?php   

$kategori_id=$uruncek['kategori_id'];

$urunaltsor=$db->prepare("SELECT * FROM urun where kategori_id=:kategori_id and urun_durum=:urun_durum order by rand() limit 3");
$urunaltsor->execute(array(

'kategori_id'=> $kategori_id,
'urun_durum' => 1

));





while ($urunaltcek=$urunaltsor->fetch(PDO::FETCH_ASSOC))
{ 

$urun_id=$urunaltcek['urun_id'];

$urunfotosor=$db->prepare("SELECT * FROM urun_foto where  urun_id=:urun_id order by urunfoto_sira ASC limit 1");
$urunfotosor->execute(array(

'urun_id' => $urun_id

));

$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);

	?>

					
				<div class="col-md-4">
				<div class="productwrap " style="height: 300px;">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="urun-<?=seo($urunaltcek['urun_ad']) ?>"><img style="width: 400px; height: 200px;" src="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><?php echo $urunaltcek['urun_fiyat']  ?>AZN</span></div></div>
							</div>
							<br>
								<br>

							<span class="smalltitle"><a href="urun-<?=seo($urunaltcek['urun_ad']) ?>"><?php echo substr($urunaltcek['urun_ad'], 0,30); ?></a></span>
					
						</div>
				</div>

					<?php  }  ?>
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->



			<?php 

include 'sidebar.php';
			?>
		</div>
	</div>
	
	<?php 

include 'footer.php';
	 ?>