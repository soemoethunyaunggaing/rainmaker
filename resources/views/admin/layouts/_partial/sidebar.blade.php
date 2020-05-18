<aside class="main-sidebar sidebar-dark-primary elevation-4">
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <img src="https://secure.gravatar.com/avatar/75d23af433e0cea4c0e45a56dba18b30.jpg?s=45&d=mm&r=g%22" class="img-circle" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block">Admin<i class="fa fa-circle text-success btn-sm"></i> <span style="font-size: 15px;">Online</span></a>

        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          
          </li>
          <li class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>

                  <p>
                    Region
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.regions.index')}}" class="nav-link">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      <p>index</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.regions.create')}}" class="nav-link">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      <p>create</p>
                  </a>
                </li>
              </ul>
              </li>                  
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.categories.index')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.categories.create')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>create</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
              <p>
                Sub Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.sub-categories.index')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.sub-categories.create')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>create</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
              <p>
                Gdp
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.gdp.index')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.gdp.create')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>create</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.data.index')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.data.create')}}" class="nav-link">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <p>create</p>
                </a>
              </li>
             
            </ul>
          </li>
           

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
                <a href="{{route('logout')}} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="nav-link">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <p>Logout</p>
                </a>
              
              </li>
              
            </ul>
          </li>
         
        </ul>
      </nav>

    </div>
  </aside>