@extends('home')

@section('title','Quản lý tài khoản')

@section('titleContent', "Danh sách tài khoản")

@section('content')
<section>
    <section class="toolbox">
        <button id="btnModalAddAccount" class="btn btn-sm btn-info">Thêm người dùng</button>
    </section>
    <table class="table table-bordered">
        <thead>
            <th>Tài khoản</th>
            <th>Tên người dùng</th>
            <th>Loại người dùng</th>
            <th>Đơn vị</th>
            <th>Hành động</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>CHỈ SỐ CẢI CÁCH HÀNH CHÍNH NĂM 2018</td>
                <td>CHỈ SỐ CẢI CÁCH HÀNH CHÍNH NĂM 2018</td>
                <td>CHỈ SỐ CẢI CÁCH HÀNH CHÍNH NĂM 2018</td>
                <td>
                    <button id="updateAccount" class="btn btn-sm btn-info"><i class="far fa-edit"></i></button>
                    <button id="changePassword" class="btn btn-sm btn-warning"><i class="fas fa-key"></i></button>
                    <button id="deleteAccount" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    <section class="pagination-box">

    </section>

</section>
@include('modals\account\modalAddAccount')
@include('modals\account\modalUpdateAccount');

<script type="module" src="{{asset('js/account/index.js')}}"></script>
@endsection