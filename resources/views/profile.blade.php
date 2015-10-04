@extends('master')

@section('main')

		<section id="my-account-security-form" class="page container">
            {!!Form::open(['url'=>'/edit_profile','class'=>'form-horizontal','id'=>'userSecurityForm'])!!}
                <div class="container">

                    <div class="alert alert-block alert-info" style="text-align: center;">
                        <p>
                            <b>ระบบแก้ไขโปรไฟล์ <br>(Edit Profile)</b>
                        </p>
                    </div>
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{!!$error!!}</p>
                    @endforeach

                    @if(Session::has('message'))
                        <p class="alert alert-success">{!! Session::get('message') !!}</p>
                    @endif
                    <div class="row">
                        <!--
                        <div id="acct-password-row" class="span7">
                            <fieldset>
                                <legend>Account Sign in</legend><br>
                                <div class="control-group ">
                                    <label class="control-label">Email Address<span class="required"> *</span></label>
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
                        -->
                        <div id="acct-verify-row" class="span9">
                            <fieldset>
                                <legend>Account Information</legend>
                                <div class="control-group ">
                                    <label class="control-label">ชื่อ-นามสกุล</label>
                                    <div class="controls">
                                        <input id="full_name" name="full_name" class="span5" type="text" value="{{ $data_login['full_name'] }}" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">ประจำคณะวิชา</label>
                                    <div class="controls">
                                        <input id="faculty" name="faculty" class="span5" type="text" value="{{ $data_login['faculty'] }}" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="challengeQuestion" class="control-label">เลือกชั่วโมงคำนวณ</label>
                                    <div class="controls">
                                        <select id="hour_level" name="hour_level" class="span5">
                                            <option value="">-- Select a Hour --</option>
                                            <option value="9" <?php echo ($data_login['hour_level'] == 9)? "selected":""; ?>>
                                                9 ชั่วโมง
                                            </option>
                                            <option value="12" <?php echo ($data_login['hour_level'] == 12)? "selected":""; ?>>
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

		<style>
           
            .container.page {
                padding-top: 130px;
            }
        </style>
@stop