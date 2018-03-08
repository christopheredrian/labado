@extends('layouts.admin')
@section('content')
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-file-text"></i>
                @if($type=='r')
                    Requests
                @else
                    Transactions
                @endif

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
                            @if($type=='r')
                                <th>Date Posted</th>
                            @else
                                <th>Date Picked Up</th>
                                <th>Date Delivered</th>
                                <th>Date Paid</th>
                            @endif

                        </tr>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$transaction->customer->first_name.' '.$transaction->customer->last_name}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->date_requested}}</td>
                                @if($type=='r')
                                    <th>{{$transaction->created_at}}</th>
                                @else
                                    <td>{{$transaction->date_pickedup}}</td>
                                    <td>{{$transaction->date_delivered}}</td>
                                    <td>{{$transaction->date_paid}}</td>
                                @endif
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection