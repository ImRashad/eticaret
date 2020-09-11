<?php  
include 'header.php';


if (isset($_GET['sef'])) {
	
$kategorisor=$db->prepare("SELECT * FROM kategori where kategori_seourl=:seourl");
$kategorisor->execute(array(

'seourl'=> $_GET['sef']

));


$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

$kategori_id=$kategoricek['kategori_id'];


$urunsor=$db->prepare("SELECT * FROM urun where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_id DESC");
$urunsor->execute(array(

'kategori_id'=> $kategori_id,
'urun_durum' => 1

));

} else
{



$urunsor=$db->prepare("SELECT * FROM urun");
$urunsor->execute();

}


?>
					
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
							
							<div class="bigtitle">Kateqoriyalar</div>
						</div>
						
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Bütün məhsullar</div>
				<!--	<div class="title-nav">
						<a href="category.htm"><i class="fa fa-th-large"></i>grid</a>
						<a href="category-list.htm"><i class="fa fa-bars"></i>List</a>
					</div> -->
				</div>
				<div class="row prdct"><!--Products-->



<?php  
	
	

while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)){
$urun_id=$uruncek['urun_id'];

$urunfotosor=$db->prepare("SELECT * FROM urun_foto where  urun_id=:urun_id order by urunfoto_sira ASC limit 1");
$urunfotosor->execute(array(

'urun_id' => $urun_id

));

$urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);
 ?>

					<div class="col-md-4">
						<div class="productwrap" style="height: 300px;">
							<div class="pr-img" >
								<div class="hot"></div>
								<a href="urun-<?=seo($uruncek['urun_ad']) ?>"><img style="width: 400px; height: 200px;" src="<?php echo $urunfotocek['urunfoto_resimyol']  ?>" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice"></span><?php echo $uruncek['urun_fiyat']?>AZN</span></div></div>
							</div>
							<br>		<br>
							<span class="smalltitle"><a href="urun-<?=seo($uruncek['urun_ad']) ?>"><?php echo $uruncek['urun_ad']  ?></a></span>
				
						</div>
					</div>
					
					<?php  }  ?>


<div align="right" class="col-md-12">
                     		<ul class="pagination">

                     			<?php

                     			$s=0;

                     			while ($s < $toplam_sayfa) {

                     				$s++; ?>

                     				<?php 

                     				if ($s==$sayfa) {?>

                     				<li class="active">

                     					<a href="kategoriler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                     				</li>

                     				<?php } else {?>


                     				<li>

                     					<a href="kategoriler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                     				</li>

                     				<?php   }

                     			}

                     			?>

                     		</ul>
                     	</div>


				</div><!--Products-->



			<!--pagination	<ul class="pagination shop-pag">
					<li><a href="#"><i class="fa fa-caret-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
				</ul> -->

			</div>

<?php   
include 'sidebar.php';
?>

		</div>
		<div class="spacer"></div>
	</div>
	
	<?php  
include 'footer.php';

	?>