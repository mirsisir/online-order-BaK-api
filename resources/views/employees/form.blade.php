
<div class="form-group">
    <div class="col-md-10">
        <label for="name">Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" type="text" id="name" value="{{ old('name', optional($employee)->name) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter name here...">

            {!! $errors->first('name', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="email">Email</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email" id="email" value="{{ old('email', optional($employee)->email) }}" data=" required="true""  placeholder="Enter email here...">

            {!! $errors->first('email', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="phone">Phone</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" type="text" id="phone" value="{{ old('phone', optional($employee)->phone) }}" minlength="1" data=" required="true""  placeholder="Enter phone here...">

            {!! $errors->first('phone', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="zipCode">Zip Code</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('zipCode') ? 'is-invalid' : '' }}" name="zipCode" type="text" id="zipCode" value="{{ old('zipCode', optional($employee)->zipCode) }}" minlength="1" data=" required="true""  placeholder="Enter zip code here...">

            {!! $errors->first('zipCode', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="JobPosition">Job Position</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('JobPosition') ? 'is-invalid' : '' }}" name="JobPosition" type="text" id="JobPosition" value="{{ old('JobPosition', optional($employee)->JobPosition) }}" data=""  placeholder="Enter job position here...">

            {!! $errors->first('JobPosition', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="TimeOFWorking">Time O F Working</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('TimeOFWorking') ? 'is-invalid' : '' }}" name="TimeOFWorking" type="text" id="TimeOFWorking" value="{{ old('TimeOFWorking', optional($employee)->TimeOFWorking) }}" data=""  placeholder="Enter time o f working here...">

            {!! $errors->first('TimeOFWorking', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="Smartphone">Is Smartphone</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('Smartphone') ? 'is-invalid' : '' }}" name="Smartphone" type="text" id="Smartphone" value="{{ old('Smartphone', optional($employee)->Smartphone) }}" data=""  placeholder="Enter is smartphone here...">

            {!! $errors->first('Smartphone', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="languages">Languages</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('languages') ? 'is-invalid' : '' }}" name="languages" type="number" id="languages" value="{{ old('languages', optional($employee)->languages) }}" data=""  placeholder="Enter languages here...">

            {!! $errors->first('languages', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="allergies">Allergies</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('allergies') ? 'is-invalid' : '' }}" name="allergies" type="text" id="allergies" value="{{ old('allergies', optional($employee)->allergies) }}" data=""  placeholder="Enter allergies here...">

            {!! $errors->first('allergies', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="IsExperienceCleaning">Is Experience Cleaning</label>


            @if(''===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('IsExperienceCleaning') ? 'is-invalid' : '' }}" name="IsExperienceCleaning" type="text" id="IsExperienceCleaning" value="{{ old('IsExperienceCleaning', optional($employee)->IsExperienceCleaning) }}" data=""  placeholder="Enter is experience cleaning here...">

            {!! $errors->first('IsExperienceCleaning', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

