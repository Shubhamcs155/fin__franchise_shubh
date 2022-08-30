<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bisjhintus</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('./plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('./plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">

</head>

<body>
        <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start 
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{asset('images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{asset('./images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{asset('images/logo-text.png')}}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">{{count(Auth::user()->notifications)}}</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">{{count(Auth::user()->notifications)}} New Notification</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">{{count(Auth::user()->notifications)}}</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                     @foreach (Auth::user()->notifications as $notification)
                                     @if ($notification->type === "App\Notifications\AnnouncementNotification" )
                                     <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fa fa-bullhorn"></i></span>
                                            <div class="notification-content">
                                               <a href="{{route('student.announcement',$notification->id)}}"><h4 class="notification-heading">{{$notification->data['message']['subject']}}</h4></a> 
                                                <span class="notification-text">{{Str::limit($notification->data['message']['message'], 30)}}</span> 
                                            </div>
                                        </a>
                                    </li>

                                    @else 
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                               <h4 class="notification-heading">{{$notification->data['message']['subject']}}</h4>
                                                <span class="notification-text">{{Str::limit($notification->data['message']['message'], 30)}}</span> 
                                            </div>
                                        </a>
                                    </li>
                                     @endif
                                   
                                    
                                     @endforeach
                                      
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{asset('images/user/1.png')}}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="{{route('student.logout')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a  href="{{route('student.dashboard')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                      
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a href="javascript:void()" >
                            <i class="icon-book-open menu-icon"></i><span class="nav-text">My Courses</span>
                        </a>
                    </li>
                    <li>
                        <a  href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i> <span class="nav-text">Assignments</span>
                        </a>
                    
                    </li>
                
                    <li>
                        <a  href="javascript:void()" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i> <span class="nav-text">Results</span>
                        </a>
                    
                    </li>
                    <li>
                        <a  href="javascript:void()" aria-expanded="false">
                            <i class="icon-calender menu-icon"></i> <span class="nav-text">TimeTable</span>
                        </a>
                    
                    </li>
                    <li>
                        <a  href="javascript:void()" aria-expanded="false">
                            <i class="icon-wallet menu-icon"></i> <span class="nav-text">Fees</span>
                        </a>
                    
                    </li>
                    <li>
                        <a  class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-bubble menu-icon"></i> <span class="nav-text">Discussions</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Faqs</a></li>
                            <li><a href="./app-calender.html">Ask Doubt</a></li>
                        </ul>
                    
                    </li>
                    
                  
            
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
   @yield('content')

    <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('plugins/common/common.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/gleek.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>
    <!-- Chartjs -->
    <script src="{{asset('./plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{asset('./plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{asset('./plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('./plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('./plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{asset('./plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('./plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('./plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('./plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src=".{{asset('/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{asset('./js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>