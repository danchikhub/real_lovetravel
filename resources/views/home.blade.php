@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Вы зашли! Добро пожаловать 
                    <br>
    <br>
    <br>
    <a href="{{route('index')}}"><button class="btn btn-primary">Перейти на главную</button></a> </br> </br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
