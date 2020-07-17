@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Artist</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Artists({{count($users)}})</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-9 col-12 d-inline-block mb-3 mb-lg-0 mb-sm-3">
                                <div class="task-search d-inline-block mb-3 mr-sm-3 searchBox mb-lg-0 mb-sm-3">
                                    <form action="" method="get">
                                        <div class="input-group">
                                            <input type="text" name="q" id="search-query" data-page="clientpage" value="" class="form-control search-input"
                                                placeholder="Search..." />
                                            <span class="uil uil-search icon-search"></span>
                                            <div class="input-group-append">
                                                <button class="btn btn-soft-primary" id="search-client-btn" type="submit">
                                                <i class='uil uil-file-search-alt'></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                            <!--div class="col-sm-3 col-12 text-right">
                                a href="javascript:void(0)" class="btn btn-success">Import/Export</a>
                                <a href="{{route('genre.add')}}" class="btn btn-primary"><i
                                    class="uil-plus mr-1"></i>Create Genre</a>
                            </div-->
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-12 -->
        </div>
        <div class="row search-result" id="client-listing">
            <div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive sort-diff-div">
                <table id="basic-datatable" class="table table-hover dt-responsive nowrap">
                    <thead>
                        <tr>
                            
                            <th class="sortcolumn">S.No</th>
                            <th class="sortcolumn">Name</th>
                            <th class="sortcolumn">Email</th>
                            <th class="sortcolumn">Phone</th>
                            <th class="sortcolumn">Created At</th>
                            <th class="sortcolumn">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @forelse($users as $row)
                        <tr class="client-table-row">
                            
                            <td>{{$i}}</td>
                            <td>{{$row->first_name}} {{$row->last_name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{date('m/d/Y', strtotime($row->created_at))}}</td>
                         
                            <td>
                                <a href="#" class="tableLink action-edit-client"><i data-feather="edit"></i></a>
                           
                                <a href="#" class="tableLink"><i data-feather="trash"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @empty
                        <tr>
                            <td colspan="14" class="text-center">No record found</td>
                        </tr>
                        
                        @endforelse 
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
        <!-- end card body-->
    </div>
    
</div>
<!-- end col-->
        </div>
        <!-- end row-->
    </div>


@endsection