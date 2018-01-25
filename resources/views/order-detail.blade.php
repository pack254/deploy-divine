@extends('layout')
@section('content')
    <div class="container order-detail">
      <h2>การสั่งซื้อสินค้าจาก DIVINE BRAND</h2>
      </br>
      <p>ท่านลูกค้าสามารถสั่งซื้อสินค้า ของ "DIVINE BRAND" ได้หลายช่องทางตามข้อมูลข้างล่าง:</p>
      <p>&nbsp;&nbsp;1. ช่องทาง สั่งซื้อกับทางสมัครชิกตัวแทนจำหน่ายสินค้าโดยการติดต่อไปที่ตัวแทนจำหน่าย เพื่อซื้อสินค้าที่ท่านต้องการ</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href="{{ url('saleMember') }}">ดูข้อมูลสมาชิดตัวแทนจำหน่าย CLICK</a></b></p>
      <p><b>หมายเหุต: ในกรณีที่ท่านลูกค้าสั่งซื้อสินค้าจากตัวแทนสมาชิกของเรา ทางตัวแทนสมาชิกจะบอกช่องทางในการชำระเงินให้แก่ท่านลูกค้า ขอให้ท่านลูกค้าชำระเงินตามที่ตัวแทนสมาชิกระบุไว้ เพื่อง่ายต่อการตรวจสอบหากเกิดข้อผิดพลาด</b></p>
      <p>&nbsp;&nbsp;2. ช่องทาง Facebook ท่านลูกค้าสามารถ Inbox ได้ที่ Divine Brand Official Page</P>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a target="_blank" href="https://www.facebook.com/divinegroup2017/">DIVIDEBRAND OFFICIAL PAGE CLICK</a></b></p>
      <p>&nbsp;&nbsp;3. ช่องทาง LINE Divine Brand Official Line</P>
      <p style="color:#00b900;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LINE ID: divinebrand</b></p>
        <div class="col-lg-3 mb-4">
         <div class="card h-100 text-center">
           <p style="color:#00b900;"><b>LINE QR CODE</b></p>
           <img class="card-img-top" src="{{ asset('images/QR-CODE-LINE.jpg')}}" alt="">
         </div>
       </div>
       <h2 style=" border-top: 5px solid red; padding-top:15px;">ขั้นตอนการชำระเงิน DIVINE BRAND</h2>
       </br>
       <p>1. ในกรณีที่ทางลูกค้าสั่งซื้อสินค้าจากทาง Facebook หรือ Line Divine Brand Official ท่านสามารถโอนเงินผ่านทางบัญชีข้างล่างเพื่อทำการชำระเงิน</p>
       <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="{{ asset('images/kasikorn.png')}}" alt="ธนาคารกรสิกร">
              </a>
            </div>
            <div class="col-lg-6 bank">
              <h3 class="card-title">บัญชีสำหรับโอนชำระค่าสินค้า DIVINE BRAND</h3>
              <p class="card-text">ชื่อบัญชี นางสาว พิมพ์รัฏตา แก้วมณีโชติ</p>
              <p class="card-text">ธนาคาร กสิกรไทย ออมทรัพย์</p>
              <p class="card-text">เลขบัชชี 026-1-63913-0</p>
                <div style="box-sizing:border-box; ">
                  <p class="card-text">EMS 1 กล่องละ 60</p>
                  <p class="card-text">EMS 10 กล่องละ 200</p>
                </div>
            </div>
          </div>
        </div>
      </div>

       <p>2. หลังจากที่ท่านโอนเงินแล้วโปรดถ่ายรูปใบเสร็จเพื่อเป็นหลักฐานในการชำระเงินและ Inbox ได้ที่
         <b><a target="_blank" href="https://www.facebook.com/divinegroup2017/">FACEBOOK DIVIDEBRAND OFFICIAL</a></b>
         &nbsp;หรือ&nbsp;<span style="color:#00b900;"><b>&nbsp;LINE ID: divinebrand</b></span><p>
       <p>3. หลังจากที่เราได้รับหลักฐานการชำระเงิน ทางเราจะทำการส่งสินค้าให้ท่านลูกค้าโดย เร็วที่สุด ขอบคุณที่ให้ DIVINE BRAND ดูแลผิวของคุณนะค่ะ</p>
    </div>

@endsection
