<!-- trang chính quản lí -->
<?php 
include '../lib/session.php';

session::checkSession();
?>
<?php
if(isset($_GET['action']) && $_GET['action'] == 'logout'){
  Session::destroy();
}
?>
<?php   
$admin_user=session::get('admin_User');
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SPORT SHOP <sup></sup></div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Trang Chính</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Quản Lý
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-money-bill-alt"></i>
        <span>Thanh Toán</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header"> Đơn Hàng :</h6>
          <a class="collapse-item" href="listbill.php">Danh Sách Đơn Hàng</a>


        </div>
      </div>
    </li>
    <?php 
    $check = Session::get('level');
    if($check== '0'){ 
     ?>
     <li class="nav-item">
      <a class="nav-link" href="listadmin.php">
        <i class="fas fa-users-cog"></i>
        <span>Danh Sách Nhân Sự</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-plus"></i>
          <span>Quản Lý Sản Phẩm</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Thông Tin :</h6>
            <a class="collapse-item" href="brand.php">Thương Hiệu</a>
            <a class="collapse-item" href="product.php">Danh Sách Sản Phẩm</a>
            <a class="collapse-item" href="category.php">Danh Mục Sản Phẩm</a>
            <a class="collapse-item" href="discount.php">Chương Trình Khuyến Mãi</a>
          </div>
        </li>
        <?php
      }else{
        ?> 
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-plus"></i>
            <span>Manage</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Thông Tin :</h6>
              <a class="collapse-item" href="brand.php">Thương Hiệu</a>
              <a class="collapse-item" href="product.php">Danh Sách Sản Phẩm</a>
              <a class="collapse-item" href="category.php">Danh Mục Sản Phẩm</a>
              <a class="collapse-item" href="discount.php">Chương Trình Khuyến Mãi</a>
            </div>
          </li>

        <?php }   ?> 





        <!-- Nav Item - Utilities Collapse Menu -->
<!-- <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Utilities</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Utilities:</h6>
      <a class="collapse-item" href="utilities-color.html">Colors</a>
      <a class="collapse-item" href="utilities-border.html">Borders</a>
      <a class="collapse-item" href="utilities-animation.html">Animations</a>
      <a class="collapse-item" href="utilities-other.html">Other</a>

    </div>
  </div>
</li> -->

<!-- Divider -->
<!-- <hr class="sidebar-divider">
-->
<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->



<!-- Nav Item - Charts -->
<!-- Divider -->
<!-- <hr class="sidebar-divider d-none d-md-block"> -->

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>


      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              Thông báo
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">November 15 ,2023</div>
                <span class="font-weight-bold">Báo cáo hàng tháng mới đã sẵn sàng để tải xuống!</span>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-success">
                  <i class="fas fa-donate text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">November 15 ,2023</div>
                $290,29 đã được gửi vào tài khoản của bạn!
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-warning">
                  <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">November 15, 2023</div>
                Cảnh báo chi tiêu: Chúng tôi nhận thấy tài khoản của bạn có mức chi tiêu cao bất thường.
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
          </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              Hội thoại
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://sohanews.sohacdn.com/thumb_w/660/160588918557773824/2022/1/10/photo1641778597421-1641778597550425050698.jpg" alt="">
                <div class="status-indicator bg-success"></div>
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">Chào bạn! Tôi tự hỏi liệu bạn có thể giúp tôi giải quyết vấn đề tôi đang gặp phải không.</div>
                <div class="small text-gray-500">Tesla Nikola  · Online</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://sohanews.sohacdn.com/thumb_w/660/160588918557773824/2022/1/10/photo1641778597421-1641778597550425050698.jpg" alt="">
                <div class="status-indicator"></div>
              </div>
              <div>
                <div class="text-truncate">tôi đã nhận được mãu thiết kế mà bạn đã gửi tôi sẽ hoàn thành nó sớm nhất có thế!.</div>
                <div class="small text-gray-500">Tesla Nikola · 55m</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRQReUCkZFSxzsivOpm9Oxzl8FFaBVpKJ6PbTBanIccmS4qyNCU" alt="">
                <div class="status-indicator bg-warning"></div>
              </div>
              <div>
                <div class="text-truncate">Báo cáo tháng trước có vẻ tuyệt vời, tôi rất hài lòng với tiến độ cho đến nay, hãy tiếp tục phát huy nhé!</div>
                <div class="small text-gray-500">Edison · 2d</div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://daotaovn.com/wp-content/uploads/2020/04/GitHub-la-gi-va-su-dung-nhu-the-nao.jpg" alt="">
                <div class="status-indicator bg-success"></div>
              </div>
              <div>
                <div class="text-truncate">Lý do tôi hỏi là vì có người nói với tôi rằng người ta nói điều này với tất cả những con chó, ngay cả khi chúng không ngoan...</div>
                <div class="small text-gray-500">Github · 2w</div>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">

             Xin chào, <?php echo Session::get('Name') ?>

           </span>
           <img class="img-profile rounded-circle" src="https://static.zerochan.net/W.%28Arknights%29.full.2982424.jpg">
         </a>
         <!-- Dropdown - User Information -->
         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

          <a class="dropdown-item" href="editadmin.php?username=<?php  echo $admin_user ?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Thông Tin
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Cài Đặt
          </a>
         <!--  <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
          </a> -->
          <div class="dropdown-divider"></div>

          <a  class="dropdown-item" href="?action=logout">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

          Đăng Xuất
          </a>

        </div>

      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <?php
                                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout_btn'])){
                                    Session::destroy();
                                }
                             ?>
          <form action="login.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div> -->