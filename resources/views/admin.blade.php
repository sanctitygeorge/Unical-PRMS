@extends('layouts.app')

@section('content')

<div class="container">

            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        
<div class="container">
@include('admin.navbar')

  <div class="jumbotron" style="background-image: url(img/unicallibrary.jpg);">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 align="center"> Welcome to Admin Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    </ul>
                        <li><a href="{{ route('admin.dashboard')}}"> Dashboard</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
