<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Sifariş məlumatları</div>
			
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-12">
				<div class="title-bg">
					<div class="title">Sifarişlərim</div>
				</div>

				<div class="table-responsive">
					<table class="table table-bordered chart">
						<thead>
							<tr>
								<th>Sifariş No</th>
								<th>Tarix</th>
								<th>Məbləğ</th>
								<th>Ödəmə tip</th>
								<th>Durum</th>
								<th></th>
								
							</tr>
						</thead>
						<tbody>
							<tr>

<?php
$kullanici_id=$kullanicicek['kullanici_id'];
$siparissor=$db->prepare("SELECT * FROM siparisler where kullanici_id=:id");
$siparissor->execute(array(
'id'  => $kullanici_id
));

while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {?>

								<td><?php echo $sipariscek['siparis_id'] ?></td>
								<td><?php echo $sipariscek['siparis_zaman'] ?></td>
								<td><?php echo $sipariscek['siparis_toplam'] ?></td>
								<td><?php echo $sipariscek['siparis_tip'] ?></td>
								<td>
									
<?php  if ($sipariscek['siparis_odeme']=="0") { ?>

<button class="btn btn-warning btn-xs" >Gözlənilir...</button>

<?php  }  else { ?>

<button class="btn btn-warning btn-xs"  >Ödənilib</button>

<?php  } ?>


								</td>
								
								
								<td><a href=""><button class="btn btn-primary btn-xs">Ətraflı</button></a></td>
							
<?php } ?>
							</tr>

						</tbody>
					</table>
				</div>

				


				


				


				
			</div>
			
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>