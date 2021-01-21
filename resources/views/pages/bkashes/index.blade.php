@extends('layouts.master')
@section('content')

<main class="page-content">
	@include('partials.messages')
	<div class="container-fluid">
		<h1 class="text-center text-white bg-dark">Add bkash</h1>
      <div class="form-group">
      	<form class="form-horizontal" action="{{ route('bkash.store') }}" method="post" enctype="multipart/form-data">
      		@csrf
          <div class="row">
              <hr class="w-100">
              
              <div class="col-md-3 col-sm-12  form-group">
                <label>In or Out</label>
                <select id="supplier_id" name="in_or_out" class="form-control">
                  <option>Select </option> 
                    <option value="0">Out</option>
                    <option value="1">In</option>
                </select>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Amount</label>
                <div>
                  <input type="number" name="amount" class="form-control" id="supplier_address">
                </div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Trx Id</label>
                <div>
                	<input type="text" name="trx_id" class="form-control" id="supplier_address">
                </div>
              </div>

              <div class="col-md-3 col-sm-12  form-group">
                <label>Date</label>
                <div>
                	<input type="date" name="date" class="form-control" id="supplier_phone">
              	</div>
              </div>
              <div class="col-md-3 col-sm-12  form-group">
                <label>Current Balance</label>
                <div>
                  <input type="number" name="current_balance" class="form-control" id="supplier_address">
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
        <h1 class="text-center text-white bg-dark">All bKash</h1>
        <div class="container mb-12 mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">Trx ID </th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">In or Out</th>
                                    <th scope="col">Current Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bkashes as $bkash)
                                    <tr>
                                        <td>
                                            {{ $bkash->trx_id}} 
                                        </td>
                                        <td>{{ $bkash->amount}}</td>
                                        <td>
                                          @if($bkash->in_or_out == 0)
                                            <p>Out</p>
                                          @elseif($bkash->in_or_out == 1)
                                            <p>Out</p>
                                          @endif
                                        </td>
                                        <td>{{ $bkash->current_balance}}</td>
                                        <td>{{ $bkash->date}}</td>
                                    </tr>
                                @endforeach    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">Trx ID </th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">In or Out</th>
                                    <th scope="col">Current Amount</th>
                                    <th scope="col">Date</th>
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