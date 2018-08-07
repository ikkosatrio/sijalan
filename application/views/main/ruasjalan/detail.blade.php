@extends('main.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	
@endsection


@section('mainjs')
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2a2DNEaBiNUdL5Q0Lv6JLCBhs12375c0&libraries=places"></script>
@endsection


@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_select2.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
	<script>
        var settingpeta = new google.maps.Map(document.getElementById('map'), {
            zoom: 24,
            center: {lat: -7.120311558236223, lng:112.41561233997345},
            mapTypeId: google.maps.MapTypeId.SATELLITE
        });
        var legend = document.getElementById('legend');
        var div = document.createElement('div');
        div.innerHTML = '<p>HALLO TEST</p>';
        legend.appendChild(div);
        settingpeta.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
        peta = new google.maps.Map(document.getElementById("map"),settingpeta);
	</script>
@endsection

@section('header')
	<!-- Page header default -->
	<div class="content-group border-top-lg border-top-primary">
		<div class="page-header page-header-default" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
			<div class="page-header-content">
				<div class="page-title" align="center">
					<h4><a href="{{base_url('main/ruasjalan')}}"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">{{$jalan->jalan_no_ruas}}.{{$jalan->jalan_nama}} - {{$jalan->jalan_nama_ujung}}</span> ({{$jalan->jalan_panjang2 - $jalan->jalan_panjang1}} KM)</h4>
				</div>
			</div>


		</div>
	</div>
	<!-- /page header default -->
@endsection

@section('content')



	<style>
		.page-container {
			padding: 20px;
		}
	</style>

	<!-- Main content -->
	<div class="content-wrapper">

		<div class="row">
			<div class="col-lg-3">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">JALAN UTAMA</h5>
						<div class="heading-elements">
							<ul class="icons-list">
								<li><a data-action="collapse"></a></li>
								{{--<li><a data-action="close"></a></li>--}}
							</ul>
						</div>
					</div>

					{{--<div class="panel-body">--}}
					{{--Starter pages include the most basic components that may help you start your development process - basic grid example, panel, table and form layouts with standard components. Nothing extra.--}}
					{{--</div>--}}

					<div class="table-responsive">
						<table class="table datatable-basic table-striped table-xs table-hover">
							<thead>
							<tr>
								<th>No</th>
								<th>Posisi</th>
								<th>KM</th>
								{{--<th class="text-center">AKSI</th>--}}
							</tr>
							</thead>
							<tbody>

							@foreach($jalanpointer as $i => $row)
								<tr>
									<td>{{$i+1}}</td>
									<td>{{$row->jalan_pointer_lat}},{{$row->jalan_pointer_lng}}</td>
									<td>{{$row->jalan_pointer_km}}</td>
									{{--<td>--}}
										{{--<div class="btn-group">--}}
											{{--<button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>--}}
											{{--<ul class="dropdown-menu dropdown-menu-right">--}}
												{{--<li>--}}
													{{--<a href="{{base_url('superuser/responden/update/'.$row->jalan_id)}}">--}}
														{{--<i class="fa fa-edit"></i> Detail Ruas Jalan--}}
													{{--</a>--}}
												{{--</li>--}}
												{{--<li><a href="javascript:void(0)" onclick="deleteIt(this)"--}}
													   {{--data-url="{{base_url('superuser/responden/deleted/'.$row->jalan_id)}}">--}}
														{{--<i class="fa fa-trash"></i> Informasi Ruas--}}
													{{--</a>--}}
												{{--</li>--}}
											{{--</ul>--}}
										{{--</div>--}}
									{{--</td>--}}
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">RUAS JALAN</h5>
						<div class="heading-elements">
							<ul class="icons-list">
								<li><a data-action="collapse"></a></li>
								{{--<li><a data-action="close"></a></li>--}}
							</ul>
						</div>
					</div>

					{{--<div class="panel-body">--}}
					{{--Starter pages include the most basic components that may help you start your development process - basic grid example, panel, table and form layouts with standard components. Nothing extra.--}}
					{{--</div>--}}

					<div class="table-responsive">
						<table class="table datatable-basic table-striped table-xs table-responsive table-hover">
							<thead>
							<tr>
								<th>No</th>
								<th>Tipe</th>
								<th>Kondisi</th>
								<th>Lebar</th>
								{{--<th class="text-center">AKSI</th>--}}
							</tr>
							</thead>
							<tbody>

							@foreach($jalanruas as $i => $row)
								<tr>
									<td>{{$i+1}}</td>
									<td>{{$row->jalan_kondisi_tipe}}</td>
									<td>{{$row->jalan_kondisi_nama}}</td>
									<td>{{$row->jalan_kondisi_lebar}}</td>
									{{--<td>--}}
										{{--<div class="btn-group">--}}
											{{--<button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>--}}
											{{--<ul class="dropdown-menu dropdown-menu-right">--}}
												{{--<li>--}}
													{{--<a href="{{base_url('main/detailjalan/'.$row->jalan_id)}}">--}}
														{{--<i class="icon-cog5"></i> Detail Ruas Jalan--}}
													{{--</a>--}}
												{{--</li>--}}
												{{--<li><a href="{{base_url('main/detailjalan/'.$row->jalan_id)}}">--}}
														{{--<i class="icon-cog5"></i> Informasi Ruas--}}
													{{--</a>--}}
												{{--</li>--}}
											{{--</ul>--}}
										{{--</div>--}}
									{{--</td>--}}
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6">

				<div id="map" style="width:100%;height:600px;"></div>
			</div>
		</div>



	</div>
@endsection