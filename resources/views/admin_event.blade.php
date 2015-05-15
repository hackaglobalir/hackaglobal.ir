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
            <li>
                <a href="/cp_admin/">داشبورد</a>
                <i class="fa fa-home"></i>
            </li>
            <li>
                <a href="/cp_admin/homeinfo">توضیحات</a>
                <i class="fa fa-file-text"></i>
            </li>
            <li>
                <a href="/cp_admin/cities">شهرها</a>
                <i class="fa fa-globe"></i>
            </li>
            <li class="active">
                <a href="/cp_admin/events">رویدادها</a>
                <i class="fa fa-calendar-o"></i>
            </li>
            <li>
                <a href="/cp_admin/skills">مهارت ها</a>
                <i class="fa fa-cogs"></i>
            </li>
            <li>
                <a href="/cp_admin/contacts">تماس با ما</a>
                <i class="fa fa-phone"></i>
            </li>
            <li>
                <a href="/cp_admin/socials">شبکه های اجتماعی</a>
                <i class="fa fa-globe"></i>
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
            <i class="fa fa-power-off"></i>
        </div>
        <div id="userinfo">
            <span>امید نیک راه</span>
        </div>
    </div>
    <div id="right-side">
        <div class="title">
            <div class="circlet">
                <i class="fa fa-calendar-o"></i>
            </div>
            <span>رویدادها</span>
        </div>
        <div id="posts">
            <form>
				<div class="h_rows_e H_header_row_e">
				<div class="h_row_i"></div>
				<div class="h_row_i">نام رویداد</div>
				<div class="h_row_i">تاریخ رویداد</div>
				<div class="h_row_i">توضیحات رویداد</div>	
				<div class="h_row_i">تصویر رویداد</div>
				
			</div>	
			<!-- events rows -->
			<div class="h_rows_e h_r_e">
				<div class="h_row_i"><input type="checkbox" class="h_marg_10"/></div>
				<div class="h_row_i">Tehran</div> 
				<div class="h_row_i">Alaan</div>
				<div class="h_row_i">tozihat</div>	
				<div class="h_row_i"><img src="" /></div>
			</div>
			<!-- end events rows -->
			
			<div class="h_e_btn">
			<input type="submit" value="حذف" class="e_del" />
			
			</form>
			<form>
						<div class="h_e_btn">
			<input type="text" placeholder="نام رویداد" name="EventName" id="EventName"/>
			<input type="text" placeholder="تاریخ رویداد" name="EventDate" id="EventDate"/>
            <textarea placeholder="توضیحات رویداد" name="EventDesc" id="EventDesc"></textarea>
			
			<input type="text" placeholder="تصویر رویداد " name="EventImage" id="EventImage"/>
			<input type="submit" value="اضافه کردن" />
			</div>
			</form>

        </div>
		
    </div>
</body>
</html>