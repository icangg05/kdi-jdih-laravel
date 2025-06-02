<div class="form-group field-pengumuman-status @error($key) has-error @enderror">
  <label class="control-label col-sm-2" for="pengumuman-status">
    {{ $label }}
    <span style="color: {{ !empty($required) && $required ? 'red' : 'gray' }}">*</span>
  </label>
  <div class="col-sm-8">
    <select id="pengumuman-status" class="form-control" name="{{ $key }}">
      <option value="">{{ !empty($placeholder) ? $placeholder : 'Pilih...' }}</option>
      @foreach ($data as $item)
        <option @selected(old($key, $value) != '' && old($key, $value) == $item['value']) value="{{ $item['value'] }}">{{ $item['label'] }}</option>
      @endforeach 
    </select>
    @error($key)
      <p class="help-block help-block-error">{{ $message }}</p>
    @enderror
  </div>
</div>
