<?php
  $pageName = 'countup';
  require_once('header.php');
  ?>
  <script>
    window.onload=function() {
      // Month,Day,Year,Hour,Minute,Second
      upTime('nov,01,1988,08:00:00');
    };
    function upTime(countTo) {
      now = new Date();
      countTo = new Date(countTo);
      difference = (now-countTo);
      days=Math.floor(difference/(60*60*1000*24)*1);
      years = Math.floor(days / 365);
      if (years > 1){ days = days - (years * 365)}
      hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);
      mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
      secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
      document.getElementById('years').firstChild.nodeValue = years;
      document.getElementById('days').firstChild.nodeValue = days;
      document.getElementById('hours').firstChild.nodeValue = hours;
      document.getElementById('minutes').firstChild.nodeValue = mins;
      document.getElementById('seconds').firstChild.nodeValue = secs;

      clearTimeout(upTime.to);
      upTime.to=setTimeout(function(){ upTime(countTo); },1000);
    }
  </script>
  <div id="bottomCounterDiv"><br>
    <div id="countup">
      <span>Murie design group has been in business for: </span>
      <span id="years">00</span>
      <span class="timeRefYears"> years </span>
      <span id="days">00</span>
      <span class="timeRefDays"> days </span>
      <span id="hours">00</span>
      <span class="timeRefHours"> hours </span>
      <span id="minutes">00</span>
      <span class="timeRefMinutes"> minutes </span>
      <span id="seconds">00</span>
      <span class="timeRefSeconds"> seconds </span>
      <!-- java code for counting up found at https://trulycode.com/bytes/count-date-time-javascript/ -->
    </div>
  </div>
<?php
  require_once('footer.php');
  ?>
