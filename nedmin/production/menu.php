<?php

include 'header.php';


$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();



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
                    <h2>Menü Siyahısı <small>




                    </small></h2>

<div align="right">
  
<a href="menu-ekle.php"><button class="btn btn-success btn-xs" >Əlavə et</button></a>

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
                          <th>Menü adı</th>
                          <th>Menü url</th>
                          <th>Menü sıra</th>
                          <th>Menü durum</th>
                          <th></th>
                          <th></th>
                         
                        </tr>
                      </thead>





                      <tbody>

<?php   

$say=0;

while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC) ) { 

$say++;

 ?>



 <tr>
     <td width="20"><?php echo  $say ?></td>
                          <td><?php echo  $menucek['menu_ad'] ?></td>
                          <td><?php echo  $menucek['menu_url'] ?></td>
                          <td><?php echo  $menucek['menu_sira'] ?></td>


                          <td><?php 



                          if ($menucek['menu_durum']== "1") { ?>
                             

<center><button class="btn btn-success btn-xs" >Aktiv</button></center>

                         <?php   }  else {  ?>
                            
<center><button class="btn btn-danger btn-xs" >Passiv</button></center>


<?php   }  ?>



                          </td>








                          <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id'] ?>"> <button  class="btn btn-primary btn-xs">Düzəlmə</button> </a> </center></td>
                          <td><center><a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id'] ?>&menusil=ok">  <button class="btn btn-danger btn-xs">sil</button> </a></center></td>
                        
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
