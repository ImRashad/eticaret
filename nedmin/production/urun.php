<?php

include 'header.php';


$urunsor=$db->prepare("SELECT * FROM urun");
$urunsor->execute();



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
                    <h2>Mallar Siyahısı <small>




                    </small></h2>

<div align="right">
  
<a href="urun-ekle.php"><button class="btn btn-success btn-xs" >Əlavə et</button></a>

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
                          <th>Mallar adı</th>
                          <th>Mallar qiymət</th>
                          <th>Mallar stok</th>
                          <th>Şəkil</th>
                          <th>Mallar əsas səhifə</th>
                          <th>Mallar durum</th>
                          <th></th>
                          <th></th>
                         
                        </tr>
                      </thead>





                      <tbody>

<?php   

$say=0;

while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC) ) { 

$say++;

 ?>



 <tr>
     <td width="20"><?php echo  $say ?></td>
                          <td><?php echo  $uruncek['urun_ad'] ?></td>
                          <td><?php echo  $uruncek['urun_fiyat'] ?></td>
                          <td><?php echo  $uruncek['urun_stok'] ?></td>
  <td><center><a href="urun-galeri.php?urun_id=<?php echo $uruncek['urun_id'] ?>"><button class="btn btn-success btn-xs">Şəkillər</button></a></center></td>
 <td>

  <?php 



                          if ($uruncek['urun_on']=="1") { ?>
                             

<center><a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_on=0&urun_o=ok"><button class="btn btn-success btn-xs" >Esas </button></a></center>

                         <?php   }  elseif($uruncek['urun_on']=="0") {  ?>
                            
<center><a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urun_on=1&urun_o=ok"><button class="btn btn-warning btn-xs" >Arxa </button></a></center>


<?php   }  ?>



                          </td>

                          <td>


                            <?php 



                          if ($uruncek['urun_durum']== "1") { ?>
                             

<center><button class="btn btn-success btn-xs" >Aktiv</button></center>

                         <?php   }  else {  ?>
                            
<center><button class="btn btn-danger btn-xs" >Passiv</button></center>


<?php   }  ?>



                          </td>








                          <td><center><a href="urun-duzenle.php?urun_id=<?php echo $uruncek['urun_id'] ?>"> <button  class="btn btn-primary btn-xs">Düzəlmə</button> </a> </center></td>
                          <td><center><a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id'] ?>&urunsil=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
                        
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
