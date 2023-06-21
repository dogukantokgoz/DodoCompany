<!-- ======= Faq Section ======= -->
<section id="faq" class="faq">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                <div class="content">
                    <h3>Frequently Asked <strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>

                <div class="accordion-list">
                    <ul>
                        <li>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
        </div>

    </div>
</section><!-- End Faq Section -->

<!-- ======= Contacts Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>{{$contact->title}}</h2>
            <p>{{$contact->content}}</p>
        </div>
    </div>

    <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="ri-map-pin-line"></i>
                        <h4>{{$contact->locationtitle}}</h4>
                        <p>{{$contact->locationcontent}}</p>
                    </div>

                    <div class="email">
                        <i class="ri-mail-line"></i>
                        <h4>{{$contact->emailtitle}}</h4>
                        <p>{{$contact->emailcontent}}</p>
                    </div>

                    <div class="phone">
                        <i class="ri-phone-line"></i>
                        <h4>{{$contact->calltitle}}</h4>
                        <p>{{$contact->callcontent}}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form method="post" action="{{route('front.contactpost')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="name" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="mail" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>

    </div>
</section><!-- End Contacts Section -->
