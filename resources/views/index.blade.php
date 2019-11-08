@extends('layouts.main')
@section('content')
@include('layouts.slider')
    <main role="main" class="flex-shrink-0">
        <section class="jumbotron text-center">
            <div class="container">
{{--                <h1 class="jumbotron-heading">Album example</h1>--}}
                <h1 class="jumbotron-heading">Top-пропозиції</h1>
{{--                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>--}}
                <p class="lead text-muted">Простий пошук необхідної інформації з великої кількості пропозицій мінімізує Ваш час для прийняття правильного рішення.</p>
                <p>
{{--                    <a href="#" class="btn btn-primary my-2">Main call to action</a>--}}
                    <a href="#" class="btn btn-primary my-2">Особлива пропозиція</a>
{{--                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>--}}
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-4 mb-4 font-italic border-bottom">
{{--                        From the Firehose--}}
                        <b>Новини (статті, публікації)</b>
                    </h3>

                    <div class="blog-post">
{{--                        <h2 class="blog-post-title">Sample blog post</h2>--}}
                        <h2 class="blog-post-title">Як отримати інформацію про нерухомість?</h2>
{{--                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>--}}
                        <p class="blog-post-meta">Березень 10, 2018 <a href="#">Bargen Law Firm</a></p>

                        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                    </div><!-- /.blog-post -->

                    <div class="blog-post">
                        <h2 class="blog-post-title">Another blog post</h2>
                        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div><!-- /.blog-post -->

                    <div class="blog-post">
                        <h2 class="blog-post-title">New feature</h2>
                        <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    </div><!-- /.blog-post -->

                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="{{route('article')}}">View All</a>
                    </nav>

                </div><!-- /.blog-main -->

                <aside class="col-md-4 blog-sidebar">
                    <div class="p-4 mb-3 bg-light rounded">
{{--                        <h4 class="font-italic">About</h4>--}}
                        <h4 class="font-italic"><b>Важне</b></h4>
{{--                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
                        <p class="mb-0">Ваші пропозиції або побажання Ви можете надіслати на електронну пошту: abracadabra@assembler.com.<br> З нами можна звʼязатись за телефоном: +38 050 345 67 89.<br>
                                        Ми раді Вас бачити за адресою: вул.Чикаго, 34, офіс №23, м.Крутослав.</p>
                    </div>

                    <div class="p-4">
{{--                        <h4 class="font-italic">Archives</h4>--}}
                        <h4 class="font-italic"><b>Ваші дії</b></h4>
                        <ol class="list-unstyled mb-0">
{{--                            <li><a href="#">March 2014</a></li>--}}
{{--                            <li><a href="#">February 2014</a></li>--}}
{{--                            <li><a href="#">January 2014</a></li>--}}
{{--                            <li><a href="#">December 2013</a></li>--}}
{{--                            <li><a href="#">November 2013</a></li>--}}
{{--                            <li><a href="#">October 2013</a></li>--}}
{{--                            <li><a href="#">September 2013</a></li>--}}
{{--                            <li><a href="#">August 2013</a></li>--}}
{{--                            <li><a href="#">July 2013</a></li>--}}
{{--                            <li><a href="#">June 2013</a></li>--}}
{{--                            <li><a href="#">May 2013</a></li>--}}
{{--                            <li><a href="#">April 2013</a></li>--}}
                            <li><a href="#">Перегляд всього каталогу</a></li>
                            <li><a href="#">Перегляд каталогу по рубриках</a></li>
                            <li><a href="#">Перегляд каталогу по навігатору</a></li>
                            <li><a href="#">Особняки, папівособняки</a></li>
                            <li><a href="#">Квартири еліт, люкс, модерн</a></li>
                            <li><a href="#">Новобудови</a></li>
                            <li><a href="#">Оздоблювання під ключ</a></li>
                            <li><a href="#">Акції</a></li>
                            <li><a href="#">Розтермінування</a></li>
                            <li><a href="#">Калькуляція по метражу</a></li>
                            <li><a href="#">Планова вартість обʼєкту</a></li>
                            <li><a href="#">Ваші пропозиції (побажання)</a></li>
                            <li><a href="#">Особиста сторінка</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
{{--                        <h4 class="font-italic">Elsewhere</h4>--}}
                        <h4 class="font-italic">Інший пошук</h4>
                        <ol class="list-unstyled">
{{--                            <li><a href="#">GitHub</a></li>--}}
                            <li><a href="#">Telegram</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </section><!-- /.container -->
    </main>
@stop
