@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-12 mx-auto">
            <form method="post" action="{{route('admin.servicesUpdate')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="services_id" value="{{$service->id}}">
                <div class="form-group row">
                    <h1>
                        <div class="sidebar-brand-text mx-auto my-auto">Services</div>
                    </h1>
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Title"
                               value="{{$service->title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" placeholder="Description"
                               value="{{$service->content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Call Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="call_title" placeholder="Call Title"
                               value="{{$service->call_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Call Content</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="call_content" placeholder="Call Content"
                               value="{{$service->call_content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Features Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="features_title" placeholder="Features Title"
                               value="{{$service->features_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Features Content</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="features_content" placeholder="Features Content"
                               value="{{$service->features_content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Features Icon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="features_icon" placeholder="Features Icon"
                               value="{{$service->features_icon}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="foto" placeholder="Foto"
                               value="{{$service->foto}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Counts Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="counts_title" placeholder="Counts Title"
                               value="{{$service->counts_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Counts Content</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="counts_content" placeholder="Counts Content"
                               value="{{$service->counts_content}}">
                        <br>
                    </div>

                    <div align="right">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
        </div>
        </form>
        </div>
        @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$service->data_title}}</h5>
                            <p class="card-text">{{$service->id}}. kutu</p>
                            <a href= @if($service->id == 1) "{{route('admin.servicesbox1')}}"
                               @elseif ($service->id == 2) "{{route('admin.servicesbox2')}}"
                               @elseif ($service->id == 3) "{{route('admin.servicesbox3')}}"
                               @endif
                               class="btn btn-primary stretched-link">Git</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </main>

@endsection
