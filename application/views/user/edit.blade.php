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

				<!-- Content area -->
				<div class="content">
					<!-- Dashboard content -->

		<!-- Page content -->
				<div class="panel panel-flat">
					
					<div class="panel-body">
					<form class="form-horizontal" action="#">
							<fieldset class="content-group">
								<legend class="text-bold">Edit Data</legend>

								<div class="form-group">
									<label class="control-label col-lg-2">Name</label>
									<div class="col-lg-10">
										<input type="text" name="name" maxlength="30" required="" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-lg-2">Email</label>
									<div class="col-lg-10">
										<input type="email" name="email" class="form-control" required="">
									</div>
								</div>

		                        <div class="form-group">
		                        	<label class="control-label col-lg-2">Role</label>
		                        	<div class="col-lg-10">
			                            <select name="select" class="form-control">
			                                <option value="opt6">Peserta</option>
			                                <option value="opt7">Kominfo</option>
			                                <option value="opt8">Admin</option>
			                            </select>
		                            </div>
		                        </div>
							</fieldset>
						</form>
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
