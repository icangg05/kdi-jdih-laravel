<div class="form-group field-{{ $key }} @error($key) has-error @enderror">
  <label class="control-label col-sm-2" for="{{ $key }}">
    {{ $label }}
    <span style="color: {{ !empty($required) && $required ? 'red' : 'gray' }}">*</span>
  </label>
  <div class="col-sm-8">
    <input type="hidden" name="{{ $key }}" value="">
    <input type="file" id="{{ $key }}" class="form-control file-loading" name="{{ $key }}"
      data-krajee-fileinput="{{ $key }}">
    @error($key)
      <p class="help-block help-block-error">{{ $message }}</p>
    @enderror
  </div>
</div>


@push('link')
  <style>
    .fileinput-upload-button {
      display: none;
    }
  </style>
@endpush

@push('script')
  <script>
    var mimes = @json($mimes ?? []);
    console.log(mimes);

    window.{{ $key }} = {
      "allowedFileExtensions": mimes,
      "showUpload": false,
      "language": "en",
      "resizeImage": false,
      "autoOrientImage": true,
      "purifyHtml": true
    };

    jQuery(function($) {
      if (jQuery('#{{ $key }}').data('fileinput')) {
        jQuery('#{{ $key }}').fileinput('destroy');
      }
      jQuery('#{{ $key }}').fileinput({{ $key }});
    })
  </script>
@endpush
