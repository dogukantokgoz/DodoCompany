@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">

        <div class="col-md-9 mx-auto">

                <ol class="list-group list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Ad Soyad</div>
                            {{$contacts->name}}
                        </div>
                    </li>
                </ol>
                <br>
                <ol class="list-group list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Email</div>
                            {{$contacts->mail}}
                        </div>
                    </li>
                </ol>
                <br>
                <ol class="list-group list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Konu</div>
                            {{$contacts->subject}}
                        </div>
                    </li>
                </ol>
                <br>
                <ol class="list-group list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Mesaj</div>
                            {{$contacts->message}}
                        </div>
                    </li>
                </ol>
                <br>

                <ol class="list-group list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Tarih</div>
                            {{$contacts->created_at->diffForHumans()}}
                        </div>
                    </li>
                </ol>
                <br>



    </main>
@endsection
