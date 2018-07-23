<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>旺旺通國際有限公司</title>

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
    <!-- 自訂script  -->
    <script type="text/javascript" src="assets/blackcard/js/custom.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="tabs/css/normalize.css" /> -->
  	<!-- <link rel="stylesheet" type="text/css" href="tabs/css/htmleaf-demo.css"> -->
  	<!-- <link rel="stylesheet" href="tabs/css/style.css"> -->

    <!-- 標籤logo -->
    <link rel="icon" href="assets/blackcard/img/logos/favicon.png" type="image/x-icon">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="assets/blackcard/img/logos/logo.png" class="img-fluid" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          選單
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">獨享優惠</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">相關內容</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">探索世界</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#leisurely">悠然無憂</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">聯繫我們</a>
            </li>

            <?php if ($this->session->userdata('login_status')) { ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#exampleModalCenter">會員中心</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">會員資料!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
                    <label for="exampleInputEmail1">手機號碼</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入手機號碼">
                  </div>
                  <div class="col-lg-4">
                    <label for="exampleInputPassword1">密碼</label>
                    <input type="password" class="form-control" id="password" placeholder="請輸入密碼">
                  </div>
                  <div class="col-lg-4">
                    <label for="exampleInputPassword1">重新密碼</label>
                    <input type="password" class="form-control" id="re-password" placeholder="請重新輸入密碼">
                  </div>
                </div>

              </div>
              <div class="form-group">
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success mr-auto">更新</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">登出</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header class="masthead">
      <div class="transparent"><!-- 灰色背景 -->
        <div class="container">
          <div class="intro-text">
            <div class="intro-heading text-uppercase">Welcome</div>
            <div class="intro-lead-in">Wanwanton International Co.,Ltd.</div>
            <!-- <div class="intro-heading text-uppercase">歡迎來到旺旺通國際有限公司</div> -->
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">詳細介紹</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">黑卡獨享優惠</h2>
            <h3 class="section-subheading text-white">Mastercard為您度身訂造個人化的服務，令您隨時隨地都能體驗生命中最難忘時刻。</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <img class="img-fluid" alt="sample-image" src="https://www.mastercard.com.hk/zn-hk/consumers/find-card-products/credit-cards/world-elite/_jcr_content/contentpar/columns/bannerwithcolumnspar0/item/image.adaptive.full.high.png/1473322985795.png"> -->
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">尊貴旅遊優惠 </h4>
            <p class="text-muted">獨家旅遊卡為您提供的種種禮遇包括，全天候旅遊顧問、尊貴優惠和設施及特別推廣等全球貴賓活動，讓您的旅遊體驗提升至另一層次。</p>

            <p><a href="https://www1.mastercard.com//content/world-elite/apmea/en.html" target="_blank">了解更多</a></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <img class="img-fluid" alt="sample-image" src="https://www.mastercard.com.hk/zn-hk/consumers/find-card-products/credit-cards/world-elite/_jcr_content/contentpar/columns/bannerwithcolumnspar1/item/image.adaptive.full.high.png/1479700919998.png"> -->
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-plane fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">無價城市®</h4>
            <p class="text-muted">盡享城市美麗景緻，World Elite Mastercard是您最佳信用卡，為您展開獨特旅遊體驗，提供各項為您精心準備的獨家優惠，包括貴賓活動、特別推廣及更多。</p>
            <p><a href="https://www.priceless.com/" target="_blank">了解更多</a></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <!-- <img src="https://www.mastercard.com.hk/zn-hk/consumers/find-card-products/credit-cards/world-elite/_jcr_content/contentpar/columns/bannerwithcolumnspar2/item/image.adaptive.full.high.png/1473323107388.png" class="img-fluid" alt=""> -->
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">24小時禮賓服務</h4>
            <p class="text-muted">World Elite Mastercard為您提供私人助理式的全天候禮遇服務。您需要尋找任何稀有項目或預訂心儀餐桌位置嗎？我們的禮賓服務隨時準備就緒。請致電旅遊卡背上的電話，聯繫禮賓服務單位。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">黑卡相關內容</h2>
            <h3 class="section-subheading text-white">年費US$1500，開卡（激活）費用US$500，第一年總共US$2000，第二年開始皆為US$1500</p><a href="#">點我申請卡片</h3>
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
              <h4>探索無價城市的精采體驗</h4>
              <p>為所有Mastercard持卡人而設的一系列尊屬體驗。香港，從未如此看過。</p>
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
              <h4>支付卡的好處</h4>
              <p>您的信用卡或扣帳卡能為您節省金錢及時間。</p>
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
              <h4>通往無價的捷徑</h4>
              <p>隨時透過已連接網絡的裝置，使用Mastercard推出的Masterpass</p>
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
            <h2 class="section-heading text-uppercase">萬事達卡世界之極卡</h2>
            <h3 class="section-subheading text-white text-center">無論您的旅程將帶您前往何處，我們24小時全年無休的旅遊顧問提供專業的服務 - 從個性化的旅行建議、機場接送、到豪華別墅和私人遊艇，將讓您的旅遊規劃更輕鬆，旅遊經歷更難忘。因此，現在就出發，重新探索世界 - 我們將隨伺在側。</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <div class="tab" role="tabpanel">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- 特別優惠 sp = special promotion -->
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="sp-tab" data-toggle="tab" href="#sp" role="tab" aria-controls="sp" ata-toggle="tab" aria-selected="true">特別優惠</a>
                </li>
                <!-- 特別優惠 sp = special promotion -->

                <!--  機場禮賓服務 acs = Airport concierge service -->
                <li class="nav-item">
                  <a class="nav-link" id="acs-tab" data-toggle="tab" href="#acs" role="tab" aria-controls="acs" aria-selected="false">機場禮賓服務</a>
                </li>
                <!--  機場禮賓服務 acs = Airport concierge service -->

                <!--  飯店與渡假村 har = Hotels and resorts -->
                <li class="nav-item">
                  <a class="nav-link" id="har-tab" data-toggle="tab" href="#har" role="tab" aria-controls="har" aria-selected="false">飯店與渡假村</a>
                </li>
                <!--  飯店與渡假村 har = Hotels and resorts -->

                <!--  豪華租車 lcr = Luxury car rental -->
                <li class="nav-item">
                  <a class="nav-link" id="lcr-tab" data-toggle="tab" href="#lcr" role="tab" aria-controls="lcr" aria-selected="false">豪華租車</a>
                </li>
                <!--  豪華租車 lcr = Luxury car rental -->

                <!--  豪華郵輪 lc = Luxury cruise -->
                <li class="nav-item">
                  <a class="nav-link" id="lc-tab" data-toggle="tab" href="#lc" role="tab" aria-controls="lc" aria-selected="false">豪華郵輪</a>
                </li>
                <!--  豪華郵輪 lc = Luxury cruise -->

                <!--  精彩假期 wh = Wonderful holiday -->
                <li class="nav-item">
                  <a class="nav-link" id="wh-tab" data-toggle="tab" href="#wh" role="tab" aria-controls="wh" aria-selected="false">精彩假期</a>
                </li>
                <!--  精彩假期 wh = Wonderful holiday -->

                <!--  租車服務 cr = Car Rental -->
                <li class="nav-item">
                  <a class="nav-link" id="cr-tab" data-toggle="tab" href="#cr" role="tab" aria-controls="cr" aria-selected="false">租車服務</a>
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
                              document.write("<div class='card-body'><h5 class='card-title'>"+sp_title[i]+"</h5><p class='card-text'>"+sp_description[i]+"</p><a href="+sp_url[i]+" class='btn btn-primary' target='_blank'>詳細內容</a></div></div></div>");
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
                              document.write("<div class='card-body'><h5 class='card-title'>"+acs_title[i]+"</h5><p class='card-text'>"+acs_description[i]+"</p><a href="+acs_url[i]+" class='btn btn-primary' target='_blank'>詳細內容</a></div></div></div>");
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
                              document.write("<div class='card-body'><h5 class='card-title'>"+har_title[i]+"</h5><p class='card-text'>"+har_description[i]+"</p><a href="+har_url[i]+" class='btn btn-primary' target='_blank'>詳細內容</a></div></div></div>");
                            }
                            </script>
                            <div class='col-lg-4'>
                              <div class='card'>
                                <img src="assets/blackcard/img/more.jpg" class='img-fluid' alt=''>
                                <div class='card-body'>
                                  <h5 class='card-title'>更多內容</h5>
                                  <p class='card-text'>點選詳細內容，提供更多飯店優惠。</p>
                                  <a href="https://www1.mastercard.com/content/world-elite/taiwan/zh_tw/travel.html" class='btn btn-primary' target='_blank'>詳細內容</a>
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
                              document.write("<div class='card-body'><h5 class='card-title'>"+lcr_title[i]+"</h5><p class='card-text'>"+lcr_description[i]+"</p><a href="+lcr_url[i]+" class='btn btn-primary' target='_blank'>詳細內容</a></div></div></div>");
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
                              document.write("<div class='card-body'><h5 class='card-title'>"+lc_title[i]+"</h5><p class='card-text'>"+lc_description[i]+"</p><a href="+lc_url[i]+" class='btn btn-primary' target='_blank'>詳細內容</a></div></div></div>");
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
                              document.write("<div class='card-body'><h5 class='card-title'>"+wh_title[i]+"</h5><p class='card-text'>"+wh_description[i]+"</p><a href="+wh_url[i]+" class='btn btn-primary' target='_blank'>詳細內容</a></div></div></div>");
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
                              document.write("<div class='card-body'><h5 class='card-title'>"+cr_title[i]+"</h5><p class='card-text'>"+cr_description[i]+"</p><a href="+cr_url[i]+" class='btn btn-primary'>詳細內容</a></div></div></div>");
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
            <h2 class="section-heading text-uppercase">悠然無憂</h2>
            <h3 class="section-subheading text-white text-center">悠然無憂來自您知道您總是被保護著。無論您需要海外緊急醫療救助或網上購物保障，我們結合周延完整的保險，提供全年無休的服務，所以您永遠不會獨自面對挑戰。</h3>
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
              document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+ti_title[i]+"</h5></a>");
              document.write("<p style='font-size: 15px;' class='text-white'>"+ti_description[i]+"</p>");
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
              document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+ti_title[i]+"</h5></a>");
              document.write("<p style='font-size: 15px;' class='text-white'>"+ti_description[i]+"</p>");
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
              document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+ti_title[i]+"</h5></a>");
              document.write("<p style='font-size: 15px;' class='text-white'>"+ti_description[i]+"</p>");
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
                document.write("<a href="+ti_url[i]+" target='_blank'><h5 class='mt-0'>"+ti_title[i]+"</h5></a>");
                document.write("<p style='font-size: 15px;' class='text-white'>"+ti_description[i]+"</p>");
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
            <h2 class="section-heading text-uppercase">聯繫我們</h2>
            <h3 class="section-subheading text-muted"> </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="您的姓名 *" required="required" data-validation-required-message="此為必填，請輸入姓名!!!">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="您的信箱 *" required="required" data-validation-required-message="此為必填，請輸入信箱!!!">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="您的電話 *" required="required" data-validation-required-message="此為必填，請輸入電話號碼!!!">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="有任何問題歡迎留言 *" required="required" data-validation-required-message="此為必填，請輸入問題!!!"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">送出</button>
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
            <span class="copyright">Copyright &copy; 2018 Wanwanton International Co.,Ltd. . All Rights Reserved. 旺旺通國際有限公司 版權所有</span>
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

  </body>

</html>
