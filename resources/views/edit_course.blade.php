@extends('master')
 
@section('main')
<div id="body-container">
    <div id="body-content">
         
    <section class="nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <h3>หน้าเพิ่มรายวิชา<br/>
                            <small></small>
                        </h3>
                    </header>
                </div>
                <div class="page-nav-options">
                    <div class="span9">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="{{ URL('/dash-board') }}"><i class="icon-home icon-large"></i></a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="my-account-security-form" class="page container">
        
        {!!Form::open(['url'=>'/store_course','class'=>'form-horizontal','id'=>''])!!}
            <div class="container">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{!!$error!!}</p>
                @endforeach

                @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                @endif
                <div class="row">
                    <div id="acct-password-row" class="span7">
                        <fieldset>
                            <legend>ฟอร์มจัดการรายวิชา</legend><br>
                            <div class="control-group ">
                                <label class="control-label">รหัสวิชา <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="number_course" name="number_course" class="span4" type="text" value="{{ old('number_course', $data_edit->number_course) }}" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">ชื่อรายวิชา <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="name_course" name="name_course" class="span4" type="text" value="{{ old('name_course', $data_edit->name_course) }}" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">หน่วยกิต <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="credits" name="credits" class="span4" type="text" value="{{ old('credits', $data_edit->credits) }}" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">กลุ่ม <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="groups" name="groups" class="span4" type="number" value="{{ old('groups', $data_edit->groups) }}" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">จำนวนผู้สอนทั้งหมด <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="number_instructors" name="number_instructors" class="span4" type="number" value="{{ old('number_instructors', $data_edit->number_instructors) }}" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">จำนวนนักศึกษา <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="number_student" name="number_student" class="span4" type="number" value="{{ old('number_student', $data_edit->number_student) }}" autocomplete="false">

                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div id="acct-verify-row" class="span9">
                        <fieldset>
                            <legend>&nbsp;</legend>
                            <div class="control-group">
                                <label for="challengeQuestion" class="control-label">วันที่สอน</label>
                                <div class="controls">
                                    <select id="date_teach" name="date_teach" class="span2">
                                        <option value="">Select a Date</option>
                                        <option value="จ" {{ ($data_edit->date_teach == "จ")? "selected":"" }}>จ.</option>
                                        <option value="อ" {{ ($data_edit->date_teach == "อ")? "selected":"" }}>อ.</option>
                                        <option value="พ" {{ ($data_edit->date_teach == "พ")? "selected":"" }}>พ.</option>
                                        <option value="พฤ" {{ ($data_edit->date_teach == "พฤ")? "selected":"" }}>พฤ.</option>
                                        <option value="ศ" {{ ($data_edit->date_teach == "ศ")? "selected":"" }}>ศ.</option>
                                        <option value="ส" {{ ($data_edit->date_teach == "ส")? "selected":"" }} >ส.</option>
                                        <option value="อา" {{ ($data_edit->date_teach == "อา")? "selected":"" }}>อา.</option>
                                    </select>

                                </div>
                            </div>
                            <div class="control-group">
                                <label for="challengeQuestion" class="control-label">เวลาที่สอน ตั้งแต่</label>
                                <div class="controls">
                                    <?php 
                                        $timepicker_1 = substr($data_edit->time_teach, 0, 7);
                                        $timepicker_2 = substr($data_edit->time_teach, 15, -5);
                                     ?>
                                    <input id='timepicker_1' type='text' name='timepicker_1' class="span2" value="{{ old('timepicker_1', $timepicker_1) }}"/>
                                     ถึง 
                                    <input id='timepicker_2' type='text' name='timepicker_2' class="span2" value="{{ old('timepicker_2', $timepicker_2) }}"/>
                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">จำนวนชั่วโมงปฎิบัติ <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="hour_practice" name="hour_practice" class="span4" type="number" value="{{ old('hour_practice', $data_edit->hour_practice) }}" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">จำนวนชั่วโมงบรรยาย <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="hour_describe" name="hour_describe" class="span4" type="number" value="{{ old('hour_describe', $data_edit->hour_describe) }}" autocomplete="false">

                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">ปีการศึกษา/ภาคเรียน <span class="required">*</span></label>
                                <div class="controls">
                                    <select id="term_course_id" name="term_course_id" class="span4">
                                        <option value="">-- เลือกปีการศึกษา และ ภาคเรียน --</option>
                                        @foreach ($TermCourse as $row_1)
                                            <option value="{{ $row_1['id'] }}" {{ ($row_1['id'] == $data_edit->term_course_id)? "selected":"" }} >ปีการศึกษา : {{ $row_1['year'] }} ภาคเรียนที่ : {{ $row_1['term'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label">ห้องเรียน <span class="required">*</span></label>
                                <div class="controls">
                                    <input id="room_number" name="room_number" class="span4" type="text" value="{{ old('room_number', $data_edit->room_number) }}" autocomplete="false">

                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <input type="hidden" name="course_id" id="course_id" value="{{ old('course_id', $data_edit->id) }}">
                <footer id="submit-actions" class="form-actions">
                    <button id="" type="submit" class="btn btn-primary" name="" value="">Save</button>
                    <button type="reset" class="btn" name="" value="">Cancel</button>
                </footer>
            </div>
        {!!Form::close()!!}
    </section>
    
    </div>
</div>
     
<style>
    .time_pick{
        width: 100%;
        display: inline;
    }
</style>     

@stop