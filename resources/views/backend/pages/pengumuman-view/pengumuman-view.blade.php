<x-layouts.backend title="Detail Pengumuman" :listNav="[['label' => 'Pengumuman', 'route' => 'backend.pengumuman.index'], ['label' => 'Detail Pengumuman']]">
  <div class="box-body table-responsive no-padding">
    <div class="box box-primary box-solid">
      <div class="box-header with-border">
        <b>Detail Data Pengumuman</b>
      </div>
      <div class="box-body">
        <div class="box-header">
          <a class="btn btn-success btn-flat" href="{{ route('backend.pengumuman.index') }}">
            <i class="fa fa-mail-reply"></i> Kembali
          </a>
          <a class="btn btn-primary btn-flat" href="{{ route('backend.pengumuman.edit', $pengumuman->id) }}">
            <i class="fa fa-pencil"></i> Ubah
          </a>
          <form style="display: inline" action="{{ route('backend.pengumuman.destroy', $pengumuman->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" style="outline: none" class="btn btn-danger btn-flat"
              data-confirm="Yakin menghapus data ini?">
              <i class="fa fa-trash"></i> Hapus
            </button>
          </form>
          <p></p>
        </div>
        <table class="table table-striped table-bordered detail-view">
          <tr>
            <th>Tanggal</th>
            <td>
              {{ Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}</td>
          </tr>
          <tr>
            <th>Judul</th>
            <td>
              {{ $pengumuman->judul }}</td>
          </tr>
          <tr>
            <th>Tag</th>
            <td>{{ $pengumuman->tag }}</td>
          </tr>
          <tr>
            <th>Isi</th>
            <td>
              {!! $pengumuman->isi !!}
            </td>
          </tr>
          <tr>
            <th class="text-nowrap">Foto Pengumuman</th>
            @php
              $image = checkFilePath(config('app.img_directory'), $pengumuman->image)
                  ? 'storage/' . config('app.img_directory') . $pengumuman->image
                  : config('app.default_img');
            @endphp
            <td>
              <img style="border: 1px solid #cccccc" src="{{ asset($image) }}" width="300" alt="image.jpg">
            </td>
          </tr>
          <tr>
            <th>Dokumen Pengumuman</th>
            <td>
              @if (checkFilePath(config('app.doc_directory'), $pengumuman->dokumen))
                <form action="{{ route('download_file') }}" method="POST">
                  @csrf
                  <input type="hidden" name="filePath"
                    value="{{ config('app.doc_directory') . $pengumuman->dokumen }}">
                  <button type="submit" class="btn btn-primary btn-sm">Download</button>
                </form>
              @else
                <button disabled class="btn btn-primary btn-sm" style="opacity: .5">Download</a>
              @endif
            </td>
          </tr>
          <tr>
            <th>Status</th>
            <td>{{ $pengumuman->status == 1 ? 'Publish' : 'Tidak Publish' }}</td>
          </tr>
          <tr>
            <th>Created At</th>
            <td>
              {{ Carbon\Carbon::parse($pengumuman->created_at)->translatedFormat('d F Y, H:i:s') }}</td>
          </tr>
          <tr>
            <th>Created By</th>
            <td>{{ ucfirst($pengumuman->created_by) }}</td>
          </tr>
          <tr>
            <th>Update At</th>
            <td>
              {{ Carbon\Carbon::parse($pengumuman->updated_at)->translatedFormat('d F Y, H:i:s') }}</td>
          </tr>
          <tr>
            <th>Updated By</th>
            <td>{{ ucfirst($pengumuman->updated_by) }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</x-layouts.backend>
