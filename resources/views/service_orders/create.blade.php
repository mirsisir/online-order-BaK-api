@extends('layouts.admin_base')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Service Order</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('service_orders.service_order.index') }}" class="btn btn-primary" title="Show All Service Order">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Service Order
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('service_orders.service_order.store') }}" accept-charset="UTF-8" id="create_service_order_form" name="create_service_order_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('service_orders.form', [
                                        'serviceOrder' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


