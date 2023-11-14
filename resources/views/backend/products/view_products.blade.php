@extends('admin.admin_master')
@section('admin')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Product</h3>
                <a href="{{ route('products.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Product</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Product Name</th>
                              <th>Category ID</th>
                              <th>Product Code</th>
                              <th>Description</th>
                              <th>Price</th>
                              <th>Stock</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataPr as $key => $pr)
                          <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $pr->product_name }}</td>
                              <td>{{ $pr->category_id }}</td>
                              <td>{{ $pr->product_code }}</td>
                              <td>{{ $pr->description }}</td>
                              <td>{{ $pr->price }}</td>
                              <td>{{ $pr->stock }}</td>
                              <td>
                                <a href="{{ route('products.edit', $pr->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('products.delete', $pr->id) }}" id= "delete" class="btn btn-danger">Delete</a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

           
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection

<!-- Vendor JS -->
<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/pages/data-table.js')}}"></script>