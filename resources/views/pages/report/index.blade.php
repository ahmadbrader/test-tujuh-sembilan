@extends('layouts.master')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
    <div class="header-body">
        <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Nasabah</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="/transaksi/add" class="btn btn-sm btn-neutral">New</a>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                <h3 class="mb-0">Lists</h3>
                </div>
                
                <div class="table-responsive py-4 px-4">
                    <div class="py-4">
                        <form method="get">
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Customer</label>
                                        <select class="form-control" name="customer_id">
                                            @foreach ($users as $index => $value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="exampleInputEmail1">Start Date</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" name="start">
                                </div>
                                <div class="col-4">
                                    <label for="exampleInputEmail1">End Date</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" name="end">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                            <a href="/report"><button type="submit" class="btn btn-danger">Reset</button></a>
                            
                        </form>
                    </div> 
                <table class="table table-flush" id="list_report">
                    <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Transaction Date</th>
                        <th>Description</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $index => $value)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{date('d-m-Y', strtotime($value->transaction_date))}}</td>
                            <td>{{$value->desc}}</td>
                            @if($value->debit_credit_status == 'C')
                            <td>{{$value->amount}}</td>
                            <td>-</td>
                            @elseif($value->debit_credit_status == 'D')
                            <td>-</td>
                            <td>{{$value->amount}}</td>
                            @endif
                            <td>{{$value->amount}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function () {
    $('#list_report').DataTable({
      dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
            },
            {
                extend: 'pdfHtml5'
            }
        ]
    });
   
});
</script>
@endsection