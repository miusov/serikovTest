<?php
if (isset($_SESSION['user'])) header('Location: /first/user');
?>
<h2 class="alert-danger text-center">
    Система заблокирована!<br>
    Попробуйте войти еще раз через <span id="time"></span> сек</h2>

<script>
    $.cookie('cookie', '1');
    var time = 25;
    setInterval(function () {
        time -= 1;
        $('#time').text(time);
        if(time == 0){
            $.cookie('cookie', null);
            location.href = '/first';
        }
    }, 1000);
</script>