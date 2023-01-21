@extends('layouts.admin_base')
@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="card">

        <div class="card-header d-flex align-items-center justify-content-between">

            <h5  class="my-1 float-left">Checklists</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('checklists.checklist.create') }}" class="btn btn-success" title="Create New Checklist">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Checklist
                </a>
            </div>

        </div>

        @if(count($checklists) == 0)
            <div class="card-body text-center">
                <h4>No Checklists Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                                <th>Name</th>
                            <th>Checklist Category</th>
                            <th>Is  In40  Checklist</th>
                            <th>Is  In50  Checklist</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($checklists as $checklist)
                        <tr>
                                <td>{{ $checklist->name }}</td>
                            <td>{{ optional($checklist->checklistCategory)->name }}</td>
                            <td>{{ ($checklist->is_In40_Checklist) ? 'Yes' : 'No' }}</td>
                            <td>{{ ($checklist->is_In50_Checklist) ? 'Yes' : 'No' }}</td>

                            <td>

                                <form method="POST" action="{!! route('checklists.checklist.destroy', $checklist->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('checklists.checklist.show', $checklist->id ) }}"title="Show Checklist">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('checklists.checklist.edit', $checklist->id ) }}" class="mx-4" title="Edit Checklist">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Checklist" onclick="return confirm(&quot;Click Ok to delete Checklist.&quot;)">
                                            <i class=" fas  fa-trash text-danger" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="card-footer">
            {!! $checklists->render() !!}
        </div>

        @endif

    </div>
@endsection

@section('scripts')

     <script>
         $(document).ready(function () {
             $('table').DataTable({
                 responsive: true,
                 "order": [],
                 dom: 'lBfrtip',
                 buttons: [
                     'copy', 'excel', 'pdf', 'print'
                 ]

             });
         });
     </script>

     <style>
         .dataTables_filter {
             float: right;
         }
        i:hover { color: #0248fa !important; }

     </style>


@endsection


