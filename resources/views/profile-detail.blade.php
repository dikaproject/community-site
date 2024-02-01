<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('css/profile-detail.css') }}" />

    <title>Sidebar</title>
</head>

<body>
    <div class="container">
        <div class="container-wrapper">
            <div class="sidebar">
                <div class="menu-btn">
                    <i class="ph-bold ph-caret-left"></i>
                </div>
                <div class="head active">
                    <a href="{{ route('DetailProfile') }}">
                        <div class="user-img">
                            <img src="{{asset('images/user.jpg')}}" alt="" />
                        </div>
                    </a>
                    <div class="user-details">
                        <p class="title">web developer</p>
                        {{ Auth::user()->name }}
                    </div>
                </div>
                <div class="nav">
                    <div class="menu">
                        <p class="title">Main</p>
                        <ul>
                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <i class="icon ph-bold ph-house-simple"></i>
                                    <span class="text">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('chatify') }}">
                                    <i class="icon ph-bold ph-chat"></i>
                                    <span class="text">Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ph-bold ph-file-text"></i>
                                    <span class="text">Posts</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ph-bold ph-calendar-blank"></i>
                                    <span class="text">Schedules</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ph-bold ph-chart-bar"></i>
                                    <span class="text">Income</span>
                                    <i class="arrow ph-bold ph-caret-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">
                                            <span class="text">Earnings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="text">Funds</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="text">Declines</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="text">Payouts</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu">
                        <p class="title">Settings</p>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icon ph-bold ph-gear"></i>
                                    <span class="text">Settings</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{ route('DetailProfile') }}">
                                    <i class="icon ph-bold ph-user"></i>
                                    <span class="text">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu">
                    <p class="title">Account</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-info"></i>
                                <span class="text">Help</span>
                            </a>
                        </li>
                        <li>
                            <i class="icon ph-bold ph-sign-out"></i>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="wrapper-main">
                    <div class="wrapper wrapper-1">
                        <nav>
                            <div class="title">
                                <h1>Welcome {{ Auth::user()->name }} 👋</h1>
                                <p>Dashboard / profile</p>
                            </div>
                            <div class="search">
                                <div class="search-box">
                                    <div class="icon">
                                        <i class="ph ph-magnifying-glass"></i>
                                    </div>
                                    <div class="input">
                                        <input type="search" placeholder="Search Someone" name="" id="">
                                    </div>

                                    <div class="logo-wrapper">
                                        <div class="logo notification">
                                            <i class="ph ph-bell-ringing"></i>
                                        </div>
                                        <div class="logo notification">
                                            <i class="ph ph-chat-circle-dots"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <img src="{{asset('images/mountaint.jpg')}}" alt="" class="card">
                        <div class="card-white">

                        </div>
                        <div class="user">
                            <div class="profile-user">
                                <img src="{{asset('images/user.jpg')}}" alt="">
                            </div>
                            <div class="name-user">
                                <div class="name">
                                    <h1>{{ Auth::user()->name }}</h1>
                                </div>
                                <div class="follower">
                                    <div class="group">
                                        <h2>346</h2>
                                        <p>Postingan</p>
                                    </div>
                                    <div class="group">
                                        <h2>400RB</h2>
                                        <p>Followers</p>
                                    </div>
                                    <div class="group">
                                        <h2>140RB</h2>
                                        <p>Mengikuti</p>
                                    </div>
                                    <div class="group group-icon">
                                        <i class="ph ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <h1 class="post">Post Shoot</h1>

                        <div class="menu-list">
                            <div class="menu-button">
                                <a href="#">All</a>
                                <a href="#">About</a>
                                <a href="#">Project</a>
                                <a href="#">Certificate</a>
                            </div>
                        </div>
                        <div class="content-post">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-2">
                <h1>Profile :</h1>
            </div>
        </div>

    </div>

    <!-- Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>
</body>

</html>
