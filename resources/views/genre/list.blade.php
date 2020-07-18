@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Genres</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Genres({{count($records)}})</h4>
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
                                            <input type="text" name="q" id="search-query" data-page="clientpage" value="{{$key}}" class="form-control search-input"
                                                placeholder="Search..." required />
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
                            <div class="col-sm-3 col-12 text-right">
                                <!--a href="javascript:void(0)" class="btn btn-success">Import/Export</a-->
                                <a href="{{route('genre.add')}}" class="btn btn-primary"><i
                                    class="uil-plus mr-1"></i>Create Genre</a>
                            </div>
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
                            <th>Cover Image</th>
                            <th class="sortcolumn">Name</th>
                            <th>Status</th>
                            <th class="sortcolumn">Created At</th>
                            <th class="sortcolumn">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @forelse($records as $row)
                        <tr class="client-table-row">
                            
                            <td>{{$i}}</td>
                            <td><img src="{{ asset('uploads/'.$row->cover_image)}}" width="70px" /></td>
                            <td>{{$row->name}}</td>
                            <td>@if($row->status == 0)
                                Disabled
                                @else
                                Enabled
                                @endif
                            </td>
                            <td>{{date('m/d/Y', strtotime($row->created_at))}}</td>
                         
                            
                            <td>
                                <a title="Edit" href="{{route('genre.edit',[$row->id])}}" class="tableLink action-edit-client"><i data-feather="edit"></i></a>
                           
                                <a title="Delete" href="{{route('genre.del',[$row->id])}}" onclick="return confirm('Are you sure you want to delete this genre?');" class="tableLink"><i data-feather="trash"></i></a>
                                @if($row->status == 0)
                                    <a title="Enable" href="{{route('genre.status',['g' => $row->id, 's' => 1])}}" class="tableLink"><i data-feather="check"></i></a>
                                @else
                                    <a title="Disable" href="{{route('genre.status',['g' => $row->id, 's' => 0])}}" class="tableLink"><i data-feather="slash"></i></a>
                                @endif
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