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

					<table class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th colspan="4" style="text-align:center">LASTON (M)</th>
                                <th colspan="4" style="text-align:center">CBC (M)</th>
                                <th colspan="4" style="text-align:center">PAVINGSTONE (M)</th>
                                <th colspan="4" style="text-align:center">LAPEN (M)</th>
                                <th colspan="4" style="text-align:center">MAKADAM (M)</th>
                                <th style="text-align:center">TOTAL PANJANG</th>
                            </tr>
                            <tr>
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
	                    	@foreach($user as $key => $result)
							<tr>
								<td>{{($key+1)}}</td>
								<td>{{$result->user_auth_id}}</td>
								
							</tr>
	                        @endforeach
						</tbody>
					</table>
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
