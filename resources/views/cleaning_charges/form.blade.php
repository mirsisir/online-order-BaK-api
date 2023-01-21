
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($cleaningCharge)->name) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="type">Type</label>


            <select class="form-control" id="type" name="type">
        	    <option value="" style="display: none;" {{ old('type', optional($cleaningCharge)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter type here...</option>
        	@foreach (['Bedrooms' => 'bedrooms',
'Bathrooms' => 'bathrooms'] as $key => $text)
			    <option value="{{ $key }}" {{ old('type', optional($cleaningCharge)->type) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
            {!! $errors->first('type', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="charge">Charge</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('charge') ? 'is-invalid' : '' }}" name="charge" type="text" id="charge" value="{{ old('charge', optional($cleaningCharge)->charge) }}" minlength="1" data=" required="true""  placeholder="Enter charge here...">

            {!! $errors->first('charge', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="description">Description</label>


            <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($cleaningCharge)->description) }}</textarea>
            {!! $errors->first('description', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

