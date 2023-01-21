
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($checklist)->name) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="checklist_category_id">Checklist Category</label>


            <select class="form-control" id="checklist_category_id" name="checklist_category_id">
        	    <option value="" style="display: none;" {{ old('checklist_category_id', optional($checklist)->checklist_category_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select checklist category</option>
        	@foreach ($checklistCategories as $key => $checklistCategory)
			    <option value="{{ $key }}" {{ old('checklist_category_id', optional($checklist)->checklist_category_id) == $key ? 'selected' : '' }}>
			    	{{ $checklistCategory }}
			    </option>
			@endforeach
        </select>
        
            {!! $errors->first('checklist_category_id', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="is_In40_Checklist">Is  In40  Checklist</label>


            <div class="checkbox">
            <label for="is_In40_Checklist_1">
            	<input id="is_In40_Checklist_1" class="" name="is_In40_Checklist" type="checkbox" value="1" {{ old('is_In40_Checklist', optional($checklist)->is_In40_Checklist) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

            {!! $errors->first('is_In40_Checklist', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="is_In50_Checklist">Is  In50  Checklist</label>


            <div class="checkbox">
            <label for="is_In50_Checklist_1">
            	<input id="is_In50_Checklist_1" class="" name="is_In50_Checklist" type="checkbox" value="1" {{ old('is_In50_Checklist', optional($checklist)->is_In50_Checklist) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

            {!! $errors->first('is_In50_Checklist', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

