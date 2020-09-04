@include('layout\top')
@include('layout\header')
<section class="container-fluid">
    <section class="row">
        <section class="col-md-2">
            @include('layout\sidebar')
        </section>
        <section class="col-md-10 content-box">
           <h3 class="titleContent">@yield('titleContent')</h3>
           <hr/>
            @yield('content')
        </section>
    </section>
    <link rel="stylesheet" href="{{asset('css/content.css')}}" />
</section>
@include('layout\footer')