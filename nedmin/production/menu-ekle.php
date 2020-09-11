<?php

include 'header.php';

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menu daxil etmə <small>


                    
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
                          <input type="text" id="first-name" name="menu_ad" placeholder="Ad daxil edin..." required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         


       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mətn<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                               <textarea name="menu_detay" class="ckeditor"></textarea>
                        </div>
                      </div>

                         









 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_url" placeholder="URL daxil edin..." required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu sira <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_sira"  placeholder="Sıra daxil edin..." required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Vəziyyət <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
<select id="heard" class="form-control" name="menu_durum" required="">
  


<option value="1" >Aktiv</option>


<option value="0" >Passiv</option>



</select>

                          
                        </div>
                      </div>




                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                      

                          <button type="submit" name="menukaydet" class="btn btn-success">Əlavə et</button>
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
