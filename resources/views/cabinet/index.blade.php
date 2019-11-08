{{--@extends('layouts.main')--}}
{{--@section('content')--}}
{{--    <main role="main" class="container">--}}
{{--        <div class="row">--}}
{{--            <aside class="col-md-4 blog-sidebar card pt-3">--}}
{{--                <div class="text-center">--}}
{{--                    <img class="rounded-circle" src="{{asset('/images/user1.jpg')}}" alt="Generic placeholder image" width="140" height="140">--}}
{{--                    <h2>User</h2>--}}
{{--                </div>--}}
{{--                <div class="modal-body text-left">--}}
{{--                    <ul class="list-group list-group-flush">--}}
{{--                        <li class="list-group-item"><ins>First name:</ins> <b>Rex</b></li>--}}
{{--                        <li class="list-group-item"><ins>Last name:</ins> <b>Stout</b></li>--}}
{{--                        <li class="list-group-item"><ins>Email:</ins> <b>rexstout@gmail.com</b></li>--}}
{{--                        <li class="list-group-item"><ins>Date of birth:</ins> <b>24.07.1944</b></li>--}}
{{--                        <li class="list-group-item"><ins>Address:</ins> <b>1369, Cambridge av.</b></li>--}}
{{--                        <li class="list-group-item"><ins>City:</ins> <b>Los Angeles, California</b></li>--}}
{{--                        <li class="list-group-item"><ins>Country:</ins> <b>USA</b></li>--}}
{{--                        <li class="list-group-item"><ins>Phone:</ins> <b>+1 234 543 567</b></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            </aside><!-- /.blog-sidebar -->--}}
{{--            <div class="col-md-8 blog-main">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">--}}
{{--                            <img src="{{asset('/images/image1.jpg')}}" width="100%">--}}
{{--                        </div>--}}
{{--                        <div class="jumbotron p-4 p-md-5 rounded">--}}
{{--                            <h1 class="display-4 font-italic"></h1>--}}
{{--                            <p class="lead my-3">An American business magnate, investor, author, philanthropist, and--}}
{{--                                humanitarian. He is best known as the pioneer of the microcomputer revolution of the--}}
{{--                                1970s and 1980s, and the principal founder of Microsoft Corporation. During his--}}
{{--                                career at Microsoft, Gates held the positions of chairman, CEO and chief software--}}
{{--                                architect, while also being the largest individual shareholder until May 2014.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /.blog-main -->--}}
{{--        </div><!-- /.row -->--}}
{{--    </main><!-- /.container -->--}}
{{--@stop--}}


@extends('layouts.main')
@section('content')
    <main role="main" class="container">
        <div class="row">
            <aside class="col-md-4 blog-sidebar card pt-3">
                <div class="text-center">
{{--                    @dd(Route::current()->getName())    <!-- перевірка імені маршруту -->--}}
                    <img class="rounded-circle" src="{{asset('/images/user'.$user->id.'.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="modal-body text-left">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><ins>Full Name:</ins> <b>{{$user->name}}</b></li>
{{--                        <li class="list-group-item"<ins>>Last Name:</ins> <b></b></li>--}}
                        <li class="list-group-item"><ins>Email:</ins> <b>{{$user->email}}</b></li>
                        <li class="list-group-item"><ins>Date of birth:</ins> <b>{{$user->birthday}}</b></li>
                        <li class="list-group-item"><ins>Address:</ins> <b>{{$user->address}}</b></li>
                        <li class="list-group-item"><ins>City:</ins> <b>{{$user->city}}</b></li>
                        <li class="list-group-item"><ins>Country:</ins> <b>{{$user->country}}</b></li>
                        <li class="list-group-item"><ins>Phone:</ins> <b>+{{$user->phone}}</b></li>
                    </ul>
                </div>

            </aside><!-- /.blog-sidebar -->
            <div class="col-md-8 blog-main">
                <div class="card">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="nav-home" aria-selected="true">Offers</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#articles" role="tab" aria-controls="nav-profile" aria-selected="false">Articles</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="offers" role="tabpanel" aria-labelledby="home-tab">
                            <div class="album py-5 bg-light">
                                <div class="container">

                                    <div class="row">
{{--було раніше (оголошення виводились за зростаючої)+зміни в CabinetController.php   @foreach($user->offers as $offer)--}}
                                        @foreach($offers as $offer)
                                            <div class="col-md-6">
                                            <div class="card mb-4 shadow-sm">
{{--                                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>--}}
                                                <img src="{{asset($offer->preview())}}" height="225" width="100%">
                                                <div class="card-body">
                                                    <p class="card-text">Id: {{$offer->id}}</p>
                                                    <p class="card-text">Title: {{$offer->title}}</p>
                                                    <p class="card-text">Price: {{$offer->price}} $</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{route('offers-view',$offer->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                                            <a href="{{route('offers-add',$offer->id)}}" class="btn btn-sm btn-outline-primary">Add</a>
                                                            <a href="{{route('offers-edit',$offer->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
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
                        </div>
                        <div class="tab-pane fade show active" id="articles" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-md-12 blog-main">
                                <div class="container">
                                    <div class="row">

                                        @foreach($user->articles as $article)
                                        <div class="blog-post">
{{--                                            <img src="{{asset($article->preview())}}" height="25%" width="25%"><!-- вивід однієї картинки користувача -->--}}

                                            @foreach($article->images as $image)<!-- вивід всіх картинок користувача -->
                                                <div class="mb-1">
                                                    <img src="{{asset('/storage/article/'.$article->id.'/'.$image->name)}}" height="25%" width="25%">
                                                </div>
                                            @endforeach

                                            <h2 class="blog-post-title card-header" >New feature</h2>
                                            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                                            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>

                                            <p class="card-text" style="color: tomato"><ins><b>{{$article->user->name}} (user id #{{$article->user_id}})</b></ins></p>
                                            <p class="card-text">Id: {{$article->id}}</p>
                                            <p class="card-text">Title: {{$article->title}}</p>
                                            <p class="card-text">Description: {{$article->description}}</p>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
{{--                                                    <a href="{{route('article-add')}}" class="btn btn-primary my-2">Add article</a>--}}
                                                    <a href="{{route('article-add',$article->id)}}" class="btn btn-sm btn-primary">Add</a>
                                                    <a href="{{route('article-edit',$article->id)}}" class="btn btn-sm btn-success">Edit</a>
                                                    <a href="{{route('article-delete',$article->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                </div>
                                            </div><br>
                                        </div><!-- /.blog-post -->
                                        @endforeach
                                    </div>
                                </div><!-- /.container -->
                            </div><!-- /.blog-main -->
                        </div>
                    </div><!-- /.blog-content -->
                </div>
            </div><!-- /.blog-main -->
        </div><!-- /.row -->
    </main><!-- /.container -->
@stop
