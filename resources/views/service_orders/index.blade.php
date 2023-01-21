@extends('layouts.admin_base')

@section('content')

    @if(Session::has('success_message'))
     <div class="alert alert-success d-flex justify-content-between alert-dismissible fade show" role="alert">
            <div>
                <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
                {!! session('success_message') !!}
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif

    <div class="card" >

        <div class="card-header d-flex align-items-center justify-content-between">

            <h5  class="my-1 float-left">Service Orders</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('service_orders.service_order.create') }}" class="btn btn-success" title="Create New Service Order">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Service Order
                </a>
            </div>

        </div>

        @if(count($serviceOrders) == 0)
            <div class="card-body text-center">
                <h4>No Service Orders Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm serviceOrder" id="serviceOrder">
                    <thead>
                        <tr>
                                <th>Location</th>
                            <th>Number Of Bathrooms</th>
                            <th>Number Of Bedrooms</th>
                            <th>Clean Type</th>
                            <th>Recurring</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Address</th>
                            <th>Apt</th>
                            <th>Zip Code</th>
                            <th>Way In</th>
                            <th>Add One</th>
                            <th>Have Pets ?</th>
                            <th>Is Paid</th>
                            <th>Status</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Contact Option</th>
                            <th>Total</th>

                            <th></th>
                        </tr>
                        OrderConfirmationMail
                    </thead>
                    <tbody>
                    @foreach($serviceOrders as $serviceOrder)
                        <tr>
                                <td>{{ $serviceOrder->location }}</td>
                            <td>{{ $serviceOrder->numberOfBathrooms }}</td>
                            <td>{{ $serviceOrder->numberOfBedrooms }}</td>
                            <td>{{ $serviceOrder->cleanType }}</td>
                            <td>{{ $serviceOrder->recurring }}</td>
                            <td>{{ $serviceOrder->date }}</td>
                            <td>{{ $serviceOrder->time }}</td>
                            <td>{{ $serviceOrder->address }}</td>
                            <td>{{ $serviceOrder->apt }}</td>
                            <td>{{ $serviceOrder->zipCode }}</td>
                            <td>{{ $serviceOrder->wayIn }}</td>
                            <td>{{ $serviceOrder->addOne }}</td>
                            <td>{{ $serviceOrder->havePets }}</td>
                            <td>{{ ($serviceOrder->isPaid) ? 'Yes' : 'No' }}</td>
                            <td>{{ $serviceOrder->status }}</td>
                            <td>{{ $serviceOrder->full_name }}</td>
                            <td>{{ $serviceOrder->email }}</td>
                            <td>{{ $serviceOrder->phone }}</td>
                            <td>{{ $serviceOrder->contactOption }}</td>
                            <td>{{ $serviceOrder->total }}</td>

                            <td>

                                <form method="POST" action="{!! route('service_orders.service_order.destroy', $serviceOrder->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('service_orders.service_order.show', $serviceOrder->id ) }}"title="Show Service Order">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('service_orders.service_order.edit', $serviceOrder->id ) }}" class="mx-4" title="Edit Service Order">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Service Order" onclick="return confirm(&quot;Click Ok to delete Service Order.&quot;)">
                                            <i class=" fas  fa-trash text-danger" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        @endif

    </div>



@endsection

@section('scripts')

    <script>



        $(document).ready(function() {
            $('#serviceOrder').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'colvis'
                ]
            } );
        } );
    </script>

     <style>
         .dataTables_filter {
             float: right;
         }
        i:hover { color: #0248fa !important; }

         html, body {
             margin: 0;
             padding: 0;
             font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
             font-size: 14px;
         }

         #calendar {
             max-width: 900px;
             margin: 40px auto;
         }
     </style>


@endsection


