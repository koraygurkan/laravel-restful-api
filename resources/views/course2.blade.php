@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">
      <h1>Course page</h1>
        <hr>
        <div class="col-md-6">
            <h3 style="color:red;font-family:'Comic Sans MS'">Kurs ekle</h3>
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

{{--                {{ $errors->first() }}--}}
{{--                {{ $errors->first('course_content') }}--}}
{{--                @if($errors->has('course_title'))--}}
{{--                    <b>Course Title Boş!</b>--}}
{{--                @endif--}}
{{--            </p>--}}
            <form action="{{route('courseInsert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="file" name="course_file">
                </div>
                <div class="mb-3">
                    <input type="password" value="{{old('course_password')}}" class="form-control" name="course_password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="password" value="{{old('course_password')}}" class="form-control" name="course_password_confirmation" placeholder="Verify Password">
                </div>
                <div class="mb-3">
                    <input type="date" value="{{old('course_date')}}" class="form-control" name="course_date" placeholder="title">
                </div>
                <div class="mb-3">
                    <input type="text" value="{{old('course_title')}}" class="form-control" name="course_title" placeholder="title">
                </div>
                <div class="mb-3">
                    <input type="text" value="{{old('course_content')}}" class="form-control" name="course_content" placeholder="content">
                </div>
                <div class="mb-3">
                    <input type="number" value="{{old('course_must')}}" class="form-control" name="course_must" placeholder="must">
                </div>
                <p><div class="form-check">
                    <input class="form-check-input" type="checkbox" name="course_confirm" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        ONAYLA!
                    </label>
                </div></p>
                <input class="form-control" type="submit" value="Kurs Ekle">
            </form>
        </div>
    </div>
@endsection
