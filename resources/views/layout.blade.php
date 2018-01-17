<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Leaflet System/Big Data Agency CO.,LTD.</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style-responsive.css" rel="stylesheet">

    <script src="/assets/js/chart-master/Chart.js"></script>

    @section('script')

    @show

</head>

<body>

<section id="container" >

    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>

        <a href="{{"admin.calendar"}}" class="logo"><b>BIG DATA AGENCY CO,.LTD</b></a>

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </div>
    </header>

    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="{{route('employee.index')}}"><img width="60px" height="80px" src="../assets/img/Picture.png"/></a></p>
                <h5 class="centered">{{\Illuminate\Support\Facades\Auth::user()->first_name. ' ' .\Illuminate\Support\Facades\Auth::user()->last_name }}</h5>
                <br>

                <li class="sub-menu">
                    <a href="{{route("admin.calendar")}}" >
                        <i class="fa fa-cogs"></i>
                        <span>ปฏิทินการลาพนักงาน</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route("admin.approve")}}" >
                        <i class="fa fa-cogs"></i>
                        <span>อนุมัติการลาโดย admin</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route("leader.approve")}}" >
                        <i class="fa fa-cogs"></i>
                        <span>อนุมัติการลาโดย leader</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route("director.approve")}}" >
                        <i class="fa fa-cogs"></i>
                        <span>อนุมัติการลาโดย director</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route("admin.permission")}}" >
                        <i class="fa fa-cogs"></i>
                        <span>กำหนดสิทธิ์วันลาพนักงาน</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route("admin.sum")}}" >
                        <i class="fa fa-book"></i>
                        <span>พนักงานทั้งหมด</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route('employee.index')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>โปรไฟล์</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route('leave.create')}}" >
                        <i class="fa fa-cogs"></i>
                        <span>สร้างใบลา</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route('employee.status')}}" >
                        <i class="fa fa-cogs"></i>
                        <span>สถานะใบลา</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route('employee.roles')}}" >
                        <i class="fa fa-book"></i>
                        <span>ระเบียบการลา</span>
                    </a>
                </li>
            </ul>

        </div>
    </aside>

    <section id="main-content">
       @section('content')

        @show
    </section>
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="assets/js/sparkline-chart.js"></script>
<script src="assets/js/zabuto_calendar.js"></script>

</body>
</html>
