@extends('main.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_select2.js"></script>

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
						<table class="table table-striped table-xs table-hover">
							<thead>
							<tr>
								<th>No</th>
								<th>Posisi</th>
								<th>KM</th>
								<th class="text-center">AKSI</th>
							</tr>
							</thead>
							<tbody>

							@foreach($jalan as $i => $row)
								<tr>
									<td>{{$i+1}}</td>
									<td>{{$row->jalan_nama}}</td>
									<td>{{$row->kecamatan_1}},{{$row->kecamatan_2}},{{$row->kecamatan_3}}</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="{{base_url('superuser/responden/update/'.$row->jalan_id)}}">
														<i class="fa fa-edit"></i> Detail Ruas Jalan
													</a>
												</li>
												<li><a href="javascript:void(0)" onclick="deleteIt(this)"
													   data-url="{{base_url('superuser/responden/deleted/'.$row->jalan_id)}}">
														<i class="fa fa-trash"></i> Informasi Ruas
													</a>
												</li>
											</ul>
										</div>
									</td>
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
						<table class="table table-striped table-xs table-responsive table-hover">
							<thead>
							<tr>
								<th>No</th>
								<th>Tipe</th>
								<th>Kondisi</th>
								<th>Lebar</th>
								<th class="text-center">AKSI</th>
							</tr>
							</thead>
							<tbody>

							@foreach($jalan as $i => $row)
								<tr>
									<td>{{$i+1}}</td>
									<td>{{$row->jalan_nama}}</td>
									<td>{{$row->kecamatan_1}},{{$row->kecamatan_2}},{{$row->kecamatan_3}}</td>
									<td>{{$row->jalan_lebar}}</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Action <span class="caret"></span></button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="{{base_url('superuser/responden/update/'.$row->jalan_id)}}">
														<i class="fa fa-edit"></i> Detail Ruas Jalan
													</a>
												</li>
												<li><a href="javascript:void(0)" onclick="deleteIt(this)"
													   data-url="{{base_url('superuser/responden/deleted/'.$row->jalan_id)}}">
														<i class="fa fa-trash"></i> Informasi Ruas
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				
				<div style="height: 100px;width: 100%;background: #0a001f"></div>
			</div>
		</div>



	</div>
@endsection