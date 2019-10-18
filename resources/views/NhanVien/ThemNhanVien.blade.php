@extends('layouts.master')

@section('title', 'Sàn giao dịch | BDS')
@section('name', 'themnhanvien')
@section('content')
<div class="row">
    <div class="col-md-4 offset-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-lg-center text-uppercase">Đăng ký thông tin nhân viên</h3>
            </div>
            <form role="form" action="/home/postthemnhanvien" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Họ và tên nhân viên</label>
                        <input type="text" class="form-control" name="hoTen" placeholder="Trừ Hoài Phương">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày</label>
                                <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">25</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Tháng</label>
                                <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">6</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Năm</label>
                                <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">1995</option>
                                                <option>1995</option>
                                                <option>1996</option>
                                                <option>1997</option>
                                                <option>1998</option>
                                                <option>1999</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số điện thoại</label>
                        <input type="text" class="form-control" name="soDienThoai" placeholder="0898843938">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ mail</label>
                        <input type="text" class="form-control" name="email" placeholder="truhoaiphuong95@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ thường trú</label>
                        <input type="text" class="form-control" name="diaChi" placeholder="Ninh Kiều - Cần Thơ">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col offset-3">
                                <a href="/home/postthemnhanvien">
                                    <input type="submit" class="btn btn-primary" style="width: 120px;" value="Lưu">
                                </a>
                                <a href="/">
                                    <input type="submit" class="btn btn-secondary" style="width: 120px;" value="Thoát">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
