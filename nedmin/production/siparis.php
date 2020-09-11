<?php

include 'header.php';


$siparissor=$db->prepare("SELECT * FROM siparisler order by siparis_id DESC");
$siparissor->execute();



?>



<head><script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script></head>










        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sifariş Siyahısı <small>




                    </small></h2>

<div align="right">
  


</div>
                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

<!--         Basliq        -->


     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                           <th>Sıra</th>
                          <th>Sifariş no</th>
                          <th>Sifariş zaman</th>
                          <th>Ad Soyad</th>
                          <th>Məbləğ</th>
                          <th>Ödəmə tip</th>
                           <th>Bank</th>
                          <th>Ödəmə</th>
                          <th></th>
                         
                        </tr>
                      </thead>





                      <tbody>

<?php   

$say=0;

while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC) ) { 
$kullanici_id=$sipariscek['kullanici_id'];
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(

'id' => $kullanici_id
));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


$say++;

 ?>



 <tr>
     <td width="20"><?php echo  $say ?></td>
                          <td><?php echo  $sipariscek['siparis_id'] ?></td>
                          <td><?php echo  $sipariscek['siparis_zaman'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_adsoyad'] ?></td>

 <td><?php echo  $sipariscek['siparis_toplam'] ?></td>
  <td><?php echo  $sipariscek['siparis_tip'] ?></td>
   <td><?php echo  $sipariscek['siparis_banka'] ?></td>

                          <td>


                            <?php 



                          if ($sipariscek['siparis_odeme']== "1") { ?>
                             

<center><button class="btn btn-success btn-xs" >Ödənilib</button></center>

                         <?php   }  else {  ?>
                            
<center><button class="btn btn-warning btn-xs" >Gözlənilir...</button></center>


<?php   }  ?>



                          </td>








                          
                          <td><center><a href="../netting/islem.php?siparis_id=<?php echo $sipariscek['siparis_id'] ?>&siparissil=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
                        
                        </tr>


<?php  }
 ?>




                       
                       
                      </tbody>
                    </table>




<!--   son          -->












                 </div>
                </div>
              </div>
            </div>

 
            </div>
          </div>

        <!-- /page content -->

        <!-- footer content -->
      <?php   
include 'footer.php';

?>
