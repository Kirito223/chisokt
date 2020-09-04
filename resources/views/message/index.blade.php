@extends('home')

@section('title','Thông báo')

@section('titleContent', "Danh sách thông báo")

@section('content')
<section>
    <table class="table table-bordered">
        <thead>
            <th>STT</th>
            <th>Thời gian</th>
            <th>Người gửi</th>
            <th>Nội dung</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>CHỈ SỐ CẢI CÁCH HÀNH CHÍNH NĂM 2018</td>
                <td>14/01/2019</td>
                <td>28/02/2019</td>
            </tr>
        </tbody>
    </table>
    <section class="pagination-box">

    </section>
</section>
<script type="module" src="{{asset('js/home/index.js')}}"></script>
@endsection