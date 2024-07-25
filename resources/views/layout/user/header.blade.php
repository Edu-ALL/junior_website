<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    <meta name="title" content="EduALL Junior | One-stop solution to unlock  your kid’s potential " />
    <meta name="description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://junior.edu-all.com" />
    <meta property="og:title" content="EduALL Junior | One-stop solution to unlock  your kid’s potential " />
    <meta property="og:description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />
    <meta property="og:image" content="{{asset('img/home/outstanding-skill.png')}}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://junior.edu-all.com" />
    <meta property="twitter:title" content="EduALL Junior | One-stop solution to unlock  your kid’s potential " />
    <meta property="twitter:description"
        content="At EduALL Junior, we empower kids aged 5-12 to become future change-makers and leaders through our programs focused on developing an entrepreneurial mindset. Our courses are crafted to ignite curiosity, nurture creativity, and cultivate essential skills—all while ensuring a fun learning experience." />
    <meta property="twitter:image" content="{{asset('img/home/outstanding-skill.png')}}" />

    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.png') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <!-- Include Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
