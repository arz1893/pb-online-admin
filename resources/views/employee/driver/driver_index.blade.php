@extends('home')

@section('page-header')
    <div class="col-md-12 col-sm-12">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Driver</li>
            </ol>
        </nav>
    </div>
@endsection

@section('main-content')
    <div class="col-md-12 col-sm-12">
        <h2>Manage Driver</h2>
        <button class="btn btn-success">
            Add Driver <i class="fa fa-plus"></i>
        </button>
    </div>

@endsection