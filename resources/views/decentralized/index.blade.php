@extends('home')

@section('title','Phân quyền tự đánh giá')

@section('titleContent', "Phân quyền tự đánh giá")

@section('content')
<section>
    <section class="toolbox">
        <button id="btnModalDecentralized" class="btn btn-sm btn-info">Phân quyền tự đánh giá</button>
    </section>
    <table class="table table-bordered">
        <thead>
            <th>STT</th>
            <th>Lĩnh vực</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>CHỈ SỐ CẢI CÁCH HÀNH CHÍNH NĂM 2018</td>
            </tr>
        </tbody>
    </table>
    <section class="pagination-box">

    </section>

</section>
@include('modals\modalDecentralized')
<script type="module" src="{{asset('js/decentralized/index.js')}}"></script>
@endsection