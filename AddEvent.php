<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>|益尋愛|</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="css/Addbootstrap.min.css" rel="stylesheet" />
	<link href="css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />


	<!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="css/themify-icons.css" rel="stylesheet">
</head>

<header class="header_area">
	<!-- Top Header Area Start -->
	<div class="top_header_area hidden-xs">
		<div class="container">
						<!--  Login Register Area -->
						<div class="login_register">
							<div class="login">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
								<a href="">登入</a>
							</div>
							<div class="reg">
								<i class="fa fa-user" aria-hidden="true"></i>
								<a href="">註冊</a>
							</div>
						</div>

						
					</div>
				</div>
			</div>
	
	<!-- Top Header Area  End -->

	<!-- Main Header Area Start -->
	<div class="main_header_area home2">
		<div class="container">
			<div class="row">
			

				<div class="col-sm-9 col-xs-12">
					<!-- Menu Area -->
					<div class="main_menu_area">
						<div class="mainmenu">
							<nav>
								<ul id="nav">
									<li><a href="index.html">訊息專欄<i class="fa fa-caret-right" aria-hidden="true"></i>
</a>
										<ul class="sub-menu">
											<li><a href="#">下載專區</a></li>
											<li><a href="#">桃園大小事</a></li>
                                            <li><a href="#">最新消息</a></li>
										</ul>
									</li>
									<li  class="current_page_item"><a href="EventNews.html">活動快訊<i class="fa fa-caret-right" aria-hidden="true"></i></a>											   									</li>
                                    <li><a href="Organization.html">公益組織<i class="fa fa-caret-right" aria-hidden="true"></i></a>											   									</li>
									<li><a href="History.html">愛心回顧<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
									<li><a href="About.html">關於益尋愛<i class="fa fa-caret-down" aria-hidden="true"></i>
</a>
												<ul class="sub-menu">
													<li><a href="Q&A.html">益尋愛Q&A </a></li>
												</ul>
											</li>
									<li><a href="#">益寶登入<i class="fa fa-caret-right" aria-hidden="true"></i></a>
									</li>
											
								</ul>
							</nav>
						</div>
						<!-- mainmenu end -->
						
					</div>
				</div>
			</div>
		</div>
	</div>

<body>
	<div class="image-container set-full-height" style="background-image: url('img/paper-2.jpeg')">
	   
		
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizard">
		                <form action="" method="">
		                <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">新增活動</h3></p>
		                        	<p class="category">請依下列步驟完成活動新增</p>
		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#location" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												第一步
											</a>
										</li>
			                            <li>
											<a href="#type" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-direction-alt"></i>
												</div>
												第二步
											</a>
										</li>
			                            <li>
											<a href="#facilities" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-panel"></i>
												</div>
												第三步
											</a>
										</li>
			                            <li>
											<a href="#description" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-comments"></i>
												</div>
												最後一步！
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
                                     <h5 class="info-text">首先，為您的活動訂下名稱及相關日期</h5>
		                            	<div class="row">
		                                  	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>活動名稱</label>
		                                        	<input type="text" class="form-control" id="Name" placeholder="">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                            <label><b>活動開始日期:</b></label>
                                                    <div class="input-append date form-group" id="dp1" data-date-format="yyyy/mm/dd">
                                                        <input type="date" class="form-control" name="startDate"/>
                                                    </div> 
		                                        </div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label><b>活動結束日期:</b></label>
                                                    <div class="input-append date form-group" id="dp1" data-date-format="yyyy/mm/dd">
                                                        <input type="date" class="form-control" name="startDate"/>
                                                    </div> 
		                                    	</div>
		                                	</div>
                                            
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label><b>活動截止日期:</b></label>
                                                    <div class="input-append date form-group" id="dp1" data-date-format="yyyy/mm/dd">
                                                        <input type="date" class="form-control" name="startDate"/>
                                                    </div> 
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
                                    <!-----------------------------------第二頁----------------------------------------->
		                            <div class="tab-pane" id="type">
		                                <h5 class="info-text">讓益寶更了解您的志工需求！</h5>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>活動宣傳圖片</label>
		                                        	<Input Type="File" Name="YouFile">
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>選擇活動類型</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">選擇活動類型</option>
			                                            <option>社區服務</option>
			                                            <option>環境人文 </option>
                                                        <option>文化面向 </option>
                                                        <option>科技面相 </option>
                                                        <option>健康促進 </option>
                                                        <option>教育助學 </option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>志工需求人數</label>
		                                        	<input type="text" class="form-control" id="ｐｅｏｐｌｅ" placeholder="">
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>提供時數（小時）</label>
		                                        	<input type="text" class="form-control" id="Ｔｉｍｅ" placeholder="">
		                                    	</div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <h5 class="info-text">您的活動是否有提供福利 </h5>
		                                <div class="row">
		                                     <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-4 col-sm-offset-2">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-briefcase"></i>
															<p>便當</p>
		                                                </div>
		                                            </div>
		                                        </div>
                                                
		                                        <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-spray"></i>
															<p>礦泉水</p>
		                                                </div>
		                                            </div>
		                                        </div>
                                                
                                                <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-home"></i>
															<p>保險</p>
		                                                </div>
		                                            </div>
		                                        </div>
                                                
                                                <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-gift"></i>
															<p>紀念品</p>
		                                                </div>
                                          		    </div>
		                                        </div>
                                               <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <label>其他： <i class="ti-more"></i></label>
		                                        	<input type="text" class="form-control" id="Ｔｉｍｅ" placeholder="">
		                                                </div>
                                                        
		                                            </div>
		                                        </div>
                                                
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h5 class="info-text">最後介紹一下您的活動吧！</h5>
                                          <center> 請輸入活動地址：</center></br>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>跟益寶們說說您的活動內容吧！</label>
		                                            <textarea class="form-control" placeholder="" rows="9"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                        <div class="form-group">
		                                            <label>例如</label>
		                                            <p class="description">"
                                                青年節系列服務活動之「大家一起來‧祖孫樂開懷」</br>
                                                
                                                內容：</br>
                                                有遊戲關卡、異國美食、公益攤位…等等好玩又好吃的內容～</br>
                                                更有太鼓、阿卡貝拉、舞蹈、越南歌曲演唱、吉他…等精彩演出～</br>
                                                現場備有午餐饗宴～
                                                這次號召了上百名的青年志工在現場服務，</br>
                                                邀請您一起帶家裡長輩來闖關唷！！
                                                欲知詳情，歡迎電洽青年志工中心03-339-5898
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='下一步' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
									</div>

	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='上一步' />
	                                </div>
	                                <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	   
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/AddEventbootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>

</html>
