@extends('layouts.admin')
@section('content')
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-file-text"></i>
                Customers
            </h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>

                        </tr>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->phone}}</td>
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection