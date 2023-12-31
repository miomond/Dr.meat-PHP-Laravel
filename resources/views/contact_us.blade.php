<x-head>
</x-head>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="asset/css/contact.css">

<body>

<x-nav>
</x-nav>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">we will help you with everything</h2>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-10 ">
                <div class="wrapper ">
                    <div class="row no-gutters ">
                        <div class="col-md-6">
                            <div class="contact-wrap w-100 p-lg-5 p-4">
                                <h3 class="mb-4">Send us a message</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                          <div id="form-message-success" class="mb-4">
                        Your message was sent, thank you!
                          </div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch ">
                            <div class="info-wrap w-100  img">
                                <h3>Contact us</h3>
                                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                        <div class="dbox w-100 d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="text mt-3 ml-4 ">
                            <p><span>Address:</span> Sadat Road , Next To Maha Pharmacy</p>
                          </div>
                      </div>
                        <div class="dbox w-300 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text mt-3 ml-4 ">
                            <p class="w-25 p-3 "><span>Phone:</span> <a href="tel://1234567920">01030897308</a></p>
                          </div>
                      </div>
                        <div class="dbox w-100 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <div class="text pl-2  ">
                            <p class=" text-sm-center" ><span>Email:</span> <a href="mailto:info@yoursite.com">Dr.meat@gmail.com</a></p>
                          </div>
                      </div>
                        <div class="dbox w-100 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text pl-3">
                            <p><span>Website</span> <a href="#">Dr.meat.com</a></p>
                          </div>
                      </div>
                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

