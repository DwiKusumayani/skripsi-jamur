@extends('layouts.template')

@push('css')
  <style>

  </style>
@endpush
@section('content')
  <div class="row mb-5">
    <h1>Hi, User!</h1>
  </div>
  <!--end::Row-->
  <!--begin::Row-->
  <div class="row gy-5 g-xl-8">
    <div class="col-12">
      <div class="card card-xl-stretch mb-xl-8">
        <div class="card-body ">
          <h2 class="card-title fw-bolder text-dark">KONDISI JAMUR</h2>
          <select name="tahap_pertumbuhan" id='pilih-jamur' class="form-control form-control-solid" required>
            <option value selected disabled>Pilih Jamur</option>
            @foreach ($jamur as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
          </select>
        </div>
        <!--end::Body-->
      </div>
    </div>
  </div>
  <div class="row gy-5 g-xl-8" id="kondisi-jamur">
    <div class="col-xl-12">
      <!--begin::List Widget 3-->
      <div class="card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0">
          <h2 class="card-title fw-bolder text-dark">Status ON/OFF Alat</h2>

        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body ">
          <div class="card-p position-relative">
            <!--begin::Row-->
            <div class="row g-0">
              <!--begin::Col-->
              <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                <div class="row">
                  <div class="col-10">
                    <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-easel3-fill" viewBox="0 0 16 16">
                        <path
                          d="M8.5 12v1.134a1 1 0 1 1-1 0V12h-5A1.5 1.5 0 0 1 1 10.5V3h14v7.5a1.5 1.5 0 0 1-1.5 1.5h-5Zm7-10a.5.5 0 0 0 0-1H.5a.5.5 0 0 0 0 1h15Z" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-warning fw-bold fs-6">Tirai</a>
                  </div>
                  <div class="col-2 my-auto text-right">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" id='tirai' type="checkbox" value="1"
                         />
                    </div>
                  </div>
                </div>
                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->



              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                <div class="row">
                  <div class="col-10">
                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-lamp" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002c-.15.03-.3.056-.45.081a32.731 32.731 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a32.753 32.753 0 0 1-4.645-.425c-.15-.025-.3-.05-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7ZM3.21 7.116A31.27 31.27 0 0 0 8 7.5a31.27 31.27 0 0 0 4.791-.384L10.171 1H5.83L3.209 7.116Z" />
                        <path
                          d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.052.075l-.001.004-.004.01V14l.002.008a.147.147 0 0 0 .016.033.62.62 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.62.62 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411Z" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-primary fw-bold fs-6">Lampu Pijar</a>
                  </div>
                  <div class="col-2 my-auto text-right">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" id='lampu' value="1"
                         />
                    </div>
                  </div>
                </div>
                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->



              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-0">
              <!--begin::Col-->
              <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                <div class="row">
                  <div class="col-10">
                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-droplet" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z" />
                        <path fill-rule="evenodd"
                          d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-danger fw-bold fs-6 mt-2">Mist Maker</a>
                  </div>
                  <div class="col-2 my-auto text-right">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" id='mistmaker' value="1"
                         />
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col bg-light-success px-6 py-8 rounded-2">
                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                <div class="row">
                  <div class="col-10">
                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-fan" viewBox="0 0 16 16">
                        <path
                          d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" />
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <a href="#" class="text-success fw-bold fs-6 mt-2">Kipas</a>
                  </div>
                  <div class="col-2 my-auto text-right">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" id="kipas" value="1"
                         />
                    </div>
                  </div>
                </div>
              </div>

              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end:Item-->
        </div>
        <!--end::Body-->
      </div>
      <!--end:List Widget 3-->
    </div>

    <div class="col-xl-6">
      <!--begin::Tables Widget 9-->
      <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">SUHU</span>
          </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card card-bordered">
          <div class="card-body text-center">
            <h1 style="font-size: 100px" id="suhu">0&deg;C</h1>
          </div>
        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
    <div class="col-xl-6">
      <!--begin::Tables Widget 9-->
      <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">KELEMBAPAN UDARA</span>
          </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card card-bordered">
          <div class="card-body text-center">
            <h1 style="font-size: 100px" id="kelembapan">0%</h1>
          </div>
        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
    <!--begin::Col-->
    <div class="col-xl-6">
      <!--begin::Tables Widget 9-->
      <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">GRAFIK SUHU</span>
          </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card card-bordered">
          <div class="card-body">
            <div id="kt_apexcharts_3" style="height: 350px;"></div>
          </div>
        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
    <div class="col-xl-6">
      <!--begin::Tables Widget 9-->
      <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">GRAFIK KELEMBAPAN UDARA</span>
          </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card card-bordered">
          <div class="card-body">
            <div id="kt_apexcharts_33" style="height: 350px;"></div>
          </div>
        </div>
        <!--begin::Body-->
      </div>
      <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->


    <!--end::Col-->

  </div>
  <!--end::Row-->
  <!--begin::Row-->
@endsection

@push('js')
  <script>

    function updateSuhuKelempan(){
        $.ajax({
            type: "GET",
            url: "/get-suhu-kelembapan/" + idJamur,
            success: function(data) {
                if(data.suhu == undefined){
                    suhu = 0+"&deg;C";
                }else{
                    suhu = data.suhu+"&deg;C";
                }
                 if(data.kelembapan_udara == undefined){
                    kelembapan = 0+"%";
                }else{
                    kelembapan = data.kelembapan_udara+"%";
                }
                $('#suhu').empty()
                $('#suhu').append(suhu)
                $('#kelembapan').empty()
                $('#kelembapan').append(kelembapan)
            },
            error: function(jqXHR, textStatus, errorThrown) {
            alert(jqXHR.status);
            },
        })
    }

    function gantiStatusAlat(id,status,alat){
        $.ajax({
            type: "get",
            url: "/ganti-status-alat/" + id +'/'+alat+'/'+status,
            success: function(data) {

            },
            error: function(jqXHR, textStatus, errorThrown) {
            alert(jqXHR.status);
            },
        })
    }
    let idJamur = null;
    let lampu = 0;
    let kipas = 0;
    let mistmaker = 0;
    let tirai = 0;
    let suhu = 0;
    let kelembapan = 0;
    $(document).ready(function() {
        $('#kondisi-jamur').hide()
        });

        $('#tirai').on('change', function() {
            let status = 0;
            if($(this).is(":checked")){
                status = 1;
            }else{
                status = 0;
            }
            gantiStatusAlat(idJamur,status,'tirai')
        })
        $('#mistmaker').on('change', function() {
            let status = 0;
            if($(this).is(":checked")){
                status = 1;
            }else{
                status = 0;
            }
            gantiStatusAlat(idJamur,status,'mist_maker')
        })
        $('#lampu').on('change', function() {
            let status = 0;
            if($(this).is(":checked")){
                status = 1;
            }else{
                status = 0;
            }
            gantiStatusAlat(idJamur,status,'lampu')
        })
        $('#kipas').on('change', function() {
            let status = 0;
            if($(this).is(":checked")){
                status = 1;
            }else{
                status = 0;
            }
            gantiStatusAlat(idJamur,status,'kipas')
        })
    $('#pilih-jamur').on('change', function() {
    $('#kondisi-jamur').hide()
      idJamur = $(this).val();
      $.ajax({
        type: "GET",
        url: "/get-jamur/" + $(this).val(),
        success: function(data) {
            lampu = data.status_lampu;
            mistmaker = data.status_mist_maker;
            tirai = data.status_tirai;
            kipas = data.status_kipas;

            if(tirai == 1){
                $('#tirai').prop('checked',true);
            }else{
                $('#tirai').prop('checked',false);
            }

            if(lampu == 1){
                $('#lampu').prop('checked',true);
            }else{
                $('#lampu').prop('checked',false);
            }

            if(mistmaker == 1){
                $('#mistmaker').prop('checked',true);
            }else{
                $('#mistmaker').prop('checked',false);
            }

            if(kipas == 1){
                $('#kipas').prop('checked',true);
            }else{
                $('#kipas').prop('checked',false);
            }

          $('#kondisi-jamur').show()

        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert(jqXHR.status);
        },
      })
      var mainLoopId = setInterval(function(){
        updateSuhuKelempan()
        }, 3000);
      var element = document.getElementById('kt_apexcharts_3');
      var element2 = document.getElementById('kt_apexcharts_33');
      var height = parseInt(KTUtil.css(element, 'height'));
      var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
      var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
      var baseColor = KTUtil.getCssVariableValue('--bs-info');
      var lightColor = KTUtil.getCssVariableValue('--bs-light-info');
      var options = {
        series: [{
          name: 'Net Profit',
          data: [30, 40, 40, 90, 90, 70, 70]
        }],
        chart: {
          fontFamily: 'inherit',
          type: 'area',
          height: height,
          toolbar: {
            show: false
          }
        },
        plotOptions: {

        },
        legend: {
          show: false
        },
        dataLabels: {
          enabled: false
        },
        fill: {
          type: 'solid',
          opacity: 1
        },
        stroke: {
          curve: 'smooth',
          show: true,
          width: 3,
          colors: [baseColor]
        },
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
          axisBorder: {
            show: false,
          },
          axisTicks: {
            show: false
          },
          labels: {
            style: {
              colors: labelColor,
              fontSize: '12px'
            }
          },
          crosshairs: {
            position: 'front',
            stroke: {
              color: baseColor,
              width: 1,
              dashArray: 3
            }
          },
          tooltip: {
            enabled: true,
            formatter: undefined,
            offsetY: 0,
            style: {
              fontSize: '12px'
            }
          }
        },
        yaxis: {
          labels: {
            style: {
              colors: labelColor,
              fontSize: '12px'
            }
          }
        },
        states: {
          normal: {
            filter: {
              type: 'none',
              value: 0
            }
          },
          hover: {
            filter: {
              type: 'none',
              value: 0
            }
          },
          active: {
            allowMultipleDataPointsSelection: false,
            filter: {
              type: 'none',
              value: 0
            }
          }
        },
        tooltip: {
          style: {
            fontSize: '12px'
          },
          y: {
            formatter: function(val) {
              return '$' + val + ' thousands'
            }
          }
        },
        colors: [lightColor],
        grid: {
          borderColor: borderColor,
          strokeDashArray: 4,
          yaxis: {
            lines: {
              show: true
            }
          }
        },
        markers: {
          strokeColor: baseColor,
          strokeWidth: 3
        }
      };
      var chart = new ApexCharts(element, options);
      var chart2 = new ApexCharts(element2, options);
      chart.render();
      chart2.render();
    })
  </script>
@endpush
