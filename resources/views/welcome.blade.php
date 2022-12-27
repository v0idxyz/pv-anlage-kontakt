<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Solar - Solarenergie Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
        <a href="/" class="navbar-brand d-block d-lg-none">
            <h1 class="display-4 text-white text-uppercase m-0">Solar</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#project" class="nav-item nav-link">Project</a>
            </div>
            <a href="/" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">Solar</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="#team" class="nav-item nav-link">Team</a>
                <a href="#faqs" class="nav-item nav-link">FAQs</a>
                <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/carousel-1.jpg') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Solarenergie</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Innovative Solarlösungen für Ihr Zuhause!</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Anfrage stellen!</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/carousel-2.jpg') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Solarenergie</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Lassen Sie die Sonne für Sich arbeiten!</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Anfrage stellen!</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    @php
    $currentDate = new DateTime;
    $specifiedYear = '2019';
    $endDate = new DateTime($specifiedYear . '-01-01');
    $interval = $currentDate->diff($endDate);
    $yearsSinceSpecifiedYear = $interval->format('%y');
    @endphp

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('assets/img/about.jpg') }}" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Über uns!</h6>
                    <h1 class="display-4 mb-3"><span class="text-primary">{{ $yearsSinceSpecifiedYear }}+ Jahre der Erfahrung</span> In der PV Branche</h1>
                    <p>Sichern Sie sich jetzt Ihr eigenes Sonnenkraftwerk ohne Investitionskosten! </p>
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-2" type="button" data-toggle="modal" data-target="#FunktionModalLong">So funktionierts!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid py-5" id="service">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Services</h6>
                <h1 class="font-secondary display-4">Was wir machen</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="{{ asset('assets/img/product-1.jpg') }}" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#DachanlagenModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">PV Dachanlagen</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="{{ asset('assets/img/product-2.jpg') }}" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#FreianlagenModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">PV Freiflächenanlagen</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="{{ asset('assets/img/product-3.jpg') }}" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#PrivatanlagenModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Private PV Anlagen</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-fluid py-5" id="team">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Team</h6>
                <h1 class="font-secondary display-4">Unser Team</h1>
            </div>
            <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">x</h5>
                                <p class="text-muted font-italic mb-2">CEO</p>
                                <p>Hier könnte etwas Text stehen.</p>
                                <div class="position-relative mb-2">
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-1.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-end m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-2.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">x</h5>
                                <p class="text-muted font-italic mb-2">CEO</p>
                                <p>Hier könnte etwas Text stehen.</p>
                                <div class="position-relative mb-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">x</h5>
                                <p class="text-muted font-italic mb-2">Vertrieb</p>
                                <p>Hier könnte etwas Text stehen.</p>
                                <div class="position-relative mb-2">
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-3.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-end m-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/team-4.jpg') }}" style="object-fit: cover;">
                        </div>
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">x</h5>
                                <p class="text-muted font-italic mb-2">Backoffice</p>
                                <p>Hier könnte etwas Text stehen.</p>
                                <div class="position-relative mb-2">
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5" id="faqs">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">FAQs</h6>
                <h1 class="display-4">Was Sie wissen sollten</h1>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <h3 class="mb-4">Warum Pachten statt Kaufen?</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Keine hohen Anschaffungskosten.</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Keine langwierigen Förderungsansuchen.</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Passives Einkommen ohne Investition.</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Günstigerer Strom.</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <h3 class="mb-4">Why Choose Us?</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Jahrelange Erfahrung.</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Zugriff auf starke Partner.</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Individuelle Verträge, die zu Ihnen passen.</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success mr-2"></i>Ihr persönlicher Ansprechpartner.</h5>
                    </div>
                </div>
                <div class="col-md-12 text-center pt-3">
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-4 btn-scroll" href="#contact">Anfrage senden!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Kontakt</h6>
                <h1 class="font-secondary display-4">Senden Sie uns Ihre Anfrage</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Vorname" required="required" data-validation-required-message="Bitte geben Sie Ihren Vornamen ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Nachname" required="required" data-validation-required-message="Bitte geben Sie Ihren Nachnamen ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Telefonnummer" required="required" data-validation-required-message="Bitte geben Sie Ihre Telefonnummer ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Email" required="required" data-validation-required-message="Bitte geben Sie Ihre E-Mail Adresse ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Dachfläche in &#13217;" required="required" data-validation-required-message="Bitte geben Sie Ihre Telefonnummer ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Optional Freifläche in &#13217;" required="required" data-validation-required-message="Bitte geben Sie Ihre E-Mail Adresse ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Adresse" required="required" data-validation-required-message="Bitte geben Sie Ihre Telefonnummer ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Postleitzahl und Ort" required="required" data-validation-required-message="Bitte geben Sie Ihre E-Mail Adresse ein" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="6" id="message" placeholder="Optionale Nachrichten" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-12 mb-4 px-4">
                <div class="row mb-5 p-4" style="background: rgba(256, 256, 256, .05);">
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Unser Standort</h5>
                            <p class="mb-4 m-md-0">Adresse</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Kontaktieren Sie uns per Mail</h5>
                            <p class="mb-4 m-md-0">info@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Kontaktieren Sie uns telefonisch</h5>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <p>Mehr Text, wie innovativ das ganze nicht ist</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Unsere Dienstleistungen</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>PV Freiflächenanlagen</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>PV Dachanlagen</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Privatanlagen</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Finanzierung</a>
                            <a class="text-white btn-scroll" href="#service"><i class="fa fa-angle-right mr-2"></i>Auszahlung</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Wer auch immer bei so einer Seite einen Newsletter abonnieren möchte kann dies gerne hier tun.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white text-center border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .05) !important;">
        <p class="m-0 text-white">&copy; <a href="#">Kraftwerk</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


    <!-- Modal -->
    <div class="modal fade" id="FunktionModalLong" tabindex="-1" role="dialog" aria-labelledby="FunktionModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FunktionModalLongTitle">So funktionierts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mb-4" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                    <ul>
                        <li>Treten Sie mit uns in Verbindung und vereinbaren Sie einen Besichtigungstermin. Einer unserer Mitarbeiter verschafft sich vor Ort einen Überblick und erstellt danach ein Projektangebot.</li>
                        <li>Im Zuge der Projektentwicklung werden sämtliche technischen und kaufmännischen Aspekte des Projektes festgelegt. Die Einholung aller Genehmigungen und Erstellung der nötigen Verträge wird von uns übernommen.</li>
                        <li>Die Anlage wird von Unser Kraftwerk und seinen spezialisierten Partnerbetrieben errichtet. Der gesamte laufenden Betrieb wird von Unser Kraftwerk erledigt. Bürger- und Mitarbeiterbeteiligungs-Modelle werden hier parallel aufgesetzt.</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

        <!-- Modal -->
        <div class="modal fade" id="DachanlagenModalLong" tabindex="-1" role="dialog" aria-labelledby="DachanlagenModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FunktionModalLongTitle">Voraussetzungen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mb-4" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                    <ul>
                        <li>Mindestens 1500 Quadratmeter Dachfläche.</li>
                        <li>Die notwendigen statischen Auflagen werden erfüllt.</li>
                        <li>Die Dachfläche wird nicht durch umliegende Hindernisse verschattet.</li>
                        <li>Die Dachfläche ist in der Nähe eines geeigneten Netzanschlusses.</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

        <!-- Modal -->
        <div class="modal fade" id="FreianlagenModalLong" tabindex="-1" role="dialog" aria-labelledby="FreianlagenModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FreianlagenModalLongTitle">Voraussetzungen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mb-4" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                    <ul>
                        <li>Mindestens 2 Hektar Freifläche</li>
                        <li>Die Freifläche erfüllt die notwendigen Auflagen für die Widmung.</li>
                        <li>Die Freifläche wird nicht durch umliegende Hindernisse verschattet.</li>
                        <li>Die Freifläche ist in der Nähe eines geeigneten Netzanschlusses.</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

        <!-- Modal -->
        <div class="modal fade" id="PrivatanlagenModalLong" tabindex="-1" role="dialog" aria-labelledby="PrivatanlagenModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="PrivatanlagenModalLongTitle">So funktionierts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mb-4" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                    <ul>
                        <li>Treten Sie mit uns in Verbindung und vereinbaren Sie einen Besichtigungstermin. Einer unserer Mitarbeiter verschafft sich vor Ort einen Überblick und erstellt danach ein Projektangebot.</li>
                        <li>Im Zuge der Projektentwicklung werden sämtliche technischen und kaufmännischen Aspekte des Projektes festgelegt. Die Einholung aller Genehmigungen und Erstellung der nötigen Verträge wird von uns übernommen.</li>
                        <li>Die Anlage wird von Unser Kraftwerk und seinen spezialisierten Partnerbetrieben errichtet. Der gesamte laufenden Betrieb wird von Unser Kraftwerk erledigt. Bürger- und Mitarbeiterbeteiligungs-Modelle werden hier parallel aufgesetzt.</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>