<div class="footer">
    <div class="wrapper">
        <p class="text-center">2021 All rights reserved, Food House</p>
    </div>
</div>
<!-- Footer Section Ends -->

<script type="text/javascript">
    <!--
    // edit startSeconds as you see fit
    // simple timer example provided by Thomas

    var startSeconds = 5;
    var milisec = 0;
    var seconds=startSeconds;
    var countdownrunning = false
    var idle = false;
    document.counter.timer.value=startSeconds;

    function CountDown()
    {
        if(idle == true)
        {

            if (milisec<=0)
            {
                milisec=9
                seconds-=1
            }
            if (seconds<=-1)
            {
                document.location='logout.php';
                milisec=0
                seconds+=1
                return;
            }
            else
                milisec-=1;
            document.counter.timer.value=seconds+"."+milisec;
            setTimeout("CountDown()",100);
        }
        else
        {
            return;
        }
    }
    function startCountDown()
    {
        document.counter.timer.value=startSeconds;
        seconds = startSeconds;
        milisec = 0

        document.counter.timer.style.display = 'block';
        idle = true;
        CountDown();
        // document.getElementById("alert").innerHTML = 'You are idle. you will be logged out after ' + startSeconds + ' seconds.';
        countdownrunning = false;
    }

    function resetTimer()
    {
        document.counter.timer.style.display = 'none';
        idle = false;
        // document.getElementById("alert").innerHTML = '';


        if(!countdownrunning)
            setTimeout('startCountDown()',2000);

        countdownrunning = true;

    }

    -->
</script>

</body>
</html>