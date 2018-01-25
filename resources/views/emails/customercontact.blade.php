


@component('mail::message')
<img style="width:90; height:120px;" src="{{asset('/images/LOGO-DIVINE.png')}}">
# ข้อมูลส่งมาจาก เว็ป divebrand Web Offcial ติดต่อสอบถาม
{{ $title }}<br>
{{ $tel }}<br>
{{ $email }}<br>

<hr>
{{ $msg }}<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
