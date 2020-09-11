<?php

include 'header.php';


$kullanicisor=$db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute();



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
                    <h2>Istifadəçi Siyahısı <small>




                    </small></h2>


                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

<!--         Basliq        -->


     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                           <th>S.NO</th>
                          <th>Tarix</th>
                          <th>Ad Soyad</th>
                          <th>telefon</th>
                          <th>Mail Adresi</th>
                           <th>Durum</th>
                          <th></th>
                          <th></th>
                         
                        </tr>
                      </thead>





                      <tbody>

<?php   
$say=0;
while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC) ) { 
$say++ ?>



 <tr>
        <td><?php echo  $say ?></td>
                          <td><?php echo  $kullanicicek['kullanici_zaman'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_adsoyad'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_tel'] ?></td>
                          <td><?php echo  $kullanicicek['kullanici_mail'] ?></td>



                      <td>      <?php 



                          if ($kullanicicek['kullanici_durum']== "1") { ?>
                             

<center><button class="btn btn-success btn-xs" >Aktiv</button></center>

                         <?php   }  else {  ?>
                            
<center><button class="btn btn-danger btn-xs" >Passiv</button></center>


<?php   }  ?>



                          </td>






                          <td><center><a href="kullanici-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>"> <button  class="btn btn-primary btn-xs">Düzəlmə</button> </a> </center></td>
                          <td><center><a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>&kullanicisil=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
                        
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
