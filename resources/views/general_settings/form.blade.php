
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($generalSettings)->name) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="value">Value</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('value') ? 'is-invalid' : '' }}" name="value" type="text" id="value" value="{{ old('value', optional($generalSettings)->value) }}" minlength="1" data=" required="true""  placeholder="Enter value here...">

            {!! $errors->first('value', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="description">Description</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" type="text" id="description" value="{{ old('description', optional($generalSettings)->description) }}" data=""  placeholder="Enter description here...">

            {!! $errors->first('description', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

