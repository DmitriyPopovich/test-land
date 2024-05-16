<?php
session_start();
$pixel = (isset($_GET["pixel"])) ? $_GET["pixel"] : 'Unknown';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/png" href="checked.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css.css" />

    <!-- Facebook Pixel Code -->
    <script type="application/javascript">
        !(function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod
                    ? n.callMethod.apply(n, arguments)
                    : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(
            window,
            document,
            "script",
            "https://connect.facebook.net/en_US/fbevents.js"
        );
        fbq("init", "<?php echo $pixel ?>");
        fbq("track", "Lead");
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $pixel; ?>&ev=Lead&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->


</head>

<body>
    <div class="main-wrapper">
        <header class="header">
        </header>
        <main class="main">
            <div class="container">
                <div class="main-content">
                    <img src="checked.png" class="completed-img-desk" alt="completed">
                    <img src="like.png" class="completed-img-mob" alt="completed">
                    <h1 class="main-heading">
                        <span class="main-heading-1st"></span> <br>
                        <span class="main-heading-2nd"></span>
                    </h1>
                    <p class="thnx-text">
                        <span class="thnx-text-1st"></span>
                        <br><br>
                        <span class="thnx-text-2nd"></span>
                    </p>
                    <div class="counter-wrapper">
                        <div class="numbers-wrapper">
                            <div class="numbers-block-outer">
                                <div class="numbers-block-inner">
                                    <span class="current-number hours">23</span>
                                </div>
                            </div>
                            <span class="time-measure hours-span"></span>
                        </div>
                        <div class="numbers-wrapper">
                            <div class="numbers-block-outer">
                                <div class="numbers-block-inner">
                                    <span class="current-number minutes">59</span>
                                </div>
                            </div>
                            <span class="time-measure minutes-span"></span>
                        </div>
                        <div class="numbers-wrapper">
                            <div class="numbers-block-outer">
                                <div class="numbers-block-inner">
                                    <span class="current-number seconds">59</span>
                                </div>
                            </div>
                            <span class="time-measure seconds-span"></span>
                        </div>
                    </div>
                </div>
            </div>
            <img src="main-bg-desk.jpg" class="main-bg-img-desk" alt="main background">
            <img src="main-bg-mob.jpg" class="main-bg-img-mob" alt="main background">
        </main>
    </div>

    <script>
        /* COUNTER */

        var localStorage = window.localStorage,
            startDate;

        if (localStorage.getItem('startDate')) {
            startDate = localStorage.getItem('startDate')
        } else {
            startDate = new Date();
            localStorage.setItem('startDate', startDate)
        }
        setTimer(startDate);

        function setTimer(startDate) {
            var deadline = new Date(Date.parse(startDate) + 01 * 24 * 60 * 60 * 1000);
            initializeClock('countdown', deadline);
        }

        // Countdown
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            return {
                'total': t,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(id, endtime) {
            var clock = document.querySelector('.counter-wrapper');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    startDate = new Date()
                    localStorage.setItem('startDate', startDate)
                    var deadline = new Date(Date.parse(startDate) + 24 * 60 * 60 * 1000);
                    initializeClock('countdown', deadline);
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }
    </script>
    <script>
        /* LANGUAGE */

        let mainHeading1st = document.querySelector('.main-heading-1st'),
            mainHeading2nd = document.querySelector('.main-heading-2nd'),
            thnxText1st = document.querySelector('.thnx-text-1st'),
            thnxText2nd = document.querySelector('.thnx-text-2nd'),
            hoursSpan = document.querySelector('.hours-span'),
            minutesSpan = document.querySelector('.minutes-span'),
            secondsSpan = document.querySelector('.seconds-span');

         if (document.documentElement.lang === "es") {
            document.title = '¡Felicidades!';
            mainHeading1st.innerHTML = '¡Gracias!';
            mainHeading2nd.innerHTML = 'Su solicitud es aceptada';
            thnxText1st.innerHTML = 'Para obtener acceso completo para trabajar con la plataforma, debe esperar una llamada de su asesor personal.';
            thnxText2nd.innerHTML = 'Su asesor personal se comunicará con usted en un plazo de 24 horas.';
            hoursSpan.innerHTML = 'horas';
            minutesSpan.innerHTML = 'minutos';
            secondsSpan.innerHTML = 'segundos';
        } else if (document.documentElement.lang === "pl") {
            document.title = 'Gratulacje!';
            mainHeading1st.innerHTML = 'Dziękuję Ci!';
            mainHeading2nd.innerHTML = 'Twoja aplikacja została zaakceptowana';
            thnxText1st.innerHTML = 'Aby uzyskać pełny dostęp do pracy z platformą, musisz poczekać na telefon od osobistego konsultanta.';
            thnxText2nd.innerHTML = 'Twój osobisty konsultant skontaktuje się z Tobą w ciągu 24 godzin.';
            hoursSpan.innerHTML = 'godziny';
            minutesSpan.innerHTML = 'minuty';
            secondsSpan.innerHTML = 'sekundy';
        }  else {
            document.title = 'Congratulations!';
            mainHeading1st.innerHTML = 'Thank you!';
            mainHeading2nd.innerHTML = 'Your application is accepted';
            thnxText1st.innerHTML = 'To get full access to working with the platform, you need to wait for a call from your personal consultant.';
            thnxText2nd.innerHTML = 'Your personal consultant will contact you within 24 hours.';
            hoursSpan.innerHTML = 'hours';
            minutesSpan.innerHTML = 'minutes';
            secondsSpan.innerHTML = 'seconds';
        }
    </script>
</body>

</html>