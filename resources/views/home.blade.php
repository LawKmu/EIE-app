
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
                                                <h5 class="card-title mb-0">Tirendaz Ali</h5>
                                                <p class="card-text"><small class="text-muted">in Level Up Coding</small></p>
                                                <p class="card-text"><small class="text-muted">Apr 3, 2023</small></p>
                                            </div>
                                        </div>
                                        <h2 class="card-title">How to Use ChatGPT in Daily Life?</h2>
                                        <p class="card-text">Save time and money using ChatGPT — AI has made a huge leap in the past few years and this is just the beginning! With tools like ChatGPT and Midjourney, many have seen the power of AI. AI tools are now at...</p>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-secondary me-2">ChatGPT</span>
                                            <span class="text-muted me-2">9 min read</span>
                                            <span class="text-muted"> • Selected for you</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="data:image/png;base64,{{$post->user->img}}" alt="Article Image" class="img-fluid rounded-end">
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <button class="btn btn-outline-secondary btn-sm">+</button>
                                <button class="btn btn-outline-secondary btn-sm">...</button>
                            </div>
                        </div>





                        <!-- <div class="post-panel infinite-loader-sec section-t-space m-auto mt-2">
                            <div class="post-wrapper col-grid-box" style="display: block;">
                                <div class="post-title">
                                    <div class="profile">
                                        <div class="media">
                                            <a class="popover-cls user-img bg-size blur-up lazyloaded "  style="" >
                                                <img src="data:image/png;base64,{{$post->user->img}}" class="img-fluid lazyload bg-img" alt="user" style="">
                                            </a>
                                            <div class="">
                                                <h6>{{$post->user->nom.' '.$post->user->prenom}}</h6>
                                                <p style='font-size:10px'>{{$post->created_at->format('M d, Y')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="post-details">
                                    
                                    <div class="detail-box">
                                        <p>{{$post->content}}</p>
                                        <img src="data:image/jpeg;base64,{{base64_encode($post->image)}}" alt="" style="width: 100%; box-shadow:0px 0px 10px #DCDCDC; border-radius:5%">
                                        
                                    </div>
                                    
                                    <div class="post-react">
                                        <ul>
                                            <li class="react-btn">
                                                <a class="react-link" href="javascript:void(0)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile iw-18 ih-18"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg> react
                                                </a>
                                                <div class="react-box">
                                                    <ul class="ps-1">
                                                        
                                                        <li data-title="star">
                                                            <a href="javascript:void(0)" id="star">
                                                                <img alt="star" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEiUlEQVR4nO2YTYgbZRzGR1RapQhqkepBKNqLlv0w2e9NJtvdZDe72Y/uNmm+11UvClJ70YMe6qEIHopeRLBaT3uwnizqRRBammQmbybJzGSVslDYQ62yUKHgrmXf95GZbCeTbXa7HzPZrOwDD+SSye//5pfJP+G4/exnP7YF8htOyAkntxeDucSzKE3fRSl5V3vM7bWglPwIpSSgJgAl9iG3l4Ib7x6Akrylw6txQI3dxs3pg9xeCdT4jAkeUKJAMfo6t1cCNVbQwe/DKxFACSsA9wjX6IES85Xho2Z4QDkNyGEv1+iBEv25Am6GDwFy8CeukYNS+FXIUVYBDwOyAQ8UgwzyVBPXqIEcuVh96iZ4+RRQPAUUJr/iGjEoxJ+DHF6qVsYMP1VuYXIZavAI12iBEv74AWWq4CdXexLIj5/jGim4OX0QSuh2TWUM+JNAQesEUBj7C6ngE7u75xRCx1E87YccmoESurSuMga8Bj6+2jFAClxCPjADKeBHYeQ4hAlr9iX8Hj8KNdGLuekw1ORZKIkLUOKzUKJXocbmIUeW1r3LrKeMAT9Wbn4UyAeA/IheJg2DSX5QaWiJSoPzVPJdpcQ3S8nABeS8Z5E7EQYZ6EXGe3RjeHX6PErTMJYw8zpQ84vpYcpMrIEfXQM/bMAzaQhMGgTLafWB5bxguYFyST8YOQFG+kCJ55MNBkhGoCZXKuCmXabmF9MWlDHAzfD+NfC+angDvAzPsh5AdL+z8btQSoxDjf9TY5exXBmmg5vhvTXg+8onn+VXQPi3N/c5mIt1Qoks7o4y/WvgPaAivwzBHdoUfEWn2CuQIwu7rQwV3XcguNxbgjeG+C38AoqhYpUya0/dJmWYDs/fgsC3bAveGEKOPg05eK2eyrAy/BxIz4s7gjeGuDF0AIWpy/VQhmV5DV4A4Q9bAm8M8V3wURQnvty5Mg/e25kZPuv6AcTxpKXwVYPkxz/YkTKktjJMP3n3t/iVf8w2+MoQo59ZqQwrn/zXdfvNjHzgolXKsKxbLxVdX9QFXh9ACihWKMN0eBeY6AIVe0l94NXgIeSHV9ZXxrspZSrwvXqp0HMPqU77fyMgP+KxQhnt1JkO37PabkDs6rZ/gJz/fSuUqcB3gwlau4BM53u2D0Cloe+tUKYC3wUmdOqlQsdsPQZYsEoZZsB36KWZ9nlb4UEGn699b6+xy2TdfyDrehPE9RYVXX/WUoYZ8O1gmXbQdBsDcRy2cQDfxMOUoSJ/j4r858i0P2U8T+UPUaHnHBW6ls3KMA0+o8G3rdYJpJ1+2wagOe/5jZShovsKSN9L6x5AuuMYzXRcua8MM+Cd5aYdoOlW+/4zoqT/l1rKUNEzB+IZ3Ox1IDoHaLqtVIF36PAs/RpoqvVHW+C1PYVm+++YlaFZfhGi+4y2qW75esTxONLOMzTl+FsDL7cVNNW8aMtOBGngWAXc8y/Nej41e77t6wptR2iq5RuaaqUs1QKWagYyTRv//7OtF0r5nqGkL0+J5zJy/MuWX/96Sxu93nyNXm9asPVOtJ/9/M/yHxdGim6TI9QDAAAAAElFTkSuQmCC">
                                                            </a>
                                                        </li>
                                                        <li data-title="bravo">
                                                            <a href="javascript:void(0)" id="bravo">
                                                                <img alt="bravo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAIN0lEQVR4nO2Ya2xbZxnHD2PapcDY1OXuxo3tYx878XlP1AkEfEAwiQ+gMRhIDFXwATE+gNA0tA9MILpKbExJ13W0a8iadu3a2vHdji9Jc/OlaZe1pRd6SSjpStI08S1O4iT2ie2TB70nnJPjpBq52L1o/KVHspw35/z+j5/LsQnisyowyx6f9ejKiQdRU17NM9M+KjHp0S5MejSHR8yyx4kHSVM+6tCUVwuTHgoSbgoSbdTHMaemknhQNOmhXhHh3RRMtGkg5tSMxpyaZ4j7ScnOWm2yXXs26dNdT/qoHwrvg5n4fMKtaRHg467FiDnVqaiNfJG4XzTToXUl23Uw7dPClE/LJbzal4W/ARCfi7s0f5HAQ9ShhoidXIjYVH+GHcRD95aeIIjpdq0Fw/MGlmq+AcMLZ+JO9StRh3oBw0cdJDYAYRuJX7fnetF2CDEly6+L34MT9Bc+7d4DLbLtAy2yq9daqqauHpC9tS4DCY9WPu2lhvIa1k1B3KU+BmbdI8K5iEP9s4hDlVmCVwMXQgAnGYCTaAKC2yqW4NEfuCDDcUEmCaH6Z+9038GDW34/eHALDLTI4NoBGVxtrhoh1qsZV11Zwk2dlTYsXzIuTVfcp3pCOBe1kt8NW8m5casKcNktwi9Guqt2Jw9/btsmLoTSCyEGcHBBpm35/QZatlQOtsjmRfj3q+Byc9WhVQOD/5sPT/p0P57yUd8RSiVi1n0x4aZ8yxoWInb1+aiNErMbsSi/Pm5VTrDddXkGonZVZsRQ8wsIoG8J8IsG0JGVBqp+JIW/0lwFV5oqXlq1gSkvdVSo+YSbMglLChuLudQHpQ2LX6e6aqezAdQEfvQkPhd2KPRcCHECPAa91aqAYUMNzHboTksNQJD5pZg4n+pRCKFv3Pig+jdS+Mt/q4SL+yvrV21g2kvNLF9SQpbxJxJzkDuFhs0G9AB9DB+5AOrgz4TqaWn253v1PPy/j2+FVGct5BkIMCT/P1d0j3ABdGkhwECmm+auH6oW4S/tr1y42Fj2qQ2fp0kP1bpiSbk0IxE3iYQzUTv5UsxJZgV4HrRHz422qp6DEPNrqYFku5aHx8EFkAif89NRMftB5nkMv+BfjNsmFQ//j6ZKuPheRZhYi2765Y8l2ijLyiVFzsQcqueEc3PddQ0CPI65E7UwalJk2a66m9LyiTvVcPPYVrhtVi5lP8jAtFc7P3hoy/P4WpwfvSvAc70MDB+r4eEv7a+Ai/sqzqzJAJ+RHcRDEy7N7hVLykHmwnb17/gzfcxeaabxpzZqUuBSEuFxjLYq4ZOjcphwaUR4HBErCXhUXjsgM2W76ZsCPNfDwOCBLYvw71XA+X3lbmK9ijs1L0edam75khq3qt6HELooNRC2qWDMqsqDzwURfHJMDjc+lMNsR60IjwN/KgMtMsD1LoXPdCER/sK+cji/t/wgsRFF7OQLUQeZksBD2E4ChNCCAM8F0SyeNHGXOq9J5zprefihD+WQ8yMRPttLi0vqlkEhwuOYbtNJ4eHvfy1/c03AYQ+piDs1PTGn+kLURn6Pf8+u/FrYqopheBy4HKTZT3XVpUaMNZD06fIMTLgpGDoihxFDTV72pz06cc7HHRoRnutmYLyVlMLDuT2l4vPXqhR3apz5Na/iLxC1Ksgxi3JozII3rTbPAB67eFTO99B5BsYtJPzrcDVEbeolAwEGwhZSnPOpdr0Iz3UxcOOwfAn+3TI4+07pT9dkIOYg25fX/JhFuQc39phZVXLbpOhne/R5BthuPd/EUngcuHmvf1AN016dCI/r/cYROQ8/2CLLg8dxpalyCX5PGfTvLvv22krIodFHHWREWvM4xswqx+22ik34+Wf5pr1jBBi+fLABXPMCfLYHwdVmGT/nh48r8uDnfXQe/Jl3SuFUY7l8TQZ4E1ZSEbapBkV4i4qf4zj7E22aV/8n/H/LZb6bBrZLL8LjSHp04pKasFEiPNfJQMKuzYPvf7t0UvroviYNH69+atyiDIrwZiU/5xNtmlXBS2teuqSSnloe/nJTJbAdehE+d4KB0eNKEf7j3aXQv6skQGxE132qR0fNSoMAj0flTLtu3fDCtJn11kHaW5cHj+OfLdVL8G+XwEeNJa8TGxVu3lsmxS4Mj0clbtiNwEtrnpPA5zoYuLC3QoQ/3ViS6WsoURKF0ohh62+HDTU5LoiKAp9qo5cyv6sETjVsfoMotPD332LA59oZiJsoKfxJ/w7i4YIbwF9AigGf8zEwfFjBw59ufDpxqvHJtY/O1YgLoaZiwGe9DFxrksGphqcX+ho284/YxTJwuhjwWQ8DZ3aXYgMNRYPnDQSZ0WLAz9r10NewuaModZ9nIIAyhYbPuhmIHqeS59566stFhecNBJnZQsNnXAzMWPTNRYfnDQSYkULDZ5wMsHb6tbtlwF1o+HkHAtaGDHe633wrXZcyoD+mDWhn2qh/dt0PdoLAz7xWaPh5O4J5KwLWTPexZvQR24rG00Y6njai/pQBLaSNCIRIGelOcGq+tH4DPfVyzs9wBYe3YAMIWBOCdOsS8B3DQK/vl2pBXC9jv2fwRmwA2TZkADoZMtfDsHcTPmWkMykD7U8b0eussV5LbFS5LvSrYsOnjIhLGegTqVa0HczbCr8jcp3Mn4oCb6CjaQN6I2XeVl1w6BUmOuifZE+g8YLAG+gzqVb65/hnduJuCnxfeSLrRT/I+tCbGS/Tm/EwydXCpwz0XNpIH50z0F8l7hfhr6CsnVazzvrvsw76VdaODrAWFGQtaDxtQixrQkM8tJF+Adq2bbrXvP/XZ17/AXlKUGARRdWWAAAAAElFTkSuQmCC">
                                                            </a>
                                                        </li>
                                                        <li data-title="sad">
                                                            <a href="javascript:void(0)" id="sad">
                                                                <img alt="sad" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAW50lEQVR4nO1daZBUVZbOiJ6lId8rdirZiqqiCrAskEUpQfZdkQGxccd2wx61Z3UmJmJ6pp2YP2MbE2j39PyAyswqRZFlZN8XUXYQRWVHEDB06BatfMkiVVhwJs6557w87+XLKgiHpJC8ETco8i2Z+X33fmd5954MhXIt13It13It13It13It13It13It13It13It15pAg/mhnzgzm92RiFlPO7HwK07MXuxU2Z8mq+1jyWq7xqnOq8OOf+NreIzOiYZ/Q9dEm92O97je3+OGat/MatY5EQv/rRO3liWr7OSZ2S3gzFst4eycVnB2bis4N681nJufoc9rTefguWfebAl4bbLadpyYtbQmGv6bb6qbdbre369Jti/mh5olo82nJeP2Ouf1vEsI3tm3WxlQ/6cNnF/YFs4vbgffLWkH3y1tD98taw8Xlud7Or5Gx5a0o3PxGrwW74H3wns61Xn1yZi1NlkZfgyqQj8N3eztj79vZ+HIdKrzvsLRKqCff6ctfIeAI9Ar8qF2VQRq13SA2rUdoW5dR6hbj70T1G3gjn/ja+s60jl47oVVEbqWiEFC3mmbImN2CyTj60Rl+N9qZrZqEbrZGswM/Wkiav9jstr+lkY7SguO9EUM+koDOIGNAG/sDBff6wIX3+8CFzcVwPebC+D7Lb6+uYCO0TnvdaZr8NradUzIygjdG98D3wvfE98bP0OiMvwifqbQzdBqZllDnCp7L434uQZ4HKEoI7WrIwQYAocgXtzUxYC7rSvUby+E+h1FUL+zCOp3FUP9B8VwiTv+Ta/hsR1F8P32Qvh+a1e6Fu9xUZOxOkLvhTLlEoEzoso65MTCo0M/1oaam4iF/ztZnXcZjeS5BWbEG+B5tL/bmUawAb3QAIog7+4Glz7CXgKX93D/2Nf5dTzn0ofd6BoiBQnZVmjIeL8LvUedJgJnxII2ZLjxsyVi1u/gt6E/D/2YWqKqRaFTZe0482YLODuPNX5pe9LpWg/wPNJ3FRsQP+qWAvuTUrj8aSnAXuzdg/un5hw6l0kh4oiMIro3vochwswI/Az4WfAznZ3bGvAzJqusD53KvJLQj6HhtEZ38uxbLY2BlVGPGr8BpcaMeA/wCnQCfF93gH09APb1BNh/C8D+MoD9t6pexv0Wcw6di6SkyMB74r3xPUiicEa818VIE9oImQ3zW5Pbi+5rYlZ4ZOhGbomYdZ/zet4FkhzU+iXtjIGVUb+J9X1nkRd4GukMOgGOIJcD7O8NcOA2gAN9Ajq+fhvA/l587q1MSA+6F82Mj1MShe+J7402Aj8Lek9kqJekJIkCvcrwg6EbsTmV1rPo05NrieCz5KC7iAYWvZb67YXGkKLUpAFfpkBHgPsBHOgPcPB2gIN3ABwc4Ov42u3mnAN9zTV4Ld1DESEz4qNuZF9oNqAHhYZaJGlJe2Og324F+B0SUWt66EZqiag1GYMe/ALnGXw0euivG8npSsbx0m4e9a7UyIgvBzjQm4Hsz+BWABy8E+DQIIBDdwX0QQAHB5pzhBAiw08E2wqZDbvRUIskdaYBgnEHfmZNghMLPxC6ERrqplOdV+vKjh/8rSnJueyC3531HWWjF494AV5AHwxwaAjAoWEAh4cDHB7h68PNMToHCRnIpN3Bs6cPy1OZdzaIbUBvCQ002gU/CShHVXl1TrT52FBTbsm4Xeoa3AWo+Vp2MoC/T8AvZx3vyzJToYAfxiCPAjg8GuDIGIAjYwGOjOOOf48xxw6PZDKGmmtpVlQAHEB56suz4VbznhlJMDPByBHbBDbMzsy8bqGm2NB3TsasDzG6RE+CgquVEdJV0nyRnTTwb1Hg91OjHkfx0BTwBPJ4gCN3A3w2AeCze339HnOMCBnDZA1PzQiSJpkNtwWTsFtIMDaB3NSVERO0oXeEkXPM2t0k4wQMsii6RT9/UVuTw8HczUY2uDsK6Qumy065Ah+1e6AZuYdx1I/k0T7eAExA/wXA0ckAR+8DODqFO/492RzDc44gGeN4Rozg2dA4CeSqok3YXggXNxewd8Qu6kKOE2a3AAzWQk0uvYARLhpdDLKWtU/5+ZhOcL2dAM0/oEe+Bl9G/d0M/CQG+n6AY1MBjj2o+gMAR6eaYy4RE3jG4GwYyfZBk6DlCG2CzzvaVmhcVI4TKI/0Dhvl6rzLNTFrWKgpNHgp9CfJmP0JSQ/pfrt03d9V5Lqa6IGk3MzerPkiO3rk+8EX4B8COPYIwOePAXw+jftj5jUkg4iYYq5JI0HPBLEJYphVrCBxwtaUUaYYQUmRE7f3NokEHmY1z7xhEms4TSnKbUh6UPfJ1RRvRwyuaL7Ijh/8BwCOPczA/xzg+JMAx5/i/iTA548DfP6oIcglQc0EV46GsMtaodzUcmOLPPagISlqBfidE5Xhv7vu+Xwnbn2jvR5yOVF6MLeDUS6mF2T0k6/vl54BLD1D2L1EL2ccG1rU+yk88gX8JwCOPw1w4lmAE38JcOIXAMenGyKQGJeEnxnJIhLEJohhFu+I7YGWIjdGMPkjmgWYO1rfybimGKSxV4TfHTG4bgQ4UeufPKM/zfAqr+dTGf1lPPrF3RSPxy89E9nY/swAisDSyMcRj+A/B3DyrwBOvmCIOP4Mz4RpLEdoF+5nKbpXSZEY5YBZwIGa1ysykTJ+pwyz4MXrll524vb/YuJKtB9HCAVc13z0/wLgxPMAJ38JcAIJeK6RWTCRPaOxP3gW6NgAv7sTt0/hI9WsE1ATa/548vU88gpS2t/BJNkkzxOo/eUq0q0I0P7xAdqPRncawHG//DxvwKcZoAlAo/ywIa9RWzCAZ8FtbAsyuKWb0BaIR5Rv0tdvtwLEwKkMP5J1Apy4vQ5z55Ri9gddOuKVJNtVeT4TWX7uZzeTCZAZgGDTLJD+LEuQn4AHlEd0bwaPqII9oj7pHtEe5RFJhJwWnFFcsCqr4OPyDqcqr/7snJYq38N+v8jPB43Jj/b7hyu//54AAvzeD5Pg9mf4Ne0NPRxgB+5mGZK4YHDmuMAjQxgXsAxhXLBa54lotcWlrC55wXU76a6nX36KVabTH/Wi/AwwCTNX/0dxGsFPgLifjzK4TygX9Gnu4or+nI0w2wBXgvwEoB0Ylm4HgqJjzJhy2tojQz5j7FSGf5k9AqLWMgzJcSEUPeFC7wflB70ffLoVlPNJ038kYNAVEOAPvh7nmSBEIPBPpMB35edBNsKZCNCG2G8H/DFByhtyc0Qr+AnaPJOecKL2wqyAj0v9knErob2fjBlPV//9wZcY4EE+AvzR7xR2Q1mGcGS7ETATQf8+7ouIH0rJjxsLTGhgBgwIdkcz2QGJjJU3hJhkZRkkrtVMVudRjjxQ/32ph3T//0oImMBuqD/38zDPBCFC90cV+ColQbmhielpiSslwJ+akKDMYwdoRQU4lc37X3MCEpXWM677GZR48/v/Hg+oVwYJGuZzQycwaHoWCAkPpYjw9IfVyJ+qRr/ID0fDR0b7jLCfgF7pBEg8oA2xm6BLuaOJSvvJa06AUxl+Jc0AIwHvIgG8nueDKyTgIHtBEgVLIObKkKSemQQEloyyECE9KCsq4E/0yY8/RX0FM0B7QjpD6o+Ko+H/uPYExKwlKQPs84CQgO1XS8BdwQ9e0vL/UxhYIULIwI6gT+Vj92d4PjD+Ch/UNESA8oRUWiKrhtiknn0eEOZ/MhDgNcKZnnwNYTsgMiSzQKTI/xDm/gx9ihr5DP5nAr6MftF/lRX9IQQsYgJwQVfM3nPtCYhbJ+Sx4w8joIHnvmkk8EwgmyBE+PtkHvUiO/cq6fE/ptTPiwcEPy9ukABOzIkrKo8r49bn156AKuvbBglAG7ArgAB31YNebjJAyZCaBWQLxsLOd4ZC394lcN89ZQwozwYhw9PldQP+pPFldO2uhUMV+EiwWjkhS1g8y1cyPLDfpRdydQokwKmyT19zApy4XZdOgBhh8YIyLTvRdkBkSM8CtAXD4cTGofDctHIoKiqi3qdXNw7Q9MP4iarLaxN41N9D1+C1xcVF8Py0crpn4GoJj/w0sGxl5xURUJt9Apb7CAhc96MNsVp+cuB2ngXGFuxdXgEvTi+H0hIDvPTX/7MitSKCZAnJEEImsM7Lqgg8bxxUvTLAc4/upcXwD9PLYd9ydn89ox8/i38VXWk6ARIHeNaTts0uAa4EaS9ojS8Q26lWvbmekCxBMTJUv68P/GFzX9g6tw/M+OdyGDe81AOY9GGDSqFu/2jfOqDxGXpqjVDt3lEwbFD3wHuOH1EKr/6qHLbNxc/Qhz6LGf1B+i+r5zgS9hMgXlC2JMgYYfaCFnIghpGwZ9lh+prPCaPSgShqpJeUFMOOBQNTC7I8i7L8fYxanIXnj4TtCwbSPa72fSeOKfasIaVNIO6K6s4cCXMgptzQrBhhB91Q3t3iRsK09JCTcbh9SC01FxkaNvDqQCguLoK5r/XnKFmWH45kcBUhbpfXR6aWKh4eBnNe7Uf3upr3Hj6oyGeA2QOSRbxq6aLZV8C7bLLhhlIghpEwpSJSq55pyfnGzEvOL+4phbkzSmDU4MZHZO/yYlgd66fWg6IB9a8JHam6b40oeTpD+drBsCrWH3rd2vj7jh5SDPNmmM+akh+l/7KUnR/K4AN6XHxMG//eyFIgZlIRJhfkrvl3XVFlBzAlrWVIGeP9y3rAa7/qDo9MKoGK/t2gZ49iKOtZDHePLIHfv1QONTsr2D2VldCKCIoXAjrldoZ6gNerpmt2DoD/+nU5jB9RArf0LKb3xPd+dHIJ/PZfusP+pd29mzr2KPmh1dNK/9kDonVCvJfgDOaCspGKwB3olIzDp2F6n5fe8RIkQxk3XvRSXpGs/x+QWo6eRoSQEdTluH+5Orub9OixH7+XuJ0ZNnJo/1/2EIj++3bU0MJdIsB+ImvpaNcTcg2xeSbsypDrDQXNAh0XlKudL30ZIL0Jw09Epv0BDHoa8LJXIBP4Za7nQ48h9egX70fkhzdxkP5rA4xRcFUeJOLN+2XngUzMSqQMMS9Dx61HKEPijmba9+XOAj8JMhMy7YapUGQwIZ4ur8t5/l0zvEfAs41Jga/3k33kG/2yw1Lkhx/G0FpRNsCISdbqUjix8FIxxCRDi5UMoTvqN8YyC9gj8kjRvkwk9A0gwr81SYOttyrJiBfgecsSBVsBI19Jj1f7ZfQr72c1y4/WfzLA4ew8ksSG5QVIhmTnI8tQattpahYYW8AeUaMk3MoA9Q4mgjqSkaF7QNfA46iXSDcD+B7pYc9Hj35KP6htrSI/tHEjD5xZ4ReyRsDpaLOOTtyu9+x2F2/IPwvII+IMKZHg3/fbXcmR3hHpJ0LIEEKCuhzv4wNeSY67ldUHvkd62PPR2o+jf43yfvQu+7hdf66qeSSUzZaIWWtJhvDZMOWFfLNAe0QiRULCnkwk9OB0RVk6ES4ZjWxT9YDeK2DU92gYfJEeTLyR5yPaz6Of6k1w4Y85Lc2TsGwvzMJG5WXYG8KdI8YY61nAHpGWIrEHgSSUNrIhW8jo5SXFA7YALqAL8N5RTwY3AHzS/Z0BpQ306HeNL3s/1ddpaSIvzv3KnQUUE/AsII+I4wKSIhOcNUjCJ6UmaeeZDT1dMi7tLYMtb5XAr18ogEmjI1Deox0UdG4DXbu0ob/xNTy2dU4JnZuSmsyj3lNbQsCXcgZS5GO98nxE+2n0s/GNXafFudhMyZnULGi48gnbAyFB24Q9vtmgiLi8tzvMm9EVBvZrD5FIG+jQSMdzBvVvD/NnFNK17qjPVEfCD754Pe+pCitYe2i5T/t59Cei4b8PXa926o38sBO3T3tsAXpEGBeIFIlXhPV+NmcioZu3AgoTcXJtN3jwnkga8B0jrdN6EBGTR+fD0ZXFXuAlymXw6wPBN16Pqaoi0qNHv9F+J3adN2hgww0KZhawRyRStFQVXlrPjywVCSJH9Rio4bMD32zY8kYhlBS19YDvB70T90xk4LWlRW1h6+zC9FGvy9kEgS+6L9KDhhf9fip/hrXo8gDd8VBT2KTnRO2PMRdCcQEW1cPqV1JyTOyBJgHlaEtX8/x4B8cJajasm1kIhV3aQiSfge/QBiaMKoF/f3EwLItPgsMbH4c/fDgdLhx5gTr+ja8tjU2ic/BcvIZIyG9D91o/q9ArOVi+Bl1NMrgNgI9ej0iP+P24JyDWRDbpYauJWYOduH2Z4oI53rpvVFRvlSbBVw1ra0qSaDZ8UAyjB+VDJL8tlPfMh1dfGgFf7HgK4ORfX1X/YttjMONfB0J5j/Z0r7GD81PA7wyoqoWar8EnlzPfW29ODG/cbjrbVKUlKq3fkRTp4ntkDxQJIkfiHb2vJAlnAxOxraorvP2bbnB+z2io3z8BLnw8HpI7RsLpjXfCVyt7w8nFPeDY/EI48lZH6kfnFcAXi0vgy+W3wOkNfeDMtgq4sHsg1H9yJ5zbeRu8/XIBbK8uMCQj8NsQePbz30+VNCPNl4J/y8Xl9Bb7M26n9VqoqTXcvu/ErN0kRVJ2Eu2BJiFTMb5NHLBpIrg+XN32Iji/pRCSGwuhZl0hfL2qAE4t6wxfLekIXy7uAF8ujsBXiyNwalkEvl4ZgZrVEXA2dIRzm7vAxe1cY26HAh7fY7OM+i7Bxf0E/IVa9yXlbO2C+aE/CzXFhoUsknHLEXvgGmUmwbUJq7kE5fpORpJkNkhFRCKCDTWTUbe1K5x/vzOcfbcTJNd3hMS6DpBYE4GaNRFIrO0AyQ0d4ezGTnAegyeMvF3QRWoU8DLqRXLWsrfDmk+yI+Cjy8m6jxnPxKwWRaGm3BKV4eFO3L6AWukhIagW6Fo1G9BAu0SwNLGNcAlBMFm767YUQC1uH91i+kX2rOgcGekIOh4LAl5JTm1QjVEFPgdcWD1rTOhGaDWzrEmUrBMSVEFWqg2KLqpI0uoOPiJEmhQZabVCGVwhR/7vryEqoEsdUQ382g7uqCe9J1fTp/kCfpV9yYlaU0M3UsMyX/jB8flxUCliV5JWpAy0S4RUxcU8jJAhhVulb/J1few9DTob2PU+4PWoXxJc6hg/Ow4k3BMRuhEblS6L2ReMYWYXFeMElqTzOBuWtPcSgTPCU6ZYlSjGEYyAMjGeLq/LKN+QXs44HXg16lFysPg3Ff5uYXz9uF17w5Qqa6iEmWuY0UUVu5BWmLt9qig3yoKHDEMI5Zbc2tEBHcEWwPEaDbpIjQDvL/CNVddRctjVJINbGR4e+jG0muhPuyZi1naKE9AuvCnl6Ft7iVgUUCF9hSZEkRLU8RhWxBXAVwRUVl/kB15GvdF78vNj1u4mW5rsh8QJGKxhFCmz4QwbaA8RKE0B5eo9JetXZOi6lH1AOXuSGg28GNrZruRcxiCryfr5/29pi5j9CS7jSGoi9A80LGjjJWMRzw4hxe1GTjyvLeZRjtdo0PGe+gceFPD4WWjJZaV1V+hmaJjAw2JHibh9mvRWiCBpklmhfi2DCTGkMDGBPXUeXaN/VQPviWnkNxXwmM+P26cxq4mfKXSztVNv5IfpBxxi9pfJKtsQgTZCyJCZwYSQVM1TXf10iXSSFhdwNqwMOmk8jXgbEjH7j/gDDt/Mbp0Xutkb4OPNaPjRRNRa7cTsendWCBlMCMnGW0KMr/OxMz7AU6CTzNTjA3R8hpv7CZMM7dzM5h2w8IUTCy9KxqwamhloL5gUIkbI0Z2PibTQNXhtzKrBe+G6nawvHbnRG8wP/QTXWyai9lNOZfhlXH3mRO09Ttw6loxb31J+JmbXJfDvuHWMjuE5leGXcdc6Xpv7Gatcy7Vcy7Vcy7Vcy7Vcy7Vcy7Vcy7Vcy7VcCzWR9n/ymbLTa2HGaQAAAABJRU5ErkJggg==">
                                                            </a>
                                                        </li>
                                                        <li data-title="angry">
                                                            <a href="javascript:void(0)" id="angry">
                                                                <img alt="angry" src="data:image/png;base64,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">
                                                           </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="comment-click">
                                                <a href="javascript:void(0)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square iw-18 ih-18"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> comment
                                                </a>
                                            </li> -->
                                            <!-- <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                                <a href="javascript:void(0)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share iw-16 ih-16"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg> share
                                                </a>
                                            </li> -->
                                        <!--</ul>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div> -->
                        @endforeach
                        <!-- <div id="load-more" class="post-loader">
                            <div class="loader-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-ccw icon-theme iw-25 ih-25"><polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path></svg>
                            </div>
                            <div class="no-more-text">
                                <p>no more post</p>
                            </div>
                        </div> -->
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

            <script>
                document.querySelector("body > div.page-body.container-fluid.custom-padding > div.page-center > div.container-fluid.section-t-space.px-0.layout-default")

                
                const reactLink = document.querySelector('.react-link');
                const reactBox = document.querySelector('.react-box');

                reactLink.onclick= function() {
                    event.stopPropagation(); 
                    reactBox.style.display='block';
                };

    

                document.querySelector('body').onclick= function() {
                    reactBox.style.display="none" ;
                };


            </script>




@endsection