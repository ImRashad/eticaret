<?php

include 'header.php';


$bankasor=$db->prepare("SELECT * FROM banka  order by banka_id DESC");
$bankasor->execute();



?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bank Siyahısı <small>




                    </small></h2>

<div align="right">
  
<a href="banka-ekle.php"><button class="btn btn-success btn-xs" >Əlavə et</button></a>

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
                          <th>Bank adı</th>
                          <th>Hesab AdSoyad</th>
             
                          <th>Bank IBAN</th>
                          <th>Bank durum</th>
                          <th></th>
                          <th></th>
                         
                        </tr>
                      </thead>





                      <tbody>

<?php   

$say=0;

while ($bankacek=$bankasor->fetch(PDO::FETCH_ASSOC) ) { 

$say++;

 ?>



 <tr>
     <td width="20"><?php echo  $say ?></td>
                          <td><?php echo  $bankacek['banka_ad'] ?></td>
       
                          <td><?php echo  $bankacek['banka_hesapadsoyad'] ?></td>
                          <td><?php echo  $bankacek['banka_iban'] ?></td>


                          <td><?php 



                          if ($bankacek['banka_durum']== "1") { ?>
                             

<center><button class="btn btn-success btn-xs" >Aktiv</button></center>

                         <?php   }  else {  ?>
                            
<center><button class="btn btn-danger btn-xs" >Passiv</button></center>


<?php   }  ?>



                          </td>








                          <td><center><a href="banka-duzenle.php?banka_id=<?php echo $bankacek['banka_id'] ?>"> <button  class="btn btn-primary btn-xs">Düzəlmə</button> </a> </center></td>
                          <td><center><a href="../netting/islem.php?banka_id=<?php echo $bankacek['banka_id'] ?>&bankasil=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
                        
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
