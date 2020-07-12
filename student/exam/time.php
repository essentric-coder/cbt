
<script type="text/javascript" src="inc/jquery.min.js"></script>
<link rel="stylesheet" href="inc/bootstrap.min.css">
<script type="text/javascript" src="inc/TimeCircles.js"></script>
<link rel="stylesheet" href="inc/TimeCircles.css" />



<div align="center">
  <div id="CountDownTimer" data-timer="900"  style="max-width:400px; width: 100%; height: 200px;"></div>
</div>


<script>
 $("#DateCountdown").TimeCircles();
 $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
 $("#PageOpenTimer").TimeCircles();

 var updateTime = function(){
     var date = $("#date").val();
     var time = $("#time").val();
     var datetime = date + ' ' + time + ':00';
     $("#DateCountdown").data('date', datetime).TimeCircles().start();
 }
 $("#date").change(updateTime).keyup(updateTime);
 $("#time").change(updateTime).keyup(updateTime);

 // Start and stop are methods applied on the public TimeCircles instance
 $(".startTimer").click(function() {
     $("#CountDownTimer").TimeCircles().start();
 });
 $(".stopTimer").click(function() {
     $("#CountDownTimer").TimeCircles().stop();
 });

 // Fade in and fade out are examples of how chaining can be done with TimeCircles
 $(".fadeIn").click(function() {
     $("#PageOpenTimer").fadeIn();
 });
 $(".fadeOut").click(function() {
     $("#PageOpenTimer").fadeOut();
 });

</script>
