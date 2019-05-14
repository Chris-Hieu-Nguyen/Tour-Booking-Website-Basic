<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
           <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">{{ Sentinel::getUser()->last_name}} <sup>2</sup></div>
         </a>
     
      <!-- Divider -->
          <hr class="sidebar-divider my-0">
     
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
           <a class="nav-link" href="index.html">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Bảng điều khiển</span></a>
          </li>
     
          <!-- Divider -->
          <hr class="sidebar-divider">
     
          <!-- Heading -->
     
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-globe-asia"></i>
                 <span>Quản Lý Tour</span>
             </a>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="buttons.html">Loại Hình</a>
                    <a class="collapse-item" href="cards.html">Khu Vực</a>
                 <a class="collapse-item" href="{{route('list.tour')}}">Danh Sách Tour</a>
                </div>
            </div>
         </li>
     
         <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Quản Lý Blog</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="utilities-color.html">Danh Sách Bài Viết</a>
                <a class="collapse-item" href="utilities-border.html">Thêm Bài Mới</a>
            </div>
         </div>
         </li>
     
         <!-- Divider -->
         <hr class="sidebar-divider">

         <li class="nav-item">
            <a class="nav nav-link" href="{{route('home')}}">
                <i class="fas fa-fw fa-home"></i>
                <span>Trang Chủ</span></a>
         </li>
     
            <!-- Divider -->
            <hr class="sidebar-divider">
     
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
</ul>