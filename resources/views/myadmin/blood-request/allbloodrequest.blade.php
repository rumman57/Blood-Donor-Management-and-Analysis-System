@extends('myadmin.adminmaster')
@section('title','Post')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show All Blood Request List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blood Request</a></li>
        <li class="active">Blood Request List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th style="text-align: center;" >Num.</th>
                  <th style="text-align: center;" >name</th>
                  <th style="text-align: center;" >phone</th>
                  <th style="text-align: center;" >Blood Group</th>
                  <th style="text-align: center;" >Amount</th>
                  <th style="text-align: center;" >Date</th>
                  <th style="text-align: center;" >Action Code</th>
                  <th style="text-align: center;" >Req. Cre. Date</th>
                  <th style="text-align: center;" >Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($requests as $request)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$request->name}}</td>
                  <td>{{$request->phone}}</td>
                  <td>{{$request->blood_group}}</td>
                  <td>{{$request->amount}}</td>
                  <td>{{$request->date}}</td>
                  <td>{{$request->code}}</td>
                  <td>{{date('M j,Y',strtotime($request->created_at))}}</td>
                  <td>
                    <form method="POST" action="{{route('myadmin.delete.bloodrequest',$request->id)}}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                       <span onclick = "return confirm('Are You Sure To Delete ?')" href=""><button class="btn btn-danger">Delete</button></span>
                    </form>
                  </td>
                </tr>
               @endforeach
                </tbody>             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('footer')
@include('myadmin.lib.fortable')
@endsection
