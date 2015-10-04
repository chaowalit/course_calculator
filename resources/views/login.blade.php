<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login Please...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="{{ asset('assets/js/jquery/jquery-1.8.2.min.js') }}" type="text/javascript" ></script>
    <link href="{{ asset('assets/css/customize-template.css') }}" type="text/css" media="screen, projection" rel="stylesheet" />

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
                    <a href="dashboard.html" class="brand"><i class="icon-calendar"> Course Calculator</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav">
                            
                            
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                                <a href="{{ URL('/login') }}" class=""><i class="icon-key"></i> Login</a>
                            </li>
                            <li>
                                <a href="{{ URL('/register') }}" class=""><i class="icon-user"></i> Register</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
        
        <div id="body-content">
                               
            <div class='container'>
                
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{!!$error!!}</p>
                            @endforeach
                            <legend>Please Login</legend>
                            {!!Form::open(['url'=>'/login','class'=>'form-signin','id'=>'loginForm'])!!}
                            
                                <div class="form-inner">
                                    <div class="input-prepend">
                                        
                                        <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                        <input type='text' name="email" class='span5' id='email'/>
                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' name="password" class='span5' id='password'/>
                                    </div>
                                    <!--
                                    <label class="checkbox" for='remember_me'>Remember me
                                        <input type='checkbox' id='remember_me'
                                               />
                                    </label>
                                    -->
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' id="submit" value='Login'/>
                                </footer>
                            {!!Form::close()!!}
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>

            </div>
        </div>

        <div class="signin-row row">
            <div class="span4"></div>
            <div class="span8">
                
            </div>
            <div class="span3"></div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="navbar navbar-fixed-bottom application-footer">
            <div class="container">
                <p>Chandrakasem Rajabhat University</p>
                <div class="disclaimer">
                    <p>39/1 Ratchadaphisek Road, Khwaeng Chantharakasem, Chatuchak District, Bangkok 10900</p>
                    <p>Tel. 0-2942-6900-99</p>
                </div>
            </div>
        </footer>

        <script type="text/javascript">
            $(function(){
                //document.forms['loginForm'].elements['j_username'].focus();
                $('body').addClass('pattern pattern-sandstone');
                $("[rel=tooltip]").tooltip();
            });
        </script>
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
        
        <style>
            .form-inner {
                margin-left: 60px !important;
            }
            #body-content {
                padding-top: 60px;

            }
            .application-footer {
                position: fixed !important;
            }
        </style>
	</body>
</html>