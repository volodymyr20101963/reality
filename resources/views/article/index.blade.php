@extends('layouts.main')
@section('content')
@include('layouts.flashMessage')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="{{route('article-add')}}" class="btn btn-primary my-2">Add article</a>
{{--                <a href="#" class="btn btn-primary my-2">Edit article</a>--}}
{{--                <a href="#" class="btn btn-primary my-2">Delete article</a>--}}
            </p>
        </div>
    </section>
<section role="main" class="container">
    <div class="row">

        <div class="col-md-8 offset-md-2 blog-main">
{{--            <h3 class="pb-4 mb-4 font-italic border-bottom">--}}
{{--                    From the Firehose--}}
{{--            </h3>--}}
{{--            <div class="blog-post">--}}
            {{--                <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>--}}
            {{--            </div><!-- /.blog-post -->--}}

            {{--            <div class="blog-post">--}}
            {{--                <h2 class="blog-post-title">Another blog post</h2>--}}
            {{--                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>--}}


            {{--                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>--}}
            {{--            </div><!-- /.blog-post -->--}}

        <div class="offset-md-8">
            {!! $articles->links(); !!}
        </div>
        @foreach($articles as $article)
            <div class="blog-post">
{{--                <img src="{{asset($article->preview())}}" height="25%" width="25%"><!-- вивід однієї картинки користувача -->--}}

                @foreach($article->images as $image)
                    <div class="mb-1">
                        <img src="{{asset('/storage/article/'.$article->id.'/'.$image->name)}}" height="25%" width="25%"><!-- вивід всіх картинок користувача -->
                     </div>
                @endforeach

                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>

                <p class="card-text" style="color: tomato"><ins><b>{{$article->user->name}} (user id #{{$article->user_id}})</b></ins></p>
                <p class="card-text">Id: {{$article->id}}</p>
                <p class="card-text">Title: {{$article->title}}</p>
                <p class="card-text">Description: {{$article->description}}</p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{route('article-edit',$article->id)}}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{route('article-delete',$article->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div><br>
            </div><!-- /.blog-post -->
        @endforeach

        </div><!-- /.blog-main -->

    </div><!-- /.row -->
    <div>
        {!! $articles->links(); !!}
    </div>

</section><!-- /.container -->
{{--    //секція контент--}}
@stop
