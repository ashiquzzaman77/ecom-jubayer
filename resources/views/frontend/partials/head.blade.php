{{-- <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
    {{ optional($setting)->site_name ?? 'NGenIT Training' }}
</title>
<meta name="description" content="{{ optional($setting)->site_slogan }}" />
<meta name="keywords"
    content="ngenit, training, course, web development, project, course curriculum, professional training, corporate training, web design, graphics design, IOT, machine learning" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ optional($setting)->site_name }}" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="{{ optional($setting)->site_name }}" />

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon"
    href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
    type="image/x-icon" />
<!-- Bootstrap CSS v5.2.1 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css" />
<link rel="stylesheet" href="{{ asset('frontend/assets/Css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/Css/main-style.css') }}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/use-bootstrap-select@2.2.0/dist/use-bootstrap-select.min.css"> --}}

<title>Bisum - eCommerce</title>
<!-- meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="meta description">
<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet">
<!-- all css -->

<style>
    .product-card {
        border: 1px solid #d2d3d6;
        border-radius: 5px;
        padding: 10px;

    }

    .product-card:hover {
        border-color: #FF5733;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
    }

    :root {
        --primary-color: #F76B6A;
        --secondary-color: #F76B6A;

        --btn-primary-border-radius: 0.25rem;
        --btn-primary-color: #fff;
        --btn-primary-background-color: #F76B6A;
        --btn-primary-border-color: #F76B6A;
        --btn-primary-hover-color: #fff;
        --btn-primary-background-hover-color: #F76B6A;
        --btn-primary-border-hover-color: #F76B6A;
        --btn-primary-font-weight: 500;

        --btn-secondary-border-radius: 0.25rem;
        --btn-secondary-color: #00234D;
        --btn-secondary-background-color: transparent;
        --btn-secondary-border-color: #00234D;
        --btn-secondary-hover-color: #fff;
        --btn-secondary-background-hover-color: #F76B6A;
        --btn-secondary-border-hover-color: #F76B6A;
        --btn-secondary-font-weight: 500;

        --heading-color: #000;
        --heading-font-family: 'Poppins', sans-serif;
        --heading-font-weight: 700;

        --title-color: #000;
        --title-font-family: 'Poppins', sans-serif;
        --title-font-weight: 400;

        --body-color: #000;
        --body-background-color: #fff;
        --body-font-family: 'Poppins', sans-serif;
        --body-font-size: 14px;
        --body-font-weight: 400;

        --section-heading-color: #000;
        --section-heading-font-family: 'Poppins', sans-serif;
        --section-heading-font-size: 48px;
        --section-heading-font-weight: 600;

        --section-subheading-color: #000;
        --section-subheading-font-family: 'Poppins', sans-serif;
        --section-subheading-font-size: 16px;
        --section-subheading-font-weight: 400;
    }
</style>

<link rel="stylesheet" href="{{ asset('frontend/css/vendor.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
