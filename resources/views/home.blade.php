@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div> -->
                <div class="row" style="background-color: #e7d9ea">
                    <div class="col-sm-6" >
                        <div class="gst-button" style="background-color: #301b3f">
                            <img class="card-img-top" svg-size-control src="css/cate.png" alt="Card image cap">
                            <div class="card-body">
                                <a href="{{ url('categories') }}" class="btn bt-btn offset-3 mt-5" id="bto">Gestion des catégories<i class="far fa-arrow-alt-circle-right icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="gst-button" style="background-color: #301b3f">
                            <img class="card-img-top svg-size-control" src="css/aa.png" alt="Card image cap" >
                            <div class="card-body">
                            
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                <a href="{{ url('articles') }}" class="btn btn-link offset-3 mt-4" id="bto">Gestion des articles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
