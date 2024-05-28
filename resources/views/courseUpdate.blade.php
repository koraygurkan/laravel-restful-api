@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">
        <div class="col-md-12">
            <h3 style="color:red;font-family:'Comic Sans MS'">Kurs Düzenle</h3>

            <div align="right">
                <a href="{{route('courseget')}}"><button class="btn btn-success">Geri Dön</button></a>
            </div><br>

{{--            <p>--}}
{{--               @if(session('status'))--}}
{{--                   <div class="alert alert-success">--}}
{{--                       {{session('status')}}--}}
{{--                   </div>--}}
{{--                @endif--}}

            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            @if(session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <form action="{{route('courseUpdatePost',['id'=>$course->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <input type="text" value="{{$course->course_title}}" class="form-control" name="course_title" placeholder="Course Title">
                </div>
                <div class="mb-3">
                    <input type="text" value="{{$course->course_content}}" class="form-control" name="course_content" placeholder="Course Content">
                </div>
                <div class="mb-3">
                    <input type="number" value="{{$course->course_must}}" class="form-control" name="course_must" placeholder="Course Must">
                </div>

                <input class="form-control" type="submit" value="Kurs Ekle">
            </form>
        </div>
    </div>
@endsection
