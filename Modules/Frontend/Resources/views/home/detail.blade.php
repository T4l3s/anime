@extends('frontend::layouts.app')

@section('content')

    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <!-- <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>Romance</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    @if(!empty($anime_detail))
        @foreach($anime_detail as $r_anime_detail)
        <section class="anime-details spad">
            <div class="container">
                <div class="anime__details__content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="anime__details__pic set-bg" data-setbg="{{$r_anime_detail->url_thumbnail}}">
                                <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                <!-- <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="anime__details__text">
                                <div class="anime__details__title">
                                    <h3>{{$r_anime_detail->title}}</h3>
                                    <!-- <span>フェイト／ステイナイト, Feito／sutei naito</span> -->
                                </div>
                              <!--   <div class="anime__details__rating">
                                    <div class="rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </div>
                                    <span>1.029 Votes</span>
                                </div> -->
                                <p>{{$r_anime_detail->description}}</p>
                                <div class="anime__details__widget">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10">
                                            <ul>
                                                <li><span>Genre:</span>
                                                @if(!empty($r_anime_detail->genre))
                                                @foreach($r_anime_detail->genre as $genre)
                                                
                                                 {{$genre}}

                                                @endforeach

                                                @endif
                                                </li>
                                                <li><span>Rating:</span> {{$r_anime_detail->rating}}</li>
                                                <li><span>Status:</span> {{$r_anime_detail->status}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="anime__details__btn">
                                    <a href="#" class="watch-btn"><span>Watch Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    @endif
    <!-- Anime Section End -->
@endsection
