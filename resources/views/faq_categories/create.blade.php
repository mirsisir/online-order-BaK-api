@extends('layouts.admin_base')
@section('content')

    <div class="card">

        <div class="card-header">

            <h5  class="my-1 float-left">Create New Faq Category</h5>

            <div class="btn-group btn-group-sm float-right" role="group">
                <a href="{{ route('faq_categories.faq_category.index') }}" class="btn btn-primary" title="Show All Faq Category">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Faq Category
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('faq_categories.faq_category.store') }}" accept-charset="UTF-8" id="create_faq_category_form" name="create_faq_category_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('faq_categories.form', [
                                        'faqCategory' => null,
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


