@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload</div>
                    <div class="card-body">
                    <div class="card-body">
                        <form role="form" class="form" onsubmid="return false;">
                            <div class="form-group">
                                <label for="uploadFile">Select File</label>
                                <input type="file" id="uploadFile" class="form-control">
                            </div>
                            <button type="submit" id="uploadBtn" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
