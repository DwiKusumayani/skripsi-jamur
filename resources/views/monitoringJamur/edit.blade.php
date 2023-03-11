@extends('layouts.template')
@section('content')
  <div class="row gy-5 g-xl-12">
    <div class="col-xl-12">
      <h1>Monitoring Jamur</h1>
    </div>
    <!--begin::Col-->
    <div class="col-xl-12">
      <!--begin::List Widget 3-->
      <div class="card card-xl-stretch mb-xl-8">
        <div class="card-header border-0">
          <h3 class="card-title fw-bolder">Ubah Data</h3>
        </div>
        <div class="card-body pt-2">
         <form action="{{ route('jamur.update',$item->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-12">
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-bold mb-2">Pilih Jamur</label>
                      <select name="tahap_pertumbuhan" class="form-control form-control-solid" required>
                        @foreach ($jamurs as $jamurs)
                        <option value="Miselia" @if($item->jamur_id==$jamur->id) selected @endif>{{ $jamur->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                <div class="col-12">
                  <div class="fv-row mb-8 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold mb-2">Suhu</label>
                    <input type="number" class="form-control form-control-solid" name="suhu" value="{{ $item->suhu }}" required />
                  </div>
                  <div class="col-12">
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-bold mb-2">Kelembapan Udara</label>
                      <input type="number" class="form-control form-control-solid" name="kelembapan_udara" value="{{ $item->kelembapan_udara }}" required />
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
