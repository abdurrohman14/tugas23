@extends('admin.admin_master')
@section('admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Product</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('products.update', $editData->id) }}">
                        @csrf
						<div class="row">
                             <!-- End col md-6 -->
							<div class="col-md-6">
								<div class="form-group">
                                    <h5>Product Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_name" value="{{ $editData->product_name }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
							</div>
						
                             <!-- End col md-6 -->

                            <div class="col-md-6">
								<div class="form-group">
                                    <h5>Category ID <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="category_id" value="{{ $editData->category_id }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
							</div>

                            <div class="col-md-6">
								<div class="form-group">
                                    <h5>Product Code<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_code" value="{{ $editData->product_code }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
							</div>

                            <div class="col-md-6">
								<div class="form-group">
                                    <h5>Description <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="description" value="{{ $editData->description }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
							</div>

                            <div class="col-md-6">
								<div class="form-group">
                                    <h5>Price<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="price" value="{{ $editData->price }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
							</div>

                            <div class="col-md-6">
								<div class="form-group">
                                    <h5>Stock<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="stock" value="{{ $editData->stock }}" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
							</div>
						</div>
                        <!-- End row select -->
                        </div>
                        <!-- End row -->
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<script src="{{ asset('backend/js/pages/form-validation.js') }}"></script>