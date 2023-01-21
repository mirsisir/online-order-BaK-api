@extends('layouts.admin_base')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($cleaningType->name) ? $cleaningType->name : 'Cleaning Type' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('cleaning_types.cleaning_type.destroy', $cleaningType->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('cleaning_types.cleaning_type.index') }}" class="btn btn-primary mr-2" title="Show All Cleaning Type">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Cleaning Type
                    </a>

                    <a href="{{ route('cleaning_types.cleaning_type.create') }}" class="btn btn-success mr-2" title="Create New Cleaning Type">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Cleaning Type
                    </a>

                    <a href="{{ route('cleaning_types.cleaning_type.edit', $cleaningType->id ) }}" class="btn btn-primary mr-2" title="Edit Cleaning Type">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Cleaning Type
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Cleaning Type" onclick="return confirm(&quot;Click Ok to delete Cleaning Type.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Cleaning Type
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $cleaningType->name }}</dd>
            <dt>Charge</dt>
            <dd>{{ $cleaningType->charge }}</dd>
            <dt>Category</dt>
            <dd>{{ $cleaningType->category }}</dd>
            <dt>Description</dt>
            <dd>{{ $cleaningType->description }}</dd>

        </dl>

    </div>
</div>

@endsection
