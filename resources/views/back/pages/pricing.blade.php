@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-12 mx-auto">
            <form method="post" action="{{route('admin.pricingUpdate')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="pricing_id" value="{{$pricing->id}}">
                <div class="form-group row">
                    <h1>
                        <div class="sidebar-brand-text mx-auto my-auto">Anasayfa</div>
                    </h1>
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Title"
                               value="{{$pricing->title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" placeholder="Description"
                               value="{{$pricing->content}}">
                        <br>
                    </div>
                    <div align="right">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>


                        @foreach($pricings as $pricing)
                            <div class="col-lg-4 col-md-6">
                                <div class="box">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$pricing->price_title}}</h5>
                                            <p class="card-text">{{$pricing->id}}. kutu</p>
                                            <a @if($pricing->id == 1) href="{{route('admin.pricingbox1')}}" @endif
                                            @if($pricing->id == 2) href="{{route('admin.pricingbox2')}}" @endif
                                               @if($pricing->id == 3) href="{{route('admin.pricingbox3')}}" @endif
                                               class="btn btn-primary stretched-link">Git</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </form>
        </div>
    </main>

@endsection
