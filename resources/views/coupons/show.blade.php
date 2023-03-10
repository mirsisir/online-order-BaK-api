@extends('layouts.admin_base')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($title) ? $title : 'Coupon' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('coupons.coupon.destroy', $coupon->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('coupons.coupon.index') }}" class="btn btn-primary mr-2" title="Show All Coupon">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Coupon
                    </a>

                    <a href="{{ route('coupons.coupon.create') }}" class="btn btn-success mr-2" title="Create New Coupon">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Coupon
                    </a>

                    <a href="{{ route('coupons.coupon.edit', $coupon->id ) }}" class="btn btn-primary mr-2" title="Edit Coupon">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Coupon
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Coupon" onclick="return confirm(&quot;Click Ok to delete Coupon.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Coupon
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Coupon Name</dt>
            <dd>{{ $coupon->CouponName }}</dd>
            <dt>Discount Type</dt>
            <dd>{{ $coupon->discountType }}</dd>
            <dt>Amount</dt>
            <dd>{{ $coupon->amount }}</dd>
            <dt>Exp Date</dt>
            <dd>{{ $coupon->expDate }}</dd>
            <dt>Is Used</dt>
            <dd>{{ $coupon->isUsed }}</dd>
            <dt>Use Type</dt>
            <dd>{{ $coupon->UseType }}</dd>

        </dl>

    </div>
</div>

@endsection
