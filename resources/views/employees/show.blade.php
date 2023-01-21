@extends('layouts.admin_base')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($employee->name) ? $employee->name : 'Employee' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('employees.employee.destroy', $employee->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('employees.employee.index') }}" class="btn btn-primary mr-2" title="Show All Employee">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Employee
                    </a>

                    <a href="{{ route('employees.employee.create') }}" class="btn btn-success mr-2" title="Create New Employee">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Employee
                    </a>

                    <a href="{{ route('employees.employee.edit', $employee->id ) }}" class="btn btn-primary mr-2" title="Edit Employee">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Employee
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Employee" onclick="return confirm(&quot;Click Ok to delete Employee.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Employee
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $employee->name }}</dd>
            <dt>Email</dt>
            <dd>{{ $employee->email }}</dd>
            <dt>Phone</dt>
            <dd>{{ $employee->phone }}</dd>
            <dt>Zip Code</dt>
            <dd>{{ $employee->zipCode }}</dd>
            <dt>Job Position</dt>
            <dd>{{ $employee->JobPosition }}</dd>
            <dt>Time O F Working</dt>
            <dd>{{ $employee->TimeOFWorking }}</dd>
            <dt>Is Smartphone</dt>
            <dd>{{ $employee->Smartphone }}</dd>
            <dt>Languages</dt>
            <dd>{{ $employee->languages }}</dd>
            <dt>Allergies</dt>
            <dd>{{ $employee->allergies }}</dd>
            <dt>Is Experience Cleaning</dt>
            <dd>{{ $employee->IsExperienceCleaning }}</dd>

        </dl>

    </div>
</div>

@endsection
