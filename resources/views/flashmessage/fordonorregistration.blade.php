@if(count($errors)>0)
 <ul class="registerflashmsgul">
  <div style="max-width: 500px;">
      @foreach($errors->all() as $error)
       <li><p class="registerflashmsg"><span style="color: crimson;font-weight: bold;">*</span> {{ $error }}</p></li>
      @endforeach
  </div>
</ul>

@endif

@if(Session::has('registerdonor'))
  
  <div class="registerflashsuccessmsgdiv">
    <p class="registerflashsuccessmsgtext">{!!  Session::get('registerdonor') !!}</p>
  </div>
@endif

@if(Session::has('logindonorerror'))
  
  <div class="registerflashmsgul">
    <p class="logerrormsg">{!!  Session::get('logindonorerror') !!}</p>
  </div>
@endif

@if(Session::has('status'))
  
  <div class="registerflashsuccessmsgdiv">
    <p class="registerflashsuccessmsgtext">{!!  Session::get('status') !!}</p>
  </div>
@endif

@if(Session::has('regvaliditymsg'))
 @php
  $msg = Session::get('regvaliditymsg');
  echo "<script>alert('".$msg."')</script>";
 @endphp
@endif