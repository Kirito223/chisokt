@extends('home')

@section('title','Thực hiện đánh giá')

@section('titleContent', "Kết quả đánh giá xác định chỉ số cải cách hành chính cho đơn vị Bình Định")

@section('content')
<section>
    <section class="toolbox">
        <section class="row">
            <section class="col-md-10 col-sm-10 col-xl-10">
                <button id="" class="btn btn-sm btn-primary">Hiển thị tất cả tiêu chí</button>
                <button id="" class="btn btn-sm btn-primary">Thu nhỏ tất cả tiêu chí</button>
            </section>
            <section class="col-md-2 col-sm-2 col-xl-2" style="text-align: end;">
                <button id="btnReportAttach" class="btn btn-sm btn-primary">Báo cáo đính kèm</button>
                <button id="" class="btn btn-sm btn-primary">Xuất file</button>
            </section>
        </section>
    </section>
    <table id="tableAssessment" class="table table-bordered">
        <thead>
            <tr>
                <th style="width:50%">Lĩnh vực/Tiêu chí/Tiêu chí thành phần</th>
                <th style="width:90px;">Điểm tối đa</th>
                <th style="width:90px;">Tự đánh giá</th>
                <th style="width:25%">Tài liệu kiểm chứng/Giải trình</th>
                <th style="width:90px;">Thẩm định</th>
                <th style="width:25%">Ý kiến hội đồng thẩm định</th>
                <th style="width:90px;">Chỉ số</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a iure animi, explicabo neque vitae
                    doloribus dolores aut, eveniet sint laborum ullam, ut voluptas atque nobis aliquam sit ipsa
                    inventore?</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo laboriosam sunt, perferendis,
                    iure debitis eius quae saepe, distinctio esse enim fuga facilis! Obcaecati, omnis. Eaque, numquam
                    labore! Rem, rerum optio.</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quaerat illum blanditiis. Illo ipsam
                    amet necessitatibus ipsa accusamus rerum quo consequatur aut, voluptatem velit quaerat aliquam
                    molestias beatae labore pariatur!</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur, fugit similique cum
                    nobis quas inventore porro aut excepturi delectus. Id impedit ullam assumenda cupiditate, voluptas
                    animi dicta in? Ipsum!</td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </tbody>
    </table>
    <section id="pagination-box-assessment" class="pagination-box paginationjs-theme-blue">

    </section>
    @include('modals\assessment\modalFileAttach')
    @include('modals\assessment\modalSeftAssessment')
</section>
<script type="module" src="{{asset('js/assessment/index.js')}}"></script>
<script src="{{asset('lib/jquery-treetable/jquery.treetable.js')}}"></script>

<link rel="stylesheet" href="{{asset('lib/jquery-treetable/css/screen.css')}}" />
<link rel="stylesheet" href="{{asset('lib/jquery-treetable/css/jquery.treetable.css')}}" />
<link rel="stylesheet" href="{{asset('lib/jquery-treetable/css/jquery.treetable.theme.default.css')}}" />
@endsection