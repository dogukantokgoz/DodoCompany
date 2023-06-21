<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>{{$about->title}}</h2>
            <p>{{$about->content}}</p>
        </div>

        <div class="row content">

            <div class="col-lg-6">
                <p>
                    {{$about->content1}}
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i>{{$about->step}}</li>
                    <li><i class="ri-check-double-line"></i>{{$about->step1}}</li>
                    <li><i class="ri-check-double-line"></i>{{$about->step2}}</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                    {{$about->content2}}
                </p>
                <a href="#" class="btn-learn-more">Learn More</a>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
