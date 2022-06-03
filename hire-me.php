<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Brand</title>

    <meta property="og:site_name" content="mazanlabeeb.me">
    <meta property="og:title" content="Mazan Labeeb" />
    <meta property="og:description" content="Hello! I am Mazan Labeeb. I am a full stack web developer with an experience of more than 5 years. " />
    <meta property="og:image" itemprop="image" content="assets/img/avatars/avatar.jpg">
    <meta property="og:type" content="website" />
    <meta name="description" content="Mazan Labeeb">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP , Mazan Labeeb ">
    <meta name="author" content="Mazan Labeeb">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <?php
        require "include/header.php";
    ?>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Hire Me</h2>
                </div>
                <form method="post" action="mail.php">
                    <div class="mb-3"><label class="form-label" for="email">Your Email</label><input class="form-control" name="email" type="email" id="email"></div>
                    <div class="mb-3"></div>
                    <div class="mb-3"><label class="form-label" for="name">Your Name</label><input class="form-control" name="name" type="text" id="name"></div>
                    <div class="mb-3"><label class="form-label" for="message">Message</label><textarea name="message" class="form-control" id="message"></textarea></div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 button"><button class="btn btn-primary d-block w-100" type="submit">Hire Me</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php
        require "include/footer.php";
    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>