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
										Edit @if($record->role_id == 1) Artist @else User @endif

															
									</h5>
									<form action="{{route('user.update', [$record->id])}}" method="post" id="edit_user_form" enctype="multipart/form-data">
										@csrf
												
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>First Name<span class="required">*</span></label>
														<input type="text" name="firstname" id="firstname" class="form-control" value="{{$record->first_name}}" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Last Name<span class="required">*</span></label>
														<input type="text" name="lastname" id="lastname" class="form-control" value="{{$record->last_name}}" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Email<span class="required">*</span></label>
														<input type="text" name="email" id="email" class="form-control" required value="{{$record->email}}" />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Phone<span class="required">*</span></label>
														<input type="text" name="phone" id="phone" class="form-control" value="{{$record->phone}}" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Mobile<span class="required">*</span></label>
														<input type="text" name="mobile" id="mobile" class="form-control" value="{{$record->mobile}}" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Street address<span class="required">*</span></label>
														<input type="text" name="street" id="street" class="form-control" value="{{$record->street}}" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>City<span class="required">*</span></label>
														<input type="text" name="city" id="city" class="form-control" value="{{$record->city}}" required />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Country<span class="required">*</span></label>
														<select class="form-control" id="country_id" name="country_id">
															<option value="">Select</option>
															@foreach($country as $c)
																<option value="{{$c->id}}" <?php if($record->country_id == $c->id){ ?> selected="selected" <?php } ?> >{{$c->name}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
													<div class="form-group">
														<label>Postcode<span class="required">*</span></label>
														<input type="text" name="postcode" id="postcode" class="form-control" value="{{$record->postcode}}" required />
													</div>
												</div>
											</div>
											
						
                                  		<div class="mt-1 mb-1">
											<div class="text-left d-print-none mt-4">
												<button type="submit" id="edit-user-btn" class="btn btn-primary">Update</button>
												
											</div>
											
										</div>
									</form>
                            </div>
                          
                        </div>
                        
                        


                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
@endsection