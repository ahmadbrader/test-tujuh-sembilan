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
                <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Transaction Date</th>
                        <th>Description</th>
                        <th>Debit Credit</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $index => $value)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$value->user->name}}</td>
                            <td>{{date('d-m-Y', strtotime($value->transaction_date))}}</td>
                            <td>{{$value->desc}}</td>
                            <td>{{$value->debit_credit_status == 'C' ? 'Credit' : 'Debit'}}</td>
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