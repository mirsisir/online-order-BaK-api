@extends('layouts.admin_base')
@section('content')

<div class="card">
    <div class="card-header">

        <h5  class="my-1 float-left">{{ isset($faqCategory->name) ? $faqCategory->name : 'Faq Category' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('faq_categories.faq_category.destroy', $faqCategory->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('faq_categories.faq_category.index') }}" class="btn btn-primary mr-2" title="Show All Faq Category">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Faq Category
                    </a>

                    <a href="{{ route('faq_categories.faq_category.create') }}" class="btn btn-success mr-2" title="Create New Faq Category">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Faq Category
                    </a>

                    <a href="{{ route('faq_categories.faq_category.edit', $faqCategory->id ) }}" class="btn btn-primary mr-2" title="Edit Faq Category">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Faq Category
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Faq Category" onclick="return confirm(&quot;Click Ok to delete Faq Category.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Faq Category
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $faqCategory->name }}</dd>

        </dl>

    </div>
</div>

@endsection
