@extends('layouts.app')

@section('title', 'Deli for anyone')

@section('content')
<div id="events" class="events-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Thiệp giáng sinh</h2>
                    <h3>Trang danh sách sản phẩm</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <div class="hover01">
                            <div>
                            <figure><img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" /></figure>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mùa xuân</h5>
                                <p class="card-text MaSP">MX01</p>
                                <button type="button" class="btn btn-outline-circle"><a href="/baiviet/chitiet">Xem chi tiết ></a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <div class="hover01">
                            <div>
                            <figure><img class="img-fluid" src="{{ asset('images/event-img-02.jpg')}}" /></figure>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title TieuDe">Mùa xuân</h5>
                                <p class="card-text MaSP">MX01</p>
                                <button type="button" class="btn btn-outline-circle"><a href="#">Xem chi tiết ></a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <div class="hover01">
                            <div>
                            <figure><img class="img-fluid" src="{{ asset('images/event-img-03.jpg')}}" /></figure>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mùa xuân</h5>
                                <p class="card-text MaSP">MX01</p>
                                <button type="button" class="btn btn-outline-circle"><a href="#">Xem chi tiết ></a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <div class="hover01">
                                <div>
                                <figure><img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" /></figure>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Mùa xuân</h5>
                                    <p class="card-text MaSP">MX01</p>
                                    <button type="button" class="btn btn-outline-circle"><a href="#">Xem chi tiết ></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <div class="hover01">
                                <div>
                                <figure><img class="img-fluid" src="{{ asset('images/event-img-02.jpg')}}" /></figure>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title TieuDe">Mùa xuân</h5>
                                    <p class="card-text MaSP">MX01</p>
                                    <button type="button" class="btn btn-outline-circle"><a href="#">Xem chi tiết ></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <div class="hover01">
                                <div>
                                <figure><img class="img-fluid" src="{{ asset('images/event-img-03.jpg')}}" /></figure>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Mùa xuân</h5>
                                    <p class="card-text MaSP">MX01</p>
                                    <button type="button" class="btn btn-outline-circle"><a href="#">Xem chi tiết ></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
