@include('header')
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url({{asset('res/img/bg/page-banner.jpg')}})">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>contact us</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Contact Section Start-->
    <div class="contact-section section bg-white pt-120">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-10 col-12 ml-auto mr-auto">
                    
                    <div class="contact-wrapper">
                        <div class="row">

                            <div class="contact-info col-lg-5 col-12">
                                <h4 class="title">Contact Info</h4>
                                <p>It is a long established fact that readewill be distracted by the readable content of a page when looking at ilayout.</p>
                                <ul>
                                    <li><span>Address:</span>House 09,Road 3,Dhaka</li>
                                    <li><span>Email:</span>christ@email.com</li>
                                    <li><span>Phone:</span>+99 854 785 65</li>
                                </ul>
                                <div class="contact-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="contact-form col-lg-7 col-12">
                                <h4 class="title">Send Your Massage</h4>
                                <form id="contact-form" action="{{asset('res/https://demo.hasthemes.com/christ-preview/christ/mail.php')}}" method="post">
                                    <input type="text" name="name" placeholder="Your Name">
                                    <input type="email" name="email" placeholder="Your Email">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                    <input type="submit" value="Submit">
                                </form>
                                <p class="form-messege"></p>
                            </div>

                        </div>
                    </div>
                    
                </div>
            
            </div>
        </div>
    </div><!-- Contact Section End-->
    
    <!-- Contact Map -->
    <div id="contact-map"></div>
    
    @include('footer')