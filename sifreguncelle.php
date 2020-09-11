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
					
							<div class="bigtitle">Hesabim</div>
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
						<div class="title">şifrə dəyişmə</div>

					</div>

					<div class="form-group dob">
						<?php   

						if ($_GET['durum']=="farklisifre") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  Girdiyiniz  şifrələr fərqlidir...
							</div>
					<?php	} 

					elseif ($_GET['durum']=="eksisifre") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  Girdiyiniz şifrələr 6 xarakterdən azdır...
							</div>
						<?php }	elseif ($_GET['durum']=="basarisiz") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  Əməliyyatda səhv var...
							</div>
						<?php	} elseif ($_GET['durum']=="eskisifreyanlis") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>   Girdiyiniz əvvəlki şifrələr səhvdir...
							</div>
							<?php } elseif ($_GET['durum']=="basarili") { ?>

                          <div class="alert alert-success">
							<strong>TƏBRİKLƏR!</strong>  Şifrə dəyişdirildi...
							</div>

<?php  }   ?>

						  </div> 
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="password" class="form-control" name="kullanici_passwordeski" placeholder="Evvelki sifre...">
						</div> </div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="password" class="form-control" name="kullanici_passwordone" placeholder="Yeni sifre...">
						</div> </div>
						<div class="form-group dob">
						<div class="col-sm-6">
							<input type="password" class="form-control" name="kullanici_passwordtwo" placeholder="Yeni sifre tekrar...">
						</div> </div>
					
					
						
								<input type="hidden" name="kullanici_id"  value="<?php echo $kullanicicek['kullanici_id'] ?>">			
					<button name="kullanicisifreduzenle" class="btn btn-success">Düzəlt</button>
						</div>	
					
				</div>
		</form>
			</div>
		
		<div class="spacer"></div>
	</div>
	
	<?php   

include 'footer.php';
	 ?>