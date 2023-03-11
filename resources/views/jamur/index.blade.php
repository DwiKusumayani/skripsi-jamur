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
        <div class="card-body pt-2">

          <!--begin::Datatable-->
          <table id="datatable" class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
              <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th>
                  No.
                </th>
                <th>Nama Jamur</th>
                <th>Tahap Pertumbuhan</th>
                <th>Tanggal Tanam</th>
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
    let dataTable = $('#datatable').DataTable({
            dom: 'lBfrtip',
            buttons: [{
                className: 'btn btn-success btn-sm mr-2',
                text: 'Create',
                action: function (e, dt, node, config) {
                    window.location.href = "{{ route('jamur.create') }}";
                }
            }, {
                className: 'btn btn-warning btn-sm mr-2',
                text: 'Reload',
                action: function (e, dt, node, config) {
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
                url: '/jamur',
                type: 'GET',
            },
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false
                },
                {
                    data: 'nama',
                    orderable: true
                },
                {
                    data: 'tahap_pertumbuhan',
                    orderable: true
                },
                {
                    data: 'tanggal_tanam',
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
        let child_url = '/jamur';
  </script>
@endpush
