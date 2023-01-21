@extends('layouts.admin_base')

@section('content')

    <div class="card">

        <div class="card-header">

            <h5  class="my-1 float-left">{{ !empty($title) ? $title : 'Faq Content' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('faq_contents.faq_content.index') }}" class="btn btn-primary mr-2" title="Show All Faq Content">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Faq Content
                </a>

                <a href="{{ route('faq_contents.faq_content.create') }}" class="btn btn-success" title="Create New Faq Content">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Faq Content
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

            <form method="POST" action="{{ route('faq_contents.faq_content.update', $faqContent->id) }}" id="edit_faq_content_form" name="edit_faq_content_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('faq_contents.form', [
                                        'faqContent' => $faqContent,
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
