<!-- ======= Pricing Section ======= -->
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
                        <h3>{{$pricing->pricetitle}}</h3>
                        <h4><sup>$</sup>{{$pricing->price}}<span> / {{$pricing->pricetime}}</span></h4>
                        <ul>
                            <li>{{$pricing->madde1}}</li>
                            <li>{{$pricing->madde2}}</li>
                            <li>{{$pricing->madde3}}</li>
                            <li @if($pricing->pricetitle == 'Free') class="na" @endif>{{$pricing->madde4}}</li>
                            <li @if($pricing->pricetitle == 'Free' || $pricing->pricetitle == 'Business') class="na" @endif>{{$pricing->madde5}}</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Pricing Section -->
