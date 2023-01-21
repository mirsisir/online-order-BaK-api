
@php
         $bathrooms = App\Models\cleaningCharge::query()->where('type','Bathrooms')->get();
         $bedrooms = App\Models\cleaningCharge::query()->where('type','Bedrooms')->get();
         $cleaningTypes = App\Models\cleaningType::all();
@endphp
<div class="form-group">
    <div class="col-md-10">
        <label for="location">Location</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location" type="text" id="location" value="{{ old('location', optional($serviceOrder)->location) }}" minlength="1" data=" required="true""  placeholder="Enter location here...">

            {!! $errors->first('location', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="numberOfBathrooms">Number Of Bathrooms</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif


        <select name="numberOfBathrooms" id="numberOfBathrooms" class="form-control">
            <option value=""></option>
            @foreach($bathrooms as $bathroom)
            <option value="{{$bathroom->id}}" @if($bathroom->id == optional($serviceOrder)->numberOfBathrooms) selected @endif>{{$bathroom->name}}</option>
            @endforeach
        </select>
            {!! $errors->first('numberOfBathrooms', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="numberOfBedrooms">Number Of Bedrooms</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif


        <select name="numberOfBedrooms"  id="numberOfBedrooms" class="form-control">
            <option value=""></option>
            @foreach($bedrooms as $bedroom)
                <option value="{{$bedroom->id}}" @if($bedroom->id == optional($serviceOrder)->numberOfBedrooms) selected @endif>
                    {{$bedroom->name}}</option>
            @endforeach
        </select>

            {!! $errors->first('numberOfBedrooms', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="cleanType">Clean Type</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <select name="cleanType"  id="cleanType" class="form-control">
            <option value=""></option>
            @foreach($cleaningTypes as $cleaningType)
                <option value="{{$cleaningType->id}}" @if($cleaningType->id == optional($serviceOrder)->cleanType) selected @endif>
                    {{$cleaningType->name}}</option>
            @endforeach
        </select>

            {!! $errors->first('cleanType', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="recurring">Recurring</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('recurring') ? 'is-invalid' : '' }}" name="recurring" type="text" id="recurring" value="{{ old('recurring', optional($serviceOrder)->recurring) }}" minlength="1" data=""  placeholder="Enter recurring here...">

            {!! $errors->first('recurring', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="date">Date</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('date') ? 'is-invalid' : '' }}" name="date" type="date"
               id="date" value="{{ old('date', optional($serviceOrder)->date) }}"   placeholder="Enter date here...">

            {!! $errors->first('date', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="time">Time</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('time') ? 'is-invalid' : '' }}" name="time" type="time" id="time"
               value="{{ old('time', optional($serviceOrder)->time) }}"
               placeholder="Enter time here...">

            {!! $errors->first('time', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="address">Address</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" type="text" id="address" value="{{ old('address', optional($serviceOrder)->address) }}" minlength="1" data=""  placeholder="Enter address here...">

            {!! $errors->first('address', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="apt">Apt</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('apt') ? 'is-invalid' : '' }}" name="apt" type="text" id="apt" value="{{ old('apt', optional($serviceOrder)->apt) }}" minlength="1" data=""  placeholder="Enter apt here...">

            {!! $errors->first('apt', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="zipCode">Zip Code</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('zipCode') ? 'is-invalid' : '' }}" name="zipCode" type="text" id="zipCode" value="{{ old('zipCode', optional($serviceOrder)->zipCode) }}" minlength="1" data=" required="true""  placeholder="Enter zip code here...">

            {!! $errors->first('zipCode', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="wayIn">Way In</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('wayIn') ? 'is-invalid' : '' }}" name="wayIn" type="text" id="wayIn" value="{{ old('wayIn', optional($serviceOrder)->wayIn) }}" minlength="1" data=""  placeholder="Enter way in here...">

            {!! $errors->first('wayIn', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="addOne">Add One</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('addOne') ? 'is-invalid' : '' }}" name="addOne" type="text" id="addOne" value="{{ old('addOne', optional($serviceOrder)->addOne) }}" minlength="1" data=""  placeholder="Enter add one here...">

            {!! $errors->first('addOne', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="havePets">Have Pets ?</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('havePets') ? 'is-invalid' : '' }}" name="havePets" type="text" id="havePets" value="{{ old('havePets', optional($serviceOrder)->havePets) }}" minlength="1" data=""  placeholder="Enter have pets here...">

            {!! $errors->first('havePets', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="note">Note</label>


            <textarea class="form-control" name="note" cols="50" rows="10" id="note" minlength="1" maxlength="1000">{{ old('note', optional($serviceOrder)->note) }}</textarea>
            {!! $errors->first('note', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="isPaid">Is Paid</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif

        <input  class="form-check-label"   name="isPaid" type="checkbox" id="isPaid" value="{{ old('isPaid', optional($serviceOrder)->isPaid) }}">


            {!! $errors->first('isPaid', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>


<div class="form-group">
    <div class="col-md-10">
        <label for="full_name">Full Name</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('full_name') ? 'is-invalid' : '' }}" name="full_name" type="text" id="full_name" value="{{ old('full_name', optional($serviceOrder)->full_name) }}" minlength="1" data=""  placeholder="Enter full-Name here...">

            {!! $errors->first('full_name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="email">Email</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email" id="email" value="{{ old('email', optional($serviceOrder)->email) }}" data=" required="true""  placeholder="Enter email here...">

            {!! $errors->first('email', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="phone">Phone</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" type="text" id="phone" value="{{ old('phone', optional($serviceOrder)->phone) }}" minlength="1" data=" required="true""  placeholder="Enter phone here...">

            {!! $errors->first('phone', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="contactOption">Contact Option</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('contactOption') ? 'is-invalid' : '' }}" name="contactOption" type="text" id="contactOption" value="{{ old('contactOption', optional($serviceOrder)->contactOption) }}" minlength="1" data=""  placeholder="Enter contact option here...">

            {!! $errors->first('contactOption', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="status">Status</label>


        <select class="form-control" id="status" name="status">
            <option value="" style="display: none;" {{ old('status', optional($serviceOrder)->status ?: '') == '' ? 'selected' : '' }} disabled selected>Enter status here...</option>
            @foreach (['pending' => 'Pending',
                        'hold' => 'Hold',
                        'working' => 'Working',
                        'rejected' => 'Rejected',
                        'completed' => 'Completed'] as $key => $text)
                <option value="{{ $key }}" {{ old('status', optional($serviceOrder)->status) == $key ? 'selected' : '' }}>
                    {{ $text }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('status', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>


