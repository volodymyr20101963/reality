@extends('layouts.main')
@section('content')
    <main role="main">
        {{--    @if(session()->has('success'))--}}      <!-- повідомлення про успішне завершення дії через метод session() -->
        {{--        {{session()->get('success')}}--}}
        {{--    @endif--}}
        {{--    @if(Cache::has('success'))--}}          <!-- повідомлення про успішне завершення дії через клас Cache (скдадніше та довше за часом, ніж session()-->
        {{--        {{Cache::pull('success')}}--}}
        {{--    @endif--}}
        @include('layouts.flashMessage')

        <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($offers as $offer)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{asset($offer->preview())}}" height="225" width="100%">
                        <div class="card-body">
                            <p class="card-text card-header text-center" style="color: tomato"><ins><b>{{$offer->user->name}} (user id #{{$offer->user_id}})</b></ins></p>
                            <p class="card-text">Id: {{$offer->id}}</p>
                            <p class="card-text">Title: {{$offer->title}}</p>
                            <p class="card-text">Price: {{$offer->price}} $</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{route('offers-view',$offer->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="{{route('offers-edit',$offer->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a href="{{route('offers-delete',$offer->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>

    </main>
@stop
