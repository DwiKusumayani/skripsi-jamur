@extends('layouts.template')
@section('content')
  <div class="row gy-5 g-xl-12">
    <div class="col-xl-12">
      <h1>Kendali Alat</h1>
    </div>
    <!--begin::Col-->
    <div class="col-xl-12">
      <!--begin::List Widget 3-->
      <div class="card card-xl-stretch mb-xl-8">
        <div class="card-header border-0">
          <h3 class="card-title fw-bolder">Ubah Data</h3>
        </div>
        <div class="card-body pt-2">
          <form action="{{ route('kendali-alat.update',$item->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-12">
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-bold mb-2">Jamur</label>
                      <select name="jamur_id" class="form-control form-control-solid" required>
                        <option value selected disabled>==Pilih Salah Satu==</option>
                        @foreach ($jamurs as $jamur)
                            <option value="{{ $jamur->id }}" @if($jamur->id == $item->jamur_id) selected @endif >{{ $jamur->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Nama Alat</label>
                  <input type="text" class="form-control form-control-solid" name="nama_alat"
                    placeholder="Masukkan Nama Alat" required value="{{ $item->nama_alat }}" />
                </div>
              </div>
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Tahap Pertumbuhan</label>
                  <select name="tahap_pertumbuhan" class="form-control form-control-solid" required>
                    <option value="Miselia" @if($item->tahap_pertumbuhan=='Miselia') selected @endif>Miselia</option>
                    <option value="Primordia" @if($item->tahap_pertumbuhan=='Primordia') selected @endif>Primordia</option>
                    <option value="Tubuh Buah"  @if($item->tahap_pertumbuhan=='Tubuh Buah') selected @endif>Tubuh Buah</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Suhu Minimum</label>
                  <input type="number" class="form-control form-control-solid" name="suhu_min"  step="0.01" value="{{ $item->suhu_min }}" required />
                </div>
              </div>
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Suhu Maksimum</label>
                  <input type="number" class="form-control form-control-solid" name="suhu_max"  step="0.01" value="{{ $item->suhu_max }}" required />
                </div>
              </div>

               <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Kelembapan Udara Minimum</label>
                  <input type="number" class="form-control form-control-solid" name="kelembapan_udara_min"  step="0.01" value="{{ $item->kelembapan_udara_min }}" required />
                </div>
              </div>

              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Kelembapan Udara Maksimum</label>
                  <input type="number" class="form-control form-control-solid" name="kelembapan_udara_max"  step="0.01"   value="{{ $item->kelembapan_udara_max }}" required />
                </div>
              </div>
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Jam</label>
                  <input type="time" class="form-control form-control-solid"  value="{{ $item->jam }}"  name="jam" required />
                </div>
              </div>
            </div>

            <button type="submit" href="#" class="btn btn-success">Simpan</button>
            <a href="{{ route('kendali-alat.index') }}" class="btn btn-secondary">Kembali</a>
          </form>
          <!--begin::Datatable-->

          <!--end:Item-->
        </div>
        <!--end::Body-->
      </div>
      <!--end:List Widget 3-->
    </div>
    <!--end::Col-->
  </div>
@endsection

@push('js')
  <script></script>
@endpush
