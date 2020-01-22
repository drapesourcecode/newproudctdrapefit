<?php /* ?><link rel="stylesheet" type="text/css" href="<?php echo HTTP_ROOT ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo HTTP_ROOT ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo HTTP_ROOT ?>assets/css/live-project.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!------- banner  ------->
  <div class="demo-banner-box news-banner">
  <h1>News</h1>
  </div>
  <!-------End  banner  ------->
  <div class="news-headlines-tab">
  <div class="container">
  <div class="row">
  <div class="col-sm-8 col-lg-8 col-md-8">
  <div id="exTab2" >
  <ul class="nav nav-tabs">
  <li class="active">
  <a  href="#1" data-toggle="tab">Press Releases</a>
  </li>
  <li><a href="#2" data-toggle="tab">News Headlines</a>
  </li>
  </ul>

  <div class="tab-content ">
  <div class="tab-pane active" id="1">
  <div class="tab-text-box">
  <h5>Oct 17, 2019</h5>
  <!-- <a href="#">Cognizant to Present at the Citi 2019 Global Technology Conference</a> -->
  <p>DrapeFit is going to be live.</p>
  </div>

  <div class="see-more-news-button">
  <a href="#">See More News</a>
  </div>
  </div>
  <div class="tab-pane" id="2">
  <div class="tab-text-box">
  <h5>Oct 17, 2019</h5>
  <a href="#">DrapeFit is going to be live.</a>
  </div>

  <div class="see-more-news-button">
  <a href="#">See More News</a>
  </div>
  </div>
  </div>
  </div>
  </div>

  <div class="col-sm-4 col-lg-4 col-md-4">
  <div class="social-tab-box">
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1"><span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
  face book</a></li>
  <li><a data-toggle="tab" href="#tab2"><span><i class="fa fa-twitter-square" aria-hidden="true"></i></span> Twitter</a></li>
  <li><a data-toggle="tab" href="#tab3"><span><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> linkedin</a></li>
  </ul>

  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
  <p>DrapeFit coming in social media.</p>
  </div>
  <div id="tab2" class="tab-pane fade">
  <p>DrapeFit coming in social media.</p>
  </div>
  <div id="tab3" class="tab-pane fade">
  <p>DrapeFit coming in social media.</p>
  </div>
  </div>

  </div>
  </div>
  </body>
  </html>
  <!-- partial -->


  </div>
  </div>
  </div>
  <section class="page-sections">
  <?php echo $pageDetails->description ?>
  </section><?php */ ?>
<style type="text/css">.banner-box {
        float: left;
        width: 100%;
        background: url(images/banner-final1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding: 6% 0px;
        position: relative;
    }
.banner-box.footer-inner-banner2{
    background: url(images/footer-banner2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
    .banner-box::after {
        content: "";
        position: absolute;
        background: rgba(0, 0, 0, 0.66);
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
    }

    .banner-box h2 {
        font-size: 42px;
        font-family: 'Amazon Ember';
        font-weight: bold;
        text-align: center;
        margin: 0;
        padding: 0;
        color: #ffffff;
        position: relative;
        z-index: 11;
        text-transform: uppercase;
    }
    .banner-box ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
        text-align: center;
        z-index: 11;
        position: relative;

    }
    .banner-box ul li{
        display: inline-block;
        color: #fe6c00;
        font-size: 17px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 0 4px;
    }
    .banner-box ul li a{
        color: #ffffff !important;
        text-decoration: none;

    }
    .banner-box ul li a:hover{
        color:#cc5a00 !important;
    }

    .faq-box {
        float: left;
        width: 100%;
        padding: 16px 0px;
    }

    .faq-box h3 {
        margin-top: 32px;
        font-size: 17px;
        font-family: 'Amazon Ember';
        font-weight: bold;
        color: #232f3e;
    }

    .faq-box p {
        font-size: 15px;
        font-family: 'Amazon Ember';
        color: #232f3e;
    }

    .bannerwidth {
        width: 100%;
    }
    .image-border:{border-width: 1px; 
                   border-style: solid;}
    .PostExcerpt-title {margin-top:0 !important;}
    .PostExcerpt-title .text-font {
    font-size: 24px;
    color: #232f3e;
}
    .PostExcerpt-title .read-text-font{font-size:16px;} 
    .mt-30{margin-top: 30px;}
    .mb-0{margin-bottom: 0px;}
    .mt-60{margin-top:60px;}
    .PostExcerpt-title .read-text-font {
    font-size: 16px;
    color: #fe6c00;
}
 @media only screen and (max-width:767px) {
.mt-60 {
    margin-top: 0;
}
}
 @media only screen and (max-width:500px) {
.PostExcerpt-title .text-font {
    font-size: 18px;
}
img.img-responsive {
    width: 100%;
}
.apply-Job-form-box {
    padding: 0;
}
}
</style>
<section class="page-sections">
<div class="banner-box footer-inner-banner2">
    <div class="bannerwidth">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <ul>
                    <li><a href="https://drapefit.com/">Home</a></li>
                    <li><b>></b></li>
                    <li>News</li>
                </ul>

                <h2>News</h2>
            </div>
        </div>
    </div>
</div>

<div class="faq-box">
    <div class="bannerwidth">
        <div class="container">
            <?php foreach ($newsDetails as $newdetls) { ?>
            <div class="row mt-60">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <h2 class="PostExcerpt-title"><a href="<?php echo $newdetls->news_link; ?>" target="_blank"><strong class="text-font"><?php echo $newdetls->news_name; ?></strong> </a></h2>

                            <h2 class="PostExcerpt-title"><a href="<?php echo $newdetls->news_link; ?>" target="_blank"><strong class="read-text-font">Read more..</strong> </a></h2>

                            <p class="PostExcerpt-author">Posted by <?php echo $newdetls->post_by; ?>, <?php echo date('d F,y', strtotime($newdetls->created)); ?></p>
                        </div>

                        <div class="col-md-4 col-sm-6"><img alt="<?php echo $newdetls->news_name; ?>" class="img-responsive image-border" src="<?php echo HTTP_ROOT . NEWSIMG . $newdetls->news_image; ?>" /></div>
                    </div>

                    <hr class="mt-30 mb-0" /></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</section>

