@extends('myadmin.adminmaster')
@section('title','Site Options')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Site Options
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Options</a></li>
        <li class="active">Set Site Options</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             @include('myadmin.lib.message')
       <form action="{{route('site.options')}}" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Site Description :</label>
            <textarea class="form-control" cols="40" rows="10" name="site_desc">{{$siteoptions->site_desc}}</textarea>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>

         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
            <label>Site Image :</label>
            <input type="file" class="form-control" name="site_image">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if(!empty($siteoptions->logo))
             <img src="{{URL::asset('uploads/'.$siteoptions->logo)}}" height="100" width="100">
            @endif
          </div>
          </div>
         </div>
      
         <div class="row">
         <div class="col-xs-7">
          <div class="form-group has-feedback">
           <label>Footer Copyright</label>
            <input type="text" class="form-control" value="{{$siteoptions->copyright}}" name="copyright">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
         </div>
          <div class="row">
          <!-- /.col -->
            <div class="col-xs-3">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="SET SITE OPTIONS">
            </div>
            <!-- /.col -->
          </div>
      </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('footer')
@include('myadmin.lib.adminfooter')
@endsection