@extends('layouts.admin_base')
@section('content')

    <div class="card">

        <div class="card-header">

            <h5  class="my-1 float-left">{{ !empty($faqCategory->name) ? $faqCategory->name : 'Faq Category' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('faq_categories.faq_category.index') }}" class="btn btn-primary mr-2" title="Show All Faq Category">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Faq Category
                </a>

                <a href="{{ route('faq_categories.faq_category.create') }}" class="btn btn-success" title="Create New Faq Category">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Faq Category
                </a>

            </div>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('faq_categories.faq_category.update', $faqCategory->id) }}" id="edit_faq_category_form" name="edit_faq_category_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('faq_categories.form', [
                                        'faqCategory' => $faqCategory,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
