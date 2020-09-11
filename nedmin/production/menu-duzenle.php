<?php

include 'header.php';

$menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
$menusor->execute(array(

'id'=> $_GET['menu_id']

));


$menucek=$menusor->fetch(PDO::FETCH_ASSOC);






?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menu düzənləmə <small>


                    <?php

                    if ($_GET['durum']=="ok") { ?>
                      
                      <b style="color: green;"><i>Əməliyyat uğurla həyata keçirildi...</i></b>
                    
                  <?php   } elseif ($_GET['durum']=="no") { ?>
                   
                    <b style="color: red;"><i>Əməliyyat səhv var...</i></b>
                 
                 <?php }

                    ?>



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




                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_ad" value="<?php echo $menucek['menu_ad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         


       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mətn<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                               <textarea name="menu_detay" class="ckeditor"><?php echo $menucek['menu_detay'] ?></textarea>
                        </div>
                      </div>

                         









 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_url" value="<?php echo $menucek['menu_url'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu sira <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_sira" value="<?php echo $menucek['menu_sira'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Vəziyyət <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
<select id="heard" class="form-control" name="menu_durum" required="">
  


<option value="1" <?php echo $menucek['menu_durum'] == "1" ? 'selected=""' : '' ; ?>>Aktiv</option>


<option value="0" <?php echo $menucek['menu_durum'] == "0" ? 'selected=""' : '' ; ?>>Passiv</option>



</select>

                          
                        </div>
                      </div>




                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                         <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'] ?>">

                          <button type="submit" name="menuduzenle" class="btn btn-success">Yenilə</button>
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
