<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main File Css -->
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@300;400&display=swap" rel="stylesheet">
    <title>bus booking</title>

</head>

<body>
    <!-- Start Landing Page -->
    <div class="landing-page" id="home">
        <div class="header-area">
            <div class="logo"><img src="{{ asset('imgs/logo.png') }}" alt="logo">
            </div>
            <ul class="links">
                <li><a href="#home">Home</a></li>
                <li><a href="#trips">Trips</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="info-enter">
                <a href="#" class="login">Sign In</a>
                <a href="#" class="sign">Sign Up</a>
            </div>
        </div>
        <div class="container">
            <div class="banner">
                <div class="banner-left">
                    <h1 class="title">Get Your Ticket Online, Easy and Safely</h1>
                    <a href="">Get Ticket Now</a>
                </div>
                <div class="banner-right">
                    <h4 class="title">Choose Your Ticket:</h4>
                    <div class="tab-content">
                        <form action="">
                            <input list="pickup" name="pickup" placeholder="Pickup Point">
                            <datalist id="pickup">
                                <option value="Latakia">
                                <option value="Aleppo">
                                <option value="Damascus">
                                <option value="Homs">
                            </datalist>
                            <input list="dropping" name="dropping" placeholder="Dropping Point">
                            <datalist id="dropping">
                                <option value="Latakia">
                                <option value="Aleppo">
                                <option value="Damascus">
                                <option value="Homs">
                            </datalist>
                            <input type="date" name="date" id="" class="date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+7 days')); ?>">
                            <input type="submit" value="Find Ticket" class="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="long-image">
            <img src="{{ asset('imgs/longImage.png') }}" alt="">
            <img src="{{ asset('imgs/bus.png') }}" alt="" class="bus">
        </div>
    </div>
    <!-- End Landing Page -->

    <!-- Start Cities-Images -->
    <div class="images-page" id="trips">
        <div class="container">
            <div class="main-heading">
                <h1>Travel with us</h1>
                <p>Choose the place you want to travel to</p>
            </div>
            <div class="images-container">
                <div class="box">
                    <img src="{{ asset('imgs/latakia.jpg') }}" alt="">
                    <div class="content">
                        <h2>Latakia</h2>
                        <p>See More</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('imgs/aleppo.jpg') }}" alt="">
                    <div class="content">
                        <h2>Aleppo</h2>
                        <p>See More</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('imgs/damascus.jpg') }}" alt="">
                    <div class="content">
                        <h2>Damascus</h2>
                        <p>See More</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('imgs/homs.jpg') }}" alt="">
                    <div class="content">
                        <h2>Homs</h2>
                        <p>See More</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('imgs/hama.jpeg') }}" alt="">
                    <div class="content">
                        <h2>Hama</h2>
                        <p>See More</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('imgs/tartous.jpg') }}" alt="">
                    <div class="content">
                        <h2>Tartous</h2>
                        <p>See More</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cities=Images -->

    <!-- Start Footer -->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="social">
                    <div class="logo">
                        <img src="{{ asset('imgs/logo.png') }}" alt="logo">
                    </div>
                    <p>Delectus culpa laboriosam debitis saepe. Commodi earum minus ut obcaecati veniam deserunt est!</p>
                    <div class="icons">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="useful-links all">
                    <h2 class="title-footer">Usefil Links</h2>
                    <ul class="footer-links">
                        <li><a href="">Home</a></li>
                        <li><a href="">Trips</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="policies all">
                    <h2 class="title-footer">Policies</h2>
                    <ul class="footer-links">
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                        <li><a href="">Ticket Policies</a></li>
                        <li><a href="">Refund Policy</a></li>
                    </ul>
                </div>
                <div class="contact-info all">
                    <h2 class="title-footer">Contact Info</h2>
                    <ul class="footer-links">
                        <li><a href="">Syria Latakia</a></li>
                        <li><a href="">+963932048737</a></li>
                        <li><a href="">luqman1it@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->
</body>

</html>