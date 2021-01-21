@extends('layouts.master')
@section('content')

<main class="page-content">
	@include('partials.messages')
	<div class="container-fluid">
		<h1 class="text-center text-white bg-dark">Add Suppliers</h1>
      <div class="form-group">
      	<form class="form-horizontal" action="{{ route('supplier.store') }}" method="post" enctype="multipart/form-data">
      		@csrf
          <div class="row">
            <div class="row" id="row">
              <hr class="w-100">
              
              <div class="col-md-3 col-sm-12  form-group">
                <label>Supplier Name</label>
                <div>
                	<input type="text" name="supplier_name" class="form-control" id="supplier_name">
                </div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Supplier Address</label>
                <div>
                	<input type="text" name="supplier_address" class="form-control" id="supplier_address">
                </div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Supplier Phone</label>
                <div>
                	<input type="text" name="supplier_phone" class="form-control" id="supplier_phone">
              	</div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Supplier shop name</label>
                <div>
                  <input type="text" name="supplier_shop" class="form-control" id="supplier_shop">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12  form-group text-center">
              <button type="submit" class="btn btn-primary" id="add_supplier">Save</button>
          </div>
          </div>                
        </form>
      </div>
    </div>
    <div class="container-fluid">
        <h1 class="text-center text-white bg-dark">Supplier</h1>
        <div class="container mb-4 mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">Name </th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Shop name</th>
                                    <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td>
                                            {{ $supplier->name}} 
                                        </td>
                                        <td>
                                            {{ $supplier->address}}    
                                        </td>
                                        <td>{{ $supplier->shop_name}}</td>
                                        <td>
                                            {{ $supplier->phone}}
                                        </td>
                                        
                                    </tr>
                                @endforeach    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">Name </th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Phone</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
        $(document).ready(function() {
          var table = $('#dataTable').DataTable( {
              responsive: true
          } );
       
          new $.fn.dataTable.FixedHeader( table );
        });
      </script>
      <script>
		// $(document).ready(function() {
		   	
		//     $('#add_employee').on('click', function() {
		//       var name = $('#emp_name').val();
		//       var address = $('#emp_address').val();
		//       var phone = $('#emp_phone').val();
		//       var role = $('#emp_role').val();
		//       if(name!="" && address!="" && phone!="" && role!=""){
		//         //   $("#butsave").attr("disabled", "disabled");
		//           $.ajax({
		//               url: "http://localhost:8000/employees/store",
		//               type: "POST",
		//               data: {
		//                   _token: $("#csrf").val(),
		//                   type: 1,
		//                   name: name,
		//                   address: address,
		//                   phone: phone,
		//                   role: role,
		//               },
		//               cache: false,
		//               success: function(dataResult){
		//                   console.log(dataResult);
		//                   $('#emp_name').val('');
		//                   $('#emp_address').val('');
		//                   $('#emp_phone').val('');
		//                   $('#emp_role').val('');
		//                   var dataResult = JSON.parse(dataResult);
		//                   if(dataResult.statusCode==200){
		//                     window.location = "/employees/store";				
		//                   }
		//                   else if(dataResult.statusCode==201){
		//                      alert("Error occured !");
		//                   }
		                  
		//               }
		//           });
		//       }
		//       else{
		//           alert('Please fill all the field !');
		//       }
		//   });
		// });
	</script>
@endsection