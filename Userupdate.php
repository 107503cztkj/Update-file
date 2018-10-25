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
    <!-- Styles -->
    <link href="js/plugins/highlight/solarized-light.css" rel="stylesheet">
    <link href="UserFile.css" rel="stylesheet">

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
										<li><a href="index(a).php">訊息專欄</a></li>
										<li><a href="EventNews(a).php">活動快訊</a>
										<li><a href="Organization.php">公益組織</a></li>
										<li><a href="History(a).php">愛心回顧</a></li>
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
					<a href="index.php" data-tooltip="Home"><img class="avatar avatar-42" src="img/uploads/avatar/avatar-42x42.png" alt=""></a>
				</li>
				<li>
					<a href="experience.php" data-tooltip="Experience"><span class="ace-icon ace-icon-experience"></span></a>
				</li>
				<li>
					<a href="portfolio.php" data-tooltip="Portfolio"><span class="ace-icon ace-icon-portfolio"></span></a>
				</li>
				<li>
					<a href="testimonials.php" data-tooltip="References"><span class="ace-icon ace-icon-references"></span></a>
				</li>
				<li>
					<a href="contact.php" data-tooltip="Contact"><span class="ace-icon ace-icon-contact"></span></a>
				</li>
				<li>
					<a href="category.php" data-tooltip="Blog"><span class="ace-icon ace-icon-blog"></span></a>
				</li>
			</ul>
        </nav><!-- #ace-tab-nav-sm -->
		<?php
					$email=$_SESSION['email'];
					$sql = "SELECT * FROM customer where email= '$email' ";
					$data = mysql_query($sql) or die(mysql_error());
					$row = mysql_fetch_array($data);
					
					
					if (preg_match("/無/i", $row["language"])){
						 $checked[0] = "checked";
					}
					if (preg_match("/台語/i", $row["language"])){
						 $checked[1] = "checked";
					}
					if (preg_match("/客語/i", $row["language"])){
						 $checked[2] = "checked";
					}
					if (preg_match("/日語/i", $row["language"])){
						 $checked[3] = "checked";
					}
					if (preg_match("/英語/i", $row["language"])){
						 $checked[4] = "checked";
					}
					if (preg_match("/男/i", $row["gender"])){
						 $selected[2] = "selected";
					}
					if (preg_match("/女/i", $row["gender"])){
						 $selected[3] = "selected";
					}
					if (preg_match("/葷食/i", $row["foodHabit"])){
						 $selected[0] = "selected";
					}
					if (preg_match("/素食/i", $row["foodHabit"])){
						 $selected[1] = "selected";
					}				
			?>
		<form action="userUpdate_finish.php"  method="post" enctype="multipart/form-data">	
        <article id="ace-card" class="ace-card bg-primary">
			<div class="ace-card-inner text-center">
				<img class="avatar avatar-195" src="cus-comImg/<?php echo $row['profilePic'] ?>" width="195" height="195" alt="">
                <a class="button1" href="#">變更頭像</a>

				<h1>益寶名稱</h1>
			<!-----名字的地方--->	<p class="text-muted"><?php echo $row[cusName];?></p>
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
											<a href="Ofile.php" data-tooltip="切換機構"><img class="avatar avatar-42" src="img/uploads/avatar/avatar-42x42.png" alt=""></a>
										</li>									
										<li>
											<a href="UserRecord.php" data-tooltip="活動經歷"><span class="ace-icon ace-icon-experience"></span></a>
										</li>
										<li>
											<a href="USerTime.php" data-tooltip="服務時數表"><i class="fa fa-file-text-o" style="font-size:30px;"></i></a>
										</li>
										<li>
											<a href="UserHistory.php" data-tooltip="愛心回顧紀錄"><span class="ace-icon ace-icon-blog"></span></a>
										</li>
										<li>
											<a href="#" data-tooltip="登出"><i class="fa fa-sign-out" style="font-size:24px"></i></a>
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
                    <h2 class="title-lg text-upper">個人介紹</h2>
				<textarea name="cusIntro" style="width:500px;height:200px; border-color:#CCC;"><?php echo $row['cusIntro'] ?></textarea>
                </div>
            </div>
        </section><!-- .section -->

        <section class="section brd-btm">
            <div class="row">
                <div class="col-sm-6 clear-mrg">
                    <h2 class="title-thin text-muted">個人資料</h2>

                    <dl class="dl-horizontal clear-mrg">
                        <dt class="text-upper">益寶名稱</dt>
                        <dd><?php echo $row['cusName'] ?></dd>
						
                        <dt class="text-upper">身分證字號</dt>
                        <dd><?php echo $row['identify'] ?></dd>
                        
                        <dt class="text-upper">性別</dt>
                        <dd>
                        <?php 
						echo "<select name=\"gender\">
					　		<option value=\"男\" $selected[2]>男性</option>
					　		<option value=\"女\" $selected[3]>女性</option>
						</select>" 
						?>
						</dd>
                        <dt class="text-upper">生日</dt>
                        <dd><input type="text" name="birth"  value="<?php echo $row['birth'] ?>" size="2"></dd>

                        <dt class="text-upper">E-Mail</dt>
                        <dd><?php echo $row['email'] ?></dd>

                        <dt class="text-upper">連絡電話</dt>
                        <dd><input type="text" name="phone" value="<?php echo $row['phone'] ?>" size="2"></dd>
                    </dl>
                </div><!-- .col-sm-6 -->

                <div class="col-sm-6 clear-mrg">
                    <h2 class="title-thin text-muted"></h2>

                    <div class="progress-bullets ace-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10">
                    
                    <dl class="dl-horizontal clear-mrg">
                        <dt class="text-upper">職業</dt>
                        <dd><input type="text" name="job" value="<?php echo $row['job'] ?>" size="2"></dd>
						
                        <dt class="text-upper">擅長語言</dt>
                        <dd>
							<input type="checkbox" name="language[]" value="無" <?php echo $checked[0] ?>>無
							<input type="checkbox" name="language[]" value="台語" <?php echo $checked[1] ?>>台語</br>
							<input type="checkbox" name="language[]" value="客語" <?php echo $checked[2] ?>>客語
							<input type="checkbox" name="language[]" value="日語" <?php echo $checked[3] ?>>日語</br>
							<input type="checkbox" name="language[]" value="英語" <?php echo $checked[4] ?>>英語</dd>
                        
                        <form>
						<dt class="text-upper">飲食習慣</dt>
                        <dd>
							<select name="foodHabit">
								<option value="葷食" <?php echo $selected[0]?>>葷食</option>
								<option value="素食" <?php echo $selected[1]?>>素食</option>
							</select> 
						</dd>
                        </form>
						<dt class="text-upper">修改密碼</dt>
                        <dd><input type="password" name="pw" value="<?php echo $row['password'] ?>" size="2"></dd>
						
						<dt class="text-upper">再次確認密碼</dt>
                        <dd><input type="password" name="pw2" value="<?php echo $row['password'] ?>" size="2"></dd>

                    </dl>
                    </div>
                </div><!-- .col-sm-6 -->
              

            </div><!-- .row -->
              <center><a class="button" href="#">儲存更改</a></center>
        </section><!-- .section -->


        
    </div><!-- .padd-box -->
	<input type="submit" class="submit" value="儲存">
	</form>
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
							<li><a href="typography.php">最新消息</a></li>
							<li><a href="components.php">桃園大小事</a></li>
							<li><a href="search.php">下載專區</a></li>
						</ul>
					</li>
					<li><a href="portfolio.php">活動快訊</a>
					<li><a href="testimonials.php">公益組織</a></li>
					<li class="has-sub-menu"><a href="#">愛心回顧</a>
					</li>
					<li class="has-sub-menu"><a href="category.php">關於益尋愛</a>
						<ul class="sub-menu">
							<li><a href="single.php">益尋愛Q&A </a></li>
						</ul>
					</li>
					<li><a href="contact.php">contact</a></li>
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
