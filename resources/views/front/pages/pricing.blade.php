<!-- ======= Pricings Section ======= -->
<section id="pricing" class="pricing">
    <div class="container">

        <div class="section-title">
            <h2>{{$pricing->title}}</h2>
            <p>{{$pricing->content}}</p>
        </div>

        <div class="row">

            @foreach ($pricings as $pricing)
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>{{$pricing->price_title}}</h3>
                        <h4><sup>$</sup>{{$pricing->price}}<span> / {{$pricing->price_time}}</span></h4>
                        <ul>
                            <li>{{$pricing->madde1}}</li>
                            <li>{{$pricing->madde2}}</li>
                            <li>{{$pricing->madde3}}</li>
                            <li @if($pricing->price_title == 'Free') class="na" @endif>{{$pricing->madde4}}</li>
                            <li @if($pricing->price_title == 'Free' || $pricing->price_title == 'Business') class="na" @endif>{{$pricing->madde5}}</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Pricings Section -->
