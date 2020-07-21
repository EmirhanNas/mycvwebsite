<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container"><a class="navbar-brand logo" href="index.php">Emirhan Nas</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="projects-grid-cards.php">Projelerim</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="cv.php">CV</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="contact.php">İletişim</a></li>
            </ul>
        </div>
    </div>
</nav>
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="avatar" style="background-image: url(&quot;assets/img/WhatsApp%20Image%202020-07-20%20at%2023.00.17.jpeg&quot;);"></div>
                <div class="about-me">
                    <p><br>Merhaba! Benim adım&nbsp;<strong>Emirhan Nas.&nbsp;</strong>Frontend ve backend teknolojilerini kullanarak WEB siteleri geliştiriyorum. WEB sitelerini oluştururken&nbsp; en güncel ve kullanışlı teknolojileri kullanmakla
                        beraber yeniliklere açık bir bilgisayar mühendisiyim.</p><a class="btn btn-outline-primary" role="button" href="cv.php">Ayrıntılı CV</a></div>
            </div>

        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/Adsız.png" style="height: 247px;"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/Adsız1.png" style="height: 247px;"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/Adsız2.png" style="height: 247px;"></a></div>
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content">
                    <h3 class="mt-2">Resimler Hoşuna Gitti mi?</h3><button  onclick="window.location.href='contact.php'" class="btn btn-outline-primary btn-lg" type="button">İletişime Geç</button></div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container">
                <div class="heading">
                    <h2>gENEL Yetkİnlİklerİm</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Web&nbsp; Önyüz Tasarımı</h3>
                                <p class="card-text">Frontend tasarımı yaparken html,css ve javascript dillerini kullanıyorum. Ek olarak bu dillere ait react.js, bootstrap, jquery vb. kütüphaneleri kullanıyorum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title"><strong>Web&nbsp; Arkayüz Tasarımı</strong><br></h3>
                                <p class="card-text">Backend tasarımı yaparken php ve&nbsp; javascript dillerini kullanıyorum. Ek olarak bu dillere ait laravel, node.js vb. kütüphaneleri kullanıyorum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Veritabanı Tasarımı</h3>
                                <p class="card-text">Veritabanı tasarımı yaparken mySQL ve noSQL kullanıyorum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="cv.php">Hakkımda</a><a href="contact.php">İletişim</a><a href="projects-grid-cards.php">Projelerim</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

<?php

?>
