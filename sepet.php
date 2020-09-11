<?php  include 'header.php'  ?>
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
						
							<div class="bigtitle">Shopping Cart</div>
						</div>
					
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="title-bg">
			<div class="title">Shopping Cart</div>
		</div>
		
		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Image</th>
						<th>Adı</th>
				
						<th>Nömrə</th>
						<th>Adet</th>
						<th>Fiyat</th>
						<th></th>
					</tr>
				</thead>
				<tbody>



<?php 

$kullanici_id=$kullanicicek['kullanici_id'];

$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
$sepetsor->execute(array(

'id'  => $kullanici_id


));

while ($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

	$urun_id=$sepetcek['urun_id'];
	
$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id and urun_durum=:durum");
$urunsor->execute(array(

'urun_id'=> $urun_id,
'durum' => 1
));


$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
$toplam += $uruncek['urun_fiyat']*$sepetcek['urun_adet'];


   ?>




					<tr>
						
						<td><a href="nedmin/netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&malsil=ok"><i class="fa fa-times-circle fa-2x"></i></a></td>
						<td><img src="images\demo-img.jpg" width="100" alt=""></td>
						<td><?php echo $uruncek['urun_ad'] ?></td>
					
						<td><?php echo $uruncek['urun_id'] ?></td>
						<td><form><input type="text" class="form-control quantity" value="<?php echo $sepetcek['urun_adet'] ?>" ></form></td>
						<td><?php echo $uruncek['urun_fiyat'] ?></td>
						
					</tr>



<?php  }  ?>
			
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">
				
			
			</div>
			<div class="col-md-3 col-md-offset-3">
			<div class="subtotal-wrap">
				
				<div class="total">Toplam : <span class="bigprice"><?php echo $toplam ?> AZN</span></div>
	
				<div class="clearfix"></div>
				<a href="odeme.php" class="btn btn-default btn-yellow">Ödəmə</a>
			</div>

			<div class="clearfix">
				
			</div>
			
			</div>
		</div>
		<div class="spacer">
			
		</div>
	</div>
	
	<?php include 'footer.php'; ?>