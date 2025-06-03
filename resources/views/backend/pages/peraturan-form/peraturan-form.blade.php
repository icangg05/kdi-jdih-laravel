<x-layouts.backend title="Tambah Data Peraturan" :listNav="[['label' => 'Peraturan', 'route' => 'backend.peraturan.index'], ['label' => 'Tambah Data Peraturan']]">
  <div class="box-body no-padding">
    <div class="section">
      <form id="w0" class="form-horizontal" action="/backend/peraturan/create" method="post"
        enctype="multipart/form-data">

        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <b>Form Data Utama</b>
          </div>
          <div class="box-body">
            {{-- Jenis peraturan --}}
            <x-backend.input-select
              label="Jenis Peraturan"
              key="jenis_peraturan"
              placeholder="Pilih tipe pengelolaan..."
              required
              :value="$peraturan->jenis_peraturan ?? ''"
              :data="$selectTipeDokumen"
            />
            {{-- Bentuk peraturan --}}
            <x-backend.input-select
              label="Bentuk Peraturan"
              key="bentuk_peraturan"
              placeholder="Pilih tipe peraturan..."
              required
              :value="$peraturan->bentuk_peraturan ?? ''"
              :data="$selectTipeDokumen"
            />

            {{-- Judul --}}
            <x-backend.input-textarea
              label="Judul"
              key="judul"
              placeholder="Tulis lengkap judul peraturan"
              required
              :value="$peraturan->judul ?? ''"
            />

            {{-- Tahun terbit --}}
            <x-backend.input-text
              label="Tahun" 
              key="tahun_terbit" 
              placeholder="Tulis tahun peraturan" 
              required
              :value="$peraturan->tahun_terbit ?? ''" 
            />

            {{-- Tempat penetapan --}}
            <x-backend.input-select
              label="Tempat Penetapan"
              key="tempat_penetapan"
              placeholder="Pilih tempat penetapan..."
              required
              :value="$peraturan->tempat_penetapan ?? ''"
              :data="$selectTempatPenetapan"
            />

            {{-- Tanggal penetapan --}}
            <x-backend.input-date
              label="Tanggal Penetapan" 
              key="tanggal_penetapan" 
              placeholder="Tulis tanggal penetapan" 
              required
              :value="$peraturan->tanggal_penetapan ?? ''" 
            />

            {{-- Penandatanganan --}}
            <x-backend.input-text
              label="Penandatanganan" 
              key="penandatanganan" 
              placeholder="Tulis penandatangan peraturan" 
              :value="$peraturan->penandatanganan ?? ''" 
            />

            {{-- Tanggal pengundangan --}}
            <x-backend.input-date
              label="Tanggal Pengundangan" 
              key="tanggal_pengundangan" 
              placeholder="Tulis tanggal pengundangan" 
              :value="$peraturan->tanggal_pengundangan ?? ''" 
            />

            {{-- Pemrakarsa --}}
            <x-backend.input-text
              label="Pemrakarsa" 
              key="pemrakarsa" 
              placeholder="Tulis pemrakarsa" 
              :value="$peraturan->pemrakarsa ?? ''" 
            />

            {{-- Sumber --}}
            <x-backend.input-textarea
              label="Sumber"
              key="sumber"
              placeholder="Contoh LN Nomor 21 Tahun 2017"
              :value="$peraturan->sumber ?? ''"
            />

            {{-- Tempat penetapan --}}
            <x-backend.input-select
              label="Bahasa"
              key="bahasa"
              placeholder="--Silahkan pilih--"
              :value="$peraturan->bahasa ?? ''"
              :data="$selectBahasa"
            />

            {{-- Urusan pemerintahan --}}
            <x-backend.input-select
              label="Urusan Pemerintahan"
              key="urusan_pemerintahan"
              placeholder="--Silahkan pilih--"
              :value="$peraturan->urusan_pemerintahan ?? ''"
              :data="$selectUrusanPemerintahan"
            />

            {{-- Bidang hukum --}}
            <x-backend.input-select
              label="Bidang Hukum"
              key="bidang_hukum"
              placeholder="--Silahkan pilih--"
              :value="$peraturan->bidang_hukum ?? ''"
              :data="$selectBidangHukum"
            />
          </div>
        </div>

        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <b>Form Data Dokumen</b>
          </div>
          <div class="box-body">
            {{-- Judul lampiran --}}
            <x-backend.input-text
              label="Judul Lampiran" 
              key="judul_lampiran" 
              placeholder="Tulis judul lampiran" 
              :value="$peraturan->judul_lampiran ?? ''" 
            />

            {{-- Judul --}}
            <x-backend.input-textarea
              label="Deskripsi Lampiran"
              key="deskripsi_lampiran"
              rows="2"
              placeholder="Tulis deskripsi lampiran"
              :value="$peraturan->judul ?? ''"
            />

            {{-- Dokumen Lampiran --}}
            <x-backend.input-file-small label="Dokumen Lampiran" key="dokumen_lampiran" :mimes="['pdf']" />
            
            {{-- Abstrak --}}
            <x-backend.input-file-small label="Abstrak" key="abstrak" :mimes="['pdf']" />
          </div>
        </div>

        <button type="submit" class="btn btn-success btn-flat">Simpan</button>
        <a href="{{ route('backend.peraturan.index') }}" class="btn btn-danger btn-flat">Batal</a>
      </form>
    </div>
  </div>
</x-layouts.backend>
