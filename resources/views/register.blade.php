<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Register Please...</title>
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
        
        <section id="my-account-security-form" class="page container">
            {!!Form::open(['url'=>'/register','class'=>'form-horizontal','id'=>'userSecurityForm'])!!}
                <div class="container">

                    <div class="alert alert-block alert-info" style="text-align: center;">
                        <p>
                            <b>ระบบลงทะเบียน สำหรับเข้าใช้งานระบบ <br>(Register)</b>
                        </p>
                    </div>
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{!!$error!!}</p>
                    @endforeach
                    <div class="row">
                        <div id="acct-password-row" class="span7">
                            <fieldset>
                                <legend>Account Sign in</legend><br>
                                <div class="control-group ">
                                    <label class="control-label">Teacher Number<span class="required"> *</span></label>
                                    <div class="controls">
                                        <input id="email" name="email" class="span4" type="text" value="" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">New Password<span class="required"> *</span></label>
                                    <div class="controls">
                                        <input id="password" name="password" class="span4" type="password" value="" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Verify New Password<span class="required"> *</span></label>
                                    <div class="controls">
                                        <input id="password_confirmation" name="password_confirmation" class="span4" type="password" value="" autocomplete="false">

                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div id="acct-verify-row" class="span9">
                            <fieldset>
                                <legend>Account Information</legend>
                                <div class="control-group ">
                                    <label class="control-label">ชื่อ-นามสกุล</label>
                                    <div class="controls">
                                        <input id="full_name" name="full_name" class="span5" type="text" value="" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">ประจำคณะวิชา</label>
                                    <div class="controls">
                                        <input id="faculty" name="faculty" class="span5" type="text" value="" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="challengeQuestion" class="control-label">เลือกชั่วโมงคำนวณ</label>
                                    <div class="controls">
                                        <select id="hour_level" name="hour_level" class="span5">
                                            <option value="">-- Select a Hour --</option>
                                            <option value="9">
                                                9 ชั่วโมง
                                            </option>
                                            <option value="12">
                                                12 ชั่วโมง
                                            </option>
                                            
                                        </select>

                                    </div>
                                </div>
                                
                            </fieldset>
                        </div>
                    </div>
                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="reset" class="btn" name="action" value="CANCEL">Cancel</button>
                    </footer>
                </div>
            {!!Form::close()!!}
        </section>

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
            .container.page {
                padding-top: 60px;
            }
        </style>
	</body>
</html>