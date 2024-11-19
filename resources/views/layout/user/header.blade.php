<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://junior.edu-all.com" />
    <meta property="og:title" content="EduALL Junior | One-stop solution to unlock  your kid’s potential " />
    <meta property="og:description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />
    <meta property="og:image" content="{{ asset('img/home/outstanding-skill.webp') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://junior.edu-all.com" />
    <meta property="twitter:title" content="EduALL Junior | One-stop solution to unlock  your kid’s potential " />
    <meta property="twitter:description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />
    <meta property="twitter:image" content="{{ asset('img/home/outstanding-skill.webp') }}" />

    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.webp') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '521143860549431');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="" display:none
            src="https://www.facebook.com/tr?id=521143860549431&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NH5HJXVH');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NH5HJXVH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Include Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
