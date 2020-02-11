<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ระบบมอบหมายงาน</title>
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


@yield('content')


    <div class="apply_loan overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="loan_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">

                            <h3>ระบบมอบหมายงาน (สำหรับผู้บริหาร)</h3>

                    </div>
                </div>
                <div class="col-lg-2 col-md-5">
                    <div class="loan_btn wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <a class="boxed-btn3" href="login">เข้าสู่ระบบ</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-5">
                    <div class="loan_btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <a class="boxed-btn3" href="register">สมัครสมาชิก</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

<form>
  <div class="form-group">
    <!-- <label for="formControlRange">Example Range input</label> -->
    <input type="range" class="form-control-range" id="formControlRange">
  </div>
</form>
    @extends('include.inc-footer')
    @yield('scripts')
</body>

</html>
