@extends('myadmin.adminmaster')
@section('title','Post')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Show All Donors List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Donor</a></li>
        <li class="active">Donor List</li>
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
                  <th style="text-align: center;" >Name</th>
                  <th style="text-align: center;" >Email</th>
                  <th style="text-align: center;" >BG</th>
                  <th style="text-align: center;" >District</th>
                  <th style="text-align: center;" >Current District</th>
                  <th style="text-align: center;" >Present Address</th>
                  <th style="text-align: center;" >Phone</th>
                  <th style="text-align: center;" >Reg. Date</th>
                  <th style="text-align: center;" >Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
              @foreach($donors as $donor)
              <?php $i++;?>
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$donor->name}}</td>
                  <td>{{$donor->email}}</td>
                  <td>{{$donor->blood_group}}</td>
                  <td>{{$donor->district}}</td>
                  <td>{{$donor->currdistrict or $donor->district}}</td>
                  <td>{{substr(strip_tags($donor->pradd),0,150)}}</td>
                  <td>{{$donor->phone}}</td>
                  <td>{{date('M j,Y',strtotime($donor->created_at))}}</td>
                  <td>
                    <form method="POST" action="{{route('myadmin.delete.donor',$donor->id)}}">
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
