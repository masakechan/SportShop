<!-- xem lại chi tiết sản phẩm trong hóa đơn đã mua -->
<?php ob_start();
    include 'inc/header.php';

?>

<style type="text/css">
    
    button.stylinggg {
        display: inline-block;
  padding: 3px 9px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
}
  button.stylinggg:hover {background-color: #3e8e41}
  button.stylinggg:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}



</style> 
    <!-- Header Section End - Phần Tiêu Đề Cuối -->

    <!-- Hero Section Begin - Phần anh hùng bắt đầu -->
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
                        $show = $brand->show_brand();
                        if($show){
                           
                            while($result = $show->fetch_assoc()){
                         ?>      
                        <li><a href="product.php?brandid=<?php echo $result['brandId'] ?>,&brandName=<?php echo $result['brandName'] ?>"><?php echo $result['brandName'] ?></a></li>
                        <?php 
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
    <!-- Hero Section End - Phần anh hùng kết thúc -->

    <!-- Breadcrumb Section Begin - Phần Breadcrumb bắt đầu -->
    <section class="breadcrumb-section set-bg" data-setbg="img/blue.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thông tin mua hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Trang chủ</a>
                            <span>Thông tin mua hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End - Phần Breadcrumb kết thúc  -->

    <!-- Shoping Cart Section Begin - Phần giỏ hàng bắt đầu -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>

                                    <th>Giá</th>
                                    <th>Size</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                               if (isset($_GET['idbill'])) {
                                  $id_bill=$_GET['idbill'];
                                }

 
                                $get_BillDetails=$bill->get_BillDetails($id_bill);
                                if ($get_BillDetails){
                                    while ($result=mysqli_fetch_array($get_BillDetails)) {
                                        
                             
                               ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="admin/uploads/<?php echo $result['image']?>" width="70"? alt="">
                                        <h5><?php echo $result['productName'] ?> </h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo $result['price']?> 
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo $result['size']?> 
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo $result['quantity']?> 
                                    </td>

                                    <td class="shoping__cart__total">
                                        <?php $total= $result['price'] * $result['quantity'];                               
                                    echo $total;
                                    
                                    ?>
                                    </td>
                                   
                                </tr>
                            <?php 
                           
                            }

                                    }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">Quay lại trang chủ</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End - Phần giỏ hàng kết thúc -->

    <!-- Footer Section Begin -->
   <?php
    
    include 'inc/footer.php';
    
ob_end_flush();

?>