@extends('layouts.admin_base')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ !empty($title) ? $title : 'Service Order' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('service_orders.service_order.index') }}" class="btn btn-primary mr-2" title="Show All Service Order">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Service Order
                </a>

                <a href="{{ route('service_orders.service_order.create') }}" class="btn btn-success" title="Create New Service Order">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Service Order
                </a>

            </div>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('service_orders.service_order.update', $serviceOrder->id) }}" id="edit_service_order_form" name="edit_service_order_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('service_orders.form', [
                                        'serviceOrder' => $serviceOrder,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
