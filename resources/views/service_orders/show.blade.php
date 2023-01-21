@extends('layouts.admin_base')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($title) ? $title : 'Service Order' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('service_orders.service_order.destroy', $serviceOrder->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
{{--                    <a href="{{ route('service_orders.service_order.index') }}" class="btn btn-primary mr-2" title="Show All Service Order">--}}
{{--                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>--}}
{{--                        Show All Service Order--}}
{{--                    </a>--}}

{{--                    <a href="{{ route('service_orders.service_order.create') }}" class="btn btn-success mr-2" title="Create New Service Order">--}}
{{--                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>--}}
{{--                        Create New Service Order--}}
{{--                    </a>--}}

{{--                    <a href="{{ route('service_orders.service_order.edit', $serviceOrder->id ) }}" class="btn btn-primary mr-2" title="Edit Service Order">--}}
{{--                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>--}}
{{--                        Edit Service Order--}}
{{--                    </a>--}}

{{--                    <button type="submit" class="btn btn-danger" title="Delete Service Order" onclick="return confirm(&quot;Click Ok to delete Service Order.?&quot;)">--}}
{{--                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>--}}
{{--                        Delete Service Order--}}
{{--                    </button>--}}
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Location</dt>
            <dd>{{ $serviceOrder->location }}</dd>
            <dt>Number Of Bathrooms</dt>
            <dd>{{ $serviceOrder->numberOfBathrooms }}</dd>
            <dt>Number Of Bedrooms</dt>
            <dd>{{ $serviceOrder->numberOfBedrooms }}</dd>
            <dt>Clean Type</dt>
            <dd>{{ $serviceOrder->cleanType }}</dd>
            <dt>Recurring</dt>
            <dd>{{ $serviceOrder->recurring }}</dd>
            <dt>Date</dt>
            <dd>{{ $serviceOrder->date }}</dd>
            <dt>Time</dt>
            <dd>{{ $serviceOrder->time }}</dd>
            <dt>Address</dt>
            <dd>{{ $serviceOrder->address }}</dd>
            <dt>Apt</dt>
            <dd>{{ $serviceOrder->apt }}</dd>
            <dt>Zip Code</dt>
            <dd>{{ $serviceOrder->zipCode }}</dd>
            <dt>Way In</dt>
            <dd>{{ $serviceOrder->wayIn }}</dd>
            <dt>Add One</dt>
            <dd>{{ $serviceOrder->addOne }}</dd>
            <dt>Have Pets ?</dt>
            <dd>{{ $serviceOrder->havePets }}</dd>
            <dt>Note</dt>
            <dd>{{ $serviceOrder->note }}</dd>
            <dt>Is Paid</dt>
            <dd>{{ ($serviceOrder->isPaid) ? 'Yes' : 'No' }}</dd>
            <dt>Status</dt>
            <dd>{{ $serviceOrder->status }}</dd>
            <dt>Full Name</dt>
            <dd>{{ $serviceOrder->full_name }}</dd>
            <dt>Email</dt>
            <dd>{{ $serviceOrder->email }}</dd>
            <dt>Phone</dt>
            <dd>{{ $serviceOrder->phone }}</dd>
            <dt>Contact Option</dt>
            <dd>{{ $serviceOrder->contactOption }}</dd>
            <dt>Option1</dt>
            <dd>{{ $serviceOrder->option1 }}</dd>
            <dt>Option2</dt>
            <dd>{{ $serviceOrder->option2 }}</dd>
            <dt>Total</dt>
            <dd>{{ $serviceOrder->total ?? " " }}</dd>

        </dl>

    </div>
</div>

@endsection
