
<?php 

   error_reporting(0);
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
  </style>
</head>
<body >
    <div style="margin-top: 60px" class="container">
        
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div class="panel-body">
                    <form method="POST" action="../netting/islem.php">
                        <hr />
                       <center><h3><b>GİRİŞ</b></h3></center> 
                        <br />

                         <?php 

                         if ($_GET['admingiris'] =="no" ){
                          

                         echo "Istifadəçi tapılmadı.";  } 
                         ?>

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="email" class="form-control" name="kullanici_mail" placeholder="İstifadəçi adı " />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" class="form-control"  name="kullanici_password" placeholder="Şifrə" />
                        </div>
                        <div class="form-group">
                            
                         </span>
                     </div>

                     <button type="submit" style="width: 100%" class="btn btn-primary" name="admingiris">Giriş</button>
                     <hr />
                    
                 </form>

             </div>

         </div>


     </div>
 </div>

</body>
</html>
