<div class="form-group row">
    <label for="{{$inputBag}}[currency]"
           class="col-lg-2 col-form-label"
    >@lang('admin/settings/settings.currency'):</label>
    <div class="col-lg-2">
        <input type="text"
               name="{{$inputBag}}[currency]"
               id="{{$inputBag}}[currency]"
               onkeyup="this.classList.remove('is-invalid')"
               value="{{ old("{$inputBag}.currency", (isset($chSite)? $chSite->currency : '') ) }}"
               class="form-control @if($errors->$inputBag->has('currency')) is-invalid @endif"
        />
    </div>
</div>
{{-- @HOOK_AFTER_CURRENCY --}}

<div class="form-group row">
    <label for="{{$inputBag}}[vat]"
           class="col-lg-2 col-form-label"
    >@lang('admin/settings/settings.vat'):</label>
    <div class="col-lg-2">
        <input type="text"
               name="{{$inputBag}}[vat]"
               id="{{$inputBag}}[vat]"
               onkeyup="this.classList.remove('is-invalid')"
               value="{{ old("{$inputBag}.vat", (isset($chSite)? $chSite->vat : '') ) }}"
               class="form-control @if($errors->$inputBag->has('vat')) is-invalid @endif"
        />
    </div>
</div>
{{-- @HOOK_AFTER_VAT --}}

<div class="form-group row form-check">
    <div class="col-lg-6">
        <input type="checkbox"
               value="1"
               id="{{$inputBag}}[vat_in_price]"
               name="{{$inputBag}}[vat_in_price]"
               class="form-check-input @if($errors->$inputBag->has('vat_in_price'))is-invalid @endif"
               @if(old("{$inputBag}.vat_in_price") || (is_null(old("{$inputBag}.vat_in_price")) && isset($chSite) && $chSite->vat_in_price ))checked="checked"@endif
        />
        <label class="form-check-label"
               for="{{$inputBag}}[vat_in_price]">@lang('admin/settings/settings.vat_in_price')</label>
    </div>
</div>
{{-- @HOOK_AFTER_VAT_IN_PRICE --}}

<div class="form-group row form-check">
    <div class="col-lg-6">
        <input type="checkbox"
               value="1"
               id="{{$inputBag}}[vat_in_delivery]"
               name="{{$inputBag}}[vat_in_delivery]"
               class="form-check-input @if($errors->$inputBag->has('vat_in_delivery'))is-invalid @endif"
               @if(old("{$inputBag}.vat_in_delivery") || (is_null(old("{$inputBag}.vat_in_delivery")) && isset($chSite) && $chSite->vat_in_delivery ))checked="checked"@endif
        />
        <label class="form-check-label"
               for="{{$inputBag}}[vat_in_delivery]">@lang('admin/settings/settings.vat_in_delivery')</label>
    </div>
</div>
{{-- @HOOK_AFTER_VAT_IN_DELIVERY --}}

<div class="form-group row form-check">
    <div class="col-lg-6">
        <input type="checkbox"
               value="1"
               id="{{$inputBag}}[vat_in_payment]"
               name="{{$inputBag}}[vat_in_payment]"
               class="form-check-input @if($errors->$inputBag->has('vat_in_payment'))is-invalid @endif"
               @if(old("{$inputBag}.vat_in_payment") || (is_null(old("{$inputBag}.vat_in_payment")) && isset($chSite) && $chSite->vat_in_payment ))checked="checked"@endif
        />
        <label class="form-check-label"
               for="{{$inputBag}}[vat_in_payment]">@lang('admin/settings/settings.vat_in_payment')</label>
    </div>
</div>
{{-- @HOOK_AFTER_VAT_IN_PAYMENT --}}

<div class="form-group row form-check">
    <div class="col-lg-6">
        <input type="checkbox"
               value="1"
               id="{{$inputBag}}[minus_quantities]"
               name="{{$inputBag}}[minus_quantities]"
               class="form-check-input @if($errors->$inputBag->has('minus_quantities'))is-invalid @endif"
               @if(old("{$inputBag}.minus_quantities") || (is_null(old("{$inputBag}.minus_quantities")) && isset($chSite) && $chSite->minus_quantities ))checked="checked"@endif
        />
        <label class="form-check-label"
               for="{{$inputBag}}[minus_quantities]">@lang('admin/settings/settings.minus_quantities')</label>
    </div>
</div>
{{-- @HOOK_AFTER_MINUS_QUANITY --}}
