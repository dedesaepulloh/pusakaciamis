<?php
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Anda Harus Login Dulu !'); window.location = 'login.php'</script>";
    }else{
        include "template/header.php";
        include "koneksi.php";

        // Pre Order
        $sql1  =  mysqli_query ($koneksi,"SELECT count(*) AS total FROM t_preorder ")  ;
        $data1 = mysqli_fetch_array ($sql1);

        // Pembelian
        $sql2  =  mysqli_query ($koneksi,"SELECT count(*) AS total FROM t_pembelian_head ")  ;
        $data2 = mysqli_fetch_array ($sql2);

        // Penjualan
        $sql3  =  mysqli_query ($koneksi,"SELECT count(*) AS total FROM t_penjualan_head ")  ;
        $data3 = mysqli_fetch_array ($sql3);

        // Tanaman
        $sql4  =  mysqli_query ($koneksi,"SELECT count(*) AS total FROM t_tanaman ")  ;
        $data4 = mysqli_fetch_array ($sql4);
      

?>
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <?php include "template/mobile.php"; ?>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Pre Order</h>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$data1[total]"; ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Pembelian</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$data2[total]"; ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline6"></span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Penjualan</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$data3[total]"; ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline2"></span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Tanaman</h2>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo "$data4[total]"; ?></span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline5"></span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="widgets-personal-info-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="personal-info-wrap shadow-reset">
                                <div class="widget-head-info-box">
                                    <div class="persoanl-widget-hd">
                                        <h2>Agus Kuswara</h2>
                                        <p>Company Owner</p>
                                    </div>
                                    <img src="img/owner.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                   
                                </div>
                                <div class="widget-text-box">
                                    <h4>Agus Kuswara</h4>
                                    <p>...</p>
                                    <div class="text-right like-love-list">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                        <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="weather-widget-wrap widget-ov-mg-t-30 widget-ov-mg-t-n-30 widget-ov-mg-t-l-30 shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="weather-carve">
                                            <canvas id="snow" width="115" height="115"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="weather-carve-content">
                                            <h2>32°</h2>
                                            <p class="cloud-partly">Partly cloudy</p>
                                            <p>15km/h - 37%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="weather-days-pro">
                                            <h3>SAT</h3>
                                            <canvas id="cloudy" width="35" height="35"></canvas>
                                            <h4>30 <i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="weather-days-pro">
                                            <h4>SUN</h4>
                                            <canvas id="wind" width="35" height="35"></canvas>
                                            <h4>28 <i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="weather-days-pro">
                                            <h4>MON</h4>
                                            <canvas id="clear-day" width="35" height="35"></canvas>
                                            <h4>33 <i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="weather-days-pro">
                                            <h3>Tus</h3>
                                            <canvas id="rain" width="35" height="35"></canvas>
                                            <h4>6 <i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="weather-days-pro">
                                            <h4>Wed</h4>
                                            <canvas id="sleet" width="35" height="35"></canvas>
                                            <h4>25 <i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="weather-days-pro">
                                            <h4>Thus</h4>
                                            <canvas id="clear-night" width="35" height="35"></canvas>
                                            <h4>33 <i class="wi wi-degrees"></i></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="author-widgets-single widget-ov-mg-t-30 widget-ov-mg-t-n-30 widget-ov-mg-t-l-30 shadow-reset">
                                <div class="persoanl-widget-hd persoanl1-widget-hd">
                                    <h2>Admin</h2>
                                    <p>Data Manager</p>
                                </div>
                                <div class="perso-img">
                                    <img src="img/user.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                </div>
                                
                                <div class="widget-text-box">
                                    <h4>Admin</h4>
                                    <p>...</p>
                                    <div class="text-right like-love-list">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                        <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="author-progress-pro-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-skill shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="progress-circular">
                                            <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="90" data-bgcolor="#999" data-fgcolor="#7266ba" data-thickness=".10" data-readonly="true" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="progress-circular1">
                                            <p>User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-skill widget-ov-mg-t-30 shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="progress-circular">
                                            <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#999" data-fgcolor="#52bb56" data-thickness=".10" data-readonly="true" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="progress-circular2">
                                            <p>Pelanggan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-skill widget-ov-mg-t-30 widget-ov-mg-t-n-30 shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="progress-circular">
                                            <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="90" data-bgcolor="#999" data-fgcolor="#039cfd" data-thickness=".10" data-readonly="true" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="progress-circular3">
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-skill widget-ov-mg-t-30 widget-ov-mg-t-n-30 shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="progress-circular">
                                            <input type="text" class="knob" value="0" data-rel="55" data-linecap="round" data-width="90" data-bgcolor="#999" data-fgcolor="#f1b53d" data-thickness=".10" data-readonly="true" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="progress-circular4">
                                            <p>...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/wow/wow.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/skycons/skycons.min.js"></script>
    <script src="js/skycons/skycons.active.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- rounded-counter JS
		============================================ -->
    <script src="js/rounded-counter/jquery.countdown.min.js"></script>
    <script src="js/rounded-counter/jquery.knob.js"></script>
    <script src="js/rounded-counter/jquery.appear.js"></script>
    <script src="js/rounded-counter/knob-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/widget-flot-chart-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/jquery.mockjax.js"></script>
    <script src="js/mock-active.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/bootstrap-editable.js"></script>
    <script src="js/xediable-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat-active/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>
    <?php } ?>