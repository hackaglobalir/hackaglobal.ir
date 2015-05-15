<html>
<head>
    <title>هاکا گلوبال تهران</title>
    <meta charset="utf-8" />
    <link href="/css/style.css" type="text/css" rel="stylesheet"  />
	<link href="/css/h_style.css" type="text/css" rel="stylesheet"  />
    <link href="/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
</head>
<body>
    <div id="left-side">
        <ul>
            <li class="active">
                <a href="">داشبورد</a>
                <i class="fa fa-home"></i>
            </li>
            <li>
                <a href="">توضیحات</a>
                <i class="fa fa-file-text"></i>
            </li>
            <li>
                <a href="">تصاویر</a>
                <i class="fa fa-picture-o"></i>
            </li>
            <li>
                <a href="">شهرها</a>
                <i class="fa fa-globe"></i>
            </li>
            <li>
                <a href="">رویدادها</a>
                <i class="fa fa-calendar-o"></i>
            </li>
            <li>
                <a href="">نظرات</a>
                <i class="fa fa-comments"></i>
            </li>
            <li>
                <a href="">تماس با ما</a>
                <i class="fa fa-phone"></i>
            </li>
            <li>
                <a href="">کاربران</a>
                <i class="fa fa-user"></i>
            </li>
        </ul>
    </div>
    <div id="top-box">
        <div class="settings">
            <i class="fa fa-cog"></i>
        </div>
        <div class="settings">
            <a href="/logout"><i class="fa fa-power-off"></i></a>
        </div>
        <div id="userinfo">
            <span>{{$first_name}} {{$last_name}}</span>
        </div>
    </div>
    <div id="right-side">
        <div class="title">
            <div class="circlet">
                <i class="fa fa-file-text"></i>
            </div>
            <span>توضیحات</span>
        </div>
        <div id="posts">
            
			<form>
			<div class="h_e_btn">
				<input type="text" placeholder="آدرس فیس بوک" name="Facebook" id="facebook"/>
				<input type="text" placeholder="آدرس توییتر" name="Twitter" id="Twitter"/>
				<input type="text" placeholder="آدرس اینستاگرام" name="Instagram" id="Instagram"/>
				<input type="submit" value="اضافه کردن" />
			</form>
			</div>
        </div>
		
    </div>
</body>
</html>