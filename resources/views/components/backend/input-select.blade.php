<div class="form-group field-pengumuman-status @error($key) has-error @enderror">
  <label class="control-label col-sm-2" for="{{ $key }}">
    {{ $label }}
    <span style="color: {{ !empty($required) && $required ? 'red' : 'gray' }}">*</span>
  </label>
  <div class="col-sm-8">
    <select id="{{ $key }}" class="{{ $key }} form-control" name="{{ $key }}" style="height: 34px">
      <option value="">{{ !empty($placeholder) ? $placeholder : 'Pilih...' }}</option>
      @foreach ($data as $item)
        <option @selected(old($key, $value) != '' && old($key, $value) == $item['value']) value="{{ $item['value'] }}">{{ $item['label'] }}</option>
      @endforeach
    </select>
  </div>

  @error($key)
    <p class="help-block help-block-error">{{ $message }}</p>
  @enderror
</div>

@push('link')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush

@push('script')
  <script>
    $(document).ready(function() {
      $('.{{ $key }}').select2();
    });
  </script>
@endpush
