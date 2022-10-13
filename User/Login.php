<?php
$title='ورود';
require '../Layout/Header.php';
?>

<div class="m-auto card">
    <h1>Login</h1>
    <form action="/" method="post">
        <div class="container">
            <input type="text" value="" placeholder="نام کاربری"><br>
            <input type="password" value="" placeholder="رمز عبور">
        </div>
        <button>Login</button>
    </form>
</div>


<?php


require '../Layout/Footer.php';?>