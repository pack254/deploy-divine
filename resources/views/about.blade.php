@extends('layout')
@section('content')
  <div class="cover-container">
    <div class="container" style="margin-top:100px;margin-bottom:100px;">
      <div class="row card card-inverse c-clear-cream">
        <div class="card-group">
            <div class="card">
              <div class="card-block left">
                <h2 class="my-4" style="color:#835c19; text-align:center;">DIVINE BRAND<br/>"Look Healthy Because Good Skin"</h2>
                <p>DIVINE Skincare เราใส่ใจผิวของคุณผู้หญิง และใส่ใจถึงปัญหามลพิษที่ต้องพบเจอในแต่ละวัน ซึ่งเป็นสาเหตุที่ทำให้ผิว ถูกทำลาย ดูหมองคล้ำ และขาดสารอาหาร เราจึงปรึกษาแพทย์ผู้เชี่ยวชาญด้านผิวหนังโดยเฉพาะ เพื่อคิดค้นผลิตภัณฑ์บำรุงผิว
                  ที่ช่วยให้ ผิวกลับมาดูกระจ่างใสอย่างเป็นธรรมชาติ เปรงประกายอย่างมีอ่อร่า และช่วยปกป้องผิวของคุณจากมลพิษที่เจอในแต่ละวัน ให้ "DIVINE ดูแลคุณสิ้ค่ะ"</p>
              </div>


            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/top-image-1.jpg')}}" style="width:100%; height:100%;" alt="Divine-Image-Content">
              <div class="card-block">
              </div>
            </div>
            </div>
      </div>
      <div class="row card card-inverse gmp" style="margin-top:40px;">
        <div class="card-group">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/logo_GMP.png')}}" style="width:100%; height:100%;" alt="Divine-Image-Content">

              <div class="card-block">
              </div>
            </div>
            <div class="card">
              <div class="card-block right">
                <h2 class="my-4" style="color:#835c19; text-align:center;">โรงงานที่ได้รับรองมาตรฐาน GMP<br/></h2>
                <p>ผลิตภัทฑ์ของเราผลิตโดยแลปโรงงานที่ได้รับรองมาตรฐาน GMP(Good manufacturing practices)
                  จึงมั่นใจได้ว่า ปลอดภัย 100% ไม่มีสารอันตรายต้องห้าม ใดๆทั้งสิ้น มีการจดแจ้งเลขที่ อย. (องค์การอาหารและยา) อย่างเป็นทางการ เราใส่ใจพร้อมทั้งเข้าใจถึง ปัญหาของผิว และตระหนักถึง
                  สภาพแวดล้อม สาเหตุหลักของการทำลายเซลล์ผิวให้เสื่อมสภาพเร็วขึ้น จุดเริ่มต้นของผิวที่ดี คือผิวแข็งแรง ลองเปิดใจนะคะ แล้วคุณจะรู้ว่า ครีมที่มีคุณภาพ ในราคาจับต้องได้ มีอยู่จริงคะ !!! "
                  DIVINE BRAND คืนสุขภาพผิวดี นุ่ม เนียน ใส ให้กับคุณ</p>
              </div>
            </div>
        </div>
      </div>

      <div class="card-group" style="margin-top:50px;">
          <div class="card">
            <img class="card-img-top about" src="{{ asset('images/lab1.jpg')}}" alt="Card image cap">
            <div class="card-block">
            </div>
          </div>
          <div class="card">
            <img class="card-img-top about" src="{{ asset('images/lab2.jpg')}}" alt="Card image cap">
            <div class="card-block">
            </div>
          </div>
          <div class="card">
            <img class="card-img-top about" src="{{ asset('images/lab4.png')}}" style="height:100%;" alt="Card image cap">
            <div class="card-block">
            </div>
          </div>
       </div>
       <div class="card-group" style="margin-top:10px;">
           <div class="card">
             <img class="card-img-top about-bottom" src="{{ asset('images/lab3.png')}}" style="height:100%;" alt="Card image cap">
             <div class="card-block">
             </div>
           </div>
           <div class="card">
             <img class="card-img-top about-bottom" src="{{ asset('images/lab6.png')}}" style="height:100%;" alt="Card image cap">
             <div class="card-block">
             </div>
           </div>
        </div>

    </div>
    </div>
@endsection
