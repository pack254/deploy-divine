<!DOCTYPE html>
<html lang="th">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Divine Brand Skincare, ดีไวท์แบรนด์ สกิลแคร์, Divine Brand Official Page">
    <meta name="author" content="">

    <title>DIVINE BRAND SKIN CARE</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr:300" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
    <link href="{{asset('css/mobile.css')}}" rel="stylesheet">
    <link href="{{asset('css/tablet-ipad.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('home') }}"><img src="{{ asset('images/LOGO-DIVINE.png') }}" style="width:70px; height:90px;" alt="Divine-Logo"/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto top">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}">หน้าแรก</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('about') }}">เกี่ยวกับเรา</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('saleMember') }}">ตัวแทนจำหน่าย</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}">ติดต่อเรา</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('orderDetail') }}">การสั่งซื้อ-ชำระเงิน</a>
            </li>
            <li class="nav-item">
              <p style="color:#00b900;"><b>LINE ID: divinebrand</b></p>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse social-links" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a target="_blank" href="https://www.facebook.com/divinegroup2017/" class="fa fa-facebook"></a>
            </li>

            <li class="nav-item">
                <a target="_blank" href="https://www.instagram.com/divinebrand_official" class="fa fa-instagram"></a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    @yield('content')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="bg-dark footer" style="height:auto;">
      <div class="container">
       <div class="row">
           <div class="col-lg-4 mb-4">
              <div class="logo-footer" style="margin-top:30px; margin-left:120px; padding:10px;width:200px;  ">
                  <div>
                      <img style="display:block; margin:0 auto; width:70px; height:90px;"src="{{ asset('images/LOGO-DIVINE.png') }}" style="width:70px; height:90px;" alt="Divine-Logo"/>
                  </div>
                  <p class="m-0 text-center text-white" style="font-size:13px;">DIVINE สกินแคร์ อย่างมีผิวดีไม่จำเป็นต้องจ่ายแพง ให้ DIVINE ดูแลคุณสิ้ค่ะ</p>
              </div>
           </div>
           <div style="margin-top:40px;" class="col-lg-4 mb-4 footer-list-cover">
               <div class="footer-list">
                 <h3 class="m-0 text-left text-white" style="border-bottom: 2px solid red; display: inline-block;">The Office</h3>
                 <ul>
                   <li  style="font-size:13px;"><i class="fa fa-home address"></i>254/1 หมู่6 แขวงสายไหม เขตสายไหม กทม.</li>
                   <li  style="font-size:13px;"><i class="fa fa-envelope address"></i>divinebrand2017.official@gmail.com</li>
                   <li  style="font-size:13px;"><i class="fa fa-phone address"></i>099-287-1945</li>
                   <li  style="font-size:13px;"><i class="fa fa-phone address"></i>094-623-6455</li>
                 </ul>
              </div>
           </div>
           <div style="margin-top:40px;" class="col-lg-4 mb-4 footer-list-cover">
               <div class="footer-list">
               <h3 class="m-0 text-left text-white" style="border-bottom: 2px solid red; display: inline-block;">Social Media</h3>
               <ul>
                 <li ><span style="color:#FFFFFF; font-size:13px;">Instagram: divinebrand_official</span></li>
                 <li><span style="color:#FFFFFF; font-size:13px;">Facebook: Divine_BRAND </span></li>
                 <li><span style="color:#FFFFFF; font-size:13px;">LINE: divinebrand</span></li>
                 <li><span style="color:#FFFFFF; font-size:13px;">ช่วยกดติดตามเราช่องทางต่างๆ ด้วยนะค่ะ</li>
               </ul>
               </div>
           </div>
         </div>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </body>

</html>
