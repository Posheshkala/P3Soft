<?php
global $title;
?>
<!doctype html>
<html lang="fa" dir="rtl" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Asset/CSS/bootstrap.rtl.css">
    <title>پی 3 سافت-<?php echo $title;?></title>
</head>
<body class="d-flex flex-column h-100">


<nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Sixth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">P3Soft</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample06">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Store/index.php">فروشگاه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Blog/index.php">وبلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../About.php">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact.php">ارتباط با ما</a>
                </li>
            </ul>
            <a href="../User/Register.php"><button type="button" class="btn btn-outline-primary mx-1">عضویت</button></a>
            <a href="../User/Login.php"><button type="button" class="btn btn-outline-primary mx-3">ورود</button></a>

            <form>
                <input class="form-control" type="text" placeholder="جستجو..." aria-label="Search">
            </form>
        </div>
    </div>
</nav>