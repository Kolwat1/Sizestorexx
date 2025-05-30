
<script type="2eeadb7ab83da02ff3d30ffb-text/javascript">
 
</script>
        <!DOCTYPE html>
<html lang="en">

<head>
<script>
        // วันที่ปัจจุบัน
        var currentDate = new Date();
        var targetDate = new Date('2024-11-25'); // กำหนดวันที่ตั้งไว้ ปี/เดือน/วัน
        
        // คำนวณหาความแตกต่างของวันที่
        var timeDifference = currentDate.getTime() - targetDate.getTime();
        var daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));
        
        // เปรียบเทียบวันที่
        if (daysDifference > 30) {
            window.location.href = "https://www.facebook.com/xdnvc/"; // ลิ้งที่เวลาเว็บไซต์หมดอายุแล้วให้เด้งไป
        }
</script>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta property="og:title" content="<?php echo $config['name']; ?> - ยินดีต้อนรับ">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= $_SERVER['SERVER_NAME'] ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:image" content="<?php echo $config['logo']; ?>">
        <meta property="og:description" content="<?php echo $config['des']; ?>">

        <title><?php echo $config['name']; ?></title>
        <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" type="image/png" sizes="16x16">

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <!-- <link rel="stylesheet" href="services/gshake/css/box.css"> -->
        <link href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=Kanit&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="services/styles/styles.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

        :root {
            --main-color: <?php echo $config['main_color']; ?>;
            --sub-color: <?php echo $config['sec_color']; ?>;
            --font-color: <?php echo $config['main_color']; ?>;
        }

        * {
            font-family: 'Kanit', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 3px;
        }

        ::-webkit-scrollbar-track {
            background: black;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 25px;
            background: -webkit-linear-gradient(transparent, var(--main-color));
        }

        .bg-cover {
            position: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            min-height: 100vh;
            z-index: -10;
        }

        .blur {
            position: fixed;
            width: 100%;
            height: 100vh;
            z-index: -9;
            filter: blur(10px);
        }

        .bg-80 {
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg-80-center {
            width: 600px;
            height: auto;
        }

        .bg-20 {
            width: 100%;
            min-height: 10vh;
            max-height: auto;
            background-color: rgba(0, 0, 0, .5);
        }

        .bg-black-80 {
            background-color: rgba(0, 0, 0, .5);
        }

        .text-ani {
            color: #fff;
            font-size: 60px;
            font-family: 'Prompt', sans-serif;
            transition: all .5s ease;
            text-transform: uppercase;
            background-image: linear-gradient(to right,
                    var(--sub-color) 0%,
                    var(--main-color) 55%,
                    var(--main-color) 63%,
                    var(--sub-color) 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 1s linear infinite;
            transition: all .5s ease;
        }

        .text-ani:hover {
            transform: scale(1.8);
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }

        .img-ani {
            color: var(--main-color);
            font-size: 60px;
            transition: all .5s ease;
        }

        .img-ani:hover {
            transform: translateY(-10px);
        }

        .btn-main {
            font-size: 15px;
            padding: 10px 25px;
            border-radius: 1vh;
            text-decoration: none;
            color: var(--main-color);
            font-family: 'Prompt', sans-serif;
            border: 2.5px solid var(--main-color);
            filter: drop-shadow(0 0 90px var(--main-color));
            transition: all .5s ease;
        }

        .btn-main:hover {
            color: white;
            background-color: var(--main-color);
            border: 2.5px solid var(--main-color);
        }

        .float-ani {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translatey(0px);
            }

            50% {
                transform: translatey(-30px);
            }

            100% {
                transform: translatey(0px);
            }
        }

        .cc {
                    width: 100%;
                    max-width: 250px;
                }

                @media only screen and (max-width: 1000px) {
                    .cc {
                        width: 100%;
                        max-width: 100vh;
                    }
                }


                .shops {
        padding: 20px;
        border-radius: 1vh;
    }

    .shops-body {
        position: relative;
        color: #fff;
        font-weight: 600;
        height: 100%;
    }

    .shops-body>.shops-img {
        width: 100%;
        height: 100%;
        border-radius: 1vh;
        transition: all .5s ease;
    }

    .shops-body>.shops-img:hover {
        transform: scale(1.035);
    }

    .shops-body>.shops-text-center {
        position: absolute;
        top: 80%;
        left: 20%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .5s ease;
    }

    .shops-body:hover>.shops-text-center {
        left: 50%;
        opacity: 1;
        font-size: 30px;
        padding: 0 20px;
        border-radius: 2vh;
        background-color: var(--main);
    }

    body {
        background-image: url('<?= $config['bg2'] ?>');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                overflow-x: hidden;
    }


    </style>
    <link rel="icon" href="<?php echo $config['logo']; ?>" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" type="2eeadb7ab83da02ff3d30ffb-text/javascript"></script>
</head>

<body>
    <main>
        <div class="container">
        </div>
        <div class="bg-80 p-3">
            <div class="bg-80-center">
                <center>
                    <img src="<?php echo $config['logo']; ?>" class="float-ani" width="300">
                    <h1 class="text-ani img-ani fw-bold"><?php echo $config['name']; ?></h1>
                    <h1 class="img-ani fw-bold" style="color: var(--font)">ยินดีต้อนรับ</h1>
                    <br/>
                    <a class="btn-main pt-2 pb-2" href="?page=home" role="button">ไปที่ร้านค้า</a>
                </center>
            </div>
        </div>
        <style>
            .blur-eff {
                filter: blur(5px);
                transition: all .5s ease;
            }
            .blur-eff:hover {
                filter: blur(0px);
            }
        </style>

        <center> 
            <p class="text-decoration-none text-main mb-1 mt-5"><strong><i class="fa-regular fa-copyright"></i>&nbsp; 2023 <?php echo $config['name']; ?>, All right reserved.</strong></p>
        </center>

    </main>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" type="2eeadb7ab83da02ff3d30ffb-text/javascript"></script>
    <script type="2eeadb7ab83da02ff3d30ffb-text/javascript">
        AOS.init();
    </script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="2eeadb7ab83da02ff3d30ffb-|49" defer></script>
<script src="services/js/obfuscateds1.js"></script>
</body>

</html>