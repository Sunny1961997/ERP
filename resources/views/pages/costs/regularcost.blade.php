@extends('layouts.master')
@section('content')

<main class="page-content">
	@include('partials.messages')
	<div class="container-fluid">
		<h1 class="text-center text-white bg-dark">Add Suppliers</h1>
      <div class="form-group">
      	<form class="form-horizontal" action="{{ route('regularcost.store') }}" method="post" enctype="multipart/form-data">
      		@csrf
          <div class="row">
              <hr class="w-100">
              
              <div class="col-md-3 col-sm-12  form-group">
                <label>Aspect</label>
                <div>
                	<select id="supplier_id" name="aspect" class="form-control">
                    <option>Select </option> 
                      <option value="1">Entertainment Cost</option>
                      <option value="2">Lunch Cost</option>
                </select>
                </div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Amount</label>
                <div>
                	<input type="number" name="cost" class="form-control" id="supplier_address">
                </div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Date</label>
                <div>
                	<input type="date" name="date" class="form-control" id="supplier_phone">
              	</div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Narration</label>
                <div>
                  <textarea name="narration" class="form-control"></textarea>
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
        <h1 class="text-center text-white bg-dark">Suppler Payments</h1>
        <div class="container mb-4 mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">Aspect </th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Narration</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($regularcosts as $regularcost)
                                    <tr>
                                        <td>
                                            {{ $regularcost->aspect}} 
                                        </td>
                                        <td>
                                            {{ $regularcost->cost}}    
                                        </td>
                                        <td>{{ $regularcost->date}}</td>
                                        <td>
                                            {{ $regularcost->narration }}
                                        </td>
                                        
                                    </tr>
                                @endforeach    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">NaAspectme </th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Narration</th>
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
      
@endsection