@extends('layouts.admin_base')
@section('content')

<div class="card">
    <div class="card-header">

        <h5  class="my-1 float-left">{{ isset($checklist->name) ? $checklist->name : 'Checklist' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('checklists.checklist.destroy', $checklist->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('checklists.checklist.index') }}" class="btn btn-primary mr-2" title="Show All Checklist">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Checklist
                    </a>

                    <a href="{{ route('checklists.checklist.create') }}" class="btn btn-success mr-2" title="Create New Checklist">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Checklist
                    </a>

                    <a href="{{ route('checklists.checklist.edit', $checklist->id ) }}" class="btn btn-primary mr-2" title="Edit Checklist">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Checklist
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Checklist" onclick="return confirm(&quot;Click Ok to delete Checklist.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Checklist
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $checklist->name }}</dd>
            <dt>Checklist Category</dt>
            <dd>{{ optional($checklist->checklistCategory)->name }}</dd>
            <dt>Is  In40  Checklist</dt>
            <dd>{{ ($checklist->is_In40_Checklist) ? 'Yes' : 'No' }}</dd>
            <dt>Is  In50  Checklist</dt>
            <dd>{{ ($checklist->is_In50_Checklist) ? 'Yes' : 'No' }}</dd>

        </dl>

    </div>
</div>

@endsection
