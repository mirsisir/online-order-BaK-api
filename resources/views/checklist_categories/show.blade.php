@extends('layouts.admin_base')
@section('content')

<div class="card">
    <div class="card-header">

        <h5  class="my-1 float-left">{{ isset($checklistCategory->name) ? $checklistCategory->name : 'Checklist Category' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('checklist_categories.checklist_category.destroy', $checklistCategory->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('checklist_categories.checklist_category.index') }}" class="btn btn-primary mr-2" title="Show All Checklist Category">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Checklist Category
                    </a>

                    <a href="{{ route('checklist_categories.checklist_category.create') }}" class="btn btn-success mr-2" title="Create New Checklist Category">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Checklist Category
                    </a>

                    <a href="{{ route('checklist_categories.checklist_category.edit', $checklistCategory->id ) }}" class="btn btn-primary mr-2" title="Edit Checklist Category">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Checklist Category
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Checklist Category" onclick="return confirm(&quot;Click Ok to delete Checklist Category.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Checklist Category
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $checklistCategory->name }}</dd>

        </dl>

    </div>
</div>

@endsection
