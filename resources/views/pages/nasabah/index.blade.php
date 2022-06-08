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
                <h3 class="mb-0">Lists</h3>
                </div>
                <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
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