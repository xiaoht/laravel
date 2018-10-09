@extends('layouts.app')
@section('content')
    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sidebar" id="sidebar">
                    <aside>
                        <h1 class="aside-title">Recent Post</h1>
                        <div class="aside-body">
                            <article class="article-fw">
                                <div class="inner">
                                    <div class="details">
                                        <h1><a href="single.html">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="detail">
                                            <div class="time">December 26, 2016</div>
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="line"></div>
                            <article class="article-mini">
                                <div class="inner">
                                    <div class="details">
                                        <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                            <div class="time">December 22, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <article class="article main-article">
                        <header>
                            <h1>{{ $question->title }}</h1>
                            <ul class="details">
                                <li>提问于 {{ $question->created_at->toDateTimeString() }}</li>
                                <li><a>Film</a></li>
                                <li>By <a href="#">John Doe</a></li>
                            </ul>
                        </header>
                        <div class="main">
                            {!! $question->content !!}
                        </div>
                        <footer>
                            <div class="col">
                                <ul class="tags">
                                    <li><a href="#">Free Themes</a></li>
                                    <li><a href="#">Bootstrap 3</a></li>
                                    <li><a href="#">Responsive Web Design</a></li>
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">Web Design</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1220</div></a>
                            </div>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection

