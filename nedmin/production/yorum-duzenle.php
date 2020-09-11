<?php

include 'header.php';

$yorumsor=$db->prepare("SELECT * FROM yorum where yorum_id=:id");
$yorumsor->execute(array(

'id'=> $_GET['yorum_id']

));


$yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC);






?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>yorum düzənləmə <small>


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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Detay <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="yorum_detay" value="<?php echo $yorumcek['yorum_detay'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                




                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                         <input type="hidden" name="yorum_id" value="<?php echo $yorumcek['yorum_id'] ?>">

                          <button type="submit" name="yorumduzenle" class="btn btn-success">Yenilə</button>
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
