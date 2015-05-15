<html>
<head>
    <title>هاکا گلوبال تهران</title>
    <meta charset="utf-8" />
    <link href="/css/style.css" type="text/css" rel="stylesheet"  />
    <link href="/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/scroll.js"></script>
</head>
<body>
<div id="left-side">
    <ul>
        <li>
            <a href="/cp_admin/">داشبورد</a>
            <i class="fa fa-home"></i>
        </li>
        <li class="active">
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
        <form action="" method="post">
            <input type="text" placeholder="عنوان اول" name="title1" id="title1"
                    value="{{ $headers[0] }}"/>
            <textarea placeholder="توضیحات اول"  name="detail1" id="detail1" />{{ $posts[0] }}</textarea>
            <input type="text" placeholder="عنوان دوم" name="title2" id="title2"
                   value="{{ $headers[1] }}"/>
            <textarea placeholder="توضیحات اول"  name="detail2" id="detail2"/>{{ $posts[1] }}</textarea>
            <input type="text" placeholder="عنوان سوم" name="title3" id="title3"
                   value="{{ $headers[2] }}"/>
            <textarea placeholder="توضیحات اول"  name="detail3" id="detail3"/>{{ $posts[2] }}</textarea>
            <input type="submit" value="انــتـشـار"/>
        </form>
    </div>
</div>
</body>
</html>