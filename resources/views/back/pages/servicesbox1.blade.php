@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-12 mx-auto">
            <form method="post" action="{{route('admin.servicesbox1Update')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="services_id" value="{{$services->id}}">
                <div class="form-group row">
                    <h1>
                        <div class="sidebar-brand-text mx-auto my-auto">Services</div>
                    </h1>


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
                    <div align="right">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </main>

@endsection
