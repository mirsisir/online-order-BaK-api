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

    <div class="card">

        <div class="card-header d-flex align-items-center justify-content-between">

            <h5  class="my-1 float-left">Coupons</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('coupons.coupon.create') }}" class="btn btn-success" title="Create New Coupon">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Coupon
                </a>
            </div>

        </div>

        @if(count($coupons) == 0)
            <div class="card-body text-center">
                <h4>No Coupons Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                                <th>Coupon Name</th>
                            <th>Discount Type</th>
                            <th>Amount</th>
                            <th>Exp Date</th>
                            <th>Is Used</th>
                            <th>Use Type</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($coupons as $coupon)
                        <tr>
                                <td>{{ $coupon->CouponName }}</td>
                            <td>{{ $coupon->discountType }}</td>
                            <td>{{ $coupon->amount }}</td>
                            <td>{{ $coupon->expDate }}</td>
                            <td>{{ $coupon->isUsed }}</td>
                            <td>{{ $coupon->UseType }}</td>

                            <td>

                                <form method="POST" action="{!! route('coupons.coupon.destroy', $coupon->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('coupons.coupon.show', $coupon->id ) }}"title="Show Coupon">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('coupons.coupon.edit', $coupon->id ) }}" class="mx-4" title="Edit Coupon">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Coupon" onclick="return confirm(&quot;Click Ok to delete Coupon.&quot;)">
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

        <div class="card-footer">
            {!! $coupons->render() !!}
        </div>

        @endif

    </div>
@endsection

@section('scripts')

     <script>
         $(document).ready(function () {
             $('table').DataTable({
                 responsive: true,
                 "order": [],
                 dom: 'lBfrtip',
                 buttons: [
                     'copy', 'excel', 'pdf', 'print'
                 ]

             });
         });
     </script>

     <style>
         .dataTables_filter {
             float: right;
         }
        i:hover { color: #0248fa !important; }

     </style>


@endsection


