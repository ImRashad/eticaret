<?php

include 'header.php';

$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(

'id'=> $_GET['urun_id']

));


$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);






?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mallar düzənləmə <small>


                    <?php

                    if ($_GET['durum']=="ok") { ?>
                      
                      <b style="color: green;"><i>Əməliyyat uğurla həyata keçirildi...</i></b>
                    
                  <?php   } elseif ($_GET['durum']=="no") { ?>
                   
                    <b style="color: red;"><i>Əməliyyat səhv var...</i></b>
                 
                 <?php }

                    ?>



                    </small></h2>


                 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />




                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kateqoriya  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <?php  

                          $urun_id=$uruncek['kategori_id'];


                             $kategorisor=$db->prepare("SELECT * FROM kategori  where kategori_ust=:kategori_ust order by kategori_sira");
                              $kategorisor->execute(array(

                              'kategori_ust' => 0
                                                           ));
                                          ?>

                          <select name="kategori_id" >

                            <?php

                            while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                               
                               $kategori_id=$kategoricek['kategori_id']; ?>

<option  value="<?php echo $kategoricek['kategori_id'] ?>"  >

  <?php echo $kategoricek['kategori_ad'] ?>  </option>
                            <?php  }       ?>
          
                            










                          </select>







                        
                        </div>
                      </div>

























                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mallar ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_ad" placeholder="Ad" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         


       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mətn<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                               <textarea name="urun_detay" class="ckeditor"></textarea>
                        </div>
                      </div>

                         

 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mallar qiymət <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_fiyat"  placeholder="Qiymət" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mallar video <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_video"  placeholder="video url" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mallar keywords <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_keywords"  placeholder="keywords" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mallar stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="urun_stok"  placeholder="stok" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Vəziyyət <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
<select id="heard" class="form-control" name="urun_durum" required="">
  


<option value="1">Aktiv</option>


<option value="0">Passiv</option>



</select>

                          
                        </div>
                      </div>




                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                         <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">
 
                          <button type="submit" name="urunekle" class="btn btn-success">Əlavə et</button>
                        </div>
                      </div>

                    </form>




                  </div>
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
