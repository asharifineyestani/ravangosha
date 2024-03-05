@extends('layouts.master')
@section('content')
    <section class="section section--head section--head-fixed section--gradient section--details-bg"
             style="margin-top: -40px;">
        <div class="section__bg" data-bg="/assets/img/details.jpg"></div>
        <div class="container">
            <!-- article -->
            <div class="article">
                <div class="row">
                    <div class="col-12 col-xl-8">

                        <!-- trailer -->
                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="article__trailer open-video">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="../../www.w3.org/2000/svg.html">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            معرفی ویدیویی
                        </a>
                        <!-- end trailer -->

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-4 col-xl-3">

                        <div class="card">
                            <a href="details.html" class="card__cover">
                                <img src="{{$book->book_image_url}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-xl-4">
                        <div class="card">
                            <h1>{{$book->title}}</h1>
                        </div>
                        <div class="card">
                            <ul class="text-md">
                                <li>
                                    <span>نویسنده:</span>
                                    <span class="text-primary">{{$book->author->name}}</span>
                                </li>
                                <li>
                                    <span>مترجم:</span>
                                    <span class="text-primary">{{$book->translator}}</span>
                                </li>
                                <li>
                                    <span>ناشر:</span>
                                    <span class="text-primary">{{$book->publication}}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="card">
                            <!-- categories -->
                            <div class="categories">
                                <h3 class="categories__title">برچسب ها:</h3>
                                <a href="category.html" class="categories__item">توسعه فردی</a>
                                <a href="category.html" class="categories__item">موفقیت</a>
                            </div>
                            <!-- end categories -->
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="dashbox">
                            <div class="dashbox__title">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z"></path>
                                    </svg>
                                    اطلاعات کتاب چاپ شده
                                </h3>


                            </div>

                            <div class="dashbox__table-wrap dashbox__table-wrap--1" data-scrollbar="true" tabindex="-1"
                                 style="overflow: hidden; outline: none;">

                                <div class="afc-book-detail">
                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <span>تاریخ انتشار</span>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <span>{{$book->publish_date}}</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <span>شابک</span>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <span>{{$book->isbn}}</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <span>نوع جلد</span>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <span>{{$book->cover_type}}</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <span>قطع</span>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <span>{{$book->size}}</span>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <span>تعداد صفحه</span>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <span>{{$book->page_count}}</span>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <span>سری چاپ</span>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <span>{{$book->print_number}}</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="scrollbar-track scrollbar-track-x show" style="display: none;">
                                    <div class="scrollbar-thumb scrollbar-thumb-x"
                                         style="width: 540px; transform: translate3d(0px, 0px, 0px);"></div>
                                </div>
                                <div class="scrollbar-track scrollbar-track-y show" style="display: none;">
                                    <div class="scrollbar-thumb scrollbar-thumb-y"
                                         style="height: 268px; transform: translate3d(0px, 0px, 0px);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-xl-8">
                        <!-- comments and reviews -->
                        <div class="comments">
                            <!-- tabs nav -->
                            <ul class="nav nav-tabs comments__title comments__title--tabs" id="comments__tabs"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-description" role="tab"
                                       aria-controls="tab-description" aria-selected="true">
                                        <h4>توضیحات</h4>
                                        <span>5</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                                       aria-selected="true">
                                        <h4>دیدگاه ها</h4>
                                        <span>5</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                                       aria-selected="false">
                                        <h4>نقد و بررسی</h4>
                                        <span>3</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- end tabs nav -->

                            <!-- tabs -->
                            <div class="tab-content">
                                <!-- description -->
                                <div class="tab-pane fade show active" id="tab-description" role="tabpanel">
                                    <div class="card">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid,
                                            dolorum eius in nostrum placeat tenetur totam velit! Accusamus accusantium
                                            animi asperiores at beatae consequatur culpa dolore earum enim, est eveniet
                                            excepturi facere hic id inventore ipsam iusto laborum libero, magnam, modi
                                            nisi officiis placeat praesentium quo ratione recusandae reprehenderit
                                            sapiente sit sunt temporibus totam velit veniam veritatis voluptate
                                            voluptatem voluptates voluptatibus. Ad commodi dicta dolores facere libero
                                            natus numquam omnis qui quibusdam quidem repellat repellendus, sequi,
                                            tempora. Accusantium, adipisci amet aspernatur assumenda distinctio dolor
                                            doloremque dolores facere ipsa magnam minima minus modi nihil pariatur
                                            provident quasi unde veniam voluptas?</p>
                                    </div>
                                </div>
                                <!-- end description -->

                                <!-- comments -->
                                <div class="tab-pane fade show" id="tab-1" role="tabpanel">
                                    <ul class="comments__list">
                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="comments__name">Brian Cranston</span>
                                                <span class="comments__time">30.08.2021, 17:53</span>
                                            </div>
                                            <p class="comments__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M11 7.3273V14.6537" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                        12
                                                    </button>

                                                    <button type="button">7
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='400 160 464 224 400 288'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M448,224H154C95.24,224,48,273.33,48,332v20'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Reply</span></button>
                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='320 120 368 168 320 216'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M352,168H144a80.24,80.24,0,0,0-80,80v16'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <polyline points='192 392 144 344 192 296'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M160,344H368a80.24,80.24,0,0,0,80-80V248'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Quote</span></button>
                                            </div>
                                        </li>

                                        <li class="comments__item comments__item--answer">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="comments__name">Jesse Plemons</span>
                                                <span class="comments__time">24.08.2021, 16:41</span>
                                            </div>
                                            <p class="comments__text">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a galley
                                                of type and scrambled it to make a type specimen book.</p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M11 7.3273V14.6537" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                        10
                                                    </button>

                                                    <button type="button">0
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='400 160 464 224 400 288'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M448,224H154C95.24,224,48,273.33,48,332v20'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Reply</span></button>
                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='320 120 368 168 320 216'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M352,168H144a80.24,80.24,0,0,0-80,80v16'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <polyline points='192 392 144 344 192 296'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M160,344H368a80.24,80.24,0,0,0,80-80V248'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Quote</span></button>
                                            </div>
                                        </li>

                                        <li class="comments__item comments__item--quote">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="comments__name">Matt Jones</span>
                                                <span class="comments__time">11.08.2021, 11:11</span>
                                            </div>
                                            <p class="comments__text"><span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>It
                                                has survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged. It was popularised in the
                                                1960s with the release of Letraset sheets containing Lorem Ipsum
                                                passages, and more recently with desktop publishing software like Aldus
                                                PageMaker including versions of Lorem Ipsum.</p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M11 7.3273V14.6537" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                        9
                                                    </button>

                                                    <button type="button">2
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='400 160 464 224 400 288'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M448,224H154C95.24,224,48,273.33,48,332v20'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Reply</span></button>
                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='320 120 368 168 320 216'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M352,168H144a80.24,80.24,0,0,0-80,80v16'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <polyline points='192 392 144 344 192 296'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M160,344H368a80.24,80.24,0,0,0,80-80V248'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Quote</span></button>
                                            </div>
                                        </li>

                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="comments__name">Tess Harper</span>
                                                <span class="comments__time">07.08.2021, 14:33</span>
                                            </div>
                                            <p class="comments__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M11 7.3273V14.6537" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                        7
                                                    </button>

                                                    <button type="button">4
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='400 160 464 224 400 288'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M448,224H154C95.24,224,48,273.33,48,332v20'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Reply</span></button>
                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='320 120 368 168 320 216'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M352,168H144a80.24,80.24,0,0,0-80,80v16'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <polyline points='192 392 144 344 192 296'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M160,344H368a80.24,80.24,0,0,0,80-80V248'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Quote</span></button>
                                            </div>
                                        </li>

                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="comments__name">Jonathan Banks</span>
                                                <span class="comments__time">02.08.2021, 15:24</span>
                                            </div>
                                            <p class="comments__text">Many desktop publishing packages and web page
                                                editors now use Lorem Ipsum as their default model text, and a search
                                                for 'lorem ipsum' will uncover many web sites still in their infancy.
                                                Various versions have evolved over the years, sometimes by accident,
                                                sometimes on purpose (injected humour and the like).</p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M11 7.3273V14.6537" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                        2
                                                    </button>

                                                    <button type="button">17
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                             xmlns="../../www.w3.org/2000/svg.html">
                                                            <path d="M14.6667 10.9905H7.33333" stroke-width="1.5"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='400 160 464 224 400 288'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M448,224H154C95.24,224,48,273.33,48,332v20'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Reply</span></button>
                                                <button type="button">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512'
                                                         viewBox='0 0 512 512'>
                                                        <polyline points='320 120 368 168 320 216'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M352,168H144a80.24,80.24,0,0,0-80,80v16'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <polyline points='192 392 144 344 192 296'
                                                                  style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                        <path d='M160,344H368a80.24,80.24,0,0,0,80-80V248'
                                                              style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/>
                                                    </svg>
                                                    <span>Quote</span></button>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="catalog__paginator-wrap catalog__paginator-wrap--comments">
                                        <span class="catalog__pages">5 from 16</span>

                                        <ul class="catalog__paginator">
                                            <li>
                                                <a href="#">
                                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                                         xmlns="../../www.w3.org/2000/svg.html">
                                                        <path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051"
                                                              stroke-width="1.2" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li>
                                                <a href="#">
                                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                                         xmlns="../../www.w3.org/2000/svg.html">
                                                        <path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271"
                                                              stroke-width="1.2" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <form action="#" class="comments__form">
                                        <div class="sign__group">
                                            <textarea id="text" name="text" class="sign__textarea"
                                                      placeholder="Add comment"></textarea>
                                        </div>
                                        <button type="button" class="sign__btn">Send</button>
                                    </form>
                                </div>
                                <!-- end comments -->

                                <!-- reviews -->
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <ul class="reviews__list">
                                        <li class="reviews__item">
                                            <div class="reviews__autor">
                                                <img class="reviews__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="reviews__name">Best Marvel movie in my opinion</span>
                                                <span class="reviews__time">24.08.2021, 17:53 by Jonathan Banks</span>
                                                <span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   viewBox="0 0 24 24"><path
                                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 10</span>
                                            </div>
                                            <p class="reviews__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                        </li>

                                        <li class="reviews__item">
                                            <div class="reviews__autor">
                                                <img class="reviews__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="reviews__name">Best Marvel movie in my opinion</span>
                                                <span class="reviews__time">24.08.2021, 17:53 by Jesse Plemons</span>
                                                <span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   viewBox="0 0 24 24"><path
                                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.0</span>
                                            </div>
                                            <p class="reviews__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                        </li>

                                        <li class="reviews__item">
                                            <div class="reviews__autor">
                                                <img class="reviews__avatar" src="/assets/img/avatar.svg" alt="">
                                                <span class="reviews__name">Best Marvel movie in my opinion</span>
                                                <span class="reviews__time">24.08.2021, 17:53 by Charles Baker</span>
                                                <span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   viewBox="0 0 24 24"><path
                                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 9.0</span>
                                            </div>
                                            <p class="reviews__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                        </li>
                                    </ul>

                                    <form action="#" class="reviews__form">
                                        <div class="row">
                                            <div class="col-12 col-md-9 col-lg-10 col-xl-9">
                                                <div class="sign__group">
                                                    <input type="text" name="title" class="sign__input"
                                                           placeholder="Title">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-3 col-lg-2 col-xl-3">
                                                <div class="sign__group">
                                                    <select name="select" id="select" class="sign__select">
                                                        <option value="0">Rating</option>
                                                        <option value="10">10</option>
                                                        <option value="9">9</option>
                                                        <option value="8">8</option>
                                                        <option value="7">7</option>
                                                        <option value="6">6</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="sign__group">
                                                    <textarea id="text2" name="text2" class="sign__textarea"
                                                              placeholder="Add review"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="button" class="sign__btn">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end reviews -->
                            </div>
                            <!-- end tabs -->
                        </div>
                        <!-- end comments and reviews -->
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="sidebar sidebar--mt">
                            <!-- subscribe -->
                            <div class="row">
                                <div class="col-12">
                                    <form action="#" class="subscribe">
                                        <div class="subscribe__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.64,9.74l-.29,1.73A1.55,1.55,0,0,0,14,13a1.46,1.46,0,0,0,1.58.09L17,12.28l1.44.79A1.46,1.46,0,0,0,20,13a1.55,1.55,0,0,0,.63-1.51l-.29-1.73,1.2-1.22a1.54,1.54,0,0,0-.85-2.6l-1.62-.24-.73-1.55a1.5,1.5,0,0,0-2.72,0l-.73,1.55-1.62.24a1.54,1.54,0,0,0-.85,2.6Zm1.83-2.13a1.51,1.51,0,0,0,1.14-.85L17,5.93l.39.83a1.55,1.55,0,0,0,1.14.86l1,.14-.73.74a1.57,1.57,0,0,0-.42,1.34l.16,1-.79-.43a1.48,1.48,0,0,0-1.44,0l-.79.43.16-1a1.54,1.54,0,0,0-.42-1.33l-.73-.75ZM21,15.26a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.67l5.88,5.88a2.94,2.94,0,0,0,2.1.88l.27,0a1,1,0,0,0,.91-1.08,1,1,0,0,0-1.09-.91.94.94,0,0,1-.77-.28L5.41,8.26H9a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-3A1,1,0,0,0,21,15.26Z"/>
                                            </svg>
                                        </div>
                                        <h4 class="subscribe__title">Notifications</h4>
                                        <p class="subscribe__text">Subscribe to notifications about new episodes</p>
                                        <div class="sign__group">
                                            <input type="text" class="sign__input" placeholder="Email">
                                        </div>
                                        <button type="button" class="sign__btn">Send</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end subscribe -->

                            <!-- new items -->
                            <div class="row row--grid">
                                <div class="col-12">
                                    <h5 class="sidebar__title">New items</h5>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-xl-6">
                                    <div class="card">
                                        <a href="details.html" class="card__cover">
                                            <img src="/assets/img/card/1.png" alt="">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                 xmlns="../../www.w3.org/2000/svg.html">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                        <button class="card__add" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                            </svg>
                                        </button>
                                        <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"><path
                                                    d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.3</span>
                                        <h3 class="card__title"><a href="details.html">The Good Lord Bird</a></h3>
                                        <ul class="card__list">
                                            <li>Free</li>
                                            <li>Action</li>
                                            <li>2019</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-xl-6">
                                    <div class="card">
                                        <a href="details.html" class="card__cover">
                                            <img src="/assets/img/card/2.png" alt="">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                 xmlns="../../www.w3.org/2000/svg.html">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                        <button class="card__add" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                            </svg>
                                        </button>
                                        <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"><path
                                                    d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.1</span>
                                        <h3 class="card__title"><a href="details.html">The Dictator</a></h3>
                                        <ul class="card__list">
                                            <li>Free</li>
                                            <li>Comedy</li>
                                            <li>2012</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-xl-6">
                                    <div class="card">
                                        <a href="details.html" class="card__cover">
                                            <img src="/assets/img/card/3.png" alt="">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                 xmlns="../../www.w3.org/2000/svg.html">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                        <button class="card__add" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                            </svg>
                                        </button>
                                        <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"><path
                                                    d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.9</span>
                                        <h3 class="card__title"><a href="details.html">12 Years a Slave</a></h3>
                                        <ul class="card__list">
                                            <li>Free</li>
                                            <li>History</li>
                                            <li>2013</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-xl-6">
                                    <div class="card">
                                        <a href="details.html" class="card__cover">
                                            <img src="/assets/img/card/4.png" alt="">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                 xmlns="../../www.w3.org/2000/svg.html">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                        <button class="card__add" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                            </svg>
                                        </button>
                                        <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"><path
                                                    d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.8</span>
                                        <h3 class="card__title"><a href="details.html">Get On Up</a></h3>
                                        <ul class="card__list">
                                            <li>Free</li>
                                            <li>Biography</li>
                                            <li>2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end new items -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end article -->
        </div>
    </section>
    <!-- end details -->

    <!-- similar -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section__title"><a href="category.html">Similar movies and TV series</a></h2>
                </div>

                <div class="col-12">
                    <div class="section__carousel-wrap">
                        <div class="section__carousel owl-carousel" id="similar">
                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/1.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.3</span>
                                <h3 class="card__title"><a href="details.html">The Good Lord Bird</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Action</li>
                                    <li>2019</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/2.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.1</span>
                                <h3 class="card__title"><a href="details.html">The Dictator</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Comedy</li>
                                    <li>2012</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/3.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.9</span>
                                <h3 class="card__title"><a href="details.html">12 Years a Slave</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>History</li>
                                    <li>2013</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/4.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.8</span>
                                <h3 class="card__title"><a href="details.html">Get On Up</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Biography</li>
                                    <li>2014</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/5.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.1</span>
                                <h3 class="card__title"><a href="details.html">Interview With the Vampire</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Horror</li>
                                    <li>1994</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/6.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.6</span>
                                <h3 class="card__title"><a href="details.html">Pawn Sacrifice</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>History</li>
                                    <li>2015</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/7.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.0</span>
                                <h3 class="card__title"><a href="details.html">Operation Finale</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Drama</li>
                                    <li>2018</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/8.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.5</span>
                                <h3 class="card__title"><a href="details.html">Denial</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Drama</li>
                                    <li>2016</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/9.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.2</span>
                                <h3 class="card__title"><a href="details.html">Luce</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Drama</li>
                                    <li>2019</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/13.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.1</span>
                                <h3 class="card__title"><a href="details.html">Infamous</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Thriller</li>
                                    <li>2020</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/14.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 7.2</span>
                                <h3 class="card__title"><a href="details.html">Above the Shadows</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Science Fiction</li>
                                    <li>2019</li>
                                </ul>
                            </div>

                            <div class="card">
                                <a href="details.html" class="card__cover">
                                    <img src="/assets/img/card/17.png" alt="">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="../../www.w3.org/2000/svg.html">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <button class="card__add" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/>
                                    </svg>
                                </button>
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path
                                            d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.5</span>
                                <h3 class="card__title"><a href="details.html">The Midnight Man</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Thriller</li>
                                    <li>2018</li>
                                </ul>
                            </div>
                        </div>

                        <button class="section__nav section__nav--cards section__nav--prev" data-nav="#similar"
                                type="button">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                 xmlns="../../www.w3.org/2000/svg.html">
                                <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="section__nav section__nav--cards section__nav--next" data-nav="#similar"
                                type="button">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                 xmlns="../../www.w3.org/2000/svg.html">
                                <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
