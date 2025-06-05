<x-layouts.backend :title="$title" :listNav="[
    ['label' => 'Peraturan', 'route' => route('backend.peraturan.index')],
    ['label' => 'Detail', 'route' => route('backend.peraturan.show', $idDokumen)],
    ['label' => $title],
  ]"
>
  <div class="box-body no-padding">
    <form class="form-horizontal" action="{{ route('backend.form_teu.store', $idDokumen) }}" method="post">
      @csrf
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <b>Form {{ $title }}</b>
        </div>

        <div class="box-body">
          {{-- Nama pengarang --}}
          <x-backend.input-select
            label="Nama Pengarang"
            key="nama_pengarang"
            placeholder="--Pilih nama pengarang--"
            required
            :data="$pengarang"
          />

          {{-- Tipe pengarang --}}
          <x-backend.input-select
            label="Tipe Pengarang"
            key="tipe_pengarang"
            placeholder="--Pilih tipe pengarang--"
            required
            :data="$tipePengarang"
          />

          {{-- Tipe pengarang --}}
          <x-backend.input-select
            label="Tipe Pengarang"
            key="jenis_pengarang"
            placeholder="--Pilih jenis pengarang--"
            required
            :data="$jenisPengarang"
          />
        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-success btn-flat">
            <i class="fa fa-save"></i> Simpan</button>&nbsp;
          <a class="btn btn-danger btn-flat" href="{{ route("backend.peraturan.show", $idDokumen) }}">
            <i class="fa fa-remove"></i> Batal
          </a>&nbsp;
          <a class="btn btn-primary btn-flat" href="/backend/peraturan/tambah-pengarang2?id=553">
            <i class="fa fa-plus-circle"></i> Tambah TEU Baru
          </a>
        </div>
      </div>

    </form>
  </div>
</x-layouts.backend>
