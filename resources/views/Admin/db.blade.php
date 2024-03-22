@extends('Admin/index')
@section('style')
    <style>
        #petaleaflet{
            width:100%;
	        height: 400px;
          }
    </style>
@endsection
@section('sidebar')
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-danger" href="/admin/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-tachometer opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="/admin/pengajuan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-check-square opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pendaftaran</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="/admin/user">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Admin</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white " href="/admin/caleg">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Caleg</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white " href="/admin/dapil">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-map-o opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dapil</span>
        </a>
        </li>
    </ul>
@endsection
@section('breadcrumb')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
@endsection
@section('konten')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                      <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fa fa-users opacity-10"></i>
                      </div>
                      <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize fs-4">Total Caleg</p>
                        <h4 class="mb-0">{{$tcaleg}}</h4>
                      </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                      {{-- <p class="mb-0">{{date('d-m-Y')}}</p> --}}
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                      <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fa fa-file-text opacity-10"></i>
                      </div>
                      <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize fs-6">Caleg Belum Lengkap</p>
                        <h4 class="mb-0">{{$tblcaleg}}</h4>
                      </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                      {{-- <p class="mb-0">{{date('d-m-Y')}}</p> --}}
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                      <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fa-solid fa-file-circle-xmark opacity-10"></i>
                      </div>
                      <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Caleg Blm Mengajukan</p>
                        <h4 class="mb-0">{{$tbmcaleg}}</h4>
                      </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                      {{-- <p class="mb-0">{{date('d-m-Y')}}</p> --}}
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                      <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fa fa-paper-plane opacity-10"></i>
                      </div>
                      <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Pengajuan</p>
                        <h4 class="mb-0">{{$tp}}</h4>
                      </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                      {{-- <p class="mb-0">{{date('d-m-Y')}}</p> --}}
                    </div>
                  </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4 " style="width:100%;">
                <div class="card z-index-3" style="width:100%;">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-4 bg-transparent">
                        <div class=" border-radius-sm py-3 pe-1">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-map-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            {{-- <div id="" class="" height="250"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.070532923704!2d110.44651311477337!3d-7.000976394942679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c933d6636c3%3A0xca1c8f002f19bcce!2sKANTOR%20DPD%20GERINDRA%20JATENG!5e0!3m2!1sen!2sid!4v1647533277217!5m2!1sen!2sid"
                                    width="100%" height="450" style="border-radius:10px;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div> --}}
                            <div id="petaleaflet"></div>
                            {{-- <a href="" class="btn btn-info w-100 mt-3">Legenda</a> --}}
                        </div>
                        {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales.
                        </p>
                        <hr class="dark horizontal">
                        <div class="d-flex ">
                            <i class="material-icons text-sm my-auto me-1">schedule</i>
                            <p class="mb-0 text-sm"> updated 4 min ago </p>
                        </div> --}}
                    </div>
                    {{-- <div class="card-footer">

                    </div> --}}
                </div>
            </div>
            <!-- <div class="col-lg-4 mt-4 mb-3">
                                                                                                                                                                                                                              </div> -->
        </div>
        <!-- <div class="row mb-4">
                                                                                                                                                                                                                                                                                              </table> -->
    </div>
    </div>
    </div>
    </div>
    <!-- <div class="col-lg-4 col-md-6">
                                                                                                                                                                                                                                                                                          <div class="card h-100">
                                                                                                                                                                                                                                                                                   </div> -->

    </div>
@endsection
@section('script')
    <script>
        var map = L.map('petaleaflet').setView([-7.215744, 109.992652], 9);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 20,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoicmV6YWhhd2FyaSIsImEiOiJja3lqaHE4NHoybXN3MndvODIyMWw4dnJ4In0.J9Q-u-W1_EFXy4CTkU5l5Q'
        }).addTo(map);
        $.getJSON("<?= asset('geojson/map.geojson') ?>", function(json){
            var merah = {
                fillOpacity:0.2,
                weight:5,
                opacity:1,
                dashArray:"30 10",
                lineCap: 'square',
                color:'red',
            };
            var biru = {
                fillOpacity:0.2,
                weight:5,
                opacity:1,
                dashArray:"30 10",
                lineCap: 'square',
            };
            geoLayer = L.geoJSON(json,{
                // style: function(feature){
                //     return biru;
                // },
                onEachFeature: function(feature,layer){
                    layer.on('click',(e)=>{
                        $.getJSON('/admin/getjsonjateng/'+feature.properties.dapil, function(data){
                            $.each(data, function(i){
                                var tulisan = '<strong>'+ feature.properties.kabkot +'</strong><br>'+ data[i].nama_dapil + '<br>'+ data[i].pemilih + '/'+ data[i].kuota;
                                layer.bindPopup(tulisan);

                            });
                        });
                    });
                    if (feature.properties.dapil == '1') {
                        layer.setStyle({fillColor:'#FF3636'});
                    }
                    if (feature.properties.dapil == '2') {
                        layer.setStyle({fillColor:'#3928FF'});
                    }
                    if (feature.properties.dapil == '3') {
                        layer.setStyle({fillColor:'#F9F926'});
                    }
                    if (feature.properties.dapil == '4') {
                        layer.setStyle({fillColor:'#3FF922'});
                    }
                    if (feature.properties.dapil == '5') {
                        layer.setStyle({fillColor:'#4cbbd8'});
                    }
                    if (feature.properties.dapil == '6') {
                        layer.setStyle({fillColor:'#FF8C19'});
                    }
                    if (feature.properties.dapil == '7') {
                        layer.setStyle({fillColor:'#999999'});
                    }
                    if (feature.properties.dapil == '8') {
                        layer.setStyle({fillColor:'#EF1EFF'});
                    }
                    if (feature.properties.dapil == '9') {
                        layer.setStyle({fillColor:'#000000'});
                    }
                    if (feature.properties.dapil == '10') {
                        layer.setStyle({fillColor:'#F700B8'});
                    }
                    if (feature.properties.dapil == '11') {
                        layer.setStyle({fillColor:'#039E59'});
                    }
                    if (feature.properties.dapil == '12') {
                        layer.setStyle({fillColor:'#909090'});
                    }
                    if (feature.properties.dapil == '13') {
                        layer.setStyle({fillColor:'#64D2AF'});
                    }

                    layer.addTo(map);
                }
            })
        })
    </script>
@endsection
