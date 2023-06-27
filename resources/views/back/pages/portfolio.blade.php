@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-12 mx-auto">
            <form method="post" action="{{route('admin.portfolioUpdate')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="portfolio_id" value="{{$portfolio->id}}">
                <div class="form-group row">
                    <h1>
                        <div class="sidebar-brand-text mx-auto my-auto">Anasayfa</div>
                    </h1>
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Title"
                               value="{{$portfolio->title}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" placeholder="Description"
                               value="{{$portfolio->content}}">
                        <br>
                    </div>

                    <label class="col-sm-2 col-form-label">Fotoğraf</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="foto" placeholder="Link"
                               value="{{$portfolio->foto}}">
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
