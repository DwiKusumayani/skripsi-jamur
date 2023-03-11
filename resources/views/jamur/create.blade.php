@extends('layouts.template')
@section('content')
  <div class="row gy-5 g-xl-12">
    <div class="col-xl-12">
      <h1>Manajemen Jamur</h1>
    </div>
    <!--begin::Col-->
    <div class="col-xl-12">
      <!--begin::List Widget 3-->
      <div class="card card-xl-stretch mb-xl-8">
        <div class="card-header border-0">
          <h3 class="card-title fw-bolder">Tambah Data</h3>
        </div>
        <div class="card-body pt-2">
          <form action="{{ route('jamur.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Nama Jamur</label>
                  <input type="text" class="form-control form-control-solid" name="nama"
                    placeholder="Masukkan Nama Jamur" required />
                </div>
              </div>
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Tahap Pertumbuhan</label>
                  <select name="tahap_pertumbuhan" class="form-control form-control-solid" required>
                    <option value="Miselia">Miselia</option>
                    <option value="Primordia">Primordia</option>
                    <option value="Tubuh Buah">Tubuh Buah</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="fv-row mb-8 fv-plugins-icon-container">
                  <!--begin::Label-->
                  <label class="required fs-6 fw-bold mb-2">Tanggal Tanam</label>
                  <input type="date" class="form-control form-control-solid" name="tanggal" required />
                </div>
              </div>
            </div>

            <button type="submit" href="#" class="btn btn-success">Simpan</button>
            <a href="/jamur" class="btn btn-secondary">Kembali</a>
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
