<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="{{ asset('images/faces/face4.jpg') }}" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Richard V.Welsh</p>
                <p class="designation">Manager</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.index')  }}"><img class="menu-icon" src="{{ asset('images/menu_icons/01.png') }}" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{ asset('images/menu_icons/01.png') }}" alt="menu icon"> <span class="menu-title">Manage Products</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}">Manage Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.product.create') }}">Create Products</a></li>
        
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{ asset('images/menu_icons/01.png') }}" alt="menu icon"> <span class="menu-title">Manage Categories</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="category-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories') }}">Manage Categoris</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.create') }}">Create Category</a></li>
        
              </ul>
            </div>
          </li>



          <li class="nav-item"><a class="nav-link" href="pages/widgets.html"><img class="menu-icon" src="{{ asset('images/menu_icons/01.png') }}" alt="menu icon"><span class="menu-title">Widgets</span></a></li>
      
          <li class="nav-item purchase-button"><a class="nav-link" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Get full version</a></li>
        </ul>
      </nav>