@extends('layouts.app')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{asset('img/bg25.jpg')}}');background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 pt-5 ">
                <div class="card">
                    <div class="card-header card-header-danger text-center">API Access</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success mt-3" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                @foreach($data->cards as $card)

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection