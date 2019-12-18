<?php if($this->session->userdata('id') != null){?>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-gear"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-user"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?=Base_url()?>Admin/Admin/logout" class="dropdown-item">
            <i class="fa fa-sign-out"></i> Sign Out
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$this->session->userdata('name')?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Admin/dashboard" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
		 <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Category" class="nav-link">
              <i class="nav-icon fa fa-circle-o"></i>
              <p>
                Category
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Service" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Services
              </p>
            </a>
          </li>
		 <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Article" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Article
              </p>
            </a>
          </li>
          <!--<li class="nav-item">
            <a href="<?=Base_url()?>Admin/Testimony" class="nav-link">
              <i class="nav-icon fa fa-quote-right"></i>
              <p>
                Testimony / Quotes
              </p>
            </a>
          </li>-->
		  <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Team" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Team
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-plus-square-o"></i>
              <p>
                Contact
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=Base_url()?>Admin/Contact/service" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Contact Service</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=Base_url()?>Admin/Contact" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">SETTINGS</li>
          <!--<li class="nav-item">
            <a href="<?=Base_url()?>Admin/Settings/home" class="nav-link">
              <i class="nav-icon fa fa-circle-o"></i>
              <p>
                Home Page
              </p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Settings/about" class="nav-link">
              <i class="nav-icon fa fa-circle-o"></i>
              <p>
                About Us
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Settings/mission" class="nav-link">
              <i class="nav-icon fa fa-circle-o"></i>
              <p>
                Vision and Mission
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=Base_url()?>Admin/Settings/contact" class="nav-link">
              <i class="nav-icon fa fa-circle-o"></i>
              <p>
                Contact Us
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php } else{
    redirect('Admin');
}?>