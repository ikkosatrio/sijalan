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

				<!-- Page header -->
				<!-- <div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('main/kuesioner')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="#">Kuesioner</a></li>
						</ul>
					</div>
				</div> -->
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<!-- Dashboard content -->

		<!-- Page content -->
				<div class="panel panel-flat">
					<div class="panel-heading">
                        <legend>
                        <button type="button" class="btn btn-success btn-xs">Export Laporan<i class="icon-arrow-right14 position-right"></i></button>
                        </legend>
                        <div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                	</ul>
	                	</div>
					</div>
					<div class="table-responsive">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
							  	<th rowspan="4" style="text-align:center">NO.</th>
                            	<th rowspan="4" style="text-align:center">NO. RUAS</th>
                                <th colspan="2" rowspan="4" style="text-align:center">NAMA RUAS</th> 
                                <th rowspan="4" style="text-align:center">KECAMATAN YG DILALUI</th>
                                <th rowspan="4" style="text-align:center">PANJANG (KM)</th>
                                <th colspan="40" style="text-align:center">TIPE JALAN</th>  
                            </tr>
							<tr>
                                <th colspan="8" style="text-align:center">LASTON</th>
                                <th colspan="8" style="text-align:center">CBC</th>
                                <th colspan="8" style="text-align:center">PAVINGSTONE</th>
                                <th colspan="8" style="text-align:center">LAPEN</th>
                                <th colspan="8" style="text-align:center">MAKADAM</th>
                          	</tr>
							<tr>
                                <th colspan="2" style="text-align:center">B</th>
                                <th colspan="2" style="text-align:center">RR</th>
                                <th colspan="2" style="text-align:center">RS</th>
                                <th colspan="2" style="text-align:center">RB</th>
                                <th colspan="2" style="text-align:center">B</th>
                                <th colspan="2" style="text-align:center">RR</th>
                                <th colspan="2" style="text-align:center">RS</th>
                                <th colspan="2" style="text-align:center">RB</th>
                                <th colspan="2" style="text-align:center">B</th>
                                <th colspan="2" style="text-align:center">RR</th>
                                <th colspan="2" style="text-align:center">RS</th>
                                <th colspan="2" style="text-align:center">RB</th>
                                <th colspan="2" style="text-align:center">B</th>
                                <th colspan="2" style="text-align:center">RR</th>
                                <th colspan="2" style="text-align:center">RS</th>
                                <th colspan="2" style="text-align:center">RB</th>
                                <th colspan="2" style="text-align:center">B</th>
                                <th colspan="2" style="text-align:center">RR</th>
                                <th colspan="2" style="text-align:center">RS</th>
                                <th colspan="2" style="text-align:center">RB</th>
                            </tr>
							<tr>
                            	<th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>
                                <th style="text-align:center">KM</th>
                                <th style="text-align:center">%</th>                                            
					      	</tr>
                            <tr>
                              	<th style="text-align:center">1</th>
                                <th style="text-align:center">2</th>
                                <th colspan="2" style="text-align:center">3</th>
                                <th style="text-align:center">4</th>
                                <th style="text-align:center">5</th>
                                <th style="text-align:center">6</th>
                                <th style="text-align:center">7</th>
                                <th style="text-align:center">8</th>
                                <th style="text-align:center">9</th>
                                <th style="text-align:center">10</th>
                                <th style="text-align:center">11</th>
                                <th style="text-align:center">12</th>
                                <th style="text-align:center">13</th>
                                <th style="text-align:center">14</th>
                                <th style="text-align:center">15</th>
                                <th style="text-align:center">16</th>
                                <th style="text-align:center">17</th>
                                <th style="text-align:center">18</th>
                                <th style="text-align:center">19</th>
                                <th style="text-align:center">20</th>
                                <th style="text-align:center">21</th>
                                <th style="text-align:center">22</th>
                                <th style="text-align:center">23</th>
                                <th style="text-align:center">24</th>
                                <th style="text-align:center">25</th>
                                <th style="text-align:center">26</th>
                                <th style="text-align:center">27</th>
                                <th style="text-align:center">28</th>
                                <th style="text-align:center">29</th>
                                <th style="text-align:center">30</th>
                                <th style="text-align:center">31</th>
                                <th style="text-align:center">32</th>
                                <th style="text-align:center">33</th>
                                <th style="text-align:center">34</th>
                                <th style="text-align:center">35</th>
                                <th style="text-align:center">36</th>
                                <th style="text-align:center">37</th>
                                <th style="text-align:center">38</th>
                                <th style="text-align:center">39</th>
                                <th style="text-align:center">40</th>
                                <th style="text-align:center">41</th>
                                <th style="text-align:center">42</th>
                                <th style="text-align:center">43</th>
                                <th style="text-align:center">44</th>
                                <th style="text-align:center">45</th>
                            </tr>
						</thead>
						<tbody>
	                    	@foreach($laporan as $key => $result)
							<tr>
                                <?php 
                                    $panjang = $result->jalan_panjang2-$result->jalan_panjang1;
                                    $p_laston_baik_min = 0;
                                    $p_laston_baik_max = 0;
                                    $p_laston_rr_min = 0;
                                    $p_laston_rr_max = 0;
                                    $p_laston_rs_min = 0;
                                    $p_laston_rs_max = 0;
                                    $p_laston_rb_min = 0;
                                    $p_laston_rb_max = 0;
                                    
                                    $p_cbc_baik_min = 0;
                                    $p_cbc_baik_max = 0;
                                    $p_cbc_rr_min = 0;
                                    $p_cbc_rr_max = 0;
                                    $p_cbc_rs_min = 0;
                                    $p_cbc_rs_max = 0;
                                    $p_cbc_rb_min = 0;
                                    $p_cbc_rb_max = 0;
                                    
                                    $p_ps_baik_min = 0;
                                    $p_ps_baik_max = 0;
                                    $p_ps_rr_min = 0;
                                    $p_ps_rr_max = 0;
                                    $p_ps_rs_min = 0;
                                    $p_ps_rs_max = 0;
                                    $p_ps_rb_min = 0;
                                    $p_ps_rb_max = 0;
                                    
                                    $p_lapen_baik_min = 0;
                                    $p_lapen_baik_max = 0;
                                    $p_lapen_rr_min = 0;
                                    $p_lapen_rr_max = 0;
                                    $p_lapen_rs_min = 0;
                                    $p_lapen_rs_max = 0;
                                    $p_lapen_rb_min = 0;
                                    $p_lapen_rb_max = 0;
                                    
                                    $p_mkm_baik_min = 0;
                                    $p_mkm_baik_max = 0;
                                    $p_mkm_rr_min = 0;
                                    $p_mkm_rr_max = 0;
                                    $p_mkm_rs_min = 0;
                                    $p_mkm_rs_max = 0;
                                    $p_mkm_rb_min = 0;
                                    $p_mkm_rb_max = 0;
                                ?>
								<td style="text-align:center">{{($key+1)}}</td>
								<td style="text-align:center">{{$result->jalan_no_ruas}}</td>
								<td>{{$result->jalan_nama}}</td>
								<td>{{$result->jalan_nama_ujung}}</td>
								<td>
    		                    	@foreach($kecamatan as $kec)
                                        <?php if ($kec->kecamatan_nama == $result->kecamatan_1): ?>
    								        {{$kec->kecamatan_nama}}	
                                        <?php endif ?>
    		                        @endforeach
								</td>
                                <td style="text-align:center">{{number_format($panjang,3,'.','')}}</td>
                                <td>
                                    <!-- <?php foreach ($jalan_kondisi as $key => $value): ?>
                                        {{$value->jalan_id}}
                                    <?php endforeach ?> -->
                                    <!-- {{$result->jalan_id}} -->
                                </td>
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
	<script>
	jQuery(document).ready(function($){
        $('.hapus').on('click',function(){
            var getLink = $(this).attr('href');
            swal({
              title: "Are you sure?",
              text: "You will not be able to recover this imaginary file!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              cancelButtonText: "No, cancel plx!",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {
                swal({
                title: "Deleted",
                text: "Data Berhasil Dihapus",
                type: "success",
                },function(){
                window.location.href = getLink
                });
              } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
              }
            });
            return false;
        });
    });
	$(function){
		$('#adduser').on('submit',function(e) {
        e.preventDefault();
        var formData = new FormData( $("#adduser")[0]);
          $.ajax({
            url: $("#adduser").attr('action'), //nama action script php sobat
              method:'POST',
              data:new FormData(this),
              contentType: false,
              processData: false,
              dataType: 'json',
              success:function(data){
                console.log(data);
                if (data.Code == 'Error') {
                  swal("error!", data.Message, "error");
                  // alert(data.Message);
                }else{
                  swal({
                  title: "Succes",
                  // text: data.Message,
                  type: "success",
                  },function(){
                  window.location.href = "{{base_url('main/user')}}"
                  });
                }
              },
              error:function(data){
                alert("Gagal Bro")
              },
          });
        });
	}
	</script>
@endsection
