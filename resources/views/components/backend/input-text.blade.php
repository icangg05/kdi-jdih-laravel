<div class="form-group @error($key) has-error @enderror">
  <label class="control-label col-sm-2" for="{{ $key }}">
    {{ $label }}
    <span style="color: {{ !empty($required) && $required ? 'red' : 'gray' }}">*</span>
  </label>
  <div class="col-sm-10">
    <input value="{{ old($key, $value) }}" type="text" id="{{ $key }}" class="form-control" name="{{ $key }}" maxlength="255">
    @error($key)
      <p class="help-block help-block-error">{{ $message }}</p>
    @enderror
  </div>
</div>
