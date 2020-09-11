<?php   
include 'header.php'
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

						if ($_GET['durum']=="farklisifre") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  Girdiyiniz şifrələr fərqlidir...
							</div>
					<?php	} 

					elseif ($_GET['durum']=="eksisifre") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  Girdiyiniz şifrələr 6 xarakterdən azdır...
							</div>
						<?php }	elseif ($_GET['durum']=="basarisiz") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  İşləm başarısızdır...
							</div>
						<?php	} elseif ($_GET['durum']=="eynikayit") { ?>

                          <div class="alert alert-danger">
							<strong>HATA!</strong>  Bu mail qeydiyyatdan keçib...
							</div>
							<?php } elseif ($_GET['durum']=="basarili") { ?>

                          <div class="alert alert-success">
							<strong>TƏBRİKLƏR!</strong>  Qeydiyyatdan uğurla keçdiniz...
							</div>

<?php  }   ?>

						  </div> 
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="kullanici_adsoyad" placeholder="Adınızı girin...">
						</div> </div>
						<div class="form-group dob">
						<div class="col-sm-6">
							 <input type="text" class="form-control" name="kullanici_tel"  minlength="10" maxlength="10" placeholder="Telefon nömrəsi... " >
						</div> </div>
					<div class="form-group dob">
						<div class="col-sm-12">
							<input type="email" class="form-control"  name="kullanici_mail" placeholder="Email girin">
						</div>
						</div>
						<div class="form-group dob">
					<div class="col-sm-6">
							<input type="password" class="form-control" minlength="6" maxlength="255" name="kullanici_passwordone" placeholder="Şifrəni daxil edin...">
						</div>
						</div>
						<div class="form-group dob">
						<div class="col-sm-6">
							<input type="password" class="form-control" minlength="6" maxlength="255" name="kullanici_passwordtwo" placeholder="Şifrəni təkrar edin...">
						</div>
						</div>
											
					<button name="kullanicikaydet" class="btn btn-success">Qeydiyyatdan keç</button>
						</div>	
					
				</div>
			</div>
		</form>
		<div class="spacer"></div>
	</div>
	
	<?php   

include 'footer.php';
	 ?>