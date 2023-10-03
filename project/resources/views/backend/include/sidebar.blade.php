<aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
             @if(Auth::user()->user_type == "student")
              <li class="sidebar-item">
                
              <a class="sidebar-link "
                  href="{{route('student.list')}}"
                  aria-expanded="false"><i class="mdi mdi-account-key">
                  
                  </i><span class="hide-menu">Student </span></a>
                
                <!-- <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login.html" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Login </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register.html" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Register </span></a
                    >
                  </li>
                </ul> -->
              </li>
              @endif


              @if(Auth::user()->user_type == "admin")
              <li class="sidebar-item">
                
              <a class="sidebar-link has-arrow waves-effect waves-dark"
                  href=""
                  aria-expanded="false"><i class="mdi mdi-account-key">
                  
                  </i><span class="hide-menu">Admin </span></a>
                
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="{{route('student.list')}}" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Student </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('teacher.list')}}" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Teacher </span></a
                    >
                  </li>
                </ul>
              </li>

              @endif


@if(Auth::user()->user_type == "teacher")
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('student.list')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-pencil"></i
                  ><span class="hide-menu">Teacher</span></a
                >
              </li>
              @endif
              

              <li>
                
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
       
              <span class="menu-title text-white text-center" >Logout</span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</a>
</li>
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        </aside>