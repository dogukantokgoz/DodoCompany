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
                <input type="hidden" name="services_id" value="{{$services->id}}">
                <div class="form-group row">
                    <h1>
                        <div class="sidebar-brand-text mx-auto my-auto">Services</div>
                    </h1>
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Title"
                               value="{{$services->title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" placeholder="Description"
                               value="{{$services->content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Data Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="data_title" placeholder="Data Title"
                               value="{{$services->data_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Data Content</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="data_content" placeholder="Data Content"
                               value="{{$services->data_content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Data Icon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="data_icon" placeholder="Data Icon"
                               value="{{$services->data_icon}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Call Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="call_title" placeholder="Call Title"
                               value="{{$services->call_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Call Content</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="call_content" placeholder="Call Content"
                               value="{{$services->call_content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Features Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="features_title" placeholder="Features Title"
                               value="{{$services->features_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Features Content</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="features_content" placeholder="Features Content"
                               value="{{$services->features_content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Features Icon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="features_icon" placeholder="Features Icon"
                               value="{{$services->features_icon}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="foto" placeholder="Foto"
                               value="{{$services->foto}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Counts Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="counts_title" placeholder="Counts Title"
                               value="{{$services->counts_title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Counts Content</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="counts_content" placeholder="Counts Content"
                               value="{{$services->counts_content}}">
                        <br>
                    </div>

                    <div align="right">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </main>

@endsection
