
<div class="form-group">
    <div class="col-md-10">
        <label for="CouponName">Coupon Name</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('CouponName') ? 'is-invalid' : '' }}" name="CouponName" type="text" id="CouponName" value="{{ old('CouponName', optional($coupon)->CouponName) }}" minlength="1" required="true"  placeholder="Enter coupon name here...">

            {!! $errors->first('CouponName', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="discountType">Discount Type</label>


            <select class="form-control" id="discountType" name="discountType" required="true">
        	    <option value="" style="display: none;" {{ old('discountType', optional($coupon)->discountType ?: '') == '' ? 'selected' : '' }} disabled selected>Enter discount type here...</option>
        	@foreach (['flat' => 'Flat',
'percent' => '%'] as $key => $text)
			    <option value="{{ $key }}" {{ old('discountType', optional($coupon)->discountType) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

            {!! $errors->first('discountType', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="amount">Amount</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" type="text" id="amount" value="{{ old('amount', optional($coupon)->amount) }}" minlength="1" data=" required="true""  placeholder="Enter amount here...">

            {!! $errors->first('amount', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="expDate">Exp Date</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        
        <input class="form-control  {{ $errors->has('expDate') ? 'is-invalid' : '' }}" name="expDate"
               type="date" id="expDate" value="{{ old('expDate', optional($coupon)->expDate) }}"
               required placeholder="Enter exp date here...">

            {!! $errors->first('expDate', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="isUsed">Is Used</label>


            <select class="form-control" id="isUsed" name="isUsed">
        	    <option value="" style="display: none;" {{ old('isUsed', optional($coupon)->isUsed ?: '') == '' ? 'selected' : '' }} disabled selected>Enter is used here...</option>
        	@foreach (['0' => 'No',
'1' => 'Yes'] as $key => $text)
			    <option value="{{ $key }}" {{ old('isUsed', optional($coupon)->isUsed) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

            {!! $errors->first('isUsed', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="UseType">Use Type</label>


            <select class="form-control" id="UseType" name="UseType">
        	    <option value="" style="display: none;" {{ old('UseType', optional($coupon)->UseType ?: '') == '' ? 'selected' : '' }} disabled selected>Enter use type here...</option>
        	@foreach (['single' => 'Single Use',
'multiple' => 'Multiple Use'] as $key => $text)
			    <option value="{{ $key }}" {{ old('UseType', optional($coupon)->UseType) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>

            {!! $errors->first('UseType', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

