@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-12 mx-auto">  
            <form method="post" action="{{route('admin.faqUpdate')}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="faqs_id" value="{{$faqs->id}}">
                <div class="form-group row">
                    <h1>
                        <div class="sidebar-brand-text mx-auto my-auto">About</div>
                    </h1>
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Title"
                               value="{{$faqs->title}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" placeholder="description"
                               value="{{$faqs->description}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Question 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="question1" placeholder="Question 1"
                               value="{{$faqs->question1}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Answer 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="answer1" placeholder="Answer 1"
                               value="{{$faqs->answer1}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Question 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="question2" placeholder="Question 2"
                               value="{{$faqs->question2}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Answer 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="answer2" placeholder="Answer 2"
                               value="{{$faqs->answer2}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Question 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="question3" placeholder="Question 3"
                               value="{{$faqs->question3}}">
                        <br>
                    </div>
                    <label class="col-sm-2 col-form-label">Answer 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="answer3" placeholder="Answer 3"
                               value="{{$faqs->answer3}}">
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
