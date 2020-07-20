@extends('admin.layouts.app')
@section('content')

                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Dashboard</h4>
                            </div>
                        </div>

                        <!-- content -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Users
                                                    </span>
                                                <h2 class="mb-0">{{count($customers)}}</h2>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Artists
                                                    </span>
                                                <h2 class="mb-0">{{count($artists)}}</h2>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Genres</span>
                                                <h2 class="mb-0"><a href="{{route('genre.list')}}">{{count($genres)}}</a></h2>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total
                                                    Bookings</span>
                                                <h2 class="mb-0">0</h2>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- stats + charts -->
                        
                </div> <!-- content -->

@endsection