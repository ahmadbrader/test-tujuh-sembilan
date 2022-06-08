@extends('layouts.master')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
    <div class="header-body">
        <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Transaksi</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="/nasabah/add" class="btn btn-sm btn-neutral">New</a>
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
                <h3 class="mb-0">Add</h3>
                </div>
                
                <div class="table-responsive py-4 px-4">
                    <form method="post" action="/transaksi/save">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer</label>
                            <select class="form-control" name="customer_id">
                                @foreach ($users as $index => $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Debit Credit Status</label>
                            <select class="form-control" name="debit_credit_status">
                                <option value="C">Credit</option>
                                <option value="D">Debit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Amount</label>
                            <input type="number" class="form-control" name="amount">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <select class="form-control" name="desc">
                                <option value="Setor Tunai">Setor Tunai</option>
                                <option value="Beli Pulsa">Beli Pulsa</option>
                                <option value="Bayar Listrik">Bayar Listrik</option>
                                <option value="Tarik Tunai">Tarik Tunai</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection