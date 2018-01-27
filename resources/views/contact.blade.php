@extends('layout')
@section('content')
<!-- Page Content -->
<div class="container contact">
  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-7 mb-4">

      <h3 style="margin-top:50px !important;"class="mt-4 mb-3"> DIVINE BRAND ติดต่อ-สอบถามข้อมูล</h3>
      @if (session('msg'))
          <div class="alert alert-success">
            <p>{{ session('msg') }}</p>
          </div>
       @endif
          <form method="POST" style="margin-top:50px" action="{{ url('customerSendMail') }}" novalidate>
            {{ csrf_field() }}
            <div class="control-group form-group">
              <div class="controls">
                <label>หัวข้อ</label>
                @if ($errors->has('title'))
                    <span class="help-block alert alert-danger">
                        {{ $errors->first('title') }}
                    </span>
                @endif
                <input type="text" class="form-control" id="title" name="title" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>

            </div>

            <div class="control-group form-group">
              <div class="controls">
                <label>เบอร์โทรศัพท์</label>
                @if ($errors->has('tel'))
                    <span class="help-block alert alert-danger">
                          {{ $errors->first('tel') }}
                    </span>
                @endif
                <input type="tel" class="form-control" id="tel" name="tel" required data-validation-required-message="Please enter your phone number.">
              </div>

            </div>

            <div class="control-group form-group">
              <div class="controls">
                <label>Email</label>
                @if ($errors->has('email'))
                    <span class="help-block alert alert-danger">
                        {{ $errors->first('email') }}
                    </span>
                @endif
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>

            <div class="control-group form-group">
              <div class="controls">
                <label>ข้อความ</label>
                @if ($errors->has('message'))
                    <span class="help-block alert alert-danger">
                        {{ $errors->first('message') }}
                    </span>
                @endif
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>

            <!-- For success/fail messages -->
            <button type="submit" name="submit" value="sent" style="background-color: #343a40 !important;"class="btn btn-primary" id="sendMessageButton">Send Message</button>

          </form>
      </div>

    <!-- Contact Details Column -->
    <div class="side-contact" style="margin-left:80px;"class="col-lg-4 mb-4">
        <h3 style="border-bottom: 2px solid red; display: inline-block;">Business Hour</h3>
        <ul>
           <li>Monday - Son</li>
           <li> 8:00 น. - 20:00 น.</li>
           <li>ทุกวันทำการ: ไม่มีวันหยุด</li>
      </ul>

        <h3 style="border-bottom: 2px solid red; display: inline-block;">The Office</h3>
        <ul>
          <li><i class="fa fa-home address"></i>254/1 หมู่6 แขวงสายไหม เขตสายไหม กทม.</li>
          <li><i class="fa fa-envelope address"></i>divinebrand2017.official@gmail.com</li>
          <li><i class="fa fa-phone address"></i>099-287-1945</li>
          <li><i class="fa fa-phone address"></i>094-623-6455</li>
        </ul>

        <h3 style="border-bottom: 2px solid red; display: inline-block;">Social Media & Chat</h3>
        <ul>
          <li><span style="color:#000000;"><b>Instagram: divinebrand_official</b></span></li>
          <li><span style="color:#007bff;"><b>Facebook: Divine_BRAND </b></span></li>
          <li><span style="color:#00b900;"><b>LINE: divinebrand</b></span></li>
        </ul>
        <div style="padding:0px;" class="col-sm-6 mb-4">
         <div class="card h-60 text-center">
           <p style="color:#00b900;"><b>LINE QR CODE</b></p>
           <img class="card-img-top" src="{{ asset('images/QR-CODE-LINE.JPG')}}" alt="">
         </div>
       </div>
       <br>
    </div>
  </div>
</div>
<!-- /.container -->
@endsection
