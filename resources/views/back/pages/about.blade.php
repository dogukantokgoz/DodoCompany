@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
        <div class="col-md-12 mx-auto">
            <form method="post" action="{{route('admin.aboutUpdate')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="about_id" value="{{$abouts->id}}">
                <div class="form-group row">
                    <h1>
                        <div class="sidebar-brand-text mx-auto my-auto">Anasayfa</div>
                    </h1>
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Title"
                               value="{{$abouts->title}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content0" placeholder="content0"
                               value="{{$abouts->content}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Description 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content1" placeholder="content1"
                               value="{{$abouts->content1}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Description 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content2" placeholder="content2"
                               value="{{$abouts->content2}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Description 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content3" placeholder="content3"
                               value="{{$abouts->content3}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Step</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="step" placeholder="step"
                               value="{{$abouts->step}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Step1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="step1" placeholder="step1"
                               value="{{$abouts->step1}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Step2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="step2" placeholder="step2"
                               value="{{$abouts->step2}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Step3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="step3" placeholder="step3"
                               value="{{$abouts->step3}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">step4</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="step4" placeholder="step4"
                               value="{{$abouts->step4}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">step5</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="step5" placeholder="step5"
                               value="{{$abouts->step5}}">
                        <br>
                    </div>
                    <div align="right">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
