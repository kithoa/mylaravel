@extends('sinhvien.layout.index')
@section('content')
<!-- FEATURE -->
 <section id="feature">
      <div class="container">
           <div class="row">
            <div class="col-md-12 col-sm-12">
              <p id="demo" style="font-size: 50px;"></p>
              <div id="clockdiv" class="col-md-12 col-sm-12">
                <div>
                  <span class="days"></span>
                  <div class="smalltext">Days</div>
                </div>
                <div>
                  <span class="hours"></span>
                  <div class="smalltext">Hours</div>
                </div>
                <div>
                  <span class="minutes"></span>
                  <div class="smalltext">Minutes</div>
                </div>
                <div>
                  <span class="seconds"></span>
                  <div class="smalltext">Seconds</div>
                </div>
              </div>
            </div>
           		<form name="myForm" role="form" action="phatde/{{$d->id}}" method="post">
           			@csrf
           			  @foreach($ch as $k => $v)           		
                		<div class="col-md-12 col-sm-12">	                          
                        	<h4>Câu {{$k+1}}: {{$v->NoiDungCH}}</h4>
                    		@foreach($v->dapan as $da)
                    			<input type="radio" name="da[{{$k}}]" value="{{$da->id}}">&nbsp;{{$da->NoiDungDA}} <br>
                    		@endforeach    
                		</div>
                    <input type="hidden" name="tam1[]" value="{{$ds[$k]->idDADung}}">
                    <input type="hidden" name="tam2[]" value="{{$ds[$k]->ThangDiem}}">                
                	@endforeach
	                <div class="col-md-4 col-sm-4">
	                	<button type="submit" class="section-btn btn btn-default smoothScroll" style="background:green">Nộp bài</button>
	                </div>
	            </form>
           </div>
      </div>
 </section>

<script type="text/javascript"> 
    function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }

    function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.days');
      var hoursSpan = clock.querySelector('.hours');
      var minutesSpan = clock.querySelector('.minutes');
      var secondsSpan = clock.querySelector('.seconds');

      function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }

    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
      }
     
      if(document.cookie && document.cookie.match('myClock')){
        // var deadline = document.cookie.match(/(^|;)myClock=([^;]+)/)[2];
        var deadline = getCookie('myClock');
      }
     
      else{
        //Đặt thời gian của bạn ở đây !!!!
        var deadline = new Date(Date.parse(new Date()) + 5 * 24 * 60 * 60 * 1000);
     
        // store deadline in cookie for future reference
        document.cookie = 'myClock=' + deadline + '; path=/';
      }

    //var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
    initializeClock('clockdiv', deadline);
  </script>

@endsection


<!-- <script>
  // Thiết lập thời gian đích mà ta sẽ đếm
  var a = document.getElementById('demomomo');
  var countDownDate = new Date();
  countDownDate.setSeconds(countDownDate.getSeconds()+20);

  // cập nhập thời gian sau mỗi 1 giây
  var x = setInterval(function() {
 
    // Lấy thời gian hiện tại
    var now = new Date().getTime();
 
    // Lấy số thời gian chênh lệch
    var distance = countDownDate.getTime() - now;
 
    // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
 
    // HIển thị chuỗi thời gian trong thẻ p
    document.getElementById("demo").innerHTML = days + " Ngày " + hours + " Giờ "
    + minutes + " Phút " + seconds + " Giây " ;
 
    // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
    if (distance < 0) {
      clearInterval(x);
      // document.getElementById("demo").innerHTML = "Thời gian đếm ngược đã kết thúc";
      document.forms["myForm"].submit();
    }
  }, 1000);
</script> -->
