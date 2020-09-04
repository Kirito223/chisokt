@extends('master')

@section('title','Đăng nhập phần mềm')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">
<div class="alert" hidden="hidden" style="position: absolute; right: 10px; top: 10px">
    <button type="button" class="close">×</button>
    <span>I'm an autocloseable success message. I will hide in 5 seconds.</span>
</div>


<div class="container-fluid text-center">

    <img src="{{asset('img/logo_text.png')}}" style="margin:0 auto 0; " class="img-responsive">

    <div class="col-md-offset-4 col-md-4" id="box">

        <h3>Đăng nhập hệ thống</h3>
        <form id="frmLogin" class="form-horizontal" action="http://parindex.caicachhanhchinh.gov.vn/dang_nhap/kiem_tra"
            method="post">
            <fieldset>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="txtND_ACCOUNT" placeholder="Tên đăng nhập" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="txtND_PASSWORD" placeholder="Mật khẩu" class="form-control" type="password">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        <button type="button" id="btLogin" class="btn btn-md btn-danger pull-right" onclick="kiem_tra()"
                            data-loading-text="Đang xử lý">Đăng nhập</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>

    <div style="height: 100px"></div>

    <footer class="text-center hidden-xs hidden-sm" id="footerLogin">
        <h2 style="font-size:14px; margin:5px"> <b>Đơn vị quản lý:</b> Vụ Cải cách hành chính Bộ Nội Vụ</h2>
        <h2 style="font-size:14px; margin:5px"> <b>Trụ sở:</b> Số 8 - Tôn Thất Thuyết - Nam Từ Liêm - Hà Nội</h2>
        <h2 style="font-size:14px; margin:5px"> <b>Điện thoại:</b> (0246) 2820327 - <b>Fax:</b> (0246) 2820327 -
            <b>Email:</b> vucchc@moha.gov.vn</h2>
        <h2 style="font-size:14px; margin:5px"> <b>Đơn vị phát triển:</b> Trung tâm Công nghệ Thông tin &amp; Truyền
            thông - Tp Cần Thơ</h2>
    </footer>


</div>

<div class="modal fade" id="modal_change_password" role="dialog"></div>

{{-- <script type="text/javascript" src="./Đăng nhập hệ thống_files/javascript.js.tải xuống"></script> --}}
@endsection