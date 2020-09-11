<?php  include 'header.php'; ?>

<div class="container">
	
	<div class="clearfix"></div>
	<div class="lines"></div>
	<div class="main-slide">
		<div id="sync1" class="owl-carousel">
			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>Hepsiburada Samsung Galaxy A50 2019 64 GB</h1>
						<p>
							Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec dignissim dolor eget..
						</p>
						<button class="btn btn-default btn-red btn-lg">Səbətə əlavə et</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
								
								<span>1450AZN</span>
								<span class="ondeal">Yeni</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="dimg/urun/28121298892380630902a50.jpg" alt="" class="img-responsive">
				</div>
			</div>
			<div class="item">
				<div class="slide-desc">
					<div class="inner">
						<h1>Hepsiburada Samsung Galaxy A50 2019 64 GB</h1>
						<p>
							Nunc non fermentum nunc. Sed ut ante eget leo tempor consequat sit amet eu orci. Donec dignissim dolor eget..
						</p>
						<button class="btn btn-default btn-red btn-lg">Səbətə əlavə et</button>
					</div>
					<div class="inner">
						<div class="pro-pricetag big-deal">
							<div class="inner">
								
								<span>1450AZN</span>
								<span class="ondeal">Yeni</span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-type-1">
					<img src="dimg/urun/28121298892380630902a50.jpg" alt="" class="img-responsive">
				</div>
			</div>
			
			
			
			
		</div>
	</div>
	<div class="bar"></div>

</div>
<div class="f-widget featpro">
	<div class="container">
		<div class="title-widget-bg">
			<div class="title-widget">Ən son daxil edilənlər</div>
			<div class="carousel-nav">
				<a class="prev"></a>
				<a class="next"></a>
			</div>
		</div>
		<div id="product-carousel" class="owl-carousel owl-theme">


			<?php  

			$urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:urun_durum and urun_on=:urun_on order by urun_id DESC limit 8");
			$urunsor->execute(array(

				'urun_durum' => 1,
				'urun_on' => 1


			));

			while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
				
				$urun_id=$uruncek['urun_id'];

				$urunfotosor=$db->prepare("SELECT * FROM urun_foto where  urun_id=:urun_id order by urunfoto_sira ASC limit 1");
				$urunfotosor->execute(array(

					'urun_id' => $urun_id

				));

				$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);

				?>

				<div class="item">
					<div class="productwrap " style="height: 300px;">
						<div class="pr-img">
							<div class="hot"></div>
							<a href="urun-<?=seo($uruncek['urun_ad']) ?>"><img style="width: 400px; height: 200px;" src="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" alt="" class="img-responsive"></a>
							<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><?php echo $uruncek['urun_fiyat']  ?>AZN</span></div></div>
						</div>
						<br>
						<br>

						<span class="smalltitle"><a href="urun-<?=seo($uruncek['urun_ad']) ?>"><?php echo substr($uruncek['urun_ad'], 0,60); ?></a></span>
						
					</div>
				</div>


			<?php   }  ?>
			
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			
			
			<div class="title-bg">
				<div class="title">Məhsullar</div>
			</div>
			<div class="row prdct"><!--Products-->
				<?php  

				$urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:urun_durum order by urun_id DESC limit 9");
				$urunsor->execute(array(

					'urun_durum' => 1

				));


				while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {  


					$urun_id=$uruncek['urun_id'];

					$urunfotosor=$db->prepare("SELECT * FROM urun_foto where  urun_id=:urun_id order by urunfoto_sira ASC limit 1");
					$urunfotosor->execute(array(

						'urun_id' => $urun_id

					));

					$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);



					?>


					
					<div class="col-md-4">
						<div class="productwrap" style="height: 300px;">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="urun-<?=seo($uruncek['urun_ad']) ?>"><img style="width: 400px; height: 200px;" src="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="price"><?php echo $uruncek['urun_fiyat']  ?></span>AZN</span></div></div>
							</div>
							<br>
							<br>

							<span class="smalltitle"><a href="urun-<?=seo($uruncek['urun_ad']) ?>"><?php echo substr($uruncek['urun_ad'], 0,30); ?></a></span>
							
						</div>
					</div>


				<?php    }  ?>




				
			</div><!--Products-->
			<div class="spacer"></div>
		</div><!--Main content-->
		

		<?php 

		include 'sidebar.php';
		?>


	</div>
</div>

<?php  include 'footer.php'; ?>