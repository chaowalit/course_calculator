<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Course Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="{{ asset('assets/js/jquery/jquery-1.8.2.min.js') }}" type="text/javascript" ></script>
    <link href="{{ asset('assets/css/customize-template.css') }}" type="text/css" media="screen, projection" rel="stylesheet" />
    @if($menu_list != 'term')
    <link href="{{ asset('assets/css/timepicki.css') }}" type="text/css" media="screen, projection" rel="stylesheet" />
    @endif
    <style>
    </style>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="dashboard.html" class="brand"><i class="icon-leaf"> Course Calculator</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        
                        <ul class="nav pull-right">
                            <li>
                                <a>ยินดีต้อนรับ : {{ $data_login['full_name'] }}</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Profile
                                    <b class="caret hidden-phone"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ URL('/profile') }}"><i class="icon-user"></i> Edit Profile</a>
                                    </li>
                                    <li>
                                        <!--<a href="#"><i class="icon-key"></i> Change Password</a>-->
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ URL('/logout') }}"><i class="icon-lock"></i> Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-nav body-nav-horizontal body-nav-fixed">
            <div class="container">
                <ul>
                    <li class="width-menu">
                        <a href="{{ URL::to('term') }}" class="{{ @($menu_list == 'term')? 'active':'' }}">
                            <i class="icon-dashboard icon-large"></i> กำหนดวัน เปิด-ปิด ภาคเรียน
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('dash-board') }}" class="{{ @($menu_list == 'dashboard')? 'active':'' }}">
                            <i class="icon-calendar icon-large"></i> รายวิชา
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('gen-pdf') }}" class="{{ @($menu_list == 'pdf')? 'active':'' }}">
                            <i class="icon-list-alt icon-large"></i> Generate PDF
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="#">
                            <i class="icon-map-marker icon-large"></i> Map It
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-tasks icon-large"></i> Widgets
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-cogs icon-large"></i> Settings
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="icon-bar-chart icon-large"></i> Charts
                        </a>
                    </li>
                -->
                </ul>
            </div>
        </div>

        @yield('main')

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Chandrakasem Rajabhat University</p>
                <div class="disclaimer">
                    <p>39/1 Ratchadaphisek Road, Khwaeng Chantharakasem, Chatuchak District, Bangkok 10900</p>
                    <p>Tel. 0-2942-6900-99</p>
                </div>
            </div>
        </footer>
        
        <script src="{{ asset('assets/js/bootstrap/bootstrap-transition.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-alert.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-modal.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-dropdown.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-scrollspy.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-tab.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-tooltip.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-popover.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-button.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-collapse.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-carousel.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-typeahead.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-affix.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap-datepicker.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/jquery/jquery-tablesorter.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/jquery/jquery-chosen.js') }}" type="text/javascript" ></script>
        <script src="{{ asset('assets/js/jquery/virtual-tour.js') }}" type="text/javascript" ></script>
        @if($menu_list != 'term')
        <script src="{{ asset('assets/js/timepicki.js') }}" type="text/javascript" ></script>
        @endif
        
        <script type='text/javascript'> 
            $('#timepicker_1').timepicki({
                show_meridian:false,
                min_hour_value:0,
                max_hour_value:23,
                step_size_minutes:10,
                overflow_minutes:true,
                increase_direction:'up',
                disable_keyboard_mobile: false
            });
            $('#timepicker_2').timepicki({
                show_meridian:false,
                min_hour_value:0,
                max_hour_value:23,
                step_size_minutes:10,
                overflow_minutes:true,
                increase_direction:'up',
                disable_keyboard_mobile: false
            });
        </script>   

        <script type="text/javascript">
            $(function() {
                $('#sample-table').tablesorter();

                $('#datepicker_1').datepicker({
                    format: 'dd-mm-yyyy',
                    //startDate: '3d',

                });

                $('#datepicker_2').datepicker({
                    format: 'dd-mm-yyyy',
                    //startDate: '-3d'
                });



                $(".chosen").chosen();
            });
        </script>
        
        <style>
            .active{
                background-color: black; 
            }
            .width-menu{
                width: 135px !important;
            }
        </style>
    </body>
</html>