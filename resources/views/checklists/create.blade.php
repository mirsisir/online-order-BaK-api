@extends('layouts.admin_base')
@section('content')

    <div class="card">

        <div class="card-header">

            <h5  class="my-1 float-left">Create New Checklist</h5>

            <div class="btn-group btn-group-sm float-right" role="group">
                <a href="{{ route('checklists.checklist.index') }}" class="btn btn-primary" title="Show All Checklist">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Checklist
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('checklists.checklist.store') }}" accept-charset="UTF-8" id="create_checklist_form" name="create_checklist_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('checklists.form', [
                                        'checklist' => null,
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


