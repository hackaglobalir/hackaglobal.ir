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
        @if($user->roll != 1)
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
                <li>
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
        @endif
    </div>
    <div id="top-box">
        <div class="settings">
            <a href="/settings"><i class="fa fa-cog"></i></a>
        </div>
        <div class="settings">
            <a href="/logout"><i class="fa fa-power-off"></i></a>
        </div>
        <div id="userinfo">
            <span>{{$user->first_name}} {{$user->last_name}}</span>
        </div>
    </div>
    <div id="right-side">
        <div class="title">
            <div class="circlet">
                <i class="fa fa-globe"></i>
            </div>
            <span>ویرایش اطلاعات</span>
        </div>
        <div id="posts">
            
			<form>
			<div class="h_e_btn">
				<input type="text" placeholder="نام" name="FirstName" id="FirstName" value="{{$user->first_name}}"/>
				<input type="text" placeholder="نام خانوادگی" name="LastName" id="LastName" value="{{$user->last_name}}"/>
				<input type="text" placeholder="ایمیل" name="Email" id="Email" value="{{$user->email}}"/>
				<input type="text" placeholder="موبایل" name="Mobile" id="Mobile" value="{{$user->phone_number}}"/>
				<input type="text" placeholder="گذرواژه قدیم" name="OldPass" id="OldPass"/>
				<input type="text" placeholder="گذرواژه جدید" name="NewPass" id="NewPass"/>
				<input type="text" placeholder="تکرار گذرواژه جدید" name="RePass" id="RePass"/>
				<div class="h_con_skill">
				<div class="h_skill"><input type="checkbox" name="php"/>PHP</div>
				<div class="h_skill"><input type="checkbox" name="php"/>Mysql</div>
				<div class="h_skill"><input type="checkbox" name="php"/>Python</div>
				<div class="h_skill"><input type="checkbox" name="php"/>Laravel</div>
				<div class="h_skill"><input type="checkbox" name="php"/>Javascript</div>
				</div>
				<input type="submit" value="تغییر" />
			</form>
			</div>
        </div>
		
    </div>
</body>
</html>