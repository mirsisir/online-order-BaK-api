@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($cleaningCharge->name) ? $cleaningCharge->name : 'Cleaning Charge' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('cleaning_charges.cleaning_charge.destroy', $cleaningCharge->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('cleaning_charges.cleaning_charge.index') }}" class="btn btn-primary mr-2" title="Show All Cleaning Charge">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Cleaning Charge
                    </a>

                    <a href="{{ route('cleaning_charges.cleaning_charge.create') }}" class="btn btn-success mr-2" title="Create New Cleaning Charge">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Cleaning Charge
                    </a>

                    <a href="{{ route('cleaning_charges.cleaning_charge.edit', $cleaningCharge->id ) }}" class="btn btn-primary mr-2" title="Edit Cleaning Charge">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Cleaning Charge
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Cleaning Charge" onclick="return confirm(&quot;Click Ok to delete Cleaning Charge.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Cleaning Charge
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $cleaningCharge->name }}</dd>
            <dt>Type</dt>
            <dd>{{ $cleaningCharge->type }}</dd>
            <dt>Charge</dt>
            <dd>{{ $cleaningCharge->charge }}</dd>
            <dt>Description</dt>
            <dd>{{ $cleaningCharge->description }}</dd>

        </dl>

    </div>
</div>

@endsection
