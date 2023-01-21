@extends('layouts.admin_base')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Faq Content</h5>

            <div class="btn-group btn-group-sm" role="group">
                <a href="{{ route('faq_contents.faq_content.index') }}" class="btn btn-primary" title="Show All Faq Content">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Faq Content
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('faq_contents.faq_content.store') }}" accept-charset="UTF-8" id="create_faq_content_form" name="create_faq_content_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('faq_contents.form', [
                                        'faqContent' => null,
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


