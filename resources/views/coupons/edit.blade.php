@extends('layouts.admin_base')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ !empty($title) ? $title : 'Coupon' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('coupons.coupon.index') }}" class="btn btn-primary mr-2" title="Show All Coupon">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Coupon
                </a>

                <a href="{{ route('coupons.coupon.create') }}" class="btn btn-success" title="Create New Coupon">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Coupon
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

            <form method="POST" action="{{ route('coupons.coupon.update', $coupon->id) }}" id="edit_coupon_form" name="edit_coupon_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('coupons.form', [
                                        'coupon' => $coupon,
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
