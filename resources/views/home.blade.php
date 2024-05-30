
@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid section-t-space px-0 layout-default">
                <div class="page-content">
                    <div class="content-center col">
                        <!-- create post -->
                        <form class="create-post" method="POST" action="{{ route('add-post') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="static-section">
                            <div class="card-title">
                                <h3>create post</h3>
                            </div>
                            <div class="search-input input-style icon-right">
                                <input name="content" type="text" class="form-control enable" placeholder="write something here..">
                            </div>
                        </div>
                        <ul class="create-btm-option">
                            <li>
                                <input name="image" class="choose-file" type="file">
                                <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera iw-14"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>album</h5>
                            </li>
                        </ul>
                        <button class="btn btn-primary mt-2" type="submit">post</button>
                        </form>

                        <div class="overlay-bg"></div>
                        @foreach($posts as $post)

                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="data:image/png;base64,{{$post->user->img}}" alt="Author Image" class="rounded-circle me-3" style="width: 48px; height: 48px;">
                                            <div>
                                                <h5 class="card-title mb-0">{{$post->user->nom.' '.$post->user->prenom}}</h5>
                                                
                                                <p class="card-text"><small class="text-muted">{{$post->created_at->format('M d, Y')}}</small></p>
                                            </div>
                                        </div>
                                        <h2 class="card-title">How to Use ChatGPT in Daily Life?</h2>
                                        <p class="card-text">{{$post->content}}</p>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-secondary me-2">ChatGPT</span>
                                            <span class="text-muted me-2">9 min read</span>
                                            <!-- <span class="text-muted"> • Selected for you</span> -->
                                        </div>
                                    </div>
                                </div>
                                @if($post->image)
                                <div class="col-md m-2">
                                    <img src="data:image/jpeg;base64,{{base64_encode($post->image)}}" alt="Article_image" class="img-fluid rounded-end">
                                </div>
                                @endif
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <button class="btn btn-outline-secondary btn-sm">👍</button>
                                <button class="btn btn-outline-secondary btn-sm">...</button>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                     <div class="content-right">
                        
                        <div class="sticky-top">
                            <!-- event -->
                            <div class="event-box section-t-space ratio2_3">
                                <div class="image-section bg-size blur-up lazyloaded " style="background-image: url(&quot;../assets/images/event/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="./Friendbook_files/1(3).jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                    <div class="card-title">
                                        <h3>event</h3>
                                        
                                    </div>
                                    <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                        <img src="./Friendbook_files/play.png" class="img-fluid blur-up lazyloaded" alt="">
                                    </div>
                                </div>
                                <div class="event-content">
                                    <h3>christmas 2021</h3>
                                    <h6>26 january 2021</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                        <span>15256 People Going</span></p>
                                    <div class="bottom-part">
                                        <a href="https://themes.pixelstrap.com/friendbook/html/index-2.html#" class="event-btn">going / not going</a>
                                    </div>
                                    <a href="https://themes.pixelstrap.com/friendbook/html/index-2.html#" class="share-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right icon-dark stroke-width-3 iw-14 ih-14"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                    </a>
                                </div>
                            </div>

                            
                        </div>
                    </div> 
                </div>
            </div>

            




@endsection