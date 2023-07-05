@extends('back.layouts.master')
@section('content')

    <main id="main" class="main">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Ad Soyad</th>
            <th scope="col">Email</th>
            <th scope="col">Konu</th>
            <th scope="col">Tarih</th>
            <th scope="col"></th>
        </tr>
        </thead>
        @foreach($contacts as $contact)
        <tbody>
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->mail}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->created_at->diffForHumans()}}</td>
            <td><a href="{{route('admin.contactPost', $contact->id)}}">Detayları Gör</td>
        </tr>
        </tbody>
        @endforeach
    </table>

    </main>
@endsection
