<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Finloans</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('title')
    @extends('include.inc-css')
    @extends('include.inc-js')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="finloans/img/footer_logoaa.png">


</head>

<body>
  @extends('include.inc-headerwelcome')

      <!-- bradcam_area  -->
      <!-- <div class="bradcam_area bradcam_bg_2"> -->
        <img src="finloans/img/8be23d30-e1dd-11e5-ac80-c3f524ac8483.jpg" width=1700 height=90  alt="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- <div class="bradcam_text">
                      <br>
                        <h3>ระบบหมอบหมายงาน (สำหรับผู้บริการ)</h3>
                    </div> -->
                </div>
            </div>
        </div>
    <!-- </div> -->
    <!--/ bradcam_area  -->

@yield('content')

    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img    src="finloans/img/footer_logoaa.png" width=90 height=90  alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                          <p>ระบบหมอบหมายงาน (สำหรับผู้บริการ)</p>
                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img  src="finloans/img/footer_logoaa.png" width=90 height=90 alt="">
                                            <div class="quote_icon">
                                                <i class=" Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                          <p>ระบบหมอบหมายงาน (สำหรับผู้บริการ)</p>

                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img  src="finloans/img/footer_logoaa.png" width=90 height=90 alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                          <p>ระบบหมอบหมายงาน (สำหรับผู้บริการ)</p>

                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <div class="brad_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brad_active owl-carousel">
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="finloans/img/footer_logoaa.png" width=90 height=90 alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <img src="finloans/img/1512889829.jpg" width=90 height=90 alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <img src="finloans/img/brand/3.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <img src="finloans/img/brand/4.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <img src="finloans/img/brand/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="apply_loan overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="loan_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                
                            <h3>ระบบหมอบหมายงาน (สำหรับผู้บริการ)</h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="loan_btn wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <a class="boxed-btn3" href="contact.html">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<hr>
    @extends('include.inc-footer')
    @yield('scripts')
</body>

</html>
