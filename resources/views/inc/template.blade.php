<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSC - JKUAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DSC JKUAT" />
    <meta name="description" content="Developer Student Clubs (DSC) is a Google Developers program for university students to learn mobile and web development skills.">
    <meta name="keywords" content="dsc, JKUAT,google developers, sub saharan africa, kenya, computer science" />
    <meta name="theme-color" content="#0A192F" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/dsc-logo.png" type="image/png" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="dns-prefetch" href="https://docs.google.com">
    <link href='https://fonts.googleapis.com/css?family=Google+Sans:400,500,700|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="css/animate.css" rel="stylesheet">
   <!--  preloader -->
    <link rel="stylesheet" type="text/css" href="css/pace-theme.css">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-124904500-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

</head>

<body class="x-hidden has-sticky-header">
    @yield('content')

    <a href="#" id="scroll" style="display: none;"><i class="fas fa-angle-up"></i></a>
    <script>
        function imageIntersectionObserverCallback(imageEntries, observer) {
            imageEntries.forEach(imgEntry => {
                if (imgEntry.isIntersecting) {
                    imgEntry.target.setAttribute('src', imgEntry.target.dataset.src);
                    observer.unobserve(imgEntry.target);
                }
            })
        }

        const imageObserver = new IntersectionObserver(imageIntersectionObserverCallback, { rootMargin: '30px 0px' });
        imageObserver.POLL_INTERVAL = 200;
        imageObserver.USE_MUTATION_OBSERVER = false;
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        })
    </script>
    <script>
        function iframeObserverCallback(iframeEntries, observer) {
            iframeEntries.forEach(iframe => {
                if (iframe.isIntersecting && window.matchMedia('(min-width: 450px)').matches) {
                    iframe.target.setAttribute('src', iframe.target.dataset.urllink);
                    observer.unobserve(iframe.target);
                }
            })
        }

        const iframeObserver = new IntersectionObserver(iframeObserverCallback, { rootMargin: '30px 0px' });
        iframeObserver.POLL_INTERVAL = 200;
        iframeObserver.USE_MUTATION_OBSERVER = false;
        document.querySelectorAll('iframe[data-urllink]').forEach(img => {
            iframeObserver.observe(img);
        });
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('service-worker.js')
                    .then(function () {
                        console.log("Service Worker Registered,");
                    });
                    }
                    );
            }
    </script>
    <script src="js/vendors/pace.js"></script>
    <script src="js/vendors/jquery.min.js"></script>
    <script src="js/vendors/bootstrap.bundle.min.js"></script>
    <script src="js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="js/vendors/jquery.easing.min.js"></script>
    <script src="js/vendors/swiper.min.js"></script>
    <script src="js/vendors/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>