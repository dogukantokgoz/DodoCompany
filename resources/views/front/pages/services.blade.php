<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>{{$serv->title}}</h2>
            <p>{{$serv->content}}</p>
        </div>

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-auto">
                <div class="icon-box">
                    <div class="icon"><i class="bx {{$service->dataicon}}"></i></div>
                    <h4><a href="">{{$service->datatitle}}</a></h4>
                    <p>{{$service->datacontent}}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Services Section -->
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">

        <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
                <h3>{{$serv->calltitle}}</h3>
                <p>{{$serv->callcontent}}</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#contact">Bize ulaş</a>
            </div>
        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container">

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0">
                    <i class="bx bx-receipt"></i>
                    <h4>{{$service->featurestitle}}</h4>
                    <p>{{$service->featurescontent}}</p>
                </div>
                </div>
                @endforeach
                </div>
            <div class="image col-lg-6 order-1 order-lg-1" style='background-image: url("{{asset('front/')}}/assets/img/features.jpg");'></div>
        </div>
    </div>
</section><!-- End Features Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-7.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="{{asset('front/')}}/assets/img/clients/client-8.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </div>
</section><!-- End Clients Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container">

        <div class="text-center title">
            <h3>{{$service->countstitle}}</h3>
            <p>{{$service->countscontent}}</p>
        </div>

        <div class="row counters position-relative">

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
            </div>

        </div>

    </div>
</section><!-- End Counts Section -->
