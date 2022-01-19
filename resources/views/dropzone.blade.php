@extends('layouts.app')

@section('content')
@section('title')
 - رفع الملفات
@endsection


        <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
            <div   id ='font_news' class="card-header">رفع الملفات</div>

            <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
            @endif
        <div id ='rv2'>


        @if( $value->count()<5)
        <form action="/fileupload"

        class="dropzone"
        id="my-awesome-dropzone">
      @csrf

    </form>
    @else  شكر لك قد تم استقبا الملفات
    @endif
        </div>

        <div id ='rv'>
            @if($index=6)@endif
            @foreach ($value as $index => $item)
            @if($index++)@endif
            <br>
            <div class="d-flex justify-content-center">

            <a href="attachment/{{Auth::user()->id}}/{{$item->url}}"> الملف ({{$item->url}})</a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="dropzonedl/{{Auth::user()->id}}/{{$item->url}}/{{$item->id}}"> <button type="button" class="btn btn-danger">حذف</button> </a>

            </div>
            @endforeach



            <input id="id" type="hidden" value="{{$value->count()}}">



            @switch($index)
            @case(6)
            @break
            @case(5)
            <div class="d-flex justify-content-center">
            <h4 class="h4 mb-4">تم رفع  جميع الملفات المطلوبة </h4>
            </div>
            @break
            @case(4)
            <div class="d-flex justify-content-center">
            <h4 class="h4 mb-4">تم رفع  الملف الرابع</h4>
            </div>
            @break
            @case(3)
            <div class="d-flex justify-content-center">
            <h4 class="h4 mb-4">تم رفع  الملف الثالث</h4>
            </div>
            @break
            @case(2)
            <div class="d-flex justify-content-center">
            <h4 class="h4 mb-4">تم رفع  الملف الثاني</h4>
            </div>
            @break
            @case(1)
            <div class="d-flex justify-content-center">
            <h4 class="h4 mb-4">تم رفع تم رقع الملف الأول </h4>
            </div>
            @break
            @default
            <div class="d-flex justify-content-center">
            <h4 class="h4 mb-4">يجب عليك التقيد برفع اربعة ملفات فقط</h4>
            </div>
            @endswitch
        </div>

</div>
    </div>
</div>
</div>

@include('sweetalert::alert')




@endsection