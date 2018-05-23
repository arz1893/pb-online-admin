@extends('home')

@section('page-header')
    <div class="col-md-12 col-sm-12">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sales Order</li>
            </ol>
        </nav>
    </div>
@endsection

@section('main-content')
    <h3>Sales Order List</h3>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Issue Date</th>
                <th>Customer</th>
                <th>Status Payment</th>
                <th>Status Delivery</th>
                <th>Shipping Line</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="#!">
                        SH-18935
                    </a>
                </td>
                <td>
                    <a href="#!">
                        28 May 2018
                    </a>
                </td>
                <td>
                    <a href="#!">
                        Budi
                    </a>
                </td>
                <td>
                    <span class="text-success">Paid</span>
                </td>
                <td>
                    <span class="text-danger">
                        Not delivered
                    </span>
                </td>
                <td>FEDex</td>
                <td>
                    <a role="button" class="btn btn-warning">
                        <i class="fa fa-pencil-square"></i>
                    </a>
                    <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#!">
                        SH-18934
                    </a>
                </td>
                <td>
                    <a href="#!">
                        27 May 2018
                    </a>
                </td>
                <td>
                    <a href="#!">
                        Susi
                    </a>
                </td>
                <td>
                    <span class="text-success">Paid</span>
                </td>
                <td>
                    <span class="text-warning">
                        On Delivery
                    </span>
                </td>
                <td>FEDex</td>
                <td>
                    <a role="button" class="btn btn-warning">
                        <i class="fa fa-pencil-square"></i>
                    </a>
                    <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection