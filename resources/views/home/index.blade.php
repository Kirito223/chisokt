@extends('home')

@section('title','Danh sách đợt đánh giá')

@section('titleContent', "Danh sách đợt đánh giá")

@section('content')
<section>
    <table class="table table-bordered">
        <thead>
            <th>STT</th>
            <th>Đợt đánh giá</th>
            <th>Từ ngày</th>
            <th>Đên ngày</th>
            <th>Trạng thái</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>CHỈ SỐ CẢI CÁCH HÀNH CHÍNH NĂM 2018</td>
                <td>14/01/2019</td>
                <td>28/02/2019</td>
                <td>Hoàn thành</td>
            </tr>
        </tbody>
    </table>
    <section class="pagination-box">

    </section>
</section>
<script type="module" src="{{asset('js/home/index.js')}}"></script>
@endsection