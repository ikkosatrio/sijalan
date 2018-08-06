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
	<div id="modal_form_vertical" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Add User Form</h5>
				</div>

				<form action="{{base_url('main/adduser')}}" id="adduser" method="post">
					<div class="modal-body">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Name</label>
									<input type="text" name="name" placeholder="Your name" class="form-control" required="">
									<span class="help-block">Your name</span>
								</div>

								<div class="col-sm-6">
									<label>Email</label>
									<input type="email" name="email" placeholder="eugene@kopyov.com" class="form-control" required="">
									<span class="help-block">name@domain.com</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label>Role</label>
									<select class="select form-control" name="role" required="">
										<option value="peserta">Peserta</option>
										<option value="kominfo">Kominfo</option>
										<option value="admin">Admin</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-link" data-dismiss="modal">Close</button> -->
					<button type="submit" class="btn btn-primary btn-xs">Add <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
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
						<h4 class="panel-title">
						<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-user-plus"></i></button> User Master
						</h4>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<table class="table datatable-basic table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Id User</th>
								<th>Name</th>
								<th>Email</th>
								<th>Role</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
	                    	@foreach($user as $key => $result)
							<tr>
								<td>{{($key+1)}}</td>
								<td>{{$result->id_user}}</td>
								<td>{{$result->nm_user}}</td>
								<td>{{$result->email}}</td>
								<td>
									<?php if ($result->role == 'admin'){ ?>
									<span class="label label-danger">{{$result->role}}</span>
									<?php }elseif($result->role == 'kominfo') { ?>
									<span class="label label-primary">{{$result->role}}</span>
									<?php }else{ ?>
									<span class="label label-success">{{$result->role}}</span>
									<?php } ?>
	                        	</td>
								<td class="text-center">
									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="{{base_url('main/edit/').$result->id_user}}"><i class="icon-pencil"></i>Edit</a></li>
												<li><a href="#" class="hapus"><i class="icon-trash"></i>Delete</a></li>
											</ul>
										</li>
									</ul>
								</td>
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
