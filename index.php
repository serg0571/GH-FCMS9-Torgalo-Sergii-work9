<?php $data = require_once('data.php');


?>
сегодня <?php echo date('d.m.Y h:i');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prociono|Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Alecto</title>
</head>

<body>


<header class="menu">
    <nav class="menu-button">
        <div class="logo">
            <a href="#"><img src="
            <?php
                echo $data['siteLogo']
                ?>" alt="logo"></a>
        </div>
        <!--buttons menu-->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <!--            <a class="navbar-brand button-chang" href="#" style="color:white">HOME</a>-->
            <button class="navbar-toggler button-chang " type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    foreach ($data['mainMenu'] as $menuNavBar) {
                        ?>
                        <li class="nav-item active button-chang ">
                            <a class="nav-link button-chang-text " style="color:white"
                               href="<?php echo $menuNavBar['url'] ?>">
                                <?php echo $menuNavBar['title'] ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>


                </ul>
            </div>
        </nav>
        <!--buttons menu end-->
    </nav>


    <div class="header-text">
        <?php
        foreach ($data['mainSlider'] as $mainText) {
        ?>
        <h1>

            <?php
            echo $mainText['title']['main'];
            echo $mainText['title']['second']
            ?>
        </h1>
        <p class="header-text-small">   <?php

            echo $mainText['description']
            ?></p>
    </div>
    <?php
    } ?>
    <div class="btn-heard">
        <button type="button" class="btn btn-outline-secondary ">
            Learn more
        </button>
    </div>
</header>
<!--header end-->
<!--BLOCK-2 start  About us-->
<section class="block-2  container">
    <h2 class="block-2-lard">
        <?php
        echo $data['block-2']['mainText']
        ?></h2>
    <p class="block-2-small">
        <?php
        echo $data['block-2']['text']
        ?>
    </p>
    <div class="row block-2-photo">
        <div class=" col ">
            <a href="#"><img src="assets/img/photo-1.png" alt=""></a>
            <h3 class="block-2-down-l"> Lorem ipsum</h3>
            <p class="block-2-down">Nam varius accumsan elementum.
                Aliquam fermentum eros in suscipit scelerisque.</p>
        </div>
        <div class=" col">
            <a href="#"><img src="assets/img/photo-2.png" alt=""></a>
            <h3 class="block-2-down-l"> Lorem ipsum</h3>
            <p class="block-2-down">Nam varius accumsan elementum.
                Aliquam fermentum eros in suscipit scelerisque.</p>
        </div>
        <div class=" col">
            <a href="#"><img src="assets/img/photo-3.png" alt=""></a>
            <h3 class="block-2-down-l"> Lorem ipsum</h3>
            <p class="block-2-down">Nam varius accumsan elementum.
                Aliquam fermentum eros in suscipit scelerisque.</p>
        </div>
        <div class=" col">
            <a href="#"><img src="assets/img/photo-4.png" alt=""></a>
            <h3 class="block-2-down-l"> Lorem ipsum</h3>
            <p class="block-2-down">Nam varius accumsan elementum.
                Aliquam fermentum eros in suscipit scelerisque.</p>
        </div>
    </div>
    <div class="btn-block-2">
        <button type="button" class="btn btn-outline-secondary btn-all ">
            Learn more
        </button>
    </div>
</section>
<!--BLOCK-2 end -->
<!--BLOCK-3-4 start About us -->
<section class="block-3 row ">
    <div class="col-12 col-sm-6 photo-block-3-main ">
        <img class="img-fluid" src="assets/img/teacher.png" alt="volodya">
    </div>
    <div class="col-12 col-sm-6 ">
        <h3 class="block-3-text-large">OUR TEACHER</h3>
        <p class="block-3-text-small">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Quisque elementum augue sed est porttitor, ac blandit nisl posuere.
            Pellentesque hendrerit suscipit mi eu lobortis. Curabitur consectetur
            enim id elementum accumsan.
            Quisque metus purus, iaculis id tincidunt non, blandit quis sapien.
        </p>
        <div class="btn-block-2  ">
            <button type="button" class="btn btn-outline-secondary btn-all ">
                Learn more
            </button>
        </div>
    </div>

</section>
<section class="block-4 row ">

    <div class="col-12 col-sm-6 ">
        <h3 class="block-3-text-large-left">OUR TEACHER</h3>
        <p class="block-3-text-small-left">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Quisque elementum augue sed est porttitor, ac blandit nisl posuere.
            Pellentesque hendrerit suscipit mi eu lobortis. Curabitur consectetur
            enim id elementum accumsan.
            Quisque metus purus, iaculis id tincidunt non, blandit quis sapien.
        </p>
        <div class="btn-block-2 col ">
            <button type="button" class="btn btn-outline-secondary btn-all ">
                Learn more
            </button>
        </div>
    </div>
    <div class=" col-12  col-sm-6 photo-block-3-main ">
        <img class="img-fluid" src="assets/img/teacher-2.jpg" alt="volodya" width="100%">

    </div>
</section>
<!--BLOCK-3-4 end About us -->
<!--BLOCK-5 start  avatar-->
<div class="block-5 row justify-content-center">
    <div class="block-5-avatar col-12">
        <img src="assets/img/block-5.jpg" alt="avatar">
    </div>
    <h3 class="block-5-text col-12">Alecto lorem ipsum dolor sit amet, consectetur adipiscing elit. </h3>
    <p class="block-5-text-small col-12">Adam Czajkowski, CEO&Founder at symu.co</p>
</div>
<!--BLOCK-5 end avatar -->
<!--BLOCK-6 start Our Services -->
<section class="block-6 row container-my">
    <div class="col-12">
        <h3 class="block-6-large  ">  <?php
            echo $data['blockOurservices'] ['mainText']
            ?></h3>
        <p class="block-6-small">
            <?php
            echo $data['blockOurservices'] ['text']
            ?>
        </p>
    </div>

    <div class="col-12 col-sm-6">
        <h3 class="block-6-text-large">
            <?php
            echo $data['blockOurservices'] ['mainText1']
            ?>
        </h3>
        <p class="block-6-small-text">
            <?php
            echo $data['blockOurservices'] ['text1']
            ?>
        </p>
    </div>
    <div class="col-12 col-sm-6">
        <h3 class="block-6-text-large">
            <?php
            echo $data['blockOurservices'] ['mainText2']
            ?>
        </h3>
        <p class="block-6-small-text">
            <?php
            echo $data['blockOurservices'] ['text2']
            ?>
        </p>
    </div>
    <div class="col-12 col-sm-6">
        <h3 class="block-6-text-large">
            <?php
            echo $data['blockOurservices'] ['mainText3']
            ?>
        </h3>
        <p class="block-6-small-text">
            <?php
            echo $data['blockOurservices'] ['text3']
            ?>
        </p>
    </div>
    <div class="col-12 col-sm-6">
        <h3 class="block-6-text-large">
            <?php
            echo $data['blockOurservices'] ['mainText4']
            ?>
        </h3>
        <p class="block-6-small-text">
            <?php
            echo $data['blockOurservices'] ['text4']
            ?>
        </p>
    </div>
    <!--BLOCK-6 end Our Services-->
    <!--BLOCK-7 start  our team -->
</section>
<article class="block-7">
    <div class="col-12">
        <h3 class="block-7-large">
            <?php
            echo $data['blockOurTeam'] ['mainText']
            ?>
        </h3>
        <p class="block-7-small">
            <?php
            echo $data['blockOurTeam'] ['text']
            ?>
        </p>
    </div>

</article>
<div class="gallery">
    <div class=" text-center ">
        <?php foreach ($data['gallery'] as $item) {
            ?>
            <img class="gallery-1" src="<?php echo $item['url'] ?>" alt="<?php echo $item['alt'] ?>">
            <?php
        }
        ?>
    </div>

</div>
<!--BLOCK-7 end our team -->
<!--BLOCK-8 start  Pricing-->
<section class="block-8 row container-my">
    <div class="col-12">
        <h3 class="block-7-large">Pricing</h3>
        <p class="block-7-small">
            Nam varius accumsan elementum. Aliquam fermentum
            eros in suscipit scelerisque.</p>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="block-8-box-4  ">
            <h3 class="block-8-m">$29</h3>
            <div class="block-8-app">
                <p>Lorem ipsum license</p>
            </div>
            <div class="block-8-middle">
                Lorem ipsum dolor sit amet
                consectetur adipiscing elit
                Ante sed interdum labortis
                Est nisi efficitur lactus
            </div>
            <div class="btn-block-8">
                <button type="button" class="btn  btn-lg btn-block">P U R C H A S E</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="block-8-box-4  ">
            <h3 class="block-8-m">$39</h3>
            <div class="block-8-app">
                <p>Lorem ipsum license</p>
            </div>
            <div class="block-8-middle">
                Lorem ipsum dolor sit amet
                consectetur adipiscing elit
                Ante sed interdum labortis
                Est nisi efficitur lactus
            </div>
            <div class="btn-block-8">
                <button type="button" class="btn  btn-lg btn-block">P U R C H A S E</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="block-8-box-4   ">
            <h3 class="block-8-m">$49</h3>
            <div class="block-8-app">
                <p>Lorem ipsum license</p>
            </div>
            <div class="block-8-middle">
                Lorem ipsum dolor sit amet
                consectetur adipiscing elit
                Ante sed interdum labortis
                Est nisi efficitur lactus
            </div>
            <div class="btn-block-8">
                <button type="button" class="btn  btn-lg btn-block">P U R C H A S E</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="block-8-box-4  ">
            <h3 class="block-8-m">$109</h3>
            <div class="block-8-app">
                <p>Lorem ipsum license</p>
            </div>
            <div class="block-8-middle">
                Lorem ipsum dolor sit amet
                consectetur adipiscing elit
                Ante sed interdum labortis
                Est nisi efficitur lactus
            </div>
            <div class="btn-block-8">
                <button type="button" class="btn  btn-lg btn-block">P U R C H A S E</button>
            </div>
        </div>
    </div>
</section>
<!--BLOCK-8 end Pricing -->
<!--BLOCK- 9start  MAP-->
<div class="block-9 container-my row">
    <div class="block-9-text col-12 col-md-6">
        <h3 class="block-9-text-large">Dolor sit amet</h3>
        <p class="block-9-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum augue
            sed est porttitor, ac blandit nisl posuere. Pellentesque hendrerit suscipit mi eu lobortis. Curabitur
            consectetur enim id elementum accumsan. Quisque metus purus,
            iaculis id tincidunt non, blandit quis sapien. </p>
    </div>
    <div class="block-9-map col-12 col-md-6">
        <img src="assets/img/Map.jpg" alt="ze-1">
    </div>
</div>
<!--BLOCK-9 end  MAP-->
<!--FOOTER START-->
<footer>
    <div class="footer-background  container-my ">
        <h3 class="footer-text-app  ">
            Try our<span class="footer-t"> PSD template </span>on symu.co
        </h3>
        <div class="btn-all ">
            <button type="button" class="btn btn-outline-secondary btn-all ">
                Learn more
            </button>
        </div>
    </div>
    <div class="footer-down">

        <div class="circle">

            <nav class="menu-button ">
                <div class="logo justify-content-start">
                    <a href="#"><img src="assets/img/logo-footer.jpg" alt="logo"></a>
                </div>
                <!--buttons menu-->
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active button-footer" href="#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link button-footer" href="#">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link button-footer" href="#">work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  button-footer" href="#">block</a>
                    </li>
                </ul>


            </nav>


        </div>

    </div>

</footer>
<!--FOOTER END-->

</body>
</html>