<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="icon" href="img/log.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <script src="note.js"></script>
    <script src="https://kit.fontawesome.com/4b50fd086e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

<div class="container">
<!-- html for header -->
    <header>

        <div class="logo">
<a href="index.php"><img src="img/logo.png" alt="file format not supported"></a>
        </div>

        <nav class="nav">
<ul>
    <li><a href="index.php#how">how it works</a></li>
    <li><a href="index.php#about">about us</a></li>
    <li><a href="index.php#faq">FAQ</a></li>
    <li><a href="#" style=" padding-bottom:2%;">Online security guarantee</a></li>
    <li><a href="index.php#contact">contact</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="register.php">find advisor</a></li>
</ul>
        </nav>

    <!-- html tag ends here -->

    <!--navigation bar with dropdown-->

<div class="nat">
<div class="dits" onclick="change()">
    <span class="one"></span>
    <span class="two"></span>
    <span class="three"></span>
</div>
</div>
    </header>

    <!-- html for sidenav -->

    <div class="side" id="good">

        <p onclick="closeMenubar()">&times</p>

    <a href="index.php#how">how it works</a>
            <a href="index.php#about">about us</a>
            <a href="index.php#faq">FAQ</a>
            <a href="#">Online security guarantee</a>
            <a href="index.php#contact">contact</a>
            <a href="login.php">login</a>
            <a href="register.php">find advisor</a>
    </div>
