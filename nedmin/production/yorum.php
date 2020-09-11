<?php

include 'header.php';


$yorumsor=$db->prepare("SELECT * FROM yorum order by yorum_id DESC");
$yorumsor->execute();



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
                    <h2>Yorum Siyahısı <small>




                    </small></h2>

          
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

<!--         Basliq        -->


     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                           <th>Sıra</th>
                           <th>Tarix</th>
                          <th>AD</th>
                          <th>Mail</th>
                          <th>Detay</th>
                      
                          <th width="60">Veziyyet</th>
                        
                          <th></th>
                         
                        </tr>
                      </thead>





                      <tbody>

<?php $say=0;

while ($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC) ) { 

$say++;
 
$ykullanici_id=$yorumcek['kullanici_id'];
  $ykullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$ykullanicisor->execute(array(

'id'=> $ykullanici_id

));


$ykullanicicek=$ykullanicisor->fetch(PDO::FETCH_ASSOC); 

$yorum_zaman=explode(" ", $yorumcek['yorum_zaman']);
 ?>



 <tr>
     <td width="20"><?php echo  $say ?></td>
     <td><?php echo $yorumcek['yorum_zaman']?></td>
                          <td><?php echo  $ykullanicicek['kullanici_adsoyad'] ?></td>
                          <td><?php echo  $ykullanicicek['kullanici_mail'] ?></td>
                           <td><?php echo substr($yorumcek['yorum_detay'],0, 60)  ?></td>
                     



                                <td>
                                  <?php 



                          if ($yorumcek['yorum_durum']== "1") { ?>
                             

<center><a href="../netting/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorum_durum=0&yorum_duru=ok"><button class="btn btn-success btn-xs" >Aktiv</button></a></center>

                         <?php   }  elseif($yorumcek['yorum_durum']=="0") {  ?>
                            
<center><a href="../netting/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorum_durum=1&yorum_duru=ok"><button class="btn btn-warning btn-xs" >Passiv</button></a></center>



<?php   }  ?>



                          </td>








                         <input type="hidden" name="yorum_id" value="<?php echo $yorumcek['yorum_id'] ?>">

                          <td><center><a href="../netting/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorumsil=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
                        
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
