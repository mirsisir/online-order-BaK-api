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

            <h5  class="my-1 float-left">Faq Contents</h5>

            <div class="btn-group btn-group-sm  " role="group">
                <a href="{{ route('faq_contents.faq_content.create') }}" class="btn btn-success" title="Create New Faq Content">
                    <i class="fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Faq Content
                </a>
            </div>

        </div>

        @if(count($faqContents) == 0)
            <div class="card-body text-center">
                <h4>No Faq Contents Available.</h4>
            </div>
        @else
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                                <th>Questions</th>
                            <th>Answer</th>
                            <th>Faq Category</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($faqContents as $faqContent)
                        <tr>
                                <td>{{ $faqContent->questions }}</td>
                            <td>{{ $faqContent->answer }}</td>
                            <td>{{ optional($faqContent->faqCategory)->name }}</td>

                            <td>

                                <form method="POST" action="{!! route('faq_contents.faq_content.destroy', $faqContent->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-sm float-right " role="group">
                                        <a href="{{ route('faq_contents.faq_content.show', $faqContent->id ) }}"title="Show Faq Content">
                                            <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('faq_contents.faq_content.edit', $faqContent->id ) }}" class="mx-4" title="Edit Faq Content">
                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" style="border: none;background: transparent"  title="Delete Faq Content" onclick="return confirm(&quot;Click Ok to delete Faq Content.&quot;)">
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
            {!! $faqContents->render() !!}
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


