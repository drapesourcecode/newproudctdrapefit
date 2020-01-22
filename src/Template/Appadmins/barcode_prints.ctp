<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Print  | Product Invoice</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo HTTP_ROOT ?>bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo HTTP_ROOT ?>dist/css/AdminLTE.min.css">


    </head>
    <style>
         @page {
    size: auto;  
    margin: 0;  
  }
        .post p{
            font-size: 12px;
            font-weight: 600;
        }
        .center-box{
            display: inline-block;
            width: 50%;
            text-align: left;
        }

    </style>
    <body onload="window.print();">
      <div class="barcode-box" style="width: 326.4px; height: 85px; display: inline-block; border:1px solid #cecece; margin: 60px; box-sizing: border-box;box-sizing: border-box;">
        <img style="float: left;" src="<?php echo HTTP_ROOT . BARCODE. @$product->barcode_image; ?>">
        <div style="float: right; width: 157px;">
          <h5 style="margin:0;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; float: left; color: #000;"><span style="color: #232f3e; margin-right: 5px;font-size: 15px;">Size :</span><?php echo $product->size; ?></h5>
          <h5 style="margin:0;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; float:right; color: #000;"><span style="color: #232f3e; margin-right: 5px;font-size: 15px;">Color :</span><?php echo $product->color; ?></h5>
          <h3 style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; margin: 8px 0 0 0; width: 100%; text-align: center; font-size: 13px; color: #000; font-weight: bold; float: left;"><?php echo @$product->barcode_value; ?></h3>
        </div>
        <h3 style="margin: 6px 0 0; font-size: 15px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #000; text-align: center; float: left; width: 100%;"><?php echo $product->product_name_one; ?></h3>
        <h4 style="margin: 4px 0 8px; font-size: 12px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: #000; text-align: center; float: left; width: 100%;"><?php echo $product->product_name_two; ?></h4>
      </div>
    </body>
</html>
