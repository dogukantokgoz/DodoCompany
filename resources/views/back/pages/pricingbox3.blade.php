@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-12 mx-auto">
            <form method="post" action="{{route('admin.pricingBox3Update')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="pricing_id" value="{{$pricings->id}}">
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label">Price Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price_title" placeholder=""
                               value="{{$pricings->price_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" placeholder=""
                               value="{{$pricings->price}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Price Time</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price_time" placeholder=""
                               value="{{$pricings->price_time}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Madde 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="madde1" placeholder=""
                               value="{{$pricings->madde1}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Madde 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="madde2" placeholder=""
                               value="{{$pricings->madde2}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Madde 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="madde3" placeholder=""
                               value="{{$pricings->madde3}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Madde 4</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="madde4" placeholder=""
                               value="{{$pricings->madde4}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Madde 5</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="madde5" placeholder=""
                               value="{{$pricings->madde5}}">
                        <br>
                    </div>

                    <div align="right">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>

        </div>
        </div>
        </form>
        </div>
    </main>
@endsection
