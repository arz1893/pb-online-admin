@extends('home')

@section('main-content')
    <div class="row clearfix progress-box">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <a href="{{ route('driver.index') }}">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <div class="project-info clearfix">
                        <div class="project-info-left">
                            <div class="icon box-shadow bg-blue text-white">
                                <i class="fa fa-car"></i>
                            </div>
                        </div>
                        <div class="project-info-right">
                            <span class="no text-blue weight-500 font-24">Drivers</span>
                            <p class="weight-400 font-18">Manage driver here</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <a href="{{ route('sales_order.index') }}">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <div class="project-info clearfix">
                        <div class="project-info-left">
                            <div class="icon box-shadow bg-light-green text-white">
                                <i class="fa fa-money"></i>
                            </div>
                        </div>
                        <div class="project-info-right">
                            <span class="no text-light-green weight-500 font-24">Sales Order</span>
                            <p class="weight-400 font-18">Click here to view sales order</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                <div class="project-info clearfix">
                    <div class="project-info-left">
                        <div class="icon box-shadow bg-light-orange text-white">
                            <i class="fa fa-list-alt"></i>
                        </div>
                    </div>
                    <div class="project-info-right">
                        <span class="no text-light-orange weight-500 font-24">2 Lakhs</span>
                        <p class="weight-400 font-18">Projects Complete</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
            <div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
                <div class="project-info clearfix">
                    <div class="project-info-left">
                        <div class="icon box-shadow bg-light-purple text-white">
                            <i class="fa fa-podcast"></i>
                        </div>
                    </div>
                    <div class="project-info-right">
                        <span class="no text-light-purple weight-500 font-24">5.1 Lakhs</span>
                        <p class="weight-400 font-18">Pending Business</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection