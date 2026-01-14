<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/nice-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/style2.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets_landing/css/responsive.css') }}">

<link rel="icon" type="image/png" href="{{ asset('assets/assets_landing/img/favicon.png') }}">

    <title>{{  config('app.name') }} - {{  config('app.name') }} specializes in the recovery of assets.</title>
    <!-- Livewire Styles -->


<!--End of Tawk.to Script-->
<style >
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>
    <!-- Livewire Scripts -->

<script src="livewire/livewirec574.js?id=83b555bb3e243bc25f35" data-turbo-eval="false" data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
    if (window.livewire) {
	    console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
	}

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = '';

	/* Make sure Livewire loads first. */
	if (window.Alpine) {
	    /* Defer showing the warning so it doesn't get buried under downstream errors. */
	    document.addEventListener("DOMContentLoaded", function () {
	        setTimeout(function() {
	            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
	        })
	    });
	}

	/* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    let started = false;

    window.addEventListener('alpine:initializing', function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });
</script>


<body>



<!--  -->
    <header class="header-area p-relative">


        <div class="navbar-area navbar-area-two">
            <div class="mobile-nav">
                <div class="container">
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/assets_landing/img/logo_dark.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('assets/assets_landing/img/logo_dark.png') }}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav m-auto">
                               <li class="nav-item">
                                    <a href="/" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/#about_us" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/#faq" class="nav-link">Faq</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/#testimonials" class="nav-link">Testimonies</a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a href="blacklists.html" class="nav-link">Blacklists</a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="/#case" class="nav-link">File a Case</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/#contact" class="nav-link">Contact Us</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>


<br/>
<br/>



<img src="{{ asset('assets/assets_landing/img/banner1.jpg') }}" alt="Imagewidth="100%">

    <section class="banner-area bg-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content">
                        <span class="top-title">Your Broker fleeced you? </span>
                        <h1>There is a solution</h1>
                        <p>If you have lost your money to online trading, binary options, forex or crypto currency-related companies, and you have proof of deposit</p>
                        <div class="banner-btn">
                            <a href="/#case" class="default-btn">
                                <span>Get Money Back With Us!</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="banner-image">
                        <img src="{{ asset('assets/assets_landing/img/banner/banner-bg-2.jpg') }}   " alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-area feature-area-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature overly-one">
                        <div class="overly-two">
                            <div class="title">
                                <i class="flaticon-testing"></i>
                                <h3>How to Spot a Scam</h3>
                            </div>
                            <p>Someone you don't know contacts you unexpectedly.<br/>
                            It seems too good to be true..</p>
                            <div class="feature-shape">
                                <img src="{{ asset('assets/assets_landing/img/feature-shape.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-feature overly-one">
                        <div class="overly-two">
                            <div class="title">
                                <i class="flaticon-cyber-security"></i>
                                <h3>How We Can Help</h3>
                            </div>
                            <p>Our experts thoroughly review all your documentation (a process that can take up to two weeks). We then prepare a detailed, written request for you to and present it to the platform.</p>
                            <div class="feature-shape">
                                <img src="{{ asset('assets/assets_landing/img/feature-shape.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-area pb-70" id="about_us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/assets_landing/img/approach-img.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="about-title">
                            <span>About Us</span>
                            <h3>{{  config('app.name') }} specializes in the recovery of assets that were lost as a result of online financial fraud.</h3>
                        </div>

                            <p>Online trading has become increasingly popular in the past several years, with millions of individuals worldwide choosing to invest their hard-earned money. </p>

                            <p>The boom in online trading is a direct result of digitization of the markets, which effectively opened the door to millions of inexperienced people across the globe, who suddenly find themselves with access to these financial tools that claim to offer them easy and simple ways to invest their money, while on the same note, also exposing them to fraudulent practices such as Binary Options, CFD, Forex and Cryptocurrency scams.</p>

                            <p>This world of online trading has effectively become a breeding ground for scammers and fraudsters who promise large monetary compensation and success, using the spread of misinformation and high pressure sales tactics to actively and knowingly steal from their unsuspecting victims, forcing them down a rabbit hole of shame and frustration.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="solution-area solution-area-three white-bg pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="solution-content">
                        <div class="solution-title">
                            <br><br>
                          <span>All-in Solution</span>
                            <h2> How does it work?.</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="single-solution overly-one">
                                    <div class="overly-two">
                                        <h3>File a Case</h3>
                                        <span>01</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="single-solution overly-one">
                                    <div class="overly-two">
                                        <h3>We Will Review Your Claim</h3>
                                        <span>02</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 offset-md-3 offset-lg-0">
                                <div class="single-solution overly-one">
                                    <div class="overly-two">
                                        <h3>Collect Evidence</h3>
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="single-solution overly-one">
                                    <div class="overly-two">
                                        <h3>Approach the Companies</h3>
                                        <span>04</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 offset-md-3 offset-lg-0">
                                <div class="single-solution overly-one">
                                    <div class="overly-two">
                                        <h3>Claim Your Money Back</h3>
                                        <span>05</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solution-img-two text-center">
                        <img src="{{ asset('assets/assets_landing/img/i2.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="solution-area ptb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="solution-content">
                        <div class="row">

                            <blockquote>
                            <p>“We have noticed the alarming trends online on scams and fraud related activities perpetrated through the internet.”</p>
                            <i class="bx bxs-quote-alt-left"></i>
                            </blockquote>

                            <p>We decided to be the vanguard of funds recovery and fight against all types of scams. Our main aim is finding innovative solutions, ideas and technologies, tactical dispute strategies to help fight against internet scams and effective recovery of lost funds.</p>

                            <p>We have decided to be the defendant to the common internet users, sharing our knowledge and expertise with all internet users who has lost to internet scam. Our main objective is helping every scam victims with fraud investigation and fund recovery solutions.</p>

                        </div>
                    </div>
                </div>
              <!--   <div class="col-lg-6 pr-0">
                    <div class="solution-img">
                        <img src="{{ asset('assets/assets_landing/img/solution-img.png') }}" alt="Image">
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="get-in-touch-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container text-center">
            <div class="section-title white-title">
                <span>Get In Touch</span>
                <h2>Contact Us Today To Speak With An Expert About Your Specific Needs</h2>
            </div>
          <a href="/#case" class="default-btn text-center">
            <span>File a Case</span>
            </a>
        </div>
    </section>

    <section class="protect-area pt-100 pb-70" id="offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="protect-content">
                        <div class="protect-title">
                            <span>Why Choose Us</span>
                            <h2>What Do We Offer?</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-challenges overly-one">
                                    <div class="overly-two">
                                        <i class="flaticon-database"></i>
                                        <h3>Negotiation Experience</h3>
                                        <p>Our experts have years of experience in negotiations with banks and other financial institutions as well as government bodies, which allows us to tackle even the hardest situations.</p>
                                        <span class="flaticon-database"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-challenges overly-one">
                                    <div class="overly-two">
                                        <i class="flaticon-application"></i>
                                        <h3>Fast Service</h3>
                                        <p>The more time passes by, the less is the chance to fight your money back. We know it and employ the fastest procedures according to a strict plan.</p>
                                        <span class="flaticon-application"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-challenges overly-one">
                                    <div class="overly-two">
                                        <i class="flaticon-security"></i>
                                        <h3>91% Success Rate</h3>
                                        <p>Our professional secrets allow us to always be one step ahead of other recovery companies — and scammers as well. Trust your case to the best professionals.</p>
                                        <span class="flaticon-security"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="protect-img">
                        <img src="{{ asset('assets/assets_landing/img/coming-soon-bg.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-area white-bg ptb-100" id="faq">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="{{ asset('assets/assets_landing/img/i1.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <div class="faq-title">
                            <h2>Frequently asked questions</h2>
                            <span>Just find your answers below</span>
                        </div>
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    How does {{  config('app.name') }} work?
                                </a>
                                <div class="accordion-content show">
                                    <p>When you <a href="/#case" class="text-danger">File a Case</a>, We will review your claim and collect evidence, approach the companies claim your money back.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                   How much does it cost to use {{  config('app.name') }}?
                                </a>
                                <div class="accordion-content">
                                    <p>We charge just 20% of the total money recovered ,we . Note: payment must be completed within 6 days.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                     How long does the recovery process take?
                                </a>
                                <div class="accordion-content">
                                    <p>The scam recovery process takes just a maximum of 2 weeks.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    How does {{  config('app.name') }} check their legal partners?
                                </a>
                                <div class="accordion-content">
                                    <p>We employ a set of standardized procedures that help us determine the qualification level of the lawyer we work with.</p>
                                </div>
                            </li>


                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                   How can I contact {{  config('app.name') }}?
                                </a>
                                <div class="accordion-content">
                                    <p>You can contact through our support live chat in the website,our WhatsApp support or our mail address support@aegisassetshield.com.</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-right-shape shape-three">
            <img src="{{ asset('assets/assets_landing/img/faq-right-shape.png') }}" alt="Image">
        </div>
    </section>

    <section class="testimonials-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}' id="testimonials">
        <div class="container">
            <div class="testimonials">
                <span>What our customers say</span>
                <div class="testimonials-slider owl-carousel owl-theme">
                    <div class="testimonials-item">
                        <i class="flaticon-quote"></i>
                        <p>“ I was told that I have a good case and a very high chance of getting my money back, so I chose to pursue it and not give up. Two weeks later, they successfully retrieved my money. I really appreciate what you did for me! Thank you. .”</p>
                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <h3>Georgia Barnes (Norway)</h3>
                        <span>LoneRobot.ltd</span>
                    </div>
                    <div class="testimonials-item">
                        <i class="flaticon-quote"></i>
                        <p>“ Wanted to thank you so much for helping me to successfully recover my losses to a forex company at the begining of this year. Managed to get all my money back and the service was great, thank you! .”</p>
                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <h3>Munosi McCulloch (Sweden)</h3>
                        <span>Market Options FX</span>
                    </div>
                    <div class="testimonials-item">
                        <i class="flaticon-quote"></i>
                        <p>“I Lost basically all my savings. {{  config('app.name') }} took my case and was able to recover a significant amount of what I lost. Very professional team, and I strongly recommend {{  config('app.name') }} if you have been abused in binary options.”</p>
                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <h3>James Keong (United States)</h3>
                        <span>Optiontraderfx</span>
                    </div>
                    <div class="testimonials-item">
                        <i class="flaticon-quote"></i>
                        <p>“ Thank you so much for the amazing service! I am really glad I found you. ”</p>
                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <h3>Maurice (Hong Kong)</h3>
                        <span>NYSE6.com</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="banner-area banner-area-three">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span class="top-title wow fadeInDown" data-wow-delay="1s">File a Case</span>
                            <h1 class="wow fadeInDown" data-wow-delay="1s">Tell Us All About Your Case </h1>
                            <p class="wow fadeInUp" data-wow-delay="1s">Committed to helping our clients succeed..</p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img wow fadeInDown" data-wow-delay="1s">
                            <img src="{{ asset('assets/assets_landing/img/banner/banner-img.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<a name="case"></a>
<section class="get-in-touch-area get-in-touch-area-two bg-color ptb-100">
    <div class="container">
        <div class="section-title">
            <span>File a Case</span>
            <h2>Our experts thoroughly review all your documentation (a process that can take up to two weeks)</h2>
        </div>
        <form class="get-in-touch-form">
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" id="first-Name" wire:model="first_name">
                            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" id="last-Name" wire:model="last_name">
                            </div>
        </div>

        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="Email" wire:model="email">
                            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" id="Number" wire:model="phone">
                            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" id="Country" wire:model="country">
                            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>Amount</label>
                <input type="Number" min="5" class="form-control" id="Amount" wire:model="amount">
                            </div>
        </div>

        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label>Type of Scam</label>
                <select class="form-control"  wire:model="scam">
                  <option value=""> Select type of scam</option>
                  <option value="Forex Scam">Forex Scam</option>
                  <option value="Binary Option Scam">Binary Option Scam</option>
                  <option value="Cryptocurrency Scam">Cryptocurrency Scam</option>
                  <option value="Other">Other</option>
                </select>
                            </div>
        </div>
        <br>
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <br>
                <label>Message</label>
                <input type="text" class="form-control" id="Company" onclick="alert('submitted')" wire:model="message">
                            </div>
        </div>

        <p><i>Note: Ensure to add amount lost, broker, date and other useful informations</i></p><br><br>
    </div>

                        <button type="submit" onclick="alert('submitted')" class="default-btn">
                <span wire:loading.remove wire:target="sendOrder">Submit Case</span>
                <span wire:loading.delay wire:target="sendOrder">Wait while we process your case...</span>
            </button>
</form> </div>
    <div class="get-in-touch-shape">
        <img src="{{ asset('assets/assets_landing/img/get-in-touch-shape.png') }}" alt="Image">
    </div>
</section>

<!--
    <section class="main-contact-area ptb-100" id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="solution-img-two text-center">
                        <img src="{{ asset('assets/assets_landing/img/counter-img.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h3>Our contact details</h3>
                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                                <span>Address</span>
                               Old Ladies Court, High Street, Battle TN33 United Kingdom
                            </li>
                            <li>
                                <img src="{{ asset('assets/assets_landing/img/whatsapp.png') }}" style="width: 40px; float: left; position: absolute; float: left;left: 0;">
                                <span>Whatsapp</span>
                                <a href="tel:+447435523708">+447435523708</a>

                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <span>Email</span>
                                <a href="mailto:support@aegisassetshield.com">support@aegisassetshield.com</a>

                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <footer class="footer-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="/" class="logo">
                            <img src="{{ asset('assets/assets_landing/img/logo_white.png') }}" alt="Image">
                        </a>
                        <p>{{  config('app.name') }} specializes in the recovery of assets that were lost as a result of online financial fraud..</p>

                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Address</h3>
                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                               Pelimannintie, Kannelmäki, Central Helsinki, Finland
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                               <a href="mailto:support@aegisassetshield.com">support@aegisassetshield.com</a>
                            </li>
                         <!--    <li>
                                <img src="{{ asset('assets/assets_landing/img/whatsapp.png') }}" style="width: 20px; float: left; position: absolute; float: left;left: 0;">
                                <a href="tel:+447435523708">+447435523708</a>

                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Quick Links</h3>
                        <ul class="import-link">
                           <li>
                            <a href="/#case">File a Case</a>
                        </li>
                        <li>
                            <a href="/#about_us">About Us</a>
                        </li>
                        <li>
                            <a href="/#testimonials">Testimonials</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Resources</h3>
                    <ul class="import-link">
                        <li>
                            <a href="/#offer">What Do We Offer</a>
                        </li>
                        <li>
                            <a href="/#work">How does it work?</a>
                        </li>
                       <!--  <li>
                            <a href="blacklists.html">Blacklists</a>
                        </li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>


<div class="copy-right-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p>
                    Copyright <i class="bx bx-copyright"></i>2021 {{  config('app.name') }}.</a>
                </p>
            </div>
            <!-- <div class="col-lg-6 col-md-6">
                <ul class="footer-menu">
                    <li>
                        <a href="privacy-policy.html" target="_blank">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="terms-conditions.html" target="_blank">
                            Terms & Conditions
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</div>


<div class="go-top">
    <i class="bx bx-chevrons-up"></i>
    <i class="bx bx-chevrons-up"></i>
</div>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script src="assets_landing/js/jquery.min.js"></script>
<script src="{{ asset('assets/assets_landing/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/appear.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/smoothscroll.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/assets_landing/js/custom.js') }}"></script>

</body>

</html>

