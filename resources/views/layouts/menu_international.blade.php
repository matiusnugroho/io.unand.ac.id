
        <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i>
              <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('international.me') }}"><i class="fa fa-circle-o text-aqua"></i>My data</a></li>
              <li><a href="{{ route('international.files') }}"><i class="fa fa-circle-o text-red "></i>Files</a></li>
            </ul>
  </li>
  <li><a href="{{ route('international.me') }}"><i class="fa fa-circle-o text-aqua"></i>My data</a></li>

        @hasanyrole('administrator|operator')

        @can('user_manage') {{-- User Access Control --}}
        <li class="treeview">
                  <a href="#">
                    <i class="fa fa-th"></i>
                    <span>User Manajement</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-circle-o text-aqua"></i> User</a></li>
                    <li><a href="{{ route('admin.permissions.index') }}"><i class="fa fa-circle-o text-red "></i> Permission</a></li>
                    <li><a href="{{ route('admin.roles.index') }}"><i class="fa fa-circle-o text-yellow "></i> Role</a></li>
                  </ul>
                  
        </li>
       @endcan
      
       @can('student_manage') 
        <li class="header">Student</li>
        
        <li><a href="{{route('admin.international.index')}}"><i class="fa fa-users"></i> <span>International Student</span></a></li>
        <li><a href="{{route('admin.unand.index')}}"><i class="fa fa-users"></i> <span>Unand Student Mobility</span></a></li>
        
        @endcan 
        @endhasanyrole



     
      