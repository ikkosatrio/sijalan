@extends('main.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
@endsection
@section('content')
	<div class="content-wrapper">

				<div class="content">
					<!-- Dashboard content -->

		<!-- Page content -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">
						<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-database-export"></i></button> Rekap Ruas
						</h4>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>
                    <div class="table-responsive">
					    <table class="table table-striped table-xs table-hover">
						<thead>
							<tr>
                                <th></th>
                                <th colspan="4" style="text-align:center">LASTON (M)</th>
                                <th colspan="4" style="text-align:center">CBC (M)</th>
                                <th colspan="4" style="text-align:center">PAVINGSTONE (M)</th>
                                <th colspan="4" style="text-align:center">LAPEN (M)</th>
                                <th colspan="4" style="text-align:center">MAKADAM (M)</th>
                                <th style="text-align:center">TOTAL PANJANG</th>
                            </tr>
                            <tr>
                                <th>Lebar</th>
                                <th style="text-align:center">B</th>
                                <th style="text-align:center">RR</th>
                                <th style="text-align:center">RS</th>
                                <th style="text-align:center">RB</th>
                                <th style="text-align:center">B</th>
                                <th style="text-align:center">RR</th>
                                <th style="text-align:center">RS</th>
                                <th style="text-align:center">RB</th>
                                <th style="text-align:center">B</th>
                                <th style="text-align:center">RR</th>
                                <th style="text-align:center">RS</th>
                                <th style="text-align:center">RB</th>
                                <th style="text-align:center">B</th>
                                <th style="text-align:center">RR</th>
                                <th style="text-align:center">RS</th>
                                <th style="text-align:center">RB</th>
                                <th style="text-align:center">B</th>
                                <th style="text-align:center">RR</th>
                                <th style="text-align:center">RS</th>
                                <th style="text-align:center">RB</th>
                                <th style="text-align:center">&nbsp;</th>
                            </tr>
                            <tr>
                                <th style="text-align:center">a</th>
                                <th style="text-align:center">b</th>
                                <th style="text-align:center">c</th>
                                <th style="text-align:center">d</th>
                                <th style="text-align:center">e</th>
                                <th style="text-align:center">f</th>
                                <th style="text-align:center">g</th>
                                <th style="text-align:center">h</th>
                                <th style="text-align:center">i</th>
                                <th style="text-align:center">j</th>
                                <th style="text-align:center">k</th>
                                <th style="text-align:center">l</th>
                                <th style="text-align:center">m</th>
                                <th style="text-align:center">n</th>
                                <th style="text-align:center">o</th>
                                <th style="text-align:center">p</th>
                                <th style="text-align:center">q</th>
                                <th style="text-align:center">r</th>
                                <th style="text-align:center">s</th>
                                <th style="text-align:center">t</th>
                                <th style="text-align:center">u</th>
                                <th style="text-align:center">v</th>
                            </tr>
						</thead>
						<tbody>
                            @foreach($laporan as $lap)
                                <tr>
                                    <td>{{$lap->SumLebar}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
						</tbody>
					</table>
                    </div>
				</div>	
				<!-- /page content -->

					<!-- /dashboard content -->
				</div>
				<!-- /content area -->
	</div>
@endsection
