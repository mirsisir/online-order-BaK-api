@extends('layouts.admin_base')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($title) ? $title : 'Faq Content' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('faq_contents.faq_content.destroy', $faqContent->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('faq_contents.faq_content.index') }}" class="btn btn-primary mr-2" title="Show All Faq Content">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Faq Content
                    </a>

                    <a href="{{ route('faq_contents.faq_content.create') }}" class="btn btn-success mr-2" title="Create New Faq Content">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Faq Content
                    </a>

                    <a href="{{ route('faq_contents.faq_content.edit', $faqContent->id ) }}" class="btn btn-primary mr-2" title="Edit Faq Content">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Faq Content
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Faq Content" onclick="return confirm(&quot;Click Ok to delete Faq Content.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Faq Content
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Questions</dt>
            <dd>{{ $faqContent->questions }}</dd>
            <dt>Answer</dt>
            <dd>{{ $faqContent->answer }}</dd>
            <dt>Faq Category</dt>
            <dd>{{ optional($faqContent->faqCategory)->name }}</dd>

        </dl>

    </div>
</div>

@endsection
