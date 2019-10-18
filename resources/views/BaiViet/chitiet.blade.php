@extends('layouts.app')

@section('title', 'Deli for anyone')

@section('content')
<div class="gallery-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Chi tiết thiệp cưới</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            <!--<div class="event-inner">
                    <div class="event-img">
                        <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                    </div>
                </div>
            -->

            <div class="app-figure" id="zoom-fig">
                    <div class="row">
                        <a id="Zoom-1" class="MagicZoom" href="{{ asset('images/Zoom1400.png')}}" data-options="zoomPosition: inner">
                            <img src="{{ asset('images/Zoom400.png')}}" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="">
                    <div class="">
                        <h3 style="color:firebrick">Thiệp mùa xuân</h3>
                        <hr>
                        <div class="text-left">
                            <p>- Kỹ thuật in Offset, hình ảnh sắc nét</p>
                            <p>- Kích thước thiệp</p>
                            <p>+ Bao thiệp 13*18cm, nắp 9cm. Quy cách in 1 mặt</p>
                            <p>+ Ruột thiệp 12*17cm. Quy cách in 2 mặt</p>
                        </div>
                        <hr>
                        <h3 class="text-left" style="color:firebrick">Số Lượng</h3>
                        <div>
                            <select class="custom-select">
                                <option selected>Vui lòng chọn số lượng</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <hr>
                        <div class="input-group">
                                <div class="input-group-prepend">
                                  <button class="btn btn-outline-secondary" type="button">Mua hàng</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-5">
            <hr>
        </div>
        <div class="row">
            <div class="col text-center">
                Diễn giải nội dung
            </div>
        </div>
    </div>
</div>
@endsection
