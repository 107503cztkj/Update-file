﻿<?php
session_start();
include("db-contact.php"); 
include("timeout.php");
error_reporting(0);
?>
<?php 
if($_SESSION['email'] == null)
{
	echo "<script>alert('您無權限觀看此頁面!請先登入!'); location.href = 'login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en" class="ace ace-card-on ace-tab-nav-on ace-main-nav-on ace-sidebar-on" data-theme-color="#c0e3e7">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>|益尋愛|</title>
    <meta name="description" content="">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="fonts/icomoon/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="js/plugins/highlight/solarized-light.css" rel="stylesheet">
    <link href="OFile.css" rel="stylesheet">

    <!-- Modernizer -->
    <script type="text/javascript" src="js/vendor/modernizr-3.3.1.min.js"></script>
  </head>
  <body>
     <div class="ace-wrapper">
         <header id="ace-header" class="ace-container-shift ace-logo-in ace-head-boxed ace-nav-right">
             <div class="ace-head-inner">
                 <div class="ace-head-container ace-container">
                         
                         <div id="ace-head-col2" class="ace-head-col text-right">
                             <div class="ace-nav-container ace-container hidden-sm hidden-xs">
                                 <nav id="ace-main-nav">
                                    <ul class="clear-list">
										<li><a href="index.php">訊息專欄</a></li>
										<li><a href="EventNews.php">活動快訊</a>
										<li><a href="Organization.php">公益組織</a></li>
										<li><a href="History.php">愛心回顧</a></li>
										<li><a href="About.php">關於益尋愛</a></li>
										<li><a href="UserFile.php">益寶小檔案</a></li>
									</ul>
                                 </nav>
                             </div>
                         </div>
                         <!-------------右邊的圓圈按鈕---->
                         <div id="ace-head-col3" class="ace-head-col text-right">
                             <button id="ace-sidebar-btn" class="btn btn-icon btn-light btn-shade">
                                 <span class="ace-icon ace-icon-side-bar-icon"></span>
                             </button>
                         </div>
                     </div>
                 </div><!-- .ace-container -->
             </div><!-- .ace-head-inner -->
        </header><!-- #ace-header -->

        
        <nav id="ace-nav-sm" class="ace-nav hidden-lg hidden-md">
            <ul class="clear-list">
				<li>
											<a href="UserFile.php" data-tooltip="切換益寶"><img class="avatar avatar-42" src="img/3.jpg" alt=""></a>
										</li>	
										<li>
											<a href="OJoin.html" data-tooltip="報名狀況"><i class="fa fa-bell-o" style="font-size:30px;"></i></a>
										</li>									
										<li>
											<a href="ORecord.php?f=<?php echo $row2['comID']?>" data-tooltip="舉辦紀錄"><span class="ace-icon ace-icon-experience"></span></a>
										</li>
							   			<li>
											<a href="Logout.php" data-tooltip="登出"><i class="fa fa-sign-out" style="font-size:24px"></i></a>
										</li>
			</ul>
        </nav><!-- #ace-tab-nav-sm -->
		<?php 
					$email=$_SESSION['email'];
					$sql = "SELECT * FROM customer where email= '$email' ";
					$data = mysql_query($sql) or die(mysql_error());
					$row = mysql_fetch_array($data);
					$cusID = $row['cusID'];	
					
		?>	
		<?php 
		if($row['comStatus']==0){
			echo "您尚未成為機構的身份唷!";
		}else if($row['comStatus']==1){
			$sql2 = "SELECT * FROM company where cusID= '$cusID'";
			$data2 = mysql_query($sql2) or die(mysql_error());
			$row2 = mysql_fetch_array($data2);
		?>
        <article id="ace-card" class="ace-card bg-primary">
			<div class="ace-card-inner text-center">
				<img class="avatar avatar-195" src="cus-comImg/<?php echo $row2['comPic'] ?>" width="195" height="195" alt="">
				<h1>機構名稱</h1>
			<!-----名字的地方--->	<p class="text-muted"><?php echo $row2['comName'] ?></p>
			</div>

		</article><!-- #ace-card -->

        <div id="ace-content" class="ace-container-shift">
            <div class="ace-container">

                
                    <div id="ace-nav-wrap" class="hidden-sm hidden-xs">
                        <div class="ace-nav-cont">
                            <div id="ace-nav-scroll">
                                <nav id="ace-nav" class="ace-nav">
                                    <ul class="clear-list">
										<li>
											<a href="UserFile.php" data-tooltip="切換益寶"><img class="avatar avatar-42" src="img/3.jpg" alt=""></a>
										</li>	
										<li>
											<a href="OJoin.html" data-tooltip="報名狀況"><i class="fa fa-bell-o" style="font-size:30px;"></i></a>
										</li>									
										<li>
											<a href="ORecord.php?f=<?php echo $row2['comID']?>" data-tooltip="舉辦紀錄"><span class="ace-icon ace-icon-experience"></span></a>
										</li>
							   			<li>
											<a href="Logout.php" data-tooltip="登出"><i class="fa fa-sign-out" style="font-size:24px"></i></a>
										</li>
									</ul>
                                </nav>
                            </div>

                            
                        </div>
                        <div class="ace-nav-btm"></div>
                    </div><!-- .ace-nav-wrap -->

                <div class="ace-paper-stock">
                    <main class="ace-paper clearfix">
                        <div class="ace-paper-cont clear-mrg">
						
						<!-- START: PAGE CONTENT -->
    <div class="padd-box clear-mrg">
        <section class="section brd-btm">
            <div class="row">
                <div class="col-sm-12 clear-mrg text-box">
                    <h2 class="title-lg text-upper">機構介紹</h2>
                <div class="update"> <a href="Oupdate.php" title="編輯機構資料"><img src="img/pen.png" alt="" border="5"></a></div>

                    <p><?php echo $row2['comIntro'] ?></p>

                </div>
            </div>
        </section><!-- .section -->

        <section class="section brd-btm">
            <div class="row">
                <div class="col-sm-6 clear-mrg">
                    <h2 class="title-thin text-muted">機構資料</h2>

                    <dl class="dl-horizontal clear-mrg">
                        <dt class="text-upper">機構名稱:</dt>
                        <dd><?php echo $row2['comName'] ?></dd>
						                        
                        <dt class="text-upper">服務信箱</dt>
                        <dd><?php echo $row2['comMail'] ?></dd>
                        
                        <dt class="text-upper">連絡電話:</dt>
                        <dd><?php echo $row2['phone'] ?></dd>

                        <dt class="text-upper">連絡地址</dt>
                        <dd><?php echo $row2['address'] ?></dd>
                        
                        <dt class="text-upper">機構網址</dt>
                        <dd><a href="<?php echo $row2['url']?>" target="_blank">點此</a></dd>
                    </dl>
                </div>
				<?php
				}
				?>
				<?php 
				if($row['comStatus']==0){
				?>	
					<a href="Review.php" class="button">申請成為機構</a>
				<?php
				}else if($row['comStatus']==2){
				?>	
					<p>機構申請審核中...</p>
				<?php
				}else if($row['comStatus']==3){
				?>
					<p>機構申請資格不符...不通過</p>
					<a href="Review.php" class="button">重新成為機構</a>
				<?php	
				}
	?>
            </div><!-- .row -->
        </section><!-- .section -->


        
    </div><!-- .padd-box -->
<!-- END: PAGE CONTENT -->
						
                </div><!-- .ace-paper-cont -->
            </main><!-- .ace-paper -->
        </div><!-- .ace-paper-stock -->

        </div><!-- .ace-container -->
    </div><!-- #ace-content -->

    <div id="ace-sidebar">
		<button id="ace-sidebar-close" class="btn btn-icon btn-light btn-shade">
			<span class="ace-icon ace-icon-close"></span>
		</button>
<!----------右手邊小框框----------->
		<div class="space"></div>
		<div id="ace-sidebar-inner">
			<nav id="ace-main-nav-sm" class="visible-xs visible-sm text-center">
				<ul class="clear-list">
					<li class="has-sub-menu"><a href="#">訊息專欄</a>
						<ul class="sub-menu">
							<li><a href="typography.html">最新消息</a></li>
							<li><a href="components.html">桃園大小事</a></li>
							<li><a href="search.html">下載專區</a></li>
						</ul>
					</li>
					<li><a href="portfolio.html">活動快訊</a>
					<li><a href="testimonials.html">公益組織</a></li>
					<li class="has-sub-menu"><a href="#">愛心回顧</a>
					</li>
					<li class="has-sub-menu"><a href="category.html">關於益尋愛</a>
						<ul class="sub-menu">
							<li><a href="single.html">益尋愛Q&A </a></li>
						</ul>
					</li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav><!-- #ace-main-nav-sm -->
<!-------------原本這裡是用來放右邊的東西的------------------->
		</div><!-- #ace-sidebar-inner -->
	</div><!-- #ace-sidebar -->

    <footer id="ace-footer" class="ace-container-shift">
        <div class="ace-container">
			<div class="ace-footer-cont clear-mrg">
				<p class="text-center">Copyright © 2018 益尋愛 怡仁愛心基金會</p>				
			</div>
        </div><!-- .ace-container -->
    </footer><!-- #ace-footer -->

    <!-- Triangle Shapes -->
    <svg id="ace-bg-shape-1" class="hidden-sm hidden-xs" height="519" width="758">
        <polygon points="0,455,693,352,173,0,92,0,0,71" style="fill:#d2d2d2;stroke:purple;stroke-width:0; opacity: 0.5">
    </svg>

    <svg id="ace-bg-shape-2" class="hidden-sm hidden-xs" height="536" width="633">
        <polygon points="0,0,633,0,633,536" style="fill:#c0e3e7;stroke:purple;stroke-width:0" />
    </svg>
</div><!-- .ace-wrapper -->

<!-- Scripts -->
<script type="text/javascript" src="js/vendor/jquery-1.12.4.min.js"></script>


<!---<script type="text/javascript" src="http://ditu.google.cn/maps/api/js?key=AIzaSyDiwY_5J2Bkv2UgSeJa4NOKl6WUezSS9XA"></script>--->
<script type="text/javascript" src="js/plugins/highlight/highlight.pack.js"></script>
<script type="text/javascript" src="js/plugins/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/plugins/progressbar.min.js"></script>
<script type="text/javascript" src="js/plugins/slick.min.js"></script>

<script type="text/javascript" src="js/options.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
