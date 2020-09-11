<?php   
include 'header.php';


$kullanicisor=$db->prepare("SELECT *FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(

'mail'=> $_SESSION['userkullanici_mail']

));

$say=$kullanicisor->rowCount();

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
 ?>



	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
					
							<div class="bigtitle">Qeydiyyat</div>
						</div>
					
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<form method="POST" action="nedmin/netting/islem.php" class="form-horizontal checkout" role="form">
			<div class="row">
				<div class="col-md-6">
					<div class="title-bg">
						<div class="title">Qeydiyyat məlumatları</div>

					</div>

					<div class="form-group dob">
						<?php   

						if ($_GET['durum']=="ok") { ?>

                         <div class="alert alert-success">
							 <strong>TƏBRİKLƏR!</strong>  Düzəliş edildi...
							</div>
					<?php	} 

					elseif ($_GET['durum']=="no") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  Əməliyyatda səhv var...
							</div>
						<?php } ?>

						  </div> 
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
						</div> </div>
					<div class="form-group dob">
						<div class="col-sm-12">
							<input type="email" class="form-control"  name="kullanici_mail" disabled="" value="<?php echo $kullanicicek['kullanici_mail'] ?>">
						</div>
						</div>
					
						
								<input type="hidden" name="kullanici_id"  value="<?php echo $kullanicicek['kullanici_id'] ?>">			
					<button name="kullanicibilgiduzenle" class="btn btn-success">Düzəlt</button>
	</div>	
</div>
</form>	
<hr>
<div class="form-group dob">
		<div class="col-sm-12">
			<a href="sifreguncelle.php">	
						<button type="" class="btn btn-warning">Şifrəni dəyiş</button>
						</a>
					</div>		
					
			</div>		
				
		

						
			</div>
		
		<div class="spacer"></div>
	</div>
	
	<?php   

include 'footer.php';
	 ?>