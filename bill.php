<!-- xem lại lịch sử các sản phẩm đã mua -->
<?php
include 'inc/header.php';
?>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 16px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 20px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 20px;
  padding-bottom: 22px;
  text-align: left;
  background-color: #7FAD39;
  color: white;
}
</style>
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Thương hiệu</span>
                    </div>
                    <ul>
                             <?php
                        $show = $brand->show_brand(); //để lấy danh sách các thương hiệu từ cơ sở dữ liệu.
                        if($show){
                           
                            while($result = $show->fetch_assoc()){
                         ?>                                                                                                                         
                        <li><a href="product.php?brandid=<?php echo $result['brandId'] ?>,&brandName=<?php echo $result['brandName'] ?>"><?php echo $result['brandName'] ?></a></li>
                        <?php                                                                                                                       //láy thông tin về thương hiệu được lấy từ cơ sở dữ liệu được lưu trữ trong biến  
                            }
                        }
                         ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="product.php" method="GET">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> -->

                                <input type="text" name="namepro" placeholder="Tìm kiếm thông tin">
                                <button type="" class="site-btn">TÌM KIẾM</button>

                            </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+84 8688.18.427</h5>
                            <span>Hổ trợ 24/7 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/blue.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Đơn hàng của bạn</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">-Trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        
        <div class="checkout__form">
            <h4>Hóa đơn chi tiết</h4>
            <div class="row">
                <table id="customers" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>Ngày</th>
                        <th>Khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Xem chi tiết</th>
                    </tr>
                    <?php
                    $cus=session::get('customer_user');
                    $get_Bill_by_Customer=$bill->get_Bill_by_Customer($cus); //để lấy danh sách các đơn hàng của khách hàng
                    if ($get_Bill_by_Customer){
                    while ($result=mysqli_fetch_array($get_Bill_by_Customer)) {
                    //lấy từ cơ sở dữ liệu được lưu trữ trong biến
                    ?>
                    <tr>
                        <td>#<?php echo $result['order_Id'] ?></td> 
                        <td><?php echo $fm->formatDate($result['date']) ?></td>
                        <td><?php echo $result['receiver'] ?></td>
                        <td>$<?php echo  $fm->format_currency($result['totalprice']) ?></td>
                        <?php
                        if ($result['status']==0) {
                          echo '<td class="text-danger">Đang xử lý</td>';
                        }elseif($result['status']==1){
                         echo '<td class="text-success">Đang giao hàng</td>';
                        }elseif($result['status']==2)
                         echo '<td class="text-success">Giao hàng thành công</td>';
                        else
                            echo '<td class="text-danger">Canncel</td>';
                        ?>
                        
                        
                        <td><a href="billdetails.php?idbill=<?php echo $result['order_Id']  ?>">Xem thông tin chi tiết</a></td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php

include 'inc/footer.php';

?>