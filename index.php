<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'config/class.php';
    $thxk = new member;
    $webconfig = $thxk->webconfig();
    $contact = $thxk->contact();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $webconfig['name']; ?></title>
    <link rel="shortcut icon" href="<?php echo $webconfig['logo_icon']; ?>" type="image/png" sizes="32x32">
    <meta name="title" content="ขายแอพสตรีมมิง Netflix, Youtube, VIU Premium, WeTV, TrueID, Ch3Plus, Disney+, MONOMAX, HBO GO, Amazon Prime Video, Spotify Premium, AIS Play, Bilibili, YOUKU VIP, BeinSports">
    <meta name="description" content="<?php echo $webconfig['description']; ?>">
    <meta name="keywords" content="<?php echo $webconfig['keywords']; ?>">
    <meta property="og:image" content="<?php echo $webconfig['logo'] ?>">
    <meta property="og:title" content="<?php echo $webconfig['name'] ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo $webconfig['name'] ?>">
    <meta property="og:description" content="<?php echo $webconfig['description'] ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sarabun:100,200,400,300,500,600,700">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/aos.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/datatables.min.js"></script>
    <script src="/assets/js/aos.js"></script>
    <style>
        @import url('https://maketline.github.io/goodday/font/stylesheet.css');

        html,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        small,
        active,
        p,
        a,
        button,
        tr,
        th,
        td,
        .btn,
        .nav-link,
        .text-dark,
        .text-white,
        .text-secondary,
        .underline-active {
            color: <?php echo $webconfig['font_color']; ?>;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: bold;
        }

        body {
            font-family: 'line_seed_sans_th', sans-serif;
            font-weight: bold;
            background-image: url('<?= $webconfig['background'] ?>');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 3px;
            height: 3px;
        }

        ::-webkit-scrollbar-track {
            background: #000;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 25px;
            background-image: -webkit-linear-gradient(transparent, <?php echo $webconfig['sec_color'] ?>);
        }

        a {
            text-decoration: none;
        }

        .btn-thxk {
            color: <?php echo $webconfig["font_color"]; ?>;
            border-radius: 1vh;
            background: none;
            border: 2px solid <?php echo $webconfig["sec_color"]; ?>;
            text-decoration: none;
            clip-path: polygon(0 28%, 10% 0, 100% 0%, 100% 68%, 91% 100%, 0% 100%);
            transition: all 0.5s ease;
        }

        .btn-dark {
            background-color: #0b0b0b;
            border: none;
        }

        .btn-dark:hover {
            background-color: #0b0b0b;
            border: none;
        }

        textarea {
            width: 100%;
            height: 250px;
            border-radius: 15px;
            padding: 15px;
        }

        .bg-nav {
            background-color: rgba(255, 255, 255, 0.025);
            backdrop-filter: blur(10px);
            z-index: 1;
        }

        .bg-navvx {
            background-color: rgba(255, 255, 255, 0.025);
            backdrop-filter: blur(10px);
            border-radius: 10px;
        }

        .btn-thxk:hover {
            color: <?php echo $webconfig["sec_color"]; ?>;
            background-color: var(--main);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 100% 100%, 0% 100%);
        }

        .border-glowing {
            border: 1px solid rgba(0, 0, 0, 0);
            transition: all .5s ease;
        }

        .border-glowing:hover {
            border: 1px solid <?php echo $webconfig["sec_color"]; ?>;
            box-shadow: 0 0 10px <?php echo $webconfig['sec_color']; ?>;
            transform: scale(1.025);
        }

        .border-glowing-v2 {
            border: 1px solid rgba(0, 0, 0, 0);
            transition: all .5s ease;
        }

        .border-glowing-v2:hover {
            border: 1px solid <?php echo $webconfig["sec_color"]; ?>;
            box-shadow: 0 0 10px <?php echo $webconfig['sec_color']; ?>;
        }

        .swal2-text {
            font-family: 'Kanit', sans-serif;
        }

        .card-body {
            background-color: rgba(255, 255, 255, 0.025);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 2px rgba(11, 11, 11, 0.3);
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            padding: 15px;
        }

        .class-thxk {
            background-color: rgba(11, 11, 11, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 2px rgba(11, 11, 11, 0.3);
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        }

        .class-menu {
            background-color: rgba(11, 11, 11, 0.5);
            backdrop-filter: blur(1px);
            position: relative;
            overflow: hidden;
            transition: box-shadow 0.5s ease;
            border-radius: 2vh;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        }

        .class-menu:hover {
            box-shadow: 0 0 10px <?php echo $webconfig['sec_color']; ?>;
        }

        .class-footer {
            background-color: rgba(11, 11, 11, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 2px rgba(11, 11, 11, 0.3);
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        }

        .nav-link {
            transition: transform 0.5s ease;
        }

        .grayscale-filter {
            filter: grayscale(100%);
        }

        .nav-link:hover {
            transform: scale(1.05);
        }

        .class-white {
            height: 50px;
            margin-bottom: 50px;
            background-color: rgba(255, 255, 255, 0);
            border-radius: 5px;
            backdrop-filter: blur(10px);
            box-shadow: 2px rgba(11, 11, 11, 0.3);
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dataTables_length {
            color: #fff;
            font-weight: bold;
        }

        .dataTables_filter label {
            color: #fff;
            margin-right: 10px;
        }

        .dataTables_info {
            color: #fff;
            font-weight: bold;
        }

        .paginate_button {
            background-color: #fff;
        }

        @media only screen and (max-width: 992px) {
            .nav-item {
                border-right: none !important;
            }

            .nav-item.first {
                border-left: none !important;
            }
        }

        .neon-button {
            color: var(--clr-neon);
            display: inline-block;
            cursor: pointer;
            text-decoration: none;
            border: var(--clr-neon) .125em solid;
            padding: .25em 1em;
            border-radius: 0.25em;
            text-shadow:
                0 0 0.125em hsl(0 0% 100% / 0.3),
                0 0 0.45em currentColor;
            box-shadow:
                inset 0 0 0.5em 0 var(--clr-neon),
                0 0 0.5em 0 var(--clr-neon);
            position: relative;
        }

        .neon-button::before {
            pointer-events: none;
            content: '';
            position: absolute;
            background: var(--clr-neon);
            top: 120%;
            left: 0;
            width: 100%;
            height: 100%;

            transform: perspective(1em) rotateX(40deg) scale(1, 0.35);
            filter: blur(1em);
            opacity: 0.7;
        }

        .neon-button:hover,
        .neon-button:focus {
            color: var(--clr-bg);
            text-shadow: none;
        }

        .neon-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            box-shadow: 0 0 2em 0.5em var(--clr-neon);
            background-color: var(--clr-neon);
            z-index: -1;
            opacity: 0;
            transition: opacity 100ms linear;
        }

        .neon-button:hover::before,
        .neon-button:focus::before {
            opacity: 1;
        }

        .neon-button:hover::after,
        .neon-button:focus::after {
            opacity: 1;
        }

        .btn-neon {
            color: #ffffff;
            background-color: var(--clr-neon);
        }

        .btn-neon:hover {
            color: #ffffff;
            background-color: var(--clr-neon);
        }

        :root {
            --clr-neon: <?php echo $webconfig['sec_color']; ?>;
            --clr-bg: #0C0F0A;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        #support {
            position: fixed;
            bottom: 50px;
            right: 20px;
            background: none;
            width: 80px;
            height: 80px;
            border: none;
            z-index: 1;
        }

        .snowflake {
            position: fixed;
            width: 20px;
            height: 20px;
            background: linear-gradient(white, white);
            border-radius: 50%;
            filter: drop-shadow(0 0 10px white);
            z-index: 55;
        }

        @keyframes rotate360 {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100vh;
            z-index: 50;
            backdrop-filter: blur(5px);
        }

        #logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }

        #loader-logo {
            width: 250px;
            height: 250px;
            background: url(assets/contact.png) no-repeat center center;
            animation: rotate360 2s infinite;
        }
    </style>
</head>

<body>
    <!--- <div id="loader">
        <div id="logo-container">
            <div id="loader-logo"></div>
        </div>
    </div> --->
    <div id="snow" count="20"></div>
    <div id="support" class="text-center support">
        <a href="<?php echo $contact['facebook'] ?>" target="_blank">
            <img class="img-fluid animate__animated animate__pulse animate__infinite" src="/assets/contact.png">
            <p class="animate__animated animate__pulse animate__infinite mt-1" style="color: #fff;">แจ้งปัญหา</p>
        </a>
    </div>
    <?php
    require 'vendor/autoload.php';
    $router = new AltoRouter();
    include 'layouts/navbar.php';
    $resultuser = $thxk->resultuser();
    if (empty($_SESSION['id'])) {
        $router->map('GET', '/', function () {
            include 'pages/auth/home.php';
            include 'pages/footer.php';
        });
        $router->map('GET', '/home', function () {
            include 'pages/auth/home.php';
            include 'pages/footer.php';
        });
        $router->map('GET', '/product', function () {
            include 'pages/product.php';
        });
        $router->map('GET', '/shoping', function () {
            include 'pages/products.php';
        });
        $router->map('GET', '/service', function () {
            include 'pages/service.php';
        });
        $router->map('GET', '/buy', function () {
            include 'pages/service_buy.php';
        });
        $router->map('GET', '/app', function () {
            include 'pages/app.php';
            include 'pages/footer.php';
        });
        $router->map('GET', '/login', function () {
            include 'pages/auth/login.php';
        });
        $router->map('GET', '/register', function () {
            include 'pages/auth/register.php';
        });
    } else {
        $router->map('GET', '/', function () {
            include 'pages/auth/home.php';
            include 'pages/footer.php';
        });
        $router->map('GET', '/home', function () {
            include 'pages/auth/home.php';
            include 'pages/footer.php';
        });
        $router->map('GET', '/product', function () {
            include 'pages/product.php';
        });
        $router->map('GET', '/shoping', function () {
            include 'pages/products.php';
        });
        $router->map('GET', '/service', function () {
            include 'pages/service.php';
        });
        $router->map('GET', '/buy', function () {
            include 'pages/service_buy.php';
        });
        $router->map('GET', '/app', function () {
            include 'pages/app.php';
            include 'pages/footer.php';
        });

        # เติมเกม
        $router->map('GET', '/topupgame', function () {
            include 'pages/topupgame/topupgamecate.php';
            include 'pages/footer.php';
        });
        # freefire
        $router->map('GET', '/topupgame/freefire', function () {
            include 'pages/topupgame/freefire.php';
            include 'pages/footer.php';
        });
        # rov
        $router->map('GET', '/topupgame/honkai', function () {
            include 'pages/topupgame/honkai.php';
            include 'pages/footer.php';
        });
        # fcmobile
        $router->map('GET', '/topupgame/fcmobile', function () {
            include 'pages/topupgame/fcmobile.php';
            include 'pages/footer.php';
        });
        # valorant
        $router->map('GET', '/topupgame/valorant', function () {
            include 'pages/topupgame/valorant.php';
            include 'pages/footer.php';
        });
        # pubgmobile-global
        $router->map('GET', '/topupgame/pubgmobile-global', function () {
            include 'pages/topupgame/pubgmobileglobal.php';
            include 'pages/footer.php';
        });
        # genshinimpact
        $router->map('GET', '/topupgame/genshinimpact', function () {
            include 'pages/topupgame/genshinimpact.php';
            include 'pages/footer.php';
        });
        # arenabreakout
        $router->map('GET', '/topupgame/arenabreakout', function () {
            include 'pages/topupgame/arenabreakout.php';
            include 'pages/footer.php';
        });
        # aceracer
        $router->map('GET', '/topupgame/aceracer', function () {
            include 'pages/topupgame/aceracer.php';
            include 'pages/footer.php';
        });
        # x-hero
        $router->map('GET', '/topupgame/x-hero', function () {
            include 'pages/topupgame/x-hero.php';
            include 'pages/footer.php';
        });
        # zepeto
        $router->map('GET', '/topupgame/zepeto', function () {
            include 'pages/topupgame/zepeto.php';
            include 'pages/footer.php';
        });
        # lolriot
        $router->map('GET', '/topupgame/lolriot', function () {
            include 'pages/topupgame/lolriot.php';
            include 'pages/footer.php';
        });
        # ragnarok
        $router->map('GET', '/topupgame/ragnarok', function () {
            include 'pages/topupgame/ragnarok.php';
            include 'pages/footer.php';
        });
        # sausageman
        $router->map('GET', '/topupgame/sausageman', function () {
            include 'pages/topupgame/sausageman.php';
            include 'pages/footer.php';
        });
        # dragonraja
        $router->map('GET', '/topupgame/dragonraja', function () {
            include 'pages/topupgame/dragonraja.php';
            include 'pages/footer.php';
        });
        # muorigin3
        $router->map('GET', '/topupgame/muorigin3', function () {
            include 'pages/topupgame/muorigin3.php';
            include 'pages/footer.php';
        });
        # identityv
        $router->map('GET', '/topupgame/identityv', function () {
            include 'pages/topupgame/identityv.php';
            include 'pages/footer.php';
        });

        # ปั้มไลค์
        $router->map('GET', '/socialbooster', function () {
            include 'pages/socialbooster/socialbooster.php';
            include 'pages/footer.php';
        });

        $router->map('GET', '/topup', function () {
            include 'pages/topup.php';
        });
        $router->map('GET', '/topup/wallet', function () {
            include 'pages/topup/truewallet.php';
        });
        $router->map('GET', '/topup/bank', function () {
            include 'pages/topup/verifyslip.php';
        });
        $router->map('GET', '/otp', function () {
            include 'pages/otp.php';
        });
        $router->map('GET', '/historybuy', function () {
            include 'pages/history_buy.php';
        });
        $router->map('GET', '/historyapp', function () {
            include 'pages/history_app.php';
        });
        $router->map('GET', '/historysocial', function () {
            include 'pages/history_social.php';
        });
        $router->map('GET', '/historytopupgame', function () {
            include 'pages/history_topupgame.php';
        });
        $router->map('GET', '/historyservice', function () {
            include 'pages/history_service.php';
        });
        $router->map('GET', '/profile', function () {
            include 'pages/profile.php';
        });
        if ($resultuser['rank'] == "1") {
            $router->map('GET', '/admin/backend', function () {
                include 'layouts/admin.php';
            });
            $router->map('GET', '/admin/webconfig', function () {
                include 'pages/admin/webconfig.php';
            });
            $router->map('GET', '/admin/slide', function () {
                include 'pages/admin/slide.php';
            });
            $router->map('GET', '/admin/manage_users', function () {
                include 'pages/admin/manage_users.php';
            });
            $router->map('GET', '/admin/byshopme', function () {
                include 'pages/admin/byshopme.php';
            });
            $router->map('GET', '/admin/productbyshopme', function () {
                include 'pages/admin/edit_products.php';
            });
            $router->map('GET', '/admin/topup_config', function () {
                include 'pages/admin/topup_config.php';
            });
            $router->map('GET', '/admin/history_buy', function () {
                include 'pages/admin/history_buy.php';
            });
            $router->map('GET', '/admin/history_app', function () {
                include 'pages/admin/history_app.php';
            });
            $router->map('GET', '/admin/history_topup', function () {
                include 'pages/admin/history_topup.php';
            });
            $router->map('GET', '/admin/history_social', function () {
                include 'pages/admin/history_social.php';
            });
            $router->map('GET', '/admin/history_topupgame', function () {
                include 'pages/admin/history_topupgame.php';
            });
            $router->map('GET', '/admin/setting_notify', function () {
                include 'pages/admin/notify.php';
            });
            $router->map('GET', '/admin/product_stock', function () {
                include 'pages/admin/product_stock.php';
            });
            $router->map('GET', '/admin/product_stock/add_stock', function () {
                include 'pages/admin/add_stock_id.php';
            });
            $router->map('GET', '/admin/product_category', function () {
                include 'pages/admin/product_category.php';
            });
            $router->map('GET', '/admin/contact_config', function () {
                include 'pages/admin/contact_config.php';
            });
            $router->map('GET', '/admin/connectgameorsocial', function () {
                include 'pages/admin/topupgame/connectgame.php';
            });
            $router->map('GET', '/admin/socialmanager', function () {
                include 'pages/admin/socialbooster/socialmanager.php';
            });
            $router->map('GET', '/admin/topupgamemanager', function () {
                include 'pages/admin/topupgame/topupgamemanager.php';
            });
            $router->map('GET', '/admin/manager/freefire', function () {
                include 'pages/admin/topupgame/freefire.php';
            });
            $router->map('GET', '/admin/manager/honkai', function () {
                include 'pages/admin/topupgame/honkai.php';
            });
            $router->map('GET', '/admin/manager/fcmobile', function () {
                include 'pages/admin/topupgame/fcmobile.php';
            });
            $router->map('GET', '/admin/manager/valorant', function () {
                include 'pages/admin/topupgame/valorant.php';
            });
            $router->map('GET', '/admin/manager/pubgmobile-global', function () {
                include 'pages/admin/topupgame/pubgmobileglobal.php';
            });
            $router->map('GET', '/admin/manager/genshinimpact', function () {
                include 'pages/admin/topupgame/genshinimpact.php';
            });
            $router->map('GET', '/admin/manager/arenabreakout', function () {
                include 'pages/admin/topupgame/arenabreakout.php';
            });
            $router->map('GET', '/admin/manager/aceracer', function () {
                include 'pages/admin/topupgame/aceracer.php';
            });
            $router->map('GET', '/admin/manager/x-hero', function () {
                include 'pages/admin/topupgame/x-hero.php';
            });
            $router->map('GET', '/admin/manager/zepeto', function () {
                include 'pages/admin/topupgame/zepeto.php';
            });
            $router->map('GET', '/admin/manager/lolriot', function () {
                include 'pages/admin/topupgame/lolriot.php';
            });
            $router->map('GET', '/admin/manager/ragnarok', function () {
                include 'pages/admin/topupgame/ragnarok.php';
            });
            $router->map('GET', '/admin/manager/sausageman', function () {
                include 'pages/admin/topupgame/sausageman.php';
            });
            $router->map('GET', '/admin/manager/dragonraja', function () {
                include 'pages/admin/topupgame/dragonraja.php';
            });
            $router->map('GET', '/admin/manager/muorigin3', function () {
                include 'pages/admin/topupgame/muorigin3.php';
            });
            $router->map('GET', '/admin/manager/identityv', function () {
                include 'pages/admin/topupgame/identityv.php';
            });
            $router->map('GET', '/admin/service_manager', function () {
                include 'pages/admin/service_manage.php';
            });
            $router->map('GET', '/admin/service_manage_cate', function () {
                include 'pages/admin/service_manage_cate.php';
            });
            $router->map('GET', '/admin/service_manage_main', function () {
                include 'pages/admin/service_manage_main.php';
            });
            $router->map('GET', '/admin/service_order', function () {
                include 'pages/admin/service_order.php';
            });
            $router->map('GET', '/admin/order_success', function () {
                include 'pages/admin/order_success.php';
            });
            $router->map('GET', '/admin/order_unsuccess', function () {
                include 'pages/admin/order_unsuccess.php';
            });
            $router->map('GET', '/admin/order_temp', function () {
                include 'pages/admin/order_temp.php';
            });
        }
    }
    $match = $router->match();
    if (is_array($match) && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        echo "<script>window.location.href = '/';</script>";
    }
    ?>
    <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey && (e.keyCode === 85 || e.keyCode === 88)) || e.keyCode === 123) {
                e.preventDefault();
            }
        });
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        let snowflakesCount = 50;
        let baseCss = ``;


        if (typeof SNOWFLAKES_COUNT !== 'undefined') {
            snowflakesCount = SNOWFLAKES_COUNT;
        }
        if (typeof BASE_CSS !== 'undefined') {
            baseCss = BASE_CSS;
        }

        let bodyHeightPx = null;
        let pageHeightVh = null;

        function setHeightVariables() {
            bodyHeightPx = document.body.offsetHeight;
            pageHeightVh = (100 * bodyHeightPx / window.innerHeight);
        }

        function getSnowAttributes() {
            const snowWrapper = document.getElementById('snow');
            if (snowWrapper) {
                snowflakesCount = Number(
                    snowWrapper.attributes?.count?.value || snowflakesCount
                );
            }
        }

        function showSnow(value) {
            if (value) {
                document.getElementById('snow').style.display = "block";
            } else {
                document.getElementById('snow').style.display = "none";
            }
        }

        function spawnSnow(snowDensity = 200) {
            snowDensity -= 1;

            for (let i = 0; i < snowDensity; i++) {
                let board = document.createElement('div');
                board.className = "snowflake";

                document.getElementById('snow').appendChild(board);
            }
        }

        function addCss(rule) {
            let css = document.createElement('style');
            css.appendChild(document.createTextNode(rule)); // Support for the rest
            document.getElementsByTagName("head")[0].appendChild(css);
        }

        function randomInt(value = 100) {
            return Math.floor(Math.random() * value) + 1;
        }

        function randomIntRange(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        function getRandomArbitrary(min, max) {
            return Math.random() * (max - min) + min;
        }

        function spawnSnowCSS(snowDensity = 200) {
            let snowflakeName = "snowflake";
            let rule = baseCss;

            for (let i = 1; i < snowDensity; i++) {
                let randomX = Math.random() * 100; // vw
                let randomOffset = Math.random() * 10 // vw;
                let randomXEnd = randomX + randomOffset;
                let randomXEndYoyo = randomX + (randomOffset / 2);
                let randomYoyoTime = getRandomArbitrary(0.3, 0.8);
                let randomYoyoY = randomYoyoTime * pageHeightVh; // vh
                let randomScale = Math.random();
                let fallDuration = randomIntRange(10, pageHeightVh / 10 * 3); // s
                let fallDelay = randomInt(pageHeightVh / 10 * 3) * -1; // s
                let opacity = Math.random();

                rule += `
      .${snowflakeName}:nth-child(${i}) {
        opacity: ${opacity};
        transform: translate(${randomX}vw, -10px) scale(${randomScale});
        animation: fall-${i} ${fallDuration}s ${fallDelay}s linear infinite;
      }
      @keyframes fall-${i} {
        ${randomYoyoTime * 100}% {
          transform: translate(${randomXEnd}vw, ${randomYoyoY}vh) scale(${randomScale});
        }
        to {
          transform: translate(${randomXEndYoyo}vw, ${pageHeightVh}vh) scale(${randomScale});
        }
      }
    `
            }
            addCss(rule);
        }

        createSnow = function() {
            setHeightVariables();
            getSnowAttributes();
            spawnSnowCSS(snowflakesCount);
            spawnSnow(snowflakesCount);
        };


        // export createSnow function if using node or CommonJS environment
        if (typeof module !== 'undefined') {
            module.exports = {
                createSnow,
                showSnow,
            };
        } else {
            window.onload = createSnow;
        }
    </script>
    <script>
        var loader;

        function loadNow(opacity) {
            if (opacity <= 0) {
                displayContent();
            } else {
                loader.style.opacity = opacity;
                window.setTimeout(function() {
                    loadNow(opacity - 0.10);
                }, 50);
            }
        }

        function displayContent() {
            loader.style.display = 'none';
        }

        document.addEventListener("DOMContentLoaded", function() {
            loader = document.getElementById('loader');
            loadNow(1);

        });
    </script>
</body>

</html>