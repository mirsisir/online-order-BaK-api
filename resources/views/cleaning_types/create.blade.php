@extends('layouts.admin_base')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Cleaning Type</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('cleaning_types.cleaning_type.index') }}" class="btn btn-primary" title="Show All Cleaning Type">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Cleaning Type
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('cleaning_types.cleaning_type.store') }}" accept-charset="UTF-8" id="create_cleaning_type_form" name="create_cleaning_type_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('cleaning_types.form', [
                                        'cleaningType' => null,
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


