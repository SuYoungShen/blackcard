<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/blackcard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/blackcard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/blackcard/css/agency.min.css" rel="stylesheet">
    <!-- 自訂css -->
    <link href="assets/blackcard/css/custom.css" rel="stylesheet">
    <link href="assets/blackcard/css/customs.css" rel="stylesheet">
    <!-- 彈跳視窗 -->
    <link href="assets/blackcard/css/sweetalert2.css" rel="stylesheet" >
    <!-- 自訂script  -->
    <script type="text/javascript" src="assets/blackcard/js/custom.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="tabs/css/normalize.css" /> -->
  	<!-- <link rel="stylesheet" type="text/css" href="tabs/css/htmleaf-demo.css"> -->
  	<!-- <link rel="stylesheet" href="tabs/css/style.css"> -->

    <!-- 標籤logo -->
    <link rel="icon" href="assets/blackcard/img/logos/logo2.png" type="image/x-icon">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="assets/blackcard/img/logos/logo.png" class="img-fluid" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          MENU
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Exclusive offer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Related Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Explore The Word</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#leisurely">Leisurely</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>

            <?php if ($this->session->userdata('login_status')) { ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#m_enter">Member Centre</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="m_enter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Member Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
                    <label for="phone">Mobile Phone No.</label>
                    <input type="hidden" name="rule" value="update">
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" placeholder="Please enter the phone number" value="<?=$data->phone;?>" readonly>
                  </div>
                  <div class="col-lg-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Please enter your password" required="required">
                  </div>
                  <div class="col-lg-4">
                    <label for="re-password">Re-Password</label>
                    <input type="password" class="form-control" id="re-password" placeholder="Please re-enter your password" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success mr-auto" id="update">Update</button>
              <a href="en_logout"><button type="button" class="btn btn-danger">Sign out</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header class="masthead">
      <div class="transparent"><!-- 灰色背景 -->
        <div class="container">
          <div class="intro-text">
            <div class="intro-heading text-uppercase">Welcome</div>
            <div class="intro-lead-in"><?=$title;?></div>
            <!-- <div class="intro-heading text-uppercase">歡迎來到旺旺通國際有限公司</div> -->
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Introduction</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">BLACK CARD EXCLUSIVE OFFER</h2>
            <h3 class="section-subheading text-white">Mastercard's tailor-made personalized service allows you to experience the most memorable moments of your life anytime, anywhere.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <img class="img-fluid" alt="sample-image" src="https://www.mastercard.com.hk/zn-hk/consumers/find-card-products/credit-cards/world-elite/_jcr_content/contentpar/columns/bannerwithcolumnspar0/item/image.adaptive.full.high.png/1473322985795.png"> -->
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Premium travel offer </h4>
            <p class="text-muted">The exclusive travel card offers you a variety of benefits including 24/7 travel consultants, exclusive offers and amenities, and special promotions to enhance your travel experience to another level.</p>

            <p><a href="https://www1.mastercard.com//content/world-elite/apmea/en.html" target="_blank"><b>MORE</b></a></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <img class="img-fluid" alt="sample-image" src="https://www.mastercard.com.hk/zn-hk/consumers/find-card-products/credit-cards/world-elite/_jcr_content/contentpar/columns/bannerwithcolumnspar1/item/image.adaptive.full.high.png/1479700919998.png"> -->
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-plane fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Priceless City®</h4>
            <p class="text-muted">With the city's beauty, World Elite Mastercard is your best credit card for a unique travel experience with exclusive offers for you, including VIP events, special promotions and more.</p>
            <p><a href="https://www.priceless.com/" target="_blank"><b>MORE</b></a></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <img src="https://www.mastercard.com.hk/zn-hk/consumers/find-card-products/credit-cards/world-elite/_jcr_content/contentpar/columns/bannerwithcolumnspar2/item/image.adaptive.full.high.png/1473323107388.png" class="img-fluid" alt=""> -->
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">24-hour concierge service</h4>
            <p class="text-muted">The World Elite Mastercard offers a personal assistant's 24/7 courtesy service. Do you need to look for any rare items or book a favorite table location? Our concierge service is always ready. Please call the telephone number on the back of the travel card to contact the concierge.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">BLACK CARD RELATED CONTENT</h2>
            <h3 class="section-subheading text-white">
              The annual fee is US$1500, the card opening (activation) costs US$500, the first year is US$2000, and the second year starts with US$1500. <br />
              <a href="assets/blackcard/file/hallmark-mastercard-application.pdf" download>Application Card</a>｜
              <a href="assets/blackcard/file/hallmark-mastercard-example.pdf" download>Application Example</a>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="https://www.priceless.com/zn-hk/hongkong.html" target="_blank">
            <!-- <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"> -->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="https://www.mastercard.com.hk/content/mccom-admin/zn-hk-admin/referenced-content-placeholder/related-content-consumers/_jcr_content/contentpar/related_content_item_208286941/image.adaptive.479.high.jpg/1482392812820.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Explore the invaluable experience of priceless cities</h4>
              <p>A range of exclusive experiences for all Mastercard cardholders. Hong Kong has never seen it like this.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="https://www.mastercard.com.hk/zn-hk/consumers/offers-promotions.html" target="_blank">
            <!-- <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"> -->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="https://www.mastercard.com.hk/content/mccom-admin/zn-hk-admin/referenced-content-placeholder/related-content-consumers/_jcr_content/contentpar/related_content_item_2063369226/image.adaptive.479.high.jpg/1481955365797.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Benefits of payment cards</h4>
              <p>Your credit or debit card can save you money and time.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="https://masterpass.com/zh-tw.html#zh-hk" target="_blank">
              <!-- <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3"> -->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="https://www.mastercard.com.hk/content/mccom-admin/zn-hk-admin/referenced-content-placeholder/related-content-consumers/_jcr_content/contentpar/related_content_item_1479426001/image.adaptive.479.high.jpg/1482396096614.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>A shortcut to priceless</h4>
              <p>Masterpass from Mastercard is available at any time via a connected device</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">MASTERCARD WORLD EXTREME CARD</h2>
            <h3 class="section-subheading text-white text-center">No matter where your trip will take you, our 24/7 travel consultants offer professional service - from personalized travel advice, airport transfers to luxury villas and private yachts, making travel planning easier The travel experience is even more memorable. So start now and re-explore the world - we will be on the sidelines.</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <div class="tab" role="tabpanel">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- 特別優惠 sp = special promotion -->
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="sp-tab" data-toggle="tab" href="#sp" role="tab" aria-controls="sp" ata-toggle="tab" aria-selected="true">SPECIAL PROMOTION</a>
                </li>
                <!-- 特別優惠 sp = special promotion -->

                <!--  機場禮賓服務 acs = Airport concierge service -->
                <li class="nav-item">
                  <a class="nav-link" id="acs-tab" data-toggle="tab" href="#acs" role="tab" aria-controls="acs" aria-selected="false">AIRPORT CONCIERGE SERVICE</a>
                </li>
                <!--  機場禮賓服務 acs = Airport concierge service -->

                <!--  飯店與渡假村 har = Hotels and resorts -->
                <li class="nav-item">
                  <a class="nav-link" id="har-tab" data-toggle="tab" href="#har" role="tab" aria-controls="har" aria-selected="false">HOTELS AND RESORTS</a>
                </li>
                <!--  飯店與渡假村 har = Hotels and resorts -->

                <!--  豪華租車 lcr = Luxury car rental -->
                <li class="nav-item">
                  <a class="nav-link" id="lcr-tab" data-toggle="tab" href="#lcr" role="tab" aria-controls="lcr" aria-selected="false">LUXURY CAR RENTAL</a>
                </li>
                <!--  豪華租車 lcr = Luxury car rental -->

                <!--  豪華郵輪 lc = Luxury cruise -->
                <li class="nav-item">
                  <a class="nav-link" id="lc-tab" data-toggle="tab" href="#lc" role="tab" aria-controls="lc" aria-selected="false">LUXURY CRUISE</a>
                </li>
                <!--  豪華郵輪 lc = Luxury cruise -->

                <!--  精彩假期 wh = Wonderful holiday -->
                <li class="nav-item">
                  <a class="nav-link" id="wh-tab" data-toggle="tab" href="#wh" role="tab" aria-controls="wh" aria-selected="false">WONDERFUL HOLIDAY</a>
                </li>
                <!--  精彩假期 wh = Wonderful holiday -->

                <!--  租車服務 cr = Car Rental -->
                <li class="nav-item">
                  <a class="nav-link" id="cr-tab" data-toggle="tab" href="#cr" role="tab" aria-controls="cr" aria-selected="false">CAR RENTAL</a>
                </li>
                <!--  租車服務 cr = Car Rental -->

              </ul>
              <div class="tab-content tabs" id="myTabContent">
                <div class="tab-pane fade show active" id="sp" role="tabpanel" aria-labelledby="sp-tab">
                  <table class='table'>
                    <tbody>
                      <tr>
                        <td>
                          <div class="row">
                            <!-- 特別優惠 sp = special promotion -->
                            <script type="text/javascript">
                            for(i=0; i < sp_img.length; i++){
                              document.write("<div class='col-lg-4'><div class='card'>");
                              document.write("<img src="+sp_img[i]+" class='img-fluid' alt=''>");
                              document.write("<div class='card-body'><h5 class='card-title'>"+en_sp_title[i]+"</h5><p class='card-text'>"+en_sp_description[i]+"</p><a href="+sp_url[i]+" class='btn btn-primary' target='_blank'>Details</a></div></div></div>");
                            }
                            </script>
                            <!-- 特別優惠 -->
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="acs" role="tabpanel" aria-labelledby="acs-tab">
                  <table class='table'>
                    <tbody>
                      <tr>
                        <td>
                          <!--  機場禮賓服務 acs = Airport concierge service -->
                          <div class="row">
                            <script type="text/javascript">
                            for(i=0; i < acs_img.length; i++){
                              document.write("<div class='col-lg-4'><div class='card'>");
                              document.write("<img src="+acs_img[i]+" class='img-fluid' alt=''>");
                              document.write("<div class='card-body'><h5 class='card-title'>"+en_acs_title[i]+"</h5><p class='card-text'>"+en_acs_description[i]+"</p><a href="+acs_url[i]+" class='btn btn-primary' target='_blank'>Details</a></div></div></div>");
                            }
                            </script>
                          </div>
                          <!--  機場禮賓服務 acs = Airport concierge service -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="har" role="tabpanel" aria-labelledby="har-tab">
                  <table class='table'>
                    <tbody>
                      <tr>
                        <td>
                          <!--  飯店與渡假村 har = Hotels and resorts -->
                          <div class="row">
                            <script type="text/javascript">
                            for(i=0; i < har_img.length; i++){
                              document.write("<div class='col-lg-4'><div class='card'>");
                              document.write("<img src="+har_img[i]+" class='img-fluid' alt=''>");
                              document.write("<div class='card-body'><h5 class='card-title'>"+har_title[i]+"</h5><p class='card-text'>"+en_har_description[i]+"</p><a href="+har_url[i]+" class='btn btn-primary' target='_blank'>Details</a></div></div></div>");
                            }
                            </script>
                            <div class='col-lg-4'>
                              <div class='card'>
                                <img src="assets/blackcard/img/more.jpg" class='img-fluid' alt=''>
                                <div class='card-body'>
                                  <h5 class='card-title'>More Content</h5>
                                  <p class='card-text'>Click on the details to provide more hotel deals.</p>
                                  <a href="https://www1.mastercard.com/content/world-elite/taiwan/zh_tw/travel.html" class='btn btn-primary' target='_blank'>Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--  飯店與渡假村 har = Hotels and resorts -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="lcr" role="tabpanel" aria-labelledby="lcr-tab">
                  <table class='table'>
                    <tbody>
                      <tr>
                        <td>
                          <!--  豪華租車 lcr = Luxury car rental -->
                          <div class="row">
                            <script type="text/javascript">
                            for(i=0; i < lcr_img.length; i++){
                              document.write("<div class='col-lg-4'><div class='card'>");
                              document.write("<img src="+lcr_img[i]+" class='img-fluid' alt=''>");
                              document.write("<div class='card-body'><h5 class='card-title'>"+en_lcr_title[i]+"</h5><p class='card-text'>"+en_lcr_description[i]+"</p><a href="+lcr_url[i]+" class='btn btn-primary' target='_blank'>Details</a></div></div></div>");
                            }
                            </script>
                          </div>
                          <!--  豪華租車 lcr = Luxury car rental -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="lc" role="tabpanel" aria-labelledby="lc-tab">
                  <table class='table'>
                    <tbody>
                      <tr>
                        <td>
                          <!--  豪華郵輪 lc = Luxury cruise -->
                          <div class="row">
                            <script type="text/javascript">
                            for(i=0; i < lc_img.length; i++){
                              document.write("<div class='col-lg-4'><div class='card'>");
                              document.write("<img src="+lc_img[i]+" class='img-fluid' alt=''>");
                              document.write("<div class='card-body'><h5 class='card-title'>"+lc_title[i]+"</h5><p class='card-text'>"+en_lc_description[i]+"</p><a href="+lc_url[i]+" class='btn btn-primary' target='_blank'>Details</a></div></div></div>");
                            }
                            </script>
                          </div>
                          <!--  豪華郵輪 lc = Luxury cruise -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="tab-pane fade" id="wh" role="tabpanel" aria-labelledby="lc-tab">
                  <table class='table'>
                    <tbody>
                      <tr>
                        <td>
                          <!--  精彩假期 wh = Wonderful holiday -->
                          <div class="row">
                            <script type="text/javascript">
                            for(i=0; i < wh_img.length; i++){
                              document.write("<div class='col-lg-4'><div class='card'>");
                              document.write("<img src="+wh_img[i]+" class='img-fluid' alt=''>");
                              document.write("<div class='card-body'><h5 class='card-title'>"+en_wh_title[i]+"</h5><p class='card-text'>"+en_wh_description[i]+"</p><a href="+wh_url[i]+" class='btn btn-primary' target='_blank'>Details</a></div></div></div>");
                            }
                            </script>
                          </div>
                          <!--  精彩假期 wh = Wonderful holiday -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="tab-pane fade" id="cr" role="tabpanel" aria-labelledby="cr-tab">
                  <table class='table'>
                    <tbody>
                      <tr>
                        <td>
                          <!--  租車服務 cr = Car Rental -->
                          <div class="row">
                            <script type="text/javascript">
                            for(i=0; i < cr_img.length; i++){
                              document.write("<div class='col-lg-4'><div class='card'>");
                              document.write("<img src="+cr_img[i]+" class='img-fluid' alt=''>");
                              document.write("<div class='card-body'><h5 class='card-title'>"+en_cr_title[i]+"</h5><p class='card-text'>"+en_cr_description[i]+"</p><a href="+cr_url[i]+" class='btn btn-primary'>Details</a></div></div></div>");
                            }
                            </script>
                          </div>
                          <!--  租車服務 cr = Car Rental -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- 悠然無憂 Leisurely  -->
    <section class="bg-light" id="leisurely">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">LEISURELY</h2>
            <h3 class="section-subheading text-white text-center">Leisurely from you know that you are always protected. Whether you need overseas emergency medical assistance or online shopping protection, we offer a full year-round service in conjunction with comprehensive insurance, so you will never face the challenge alone.</h3>
          </div>
        </div>

        <div class='media'>
          <script type="text/javascript">
          for(i=0; i < 2; i++){
            document.write("<div class='col-lg-2 col-xs-12'>");
            document.write("<img src="+ti_img[i]+" class='img-fluid mr-3' alt=''>");
            document.write("</div>");

            document.write("<div class='col-lg-4 col-xs-12'>");
            document.write("<div class='media-body'>");
              document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+en_ti_title[i]+"</h5></a>");
              document.write("<p style='font-size: 15px;' class='text-white'>"+en_ti_description[i]+"</p>");
              document.write("</div>");
            document.write("</div>");
          }
          </script>
        </div>
        <div class='media'>
          <script type="text/javascript">
          for(i=2; i < 4; i++){
            document.write("<div class='col-lg-2 col-xs-12'>");
              document.write("<img src="+ti_img[i]+" class='img-fluid mr-3' alt=''>");
            document.write("</div>");
            document.write("<div class='col-lg-4 col-xs-12'>");
            document.write("<div class='media-body'>");
              document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+en_ti_title[i]+"</h5></a>");
              document.write("<p style='font-size: 15px;' class='text-white'>"+en_ti_description[i]+"</p>");
              document.write("</div>");
            document.write("</div>");
          }
          </script>
        </div>
        <div class='media'>
          <script type="text/javascript">
          for(i=4; i < 6; i++){
            document.write("<div class='col-lg-2 col-xs-12'>");
              document.write("<img src="+ti_img[i]+" class='img-fluid mr-3' alt=''>");
            document.write("</div>");
            document.write("<div class='col-lg-4 col-xs-12'>");
            document.write("<div class='media-body'>");
              document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+en_ti_title[i]+"</h5></a>");
              document.write("<p style='font-size: 15px;' class='text-white'>"+en_ti_description[i]+"</p>");
              document.write("</div>");
            document.write("</div>");
          }
          </script>
        </div>

        <div class='media'>
          <div class="row">
            <script type="text/javascript">
              for(i=6; i < 8; i++){
                document.write("<div class='col-lg-2 col-xs-12'>");
                document.write("<img src="+ti_img[i]+" class='img-fluid mr-3' alt=''>");
                document.write("</div>");
                document.write("<div class='col-lg-4 col-xs-12'>");
                document.write("<div class='media-body'>");
                document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+en_ti_title[i]+"</h5></a>");
                document.write("<p style='font-size: 15px;' class='text-white'>"+en_ti_description[i]+"</p>");
                document.write("</div>");
                document.write("</div>");
              }
            </script>
          </div>
        </div>

      </div><!-- container -->
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">CONTACT US</h2>
            <h3 class="section-subheading text-muted"> </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" method="post" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" value="<?=$this->session->userdata('login_name');?>" placeholder="Your Name *" required="required" data-validation-required-message="This is required, please enter your name!!!">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" value="<?=$this->session->userdata('login_email');?>" placeholder="Your Email *" required="required" data-validation-required-message="This is required, please enter the mail!!!">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="c_phone" type="tel" value="<?=$this->session->userdata('login_phone');?>" placeholder="Your Phone *" required="required" data-validation-required-message="This is required, please enter the phone number!!!">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Have any questions, welcome to leave a message *" required="required" data-validation-required-message="This is required, please enter the question!!!"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">SEND</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span class="copyright">Copyright &copy; 2018 WanWanTon TCI. All Rights Reserved. 旺旺通TCI 版權所有</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Portfolio Modals -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/blackcard/vendor/jquery/jquery.min.js"></script>
    <script src="assets/blackcard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/blackcard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/blackcard/js/jqBootstrapValidation.js"></script>
    <script src="assets/blackcard/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/blackcard/js/agency.min.js"></script>
    <!-- 彈跳視窗 -->
    <script type="text/javascript" src="assets/blackcard/js/sweetalert2.js"></script>

    <script type="text/javascript">
      var pwd = $("#password");
      var re_pwd = $("#re-password");
      $("#update").click(function(event) {
        if ($(pwd).val() != $(re_pwd).val()) {
          swal({
            title: "注意!",
            text: "兩者密碼不相同，請重新輸入",
            type: "error",
            confirmButtonColor: '#d33',
          });
          return false;
        }else{
          $.ajax({
            url: 'update',
            type: 'POST',
            dataType: 'json',
            data: {
              pwd: $(pwd).val()
            }
          })
          .done(function(ResOk) {
            if(ResOk.code == 200){
              swals("success", ResOk.msg)
            }
          })
          .fail(function(ResError) {
            console.log(ResError);
          });
        }
      });

      function swals(status, msg){
        swal({
          text: msg,
          type: status,
          confirmButtonColor: '#3085d6',
          confirmButtonText: '太棒了!!!'
        }).then((result) => {
          if (result.value) {
            document.location.href = "./logout";
          }
        });
      }
    </script>
  </body>

</html>
