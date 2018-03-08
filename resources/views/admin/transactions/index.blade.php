@extends('layouts.admin')
@section('content')
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-file-text"></i>
                Transactions
            </h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Date Requested</th>
                            <th>Date Picked Up</th>
                            <th>Date Delivered</th>
                            <th>Date Paid</th>
                        </tr>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td></td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->date_requested}}</td>
                                <td>{{$transaction->date_pickedup}}</td>
                                <td>{{$transaction->date_delivered}}</td>
                                <td>{{$transaction->date_paid}}</td>
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection