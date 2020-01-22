<style type="text/css">
    .tab-content.hide{
        display: none;
    }
    .tab-content.active{
        display: block;
    }

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <ol class="breadcrumb">
            <li><a href="<?php echo HTTP_ROOT . 'appadmins' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo HTTP_ROOT . 'appadmins/addproduct/'.$productData->user_id; ?>"> Back</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="box-title">
                    <?php
                    
                    if($productData->kid_id){
                        echo $productData->kids_detail->kids_first_name;
                    }else{
                         echo $productData->user->name;
                    }
                    echo " ";
                    
                    echo "View Product";
                    ?>
                </h3>

                <!-- /.box-header -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-xs-12">
                            <div class="box box-primary">

                                <div class="box-body">

                                    <div class="col-md-6" style="margin-top: 27px;">
                                        <div class="form-group">
                                            <label for="exampleInputName">Product Name1 <span style="color: red;">*</span></label>

                                            <p><?php echo @$productData->product_name_one; ?></p>

                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="exampleInputEmail">Product Name2 <span style="color: red;">*</span><span style="margin-left: 10px;font-size: 11px;font-weight: normal;" id="email_validation_msg"></span></label>
                                            <p><?php echo @$productData->product_name_one; ?></p>
                                            <div class="help-block with-errors"></div>
                                            <div id="eloader" style="position: absolute; margin-top: -60px; margin-left: 158px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Size <span style="color: red;">*</span></label>
                                            <p><?php echo @$productData->size; ?></p>       </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Purchase price <span style="color: red;">*</span></label>

                                            <p><?php echo @$productData->purchase_price; ?></p>

                                        </div>

                                    </div> 
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Color<span style="color: red;">*</span></label>

                                            <p><?php echo @$productData->color; ?></p>

                                        </div>

                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Sell price <span style="color: red;">*</span></label>

                                            <p><?php echo @$productData->sell_price; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Store name
                                                <span style="color: red;">*</span>
                                            </label>

                                            <p><?php echo @$productData->store_name; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Store address
                                                <span style="color: red;">*</span></label>

                                            <p><?php echo @$productData->store_address; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Store phone
                                                <span style="color: red;">*</span>
                                            </label>

                                            <p><?php echo @$productData->store_ph; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Store email
                                                <span style="color: red;">*</span>
                                            </label>

                                            <p><?php echo @$productData->store_email; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Store fax<span style="color: red;">*</span></label>

                                            <p><?php echo @$productData->store_fax; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Product Purchase Date 
                                                <span style="color: red;">*</span></label>

                                            <p><?php echo @$productData->product_purchase_date; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Product valid return date.
                                                <span style="color: red;">*</span>
                                            </label>

                                            <p><?php echo @$productData->product_valid_return_date; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Return status</label>

                                            <p><?php echo @$productData->return_status; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Note</label>

                                            <p><?php echo @$productData->note; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Exchange status</label>

                                            <p><?php echo @$productData->exchange_status; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Order usps tracking no
                                                <span style="color: red;">*</span>
                                            </label>

                                            <p><?php echo @$productData->order_usps_tracking_no; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Return usps tracking no


                                                <p><?php echo @$productData->return_usps_tracking_no; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName">Customer purchase date </label>

                                            <p><?php echo @$productData->customer_purchasedate; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if (@$productData->product_image) { ?>
                                            <label for="exampleInputFile">Product Image </label>
                                            <br>
                                            <div class="col-md-6">
                                                <img src="<?php echo HTTP_ROOT . PRODUCT_IMAGES; ?><?php echo @$productData->product_image; ?>" style="width: 300px; height: 150px"/>
                                            </div>

                                        <?php }
                                        ?>
                                    </div>
                                    <?php if (@$productData->product_receipt) { ?>

                                        <div class="col-md-6">
                                            <label for="exampleInputFile">Product receipt </label>
                                            <br>
                                            <img src="<?php echo HTTP_ROOT . PRODUCT_RECEIPT; ?><?php echo @$productData->product_receipt; ?>" style="width: 300px; height: 150px"/>

                                        </div>
                                    <?php } ?>


                                    <?php if (@$productData->barcode_image) { ?>

                                        <div class="col-md-12">
                                            <label for="exampleInputFile">Bar code  Image </label>
                                            <br>
                                            <img src="<?php echo HTTP_ROOT . BARCODE; ?><?php echo @$productData->barcode_image; ?>" />

                                        </div>
                                    <?php } ?>

                                    <div class="col-md-12">
                                        <label for="exampleInputFile">Bar Value </label>
                                        <br>

                                        <?php echo @$productData->barcode_value; ?>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </section>



            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
    <!--customer review-->
<!--    <section class="content tab-content">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="box-title">
                    <?php
                    echo " Customer Review about this Product";
                    ?>
                </h3>

                 /.box-header 
                <section class="content">
                    <div class="row">
                         left column 
                        <div class="col-xs-12">
                            <div class="box box-primary">

                               <div class="col-sm-7 col-lg-7 col-md-7">
                                <div class="select-boxes">                                   
                                    <div class="post">      
                                    <span class="username" style="color: #337ab7;">
                                        What did you think of the <?php echo $productData->product_name_one; ?>?                      
                                    </span> 
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs blue"><?php if(@$customer_review_Data->what_do_you_think_of_the_product==1){ echo 'return';}?>
                                        <?php if(@$customer_review_Data->what_do_you_think_of_the_product==2){ echo 'Exchange';}?>
                                            <?php if(@$customer_review_Data->what_do_you_think_of_the_product==3){ echo 'Keep';}?></a> 
                                      
                                    </div>
                                </div>
                                    <div class="post">      
                                    <span class="username" style="color: #337ab7;">
                                       Size                    
                                    </span> 
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs blue"><?php if(@$customer_review_Data->size==1){ echo 'Too small';}?>
                                        <?php if(@$customer_review_Data->size==2){ echo 'Just right';}?>
                                        <?php if(@$customer_review_Data->size==3){ echo 'Too big';}?>
                                        <?php if(@$customer_review_Data->size==0){ echo 'Customer didnot choose anything';}?>
                                        </a> 
                                      
                                    </div>
                                </div>
                                    <div class="post">      
                                    <span class="username" style="color: #337ab7;">
                                       Style                    
                                    </span> 
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs blue"><?php if(@$customer_review_Data->style==1){ echo 'Hate it';}?>
                                       <?php if(@$customer_review_Data->style==2){ echo 'Just ok';}?>
                                       <?php if(@$customer_review_Data->style==3){ echo 'Like it';}?> 
                                       <?php if(@$customer_review_Data->style==4){ echo 'Love it';}?>
                                       <?php if(@$customer_review_Data->style==0){ echo 'Customer didnot choose anything';}?>
                                    </a> 
                                                                             
                                    </div>
                                </div>
                                    <div class="post">      
                                    <span class="username" style="color: #337ab7;">
                                       Fit/cut                    
                                    </span> 
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs blue"><?php if(@$customer_review_Data->fit_cut==1){ echo 'Hate it';}?>
                                       <?php if(@$customer_review_Data->fit_cut==2){ echo 'Just ok';}?>
                                       <?php if(@$customer_review_Data->fit_cut==3){ echo 'Like it';}?>
                                       <?php if(@$customer_review_Data->fit_cut==4){ echo 'Love it';}?> 
                                       <?php if(@$customer_review_Data->fit_cut==0){ echo 'Customer didnot choose anything';}?></a> 
                                                                             
                                    </div>
                                </div>
                                    <div class="post">      
                                    <span class="username" style="color: #337ab7;">
                                       Quality                    
                                    </span> 
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs blue"><?php if(@$customer_review_Data->quality==1){ echo 'Poor';}?>
                                       <?php if(@$customer_review_Data->quality==2){ echo 'Average';}?>
                                       <?php if(@$customer_review_Data->quality==3){ echo 'Great';}?> 
                                       <?php if(@$customer_review_Data->quality==0){ echo 'Customer didnot choose anything';}?></a> 
                                      
                                    </div>
                                </div>
                                    <div class="post">      
                                    <span class="username" style="color: #337ab7;">
                                       Price                    
                                    </span> 
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs blue"><?php if(@$customer_review_Data->price==1){ echo 'Too high';}?>
                                       <?php if(@$customer_review_Data->price==2){ echo 'Just right';}?>
                                       <?php if(@$customer_review_Data->price==3){ echo 'A steal';}?>
                                       <?php if(@$customer_review_Data->price==0){ echo 'Customer didnot choose anything';}?></a> 
                                      
                                    </div>
                                </div>
                                </div>
                            </div>


                            </div>
                        </div>
                    </div>
                </section>



            </div> /.col 
        </div> /.row 
    </section>-->
    

</div><!-- /.content-wrapper -->


