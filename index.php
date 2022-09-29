
<?php
$title='صفحه نخست';
require 'Layout/Header.php';?>

<style>
    .hero-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("Asset/Images/index.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

</style>

<div class="hero-image">
    <div class="carousel-caption">
        <h1>P3Soft </h1>
        <p> گروه نرم افزاری با رویکردی نوین</p>
        <br>
        <p>با ما چند قدم جلوتر هستید.</p>
        <br>
        <button class="btn-outline-primary">بیشتر بدانید</button>
    </div>
</div>
<?php require 'Layout/Footer.php';?>

