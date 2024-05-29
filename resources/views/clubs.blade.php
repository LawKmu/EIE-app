@extends('layouts.user_type.auth')

@section('content')
<div class="page-center mt-4" style="width:90vw" >

            <!--  event cover start -->
            <div class="event-cover light-cover">
                <div class="event-img bg-size blur-up lazyloaded" style="background-image: url(https://www.cmc.ac.ma//sites/default/files/2022-12/espacespedagobanner_1.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                    <div class="event-content">
                        <h1>CMC Clubs</h1>
                    </div>
                    <div class="cover-img-detail">
                        <h3>les activités parascolaire</h3>
                    </div>
                    
                </div>
            </div>
            <!--  event cover end -->

            <!-- popular games section start -->

           
<div class="event-category music-slider-section section-t-space">
    <div class="event-title">
        <img width="50px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAIuUlEQVR4nO2dzW/cxhnGiTQF6qTfcQo0LZC28anntLkUEFJpd2fIGS53yZccznI/yDVkw07PBXpR0kOLuk6BFqibuErQtKkKtP9C00tsJbBi+5AGVgzbMeIANVrlEEuBLaGWijF21RXFXS255HIl8gEeGJAlfvzm1cOX5MxKknLlypUrV65cuXJNsNrt9pGjR4+e9Dxvod1uX/I872PP8zZc193wPG/FdV3xtQXP8040Go2n0j7eA6G5ubmHPc+rtdvtxXa7vdW153nD+Hyr1eIA8Jm0z2Nfqt1uo3a7fTUE8C3XdXe51Wote55XTPt89o1mZ2cf8TxvfhTofQbiLAAcSvv8JlqO43zN87yLMQHf5WazueS67uNpn+fEwndddzkq8H7QAwZhOR+E4Ni5GEeVDwDf66Vms/m5dEptAtVqteYTBh7kl9I+74mQ53nFOKAPAXzbjUajayxlvc93XffqGIHvcL1ev5Lp+wTXdZ2YY2Ug8CA7jsOkrKrVar2VdJUHVP0OO45zTsrqs51WCsADvOk4zrelrKnZbJ5MKlaGgN6t/geu1WrHpKyp2WwujBt4L/Re12q116WsqdFoXE4wVgYCD/A7UtbUbDZXkoyVYVyr1br+t5Q1NRqN9RSB+31Pyprq9fqnCcfKIOB+r0pZU71evznmKt9hznmvr0tZU71ev5AicL/flrKmer0+n3Cs7AV924yxl6WsyXGcVlrAbdveYcuy6lLWxDn/TsKxMhC6bwC+JWVRjuNcGFeV9zNjbFHKqjjnJ8cNvAN927ZtZ+85UFcA8FXO+VoSsdIPuM93ms3ml6Usi3N+aozAd9iyrJ9JWZdt24c556txxsoe0B/YNM01MRUm7fOfCHHOf5pUlfdC9/n5tM97YgQAhxhjNxIG3lv9Nwkhj6R93hMlxpg6aqwMY9M0xb9EOmhyHOeIaCs55wuc80uc849t295gjN21bfu2bdsXGWOvMsaOc86fDNoGY+y1JID3GgBeDdp3tVp9EgCOi/83DOOiYRi3DcO4axjGBgCsAMAlwzAWDMM4YVnWZKw/mJqaeti27RrnfDHCxfOSZVnPcc6/0t0eAHyJMfbBKND9wH2+oarqF7r7E/s2DONHAHAZALb62TCMIJ8HgPTWHzDGEOf8agzdyqplWadrtdrXO9t9xrKsu6NUeZAB4K5pmt/r7OMJAHgRAFZDQt/larW6rOt6cawTaRlj83F3K6ZprpmmOec4zqPi4diowDvQu940DKMmtg0ALwDAp1GB67oe6Gq1mvz6A9E3iyxPslsxTfMD0zSftSzrF2GB+6D3+ue6rk8DwM2wwAdB97tSqSwBwOOJwWeMLSfZHlr/B74JAL81TfONiMB7/QYAnOn8FsQKvFP5O1ypVJZjHwTRM/dWflLtobkb7m0AuB8S+LZ1Xb+v6/rtJIEHWfwmxLr+QGR+AlW+NWKsRL5whoE+DPAe8NvWNC2e9QeWZRVz4NU9gQdZ0zQ8cp9vWdbVOGNllAqHGLqVUap8L+A++Fvlcnm09QeMMWe/ADfGECt7AQ9ypVKJvv7Asqy3spzjlQjA/S6Xy9HWHwDAkUmrcn0CYmVI6L3epJSGX3/AGDuZA9eiQvc7/Htn0zQX8ljRogLftqqqW5TS8OsPTNO8PEk5rk9WrOwJvdeU0vDrD0zTFM/A8xwvhwce4PDrDwBgPUvdihYyVoY1pVT43sgDkGXg5RDQO8D9jjQAK3mOq1GB+x0+gnRdvzzOC2d1/8XKniaEdB3+Iqzr+p8PcqyoCQD3Qe/1n0IPgHj7f9DbQzU54H6HvxHTNO0pXdc3swBcjRYre1pRFOHNUqkUbf1BtVpdnMRYUVV1I+hrEwJ8h2VZfjMS/M4A8EmrclVV3y2Xy78OqPLTlNJLY4yVQOABA2BGHgDxMkG8ZJ6UWFFV9e8IoS9SSv8SAHlBTOyilP4jTeA94IXfG3niVqVSKUxIt/Ly7OzsZ8UxUUrfDxiAK923eISQ3yQZKwOA7zDG+Icjwe8ZhLNptYeU0nVCyInusYiphZTS+/4qJ4T8t1AoPNr9Pkrpc4SQjTFUeT+fkeKSmPGladrSuLsVSuk1VVWf7j0WRVHkfpWtKErJ973fJ4RcHxPwbSOE3p6amor3YzHFZCNN05bHdRNEKX1N5L3/OCilv+8XK4qi7JoKIrahKMof44qVfsYYd32FEHI4Vvi9g1Auly8kfNd5nRASONlVXNDEc5UBkfKvubm5h4J+VpZlJMvyjQSAb1tUPkIo2Y9GFnGkqupLCdx1fkIpfX7QyhVCyNQQOf6Dfj8vrhGKorwgy/KdsNCDgPt8JvbYGSRVVWfEvJdRb/MJIXcopac0TXtsr30SQv6wV5bLsvzKENs5LMvyaVmWV0eELvxebN1OWHUiwVZV9Zyqqpshb4IuEEKOAsDnh9kXQuibiqKsD5Hj91RVfWKYbYqOSlGUWVmWl0IAF1EjHi+8iTG2+kXe2CWmXoi3/+IFNKX0IiFkhRCyTildI4RcI4ScExdQRVFqiqJ8I+z2ZVl+cdiLJ8b4VNjti2NCCDkY43mE0HmM8TWM8RpCaB0h9B+E0DulUun1Uql0LPKznf0qTdMe683tIS6enyiKsr30KdeIkmX5lQjdytkcfAwihEyJR7oRupXN1C6OB0UAcEiW5fdH6FTEapX878ZE0dzc3EOyLP9thPZQdCvCf52YTmU/CWP8q4jAd7lUKv0y7fPZV8IY/2RU6H4Xi8Ufp31eEy8AOIQQOhsH8E7l73CxWPzdWB8X7CchhKYxxv+ME3gfv1ssFp+Vsi7x0A0h9F2M8XGM8WIU6EMC71b/DhcKhfOFQuGYOIZMfXRNqVRSEEIfjRt4cYALhcLWzMzMrUKhcPD/qhLG+FYCsbIVFniQZ2ZmPpQOukql0q1xV3mhD/BMDgDGGPcOQilF4B3oDzw9Pf3h9PQ0SptPrly5cuXKlStXrly5pAOv/wHrtptX+blMSQAAAABJRU5ErkJggg==">
        <div class="content">
            <h3>our clubs</h3>
        </div>
    </div>
    <div class="col-10 suggestion-box">
        <div class="music-slider ratio_115 no-arrow default-space slick-initialized slick-slider">
            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
            <div class="slick-list draggable d-flex">
                @foreach($clubs as $club)
                    <a href="/club/page/{{$club->id}}">
                        <div class="slick-track m-2" style="opacity: 1; width: 194px; transform: translate3d(0px, 0px, 0px);">
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 194px;">
                                <div style="width: 100%; display: inline-block;">
                                    <div class="story-box">
                                        <div class="adaptive-overlay"></div>
                                        <a class="story-bg bg-size blur-up lazyloaded" tabindex="0" style="background-image: url('data:image/png;base64,{{$club->profile_img}}'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        </a>
                                        <div class="story-content">
                                            <h6>{{$club->name}}</h6>
                                            <span class="player">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon-light iw-10 ih-10">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>{{$club->membersCount()}}
                                            </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                
            </div>
            
            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button>
        </div>
    </div>
</div>


            <!-- popular games section end -->


            <!-- top games and event section start -->
            <!-- <div class="container-fluid section-b-space section-t-space px-0">
                <div class="row">
                    <div class="col-xl-6">-->
                        <!-- favourite playlist -->
                       <!-- <div class="playlist-sec">
                            <div class="card-title">
                                <h3>Top 5 games</h3>
                                <div class="settings">
                                    <div class="setting-btn">
                                        <a href="#" class="d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-theme stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                        </a>
                                    </div>
                                    <div class="setting-btn ms-2 setting-dropdown">
                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                            <a class="d-flex" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 iw-12 ih-12"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>change city</a>
                                                    </li>
                                                    <li>
                                                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-sec">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="../assets/images/game/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="user" style="display: none;">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>League of Legends</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Action</h6>
                                            </td>
                                            <td>
                                                <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-1 iw-16 ih-16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>2,55,415</h5>
                                            </td>
                                            <td>
                                                <div class="favourite-btn active">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-dark iw-14 ih-14"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="../assets/images/game/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="user" style="display: none;">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Minecraft</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Strategy</h6>
                                            </td>
                                            <td>
                                                <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-1 iw-16 ih-16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>1,55,415</h5>
                                            </td>
                                            <td>
                                                <div class="favourite-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-dark iw-14 ih-14"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="../assets/images/game/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="user" style="display: none;">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Call of Duty</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Adventure</h6>
                                            </td>
                                            <td>
                                                <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-1 iw-16 ih-16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>2,65,465</h5>
                                            </td>
                                            <td>
                                                <div class="favourite-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-dark iw-14 ih-14"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="../assets/images/game/4.jpg" class="img-fluid blur-up lazyload bg-img" alt="user" style="display: none;">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Counter-Strike</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Simulation</h6>
                                            </td>
                                            <td>
                                                <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-1 iw-16 ih-16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>7,55,515</h5>
                                            </td>
                                            <td>
                                                <div class="favourite-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-dark iw-14 ih-14"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="../assets/images/game/5.jpg" class="img-fluid blur-up lazyload bg-img" alt="user" style="display: none;">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Siege</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Sports</h6>
                                            </td>
                                            <td>
                                                <h5 class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-1 iw-16 ih-16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>4,55,455</h5>
                                            </td>
                                            <td>
                                                <div class="favourite-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-dark iw-14 ih-14"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="event-section overflow-hidden">
                            <div class="event_category no-arrow default-space slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2112px; transform: translate3d(-528px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 264px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/event/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>event</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="../assets/images/icon/play.png" class="img-fluid blur-up lazyloaded" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>tournament 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="-1">share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 264px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/event/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>event</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="../assets/images/icon/play.png" class="img-fluid blur-up lazyloaded" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>christmas 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="-1">share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 264px;"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/event/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>live</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="../assets/images/icon/play.png" class="img-fluid blur-up lazyloaded" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>tournament 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="0">going / not going</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 264px;"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/event/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>event</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="../assets/images/icon/play.png" class="img-fluid blur-up lazyloaded" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>tournament 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="0">share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 264px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/event/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>event</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="../assets/images/icon/play.png" class="img-fluid blur-up lazyloaded" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>christmas 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="-1">share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 264px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/event/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>live</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="../assets/images/icon/play.png" class="img-fluid blur-up lazyloaded" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>tournament 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="-1">going / not going</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" style="width: 264px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/event/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>event</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="https://www.cmc.ac.ma/sites/default/files/2022-08/office.png" class="img-fluid blur-up lazyloaded" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>tournament 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="-1">share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 264px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="event-box ratio2_3">
                                        <div class="image-section bg-size blur-up lazyload" style="background-image: url(&quot;../assets/images/event/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="../assets/images/event/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="event" style="display: none;">
                                            <div class="card-title">
                                                <h3>event</h3>
                                                <div class="settings">
                                                    <div class="setting-btn">
                                                        <a href="#" class="d-flex" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw icon icon-dark stroke-width-3 iw-11 ih-11"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                        </a>
                                                    </div>
                                                    <div class="setting-btn ms-2 setting-dropdown">
                                                        <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-dark stroke-width-3 icon iw-11 ih-11"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                <ul>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-font-light iw-16 ih-16"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>remind
                                                                            me</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings icon-font-light iw-16 ih-16"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>setting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                <img src="../assets/images/icon/play.png" class="img-fluid blur-up lazyload" alt="play">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h3>christmas 2021</h3>
                                            <h6>26 january 2021</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </p>
                                            <div class="bottom-part">
                                                <a href="#" class="event-btn" tabindex="-1">share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- top games and event section end -->


            <!-- all games section start -->
            <!--<div class="filter-section section-b-space">
                <div class="card-title">
                    <h3>All Games</h3>
                    <div class="ms-auto button-group filters-button-group">
                        <button class="button is-checked" data-filter="*">show all</button>
                        <button class="button" data-filter=".action">action</button>
                        <button class="button" data-filter=".adventure">adventure</button>
                        <button class="button" data-filter=".simulation">Simulation</button>
                        <button class="button" data-filter=".strategy">Strategy</button>
                        <button class="button" data-filter=".kids">kids</button>
                    </div>
                </div>
                <div class="filter-content">
                    <div class="grid row ratio2_3" style="position: relative; height: 426.562px;">
                        <div class="element-item simulation" data-category="simulation" style="position: absolute; left: 0px; top: 0px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/12.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/12.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item simulation" data-category="simulation" style="position: absolute; left: 197px; top: 0px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/13.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/13.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item action" data-category="action" style="position: absolute; left: 394px; top: 0px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/14.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/14.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item adventure" data-category="adventure" style="position: absolute; left: 592px; top: 0px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/15.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/15.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item adventure" data-category="adventure" style="position: absolute; left: 789px; top: 0px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/16.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/16.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item action" data-category="action" style="position: absolute; left: 0px; top: 213px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/17.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/17.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item kids" data-category="kids" style="position: absolute; left: 197px; top: 213px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/18.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/18.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item kids" data-category="kids" style="position: absolute; left: 394px; top: 213px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/19.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/19.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item simulation" data-category="simulation" style="position: absolute; left: 592px; top: 213px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/20.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/20.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                        <div class="element-item strategy" data-category="strategy" style="position: absolute; left: 789px; top: 213px;">
                            <div class="game-box">
                                <div class="img-sec bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/game/21.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="../assets/images/game/21.jpg" class="img-fluid blur-up lazyload bg-img" alt="game" style="display: none;">
                                    <a href="#" class="btn btn-solid">play</a>
                                </div>
                                <div class="game-content">
                                    <h4>ludo club</h4>
                                    <h5>moonfrog labs</h5>
                                    <p>Petey and other 15 friends play</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- all games section end -->

        </div>
        
        @endsection