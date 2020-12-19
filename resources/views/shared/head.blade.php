<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name="google-site-verification" content="W9YVvRZ_hdawoheOd3Qxl38Alh4WeTrdhV5I8q-tygA"/>

    <title>@yield('title')</title>
    <!-- SEO Meta Tags -->
    <meta name="title" content="@yield('title')"/>
    <meta name="description" content="@yield('seo_description')">
    <meta name="author" content="Zaitra">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('seo_description')">
    <meta itemprop="image" content="https://zaitra.io/img/zaitra-logo.jpg">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Ström"/> <!-- website name -->
    <meta property="og:site" content="{{ url()->current() }}"/> <!-- website link -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="@yield('seo_description')"><!-- description shown in the actual shared post -->
    <meta property="og:image" content="https://zaitra.io/img/zaitra-logo.jpg"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="795"/>

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('seo_description')">
    <meta name="twitter:image" content="https://zaitra.io/img/zaitra-logo.jpg">

    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- Compiled CSS   --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
{{--    <link href="font-awesome/css/all.min.css" rel="stylesheet" type="text/css">--}}

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151766726-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-151766726-1', {
            'page_title': '@yield("title")',
            'page_location': '{{ url()->current() }}',
            'page_path': '{{ Route::current()->uri == '/' ? '/' : '/' . Route::current()->uri }}'
        });

        function onSubmit(token) {
            console.log(token);
            document.getElementById("contactForm").submit();
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "legalName": "Zaitra s.r.o",
            "url": "https://zaitra.io/",
            "logo": "https://zaitra.io/img/zaitra-logo.jpg",
            "telephone": "+421 944 244 120",
            "email": "info@zaitra.io",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Technická 23",
                "addressLocality": "Brno",
                "addressCountry": "Czech Republic"
            }
        }
    </script>
</head>
