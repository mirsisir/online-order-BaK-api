
<div class="form-group">
    <div class="col-md-10">
        <label for="questions">Questions</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('questions') ? 'is-invalid' : '' }}" name="questions" type="text" id="questions" value="{{ old('questions', optional($faqContent)->questions) }}" minlength="1" data=" required="true""  placeholder="Enter questions here...">

            {!! $errors->first('questions', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="answer">Answer</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('answer') ? 'is-invalid' : '' }}" name="answer" type="text" id="answer" value="{{ old('answer', optional($faqContent)->answer) }}" minlength="1" data=" required="true""  placeholder="Enter answer here...">

            {!! $errors->first('answer', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="FaqCategory_id">Faq Category</label>


            <select class="form-control" id="FaqCategory_id" name="FaqCategory_id" required="true">
        	    <option value="" style="display: none;" {{ old('FaqCategory_id', optional($faqContent)->FaqCategory_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select faq category</option>
        	@foreach ($faqCategories as $key => $faqCategory)
			    <option value="{{ $key }}" {{ old('FaqCategory_id', optional($faqContent)->FaqCategory_id) == $key ? 'selected' : '' }}>
			    	{{ $faqCategory }}
			    </option>
			@endforeach
        </select>
        
            {!! $errors->first('FaqCategory_id', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

