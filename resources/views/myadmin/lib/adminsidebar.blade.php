<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('images/admin/ami.jpg')}}" class="img-circle" alt="User Image" height="160" width="160">
        </div>
        <div class="pull-left info">
          <p>Rumman</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{route('admin.index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="active treeview">
          <a href="{{route('myadmin.alldonor.lists')}}">
            <i class="fa fa-dashboard"></i> <span>All Donors</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="{{route('myadmin.bloodrequests.lists')}}">
            <i class="fa fa-dashboard"></i> <span>All Blood Request</span>
          </a>
        </li>
       

           <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Post Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> Add Categories</a></li>
            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> Show Categories</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i> Add Posts</a></li>
            <li><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i> Show Posts</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Social Sites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('social-site.create')}}"><i class="fa fa-circle-o"></i>Add Site Option</a></li>
              <li><a href="{{route('social-site.index')}}"><i class="fa fa-circle-o"></i>Show Site Options</a></li>
          </ul>
        </li>

            <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Site Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('site.options')}}"><i class="fa fa-circle-o"></i> All Site Options</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Site Images</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('get.image')}}"><i class="fa fa-circle-o"></i>Add Site Images</a></li>
              <li><a href="{{route('show.image')}}"><i class="fa fa-circle-o"></i>Show Site Images</a></li>
          </ul>
        </li>
      
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>