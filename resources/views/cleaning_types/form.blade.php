
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($cleaningType)->name) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="charge">Charge % extra</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('charge') ? 'is-invalid' : '' }}" name="charge" type="text" id="charge" value="{{ old('charge', optional($cleaningType)->charge) }}" minlength="1" data=""  placeholder="Enter charge here...">

            {!! $errors->first('charge', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="category">Category</label>


            <select class="form-control" id="category" name="category" required="true">
        	    <option value="" style="display: none;" {{ old('category', optional($cleaningType)->category ?: '') == '' ? 'selected' : '' }} disabled selected>Enter category here...</option>
        	@foreach (['residential' => 'Residential',
'commercial' => 'Commercial'] as $key => $text)
			    <option value="{{ $key }}" {{ old('category', optional($cleaningType)->category) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

            {!! $errors->first('category', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="description">Description</label>


            <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($cleaningType)->description) }}</textarea>
            {!! $errors->first('description', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

