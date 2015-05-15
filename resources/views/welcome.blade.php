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
<div id="toolbar">
    @if($first_name != null)
        <div class="cn">
            <div id="right-toolbar">
                <img src="img/avatar.png" alt="" />
                <span>{{$first_name}} {{$last_name}}  عزیز خوش آمدید</span>
            </div>
            <div id="left-toolbar">
                <a href="#"><i class="fa fa-cog"></i></a>
                <a href="/logout"><i class="fa fa-power-off"></i></a>
            </div>
        </div>
    @endif
    @if($first_name == null)
            <div id="toolbarout">
                <div class="cn">
                    <div id="right-toolbarout">
                        <img src="img/register.png" alt="" />
                        <span><a href="#"> همین حالا در سایت عضو شوید</a></span>
                    </div>
                    <div id="left-toolbarout">
                        <span><a href="login">ورود</a></span>
                        <span><a href="register">ثبت نام</a></span>
                    </div>
                </div>
            </div>
    @endif
</div>
<header>
    <img src="img/header.png" alt="" />
</header>
<nav id="navbar">
    <div class="cn">
        <ul>
            <li><a href="">هاکا ایران</a></li>
            <li><a href="">شهرها</a></li>
            <li><a href="">رویدادها</a></li>
            <li><a href="">تماس با ما</a></li>
        </ul>
    </div>
</nav>
<article id="hacka">
    <div class="cn">
        <section class="hacka-detail">
            <div class="title-hacka-detail">
                <span>{{$headers[0]}}</span>
            </div>
            <div class="text-detail-hacka">
                <p>
                    {{$posts[0]}}
                </p>
            </div>
        </section>
        <section class="hacka-detail">
            <div class="title-hacka-detail">
                <span>{{$headers[1]}}</span>
            </div>
            <div class="text-detail-hacka">
                <p>
                    {{$posts[1]}}
                </p>
            </div>
        </section>
        <section class="hacka-detail">
            <div class="title-hacka-detail">
                <span>{{$headers[2]}}</span>
            </div>
            <div class="text-detail-hacka">
                <p>
                    {{$posts[2]}}
                </p>
            </div>
        </section>
    </div>
</article>
<div class="cn">
    <div id="lasted-event">
        <div id="pic-event">
            <img src="img/event-pic.jpg" alt="" />
        </div>
        <i class="fa fa-clock-o"></i>
        <div id="date-event">
            <span>آخرین رویداد ما</span>
            <span>{{$lastEvent->held_at_string}}</span>
            <span>{{$lastEvent->title}}</span>
        </div>
    </div>

    @foreach ($cityList as $city)
        <div class="events">
            <a href="{{$city['domain']}}">
                <div class="cityname">
                    <span>{{$city['title']}}</span>
                </div>
                <img src="{{$city['img']}}" alt="{{$city['title']}}'s pic" />
            </a>
        </div>
    @endforeach
</div>
<div id="contact">
    <div class="cn">
        <span id="title-contact">تـمـاس بـا مـا</span>
        <form action="" method="post">
            <input type="text" name="Name" placeholder="نام و نام خانوادگی" />
            <input type="text" name="Email" placeholder="ایمیل شما" />
            <input type="text" name="Title" placeholder="موضوع" />
            <textarea name="Detail" placeholder="توضیحات"></textarea>
            <input type="submit" value="ارســال" />
        </form>
        <img src="img/contact.jpg" alt="" />
        <div id="contactspan">
            <span class="spancontact">برای ارتباط با ما از طریق فرم فوق اقدام نمایید</span>
            <span class="spancontact">اگه خواستین ما رو حمایت کنید موضوع پیام خودتان را با عنوان "حمایت" تنظیم نمایید</span>
        </div>
    </div>
</div>
<footer>
    <div class="cn">
        <span>کلیه حقوق این سایت محفوط است !!</span>
        <div id="socialnetwork">
            <a href="{{$twitter}}"><i class="fa fa-twitter tw"></i></a>
            <a href="{{$facebook}}"><i class="fa fa-facebook fb"></i></a>
            <a href="{{$instagram}}"><i class="fa fa-instagram ins"></i></a>
        </div>
    </div>
</footer>
</body>
</html>
