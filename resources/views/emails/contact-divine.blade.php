@component('mail::message')
  <img style="width:90; height:120px;" src="{{asset('/images/LOGO-DIVINE.png')}}">
  # Divine Brand Web Offcial ติดต่อสอบถาม

  <hr>
  ข้อมูลผู้ติดต่อ<br>
  เบอร์โทรศัพท์:{{ $tel }}<br>
  Email:{{ $email }}<br>
  <hr>

  หัวข้อ:{{ $title }}<br>

  {{ $msg }}<br>
  <hr>
  Thanks,<br>
  {{ config('app.name') }}
@endcomponent
