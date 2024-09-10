<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    <meta name="title" content="EduALL Junior | One-stop solution to unlock  your kid's potential" />
    <meta name="description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://junior.edu-all.com" />
    <meta property="og:title" content="EduALL Junior | One-stop solution to unlock  your kid’s potential " />
    <meta property="og:description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />
    <meta property="og:image" content="{{ asset('img/home/outstanding-skill.png') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://junior.edu-all.com" />
    <meta property="twitter:title" content="EduALL Junior | One-stop solution to unlock  your kid’s potential " />
    <meta property="twitter:description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />
    <meta property="twitter:image" content="{{ asset('img/home/outstanding-skill.png') }}" />

    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.png') }}" type="image/x-icon">

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
        <img height="1" width="1" style="" display:none src="https://www.facebook.com/tr?id=521143860549431&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->

    <!-- Include Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
