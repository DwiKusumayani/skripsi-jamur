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
        <div class="card-body pt-2">
          <h4 for="" class="mt-4">Filter Jamur</h4>
          <div class="filter d-flex col-4">
            <select class="form-control form-control-solid" id="filter-jamur" aria-label="Select example">
              <option selected>Semua Jamur</option>
              @foreach ($jamur as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>
          <!--begin::Datatable-->
          <table id="datatable" class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
              <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th>
                  No.
                </th>
                <th>Nama Jamur</th>
                <th>Suhu</th>
                <th>Kelembapan Udara</th>
                <th>Tahap Pertumbuhan</th>
                <th>Status Kipas</th>
                <th>Status Mist Maker</th>
                <th>Status Lampu</th>
                <th>Status Tirai</th>
                <th>Waktu</th>
                <th class="text-end min-w-100px">Actions</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 fw-bold">

            </tbody>
          </table>
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
  <script>
    let jamur =$('#filter-jamur').val();
    let dataTable = $('#datatable').DataTable({
      dom: 'lBfrtip',
      buttons: [{
        className: 'btn btn-warning btn-sm mr-2',
        text: 'Reload',
        action: function(e, dt, node, config) {
          reloadDatatable();
          Toast.fire({
            icon: 'success',
            title: 'Reload'
          })
        }
      }],
      responsive: true,
      processing: true,
      serverSide: true,
      searching: true,
      pageLength: 5,
      lengthMenu: [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      ajax: {
        url: "{{ route('monitoring-jamur.index') }}",
        type: 'GET',
        data: {
            'filter': function () {
                        return jamur;
                    }
        }
      },
      columns: [{
          data: 'DT_RowIndex',
          orderable: false
        },
        {
          data: 'jamur.nama',
          orderable: true
        },
        {
          data: 'suhu',
          orderable: true
        },
        {
          data: 'kelembapan_udara',
          orderable: true
        },
        {
          data: 'status_kipas',
          orderable: true
        },
        {
          data: 'status_mist_maker',
          orderable: true
        },
        {
          data: 'status_lampu',
          orderable: true
        },
        {
          data: 'status_tirai',
          orderable: true
        },
        {
          data: 'tahap_pertumbuhan',
          orderable: true
        },
        {
          data: 'waktu',
          orderable: true
        },
        {
          data: 'action',
          name: '#',
          orderable: false
        },
      ]
    });

    function reloadDatatable() {
      dataTable.ajax.reload();
    }

    $('#filter-jamur').on('change',function(){
        console.log($('#filter-jamur').val())
        jamur =$('#filter-jamur').val();
        dataTable.draw();
    })
    let child_url = "{{ route('monitoring-jamur.index') }}";
  </script>
@endpush
