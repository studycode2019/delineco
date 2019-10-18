@extends('layouts.app')

@section('title', 'Deli for anyone')

@section('content')
<!-- Start Banner -->
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider">
                <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url({{ asset('images/slider-01.jpg') }});">
                    <div class="lbox-caption">
                        <div class="lbox-details">
                            <h1 class="title">ĐẢO ĐỒ HỌA DELI</h1>
                            <h2>Deli For Anyone</h3>
                            <a href="/trangchu/lienhe" class="btn ">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image:url({{ asset('images/slider-02.jpg') }});">
                    <div class="lbox-caption">
                        <div class="lbox-details">
                            <h1 class="title">ĐẢO ĐỒ HỌA DELI</h1>
                            <h2>Deli For Anyone</h3>
                            <a href="/trangchu/lienhe" class="btn ">Liên hệ ngay</a>
                        </div>
                        </div>
                </div>
                <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image:url({{ asset('images/slider-03.jpg') }});">
                    <div class="lbox-caption">
                        <div class="lbox-details">
                            <h1 class="title">ĐẢO ĐỒ HỌA DELI</h1>
                            <h2>Deli For Anyone</h3>
                            <a href="/trangchu/lienhe" class="btn ">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div><!-- .pogoSlider -->
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Topic -->
<div id="events" class="events-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Topic</h2>
                    <p>Những sản phẩm được chú ý nhiều nhất hiện nay</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner text-center">
                    <img style="width:30%" src="{{ asset('images/W25-01.png')}}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Thiệp cưới Mùa Xuân</h5>
                      <p class="card-text">Mùa xuân là mùa cho những đôi lứa yêu nhau</p>
                      <button type="button" class="btn btn-outline-circle"><a href="#">Xem tiếp nào</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner text-center">
                    <img style="width:30%" src="{{ asset('images/W26-01.png')}}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Bao Lìxì</h5>
                      <p class="card-text">Gửi tặng nhau những điều may mắn nhất</p>
                      <button type="button" class="btn btn-outline-circle"><a href="#">Xem tiếp nào</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner text-center">
                    <img style="width:30%" src="{{ asset('images/W27-01.png')}}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Name Card</h5>
                      <p class="card-text">Gửi tặng nhau những điều may mắn nhất</p>
                      <button type="button" class="btn btn-outline-circle"><a href="#">Xem tiếp nào</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Topic -->
<hr>
<!-- Start Topic -->
<div id="events" class="events-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Thiệp cưới</h2>
                    <p>Những sản phẩm được chú ý nhiều nhất hiện nay</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                    </div>
                </div>
                <h4 class="text-center"><a href="/thiepcuoi/truyenthong">Thiệp cưới truyền thống</a></h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                    </div>
                </div>
                <h4 class="text-center"><a href="/thiepcuoi/hiendai">Thiệp cưới hiện đại</a></h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                    </div>
                </div>
                <h4 class="text-center"><a href="/thiepcuoi/sangtao">Thiệp cưới sáng tạo</a></h4>
            </div>
        </div>
    </div>
</div>
<!-- End Topic -->
<hr>
<!-- Start Topic -->
<div id="events" class="show-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Sản Phẩm khác</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="show-img">
                        <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                    </div>
                    <div class="text-center">
                        <h5>Logo thương hiệu</h5>
                        <button type="button" class="btn btn-outline-circle"><a href="/logothuonghieu/danhsach">Xem chi tiết ></a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                    </div>
                    <div class="text-center">
                        <h5>Menu cá tính</h5>
                        <button type="button" class="btn btn-outline-circle"><a href="/menucatinh/danhsach">Xem chi tiết ></a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="event-inner">
                    <div class="event-img">
                        <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                    </div>
                    <div class="text-center">
                        <h5>Danh thiếp</h5>
                        <button type="button" class="btn btn-outline-circle"><a href="/danhthiep/danhsach">Xem chi tiết ></a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="event-inner">
                <div class="event-img">
                    <img class="img-fluid" src="{{ asset('images/event-img-01.jpg')}}" alt="" />
                </div>
                <div class="text-center">
                    <h5>Thiệp giáng sinh</h5>
                    <button type="button" class="btn btn-outline-circle"><a href="/thiepgiangsinh/danhsach">Xem chi tiết ></a></button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- End Topic -->
@endsection
