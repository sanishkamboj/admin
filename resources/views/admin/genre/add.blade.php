 @extends('admin.layouts.app')
@section('content')
                <div class="container-fluid">
                    <div class="row page-title  no-display">
                        <div class="col-md-12">
                            <h4 class="mb-1 mt-0">Genres</h4>
                        </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col-md-12">
                            <div class="card">
                                <div class="card-body pt-2 pb-3 manageClinicSection">
                                    <h5 class="mt-3 mb-4">
										Create Genre
										<a href="{{route('genre.list')}}" class="float-right"><i data-feather="x"></i></a>					
									</h5>
									<form action="{{route('genre.create')}}" method="post" id="add_genre_form" enctype="multipart/form-data">
										@csrf
												
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Name<span class="required">*</span></label>
														<input type="text" name="name" id="name" class="form-control" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Banner Image<span class="required">*</span></label>
														<input type="file" name="b_image" id="b_image" class="form-control" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Cover Image<span class="required">*</span></label>
														<input type="file" name="c_image" id="c_image" class="form-control" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Description<span class="required">*</span></label>
														<textarea  name="Description" class="form-control" required /></textarea>
													</div>
												</div>
												
											
											</div>
						
                                  		<div class="mt-1 mb-1">
											<div class="text-left d-print-none mt-4">
												<button type="submit" id="save-genre-btn" class="btn btn-primary">Save</button>
												<a href="{{route('genre.list')}}" class="btn btn-light">Cancel</a>
											</div>
											
										</div>
									</form>
                            </div>
                          
                        </div>
                        
                        


                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
@endsection