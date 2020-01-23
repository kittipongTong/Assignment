<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ระบบส่งงาน</title>
     @section('title')
     @extends('include.inc-css')
     @extends('include.inc-js')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="finloans/img/footer_logoaa.png">
</head>

<body>

     @extends('include.inc-header')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Get Loan for your Business growth or startup</h3>
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                <a href="#" class="boxed-btn3">How it Works</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div class="info text-center">
                                <h4>How much do you want?</h4>
                                <p>We provide online instant cash loans with quick</p>
                            </div>
                            <div class="form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <select class="wide">
                                                <option data-display="Amount">Amount</option>
                                                <option value="1">$10</option>
                                                <option value="2">$40</option>
                                                <option value="3">$50</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <select class="wide">
                                                <option data-display="Month">Month</option>
                                                <option value="1">3 Month</option>
                                                <option value="2">6 Month</option>
                                                <option value="3">9 Month</option>
                                                <option value="4">12 Month</option>
                                            </select>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <p>You have to pay: <span>$0</span></p>
                            <div class="submit_btn">
                                <button class="boxed-btn3" type="submit">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
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
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                          <p>ความสามารถเบื้องต้นของระบบ จัดเก็บและ รับ-ส่ง เอกสารภายในหน่วยงาน รองรับประภทของไฟล์ไม่จำกัด สามารถกำหนดเองได้</p>
                                            <span>- อ่านเพิ่มเต็ม</span>
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
                                            <img src="finloans/img/testmonial/author.png" alt="">
                                            <div class="quote_icon">
                                                <i class=" Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                          <p>การ รับ-ส่ง เอกสารแยกตามสถานะของสมาชิก สามารถกำหนดเป็นแผนกแทนได้ สามารถส่งการแจ้งเตือนเอกสารใหม่ไปยังผู้รับผ่านอีเมล์ได้เก็บประวัติการดาวน์โหลด หรือการลงรับเอกสาร</p>
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
                                            <img src="finloans/img/testmonial/author.png" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                          <p>สามารถกำหนดให้การรับเอกสารเป็นการดาวน์โหลดไฟล์ หรือ เปิดดูไฟล์ (สำหรับชนิดของไฟล์ที่สามารถเปิดดูได้) ได้ลงรับเอกสารโดยอัตโนมัติ เมื่อมีการดาวน์โหลดหรือเปิดดูไฟล์ เป็นระบบโมดูล สามารถปรับแต่งเพื่อใช้งานร่วมกับโปรเจ็คอื่นๆได้ รองรับสามภาษา ไทย อังกฤษ และ ลาว </p>
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
                            <img src="img/brand/1.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <img src="img/brand/2.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <img src="img/brand/3.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <img src="img/brand/4.png" alt="">
                        </div>
                        <div class="single_brand wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <img src="img/brand/5.png" alt="">
                        </div>
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
