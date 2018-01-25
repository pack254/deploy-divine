@extends('layout')

@section('content')
<!-- Navigation -->
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active">
            <img class="" style="width:100%" src="{{ asset('images/divine-slider-2.png') }}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('images/divine-slider-2.png') }}'); width:100%;">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('images/divine-slider-3.png') }}'); width:100%;">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</header>

<div class="col-sm-12 cover-container">
    <div class="col-sm-12 header-title">
      <div class="col-md-6 offset-md-2">
      </div>
    </div>


  <!-- Page Content -->
  <div class="container">
    <div class="row card card-inverse c-clear-cream">
      <div class="card-group">
          <div class="card">
            <div class="card-block left">
              <h2 class="my-4" style="color:#835c19; text-align:center;">DIVINE<br/>"Look Healthy Because Good Skin"</h2>
              <p>DIVINE ผลิตภัณฑ์บำรุงผิวหน้า Skincare เราคิดค้นผลิตภัณฑ์โดยแพทย์และเภสัชกรผู้เชี่ยวชาญด้านผิวหนังโดยเฉพาะ ผลิตภัทฑ์ของเราผลิตโดยแลปโรงงานที่ได้รับรองมาตรฐาน GMP
                จึงมั่นใจได้ว่า ปลอดภัย 100% ไม่มีสารอันตรายต้องห้าม ใดๆทั้งสิ้น มีการจดแจ้งเลขที่ อย. (องค์การอาหารและยา) อย่างเป็นทางการ เราใส่ใจพร้อมทั้งเข้าใจถึง ปัญหาของผิว และตระหนักถึง
                สภาพแวดล้อม สาเหตุหลักของการทำลายเซลล์ผิวให้เสื่อมสภาพเร็วขึ้น จุดเริ่มต้นของผิวที่ดี คือผิวแข็งแรง ลองเปิดใจนะคะ แล้วคุณจะรู้ว่า ครีมที่มีคุณภาพ ในราคาจับต้องได้ มีอยู่จริง !!! "
                DIVINE BRAND คืนสุขภาพผิวดี นุ่ม เนียน ใส ให้กับคุณ</p>

            </div>
          </div>
          <div class="card">
              <img class="card-img-top" src="{{ asset('images/top-image-1.jpg')}}" style="width:100%; height:100%;" alt="Divine-Image-Content">
          </div>
      </div>
    </div>
    <!-- /.row -->

    <div class="row" style="margin-top:60px">
      <div class="col-lg-12 mb-4 video">
        <div class="col-lg-12 image-content-top">
          <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"width="320" height="240" controls>
              <source src="{{ asset('/videos/divine-video.mp4') }}" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <div class="row" style="margin-top:60px">
      <div class="col-lg-12 mb-4">
        <div class="card h-100">
          <div class="row">
              <div class="col-lg-6 image-content-top">

                <img class="card-img-top" src="{{ asset('images/c-clear-cream-4.jpg')}}" alt="Card image cap">
              </div>
              <div class="col-lg-6 image-content-top-right">
                <h2 class="my-4" style="color:#835c19; margin-left:15px;">Divine - C Clear Cream</h2>
                <p> ผลิตภัทฑ์ Divine C Clear Cream บำรุงผิวหน้า Vita C + Whitening ช่วยให้หน้าดูกระจ่างใสแลดูอ่อนวัย และยังมีสารต้านอนุมูลอิสระ ปกป้องผิวจากริ้วรอย
                ช่วยผลัดเซลล์ผิวทำให้ผิวเรียบเนียน ช่วยกระตุ้นคอลลาเจน และซ่อมแซ่มผิวที่ถูกทำลายปรับสภาพโคตรงสร้างผิวให้แข็งแรงยิ่งขึ่น ลดเลือน ฝ้า กระ จุด่างดำ ทำให้ผิวกระจ่างใส
                อย่างเป็นธรรมชาติ มากกว่านั้น ใน C Clear Cream ยังมี Moisturizer ซึ่งทำให้ผิวชุ่มชื่น นุ่มสบายและยังซ่อมแซ่มเซล์ผิวที่ถูกทำลาย เร่งกระบวนการหายของแผล
                เติมสารอาหารเข้าสู่เซลล์ผิว "ไม่ว่างานไหนคุณก็ไม่ต้องกังวนเพราะมี C Clear Cream ค่อยช่วยดูแลตลอด 24 ชม. ความลับที่ทำให้ผิวดูกระจ่างใสจนหน้าสัมผัส อยู่ที่นี้</p>
                <h3 style="text-align:right; margin-right:20px; color:#835c19;">Promotion พิเศษ - 790 บ.<h3>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Section -->

    <div class="row" style="margin-top:20px; padding-top:20px;">
      <div class="col-lg-6 col-sm-6 portfolio-item">
        <div class="card h-100">
          <h2 style="color:#835c19; margin-left:0px;"> Divine -7 Aura ผิวกระจ่างใสใน 7 วัน</h2>
          <div class="card-body">
                <p>7 aura เป็นนวัตกรรมใหม่ที่เมืองไทยยังไม่มีใครทำลิขสิทธิ์เฉพาะ DIVINE BRAND เท่านั้น ตัวนี้ไม่ใช่แค่ครีมบำรุง แต่มีทั้ง สครับผิว แบบอ่อนโยน มาร์คหน้า มอยเจอไรเซอร์ เอสเซ้นส์ รวมอยู่ในกล่องเดียวกัน
                  ซึ่งแต่ละตัวจุดเด่นอยู่ที่สรรพคุณและกิมมิกของสินค้า เช่น วันจันทร์-วันอาทิตย์ เรียงลำดับการใช้สินค้าตามวัน
                  พร้อมมีกลิ่นหอมอ่อนๆจากผลไม้และมีสีของครีมแต่ละวันตามวัน ใน 1 กล่องจะมี 2 ชุด
                </p></br>
                <p>เพื่อให้เข้าถึงลูกค้าที่ชอบความแปลกใหม่ และผู้ที่ชื่นชอบความสวยเร่งด่วนแบบไม่อันตรายไร้สารเคมี สวย ใส ไร้สิวเสี้ยน ดูอ่อนเยาว์ ครบสูตรภายใน 7 วัน ใช้แล้วทำให้ลูกค้ารู้สึก สนุกมีความแปลกใหม่ดูน่าใช้ไม่จำเจ
                   และผ่อนคลายด้วยกลิ่นหอมอ่อนอ่อน ของผลไม้และธรรมชาติ 🍓🍏🍑🍇🌹ทาไปฟินไป
                  เหมือนทำสปาอโรม่า ให้กับผิวเวลาที่ได้ใช้สินค้าและยังพกพาไปไหนสะดวก พร้อมทั้งรู้สึกพอใจในคุณภาพของสินค้าและการใช้งานที่ง่าย
                  แค่ฉีกและทาก็ฟินได้ “ผิวก็ฟินคนก็ฟิน “ ไปอีกก
                </p>
                <h3 style="text-align:right; margin-right:20px; color:#835c19;">Promotion พิเศษ - 498 บ.<h3>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 portfolio-item">
          <a href="#"><img class="card-img-top" src="{{ asset('images/aura.jpg')}}" style="height:100%;" alt="7aura-image"></a>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('images/son-7aura.png')}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              Sonday - วันอาทิตย์
            </h4>
            <p class="card-text">เตรียมผิวให้พร้อม ด้วยสครับผิวสูตรอ่อนโยน จากสารสกัดจากฝลไม้นานาชนิด เพื่อชำระสิ่งสกปรกตกค้างเบื้องต้น ที่ช่วยให้ผิวพร้อมกับการใช่ผลิตภัณฑ์ในวันถัดไป</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('images/mon-7aura.png')}}" alt="Monday Cream"></a>
          <div class="card-body">
            <h4 class="card-title">
              Monday - วันจันทร์
            </h4>
            <p class="card-text">ผลัดเซลล์ผิวที่เสื่อมสภาพด้วย BHA, AHA และ Lactic Acid แบบเต็มรูปแบบเพื่อเผยผิวให้ดูกระจ่างใสไม่หมองคล้ำ พร้อมทั้งลดเลือน ฝ้า กระ จุดด่างดำช่วยให้ผิวเรียบเนียนอย่างเป็นธรรมชาติ</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('images/tues-7aura.png')}}" alt="Tuesday Cream"></a>
          <div class="card-body">
            <h4 class="card-title">
              Tuesday - วันอังคาร
            </h4>
            <p class="card-text">บำรุงผิวหลังจากผลัดผิวด้วยสารสกัดจาก Aloe Vara และ Asiatica Extract เพื่อเพิ่มความชุ่มชื่นให้ผิวพร้อมช่วยโอบอุ้มเก็บกักน้ำหล่อเลี้ยงผิว ช่วยให้ผิวแลดู อิ่มน้ำลดการอักเสฐระคายเคืองผิว</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('images/wed-7aura.png')}}" alt="Wednesday Cream"></a>
          <div class="card-body">
            <h4 class="card-title">
              Wednesday - วันพุธ
            </h4>
            <p class="card-text">ผสานการฝลัดความหมองตล้ำอย่างอ่อนโยนให้ผิวเตรียมความพร้อมที่จะได้รับการบำรุงผิวในวันถัดไป</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('images/thurs-7aura.png')}}" alt="Thursday Cream"></a>
          <div class="card-body">
            <h4 class="card-title">
              Thursday - วันพฤหัส
            </h4>
            <p class="card-text">บำรุงผิวด้วย Myrciaria Fruit Extract และ น้ำจากดอกกุหลาบซึ่งจะช่วยให้ผิวดูกระจ่างใส นุ่ม ชุ่มชื่น ริ้วรอยดูลดเลือนลง</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('images/fri-7aura.png')}}" alt="Friday Cream"></a>
          <div class="card-body">
            <h4 class="card-title">
              Friday - วันศุกร์
            </h4>
            <p class="card-text">เพิ่มการบำรุงเข้มข้นสู่ผิวอย่างล้ำลึก ด้วยสารสกัดจากเห็ด Matsu Take, สารสกัดจากดอกเบญจมาศ, สารสกัดจากรากม่อน, สารสกัดจากแอปเปิ้ลแและสารสกัดจากธรรมชาติหลากหลายชนิด เพื่อบำรุงผิมแบบเข้มข้นให้ผิวกระจ่างใสกระชับเรียบเนียน ริ้วรอยร่องลึกดูตื้นขึ้นแลดูอ่อนเยาว์</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset('images/sat-7aura.png')}}" alt="Saturday Cream"></a>
          <div class="card-body">
            <h4 class="card-title">
              Saturday - วันเสาร์
            </h4>
            <p class="card-text">สิ้นสุดสัปดาห์ บำรุงผิวด้วยมาร์คสูตรเข้มข้น ที่อุดมไปด้วยสารสกัดจากธรรมชาติทำงานร่วมกับสารสกัดจากไผ่เจจู, สารสกัดจากหอยทาก, สารสกัดน้ำมันรำข้าว, สารสกัดจากเบอร์รี่่นานาชนิด ที่พร้อมช่วยบำรุงผิวให้กระชับเรียบเนียน นุ่มลื่น ริ้วรอยแลดูจางลงพร้อมทั้งเผยผิวกระจ่างใสแลดูอ่อนเยาว์อย่างน่าสมผัส</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- /.row -->
    <hr>
</div>

@endsection
