@extends('layouts.admin_base')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Employee</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('employees.employee.index') }}" class="btn btn-primary" title="Show All Employee">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Employee
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('employees.employee.store') }}" accept-charset="UTF-8" id="create_employee_form" name="create_employee_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('employees.form', [
                                        'employee' => null,
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


