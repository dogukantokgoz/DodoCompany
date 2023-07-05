
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
