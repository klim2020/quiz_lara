<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body class="antialiased">
    <h1>{{ $name }}</h1>

    <form action="{{ route('xml.load') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-6">
                <input type="file" name="file" class="form-control">
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Upload</button>
            </div>

        </div>
    </form>
    </body>
