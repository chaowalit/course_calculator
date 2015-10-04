@extends('master')
 
@section('main')

<div id="body-container">
    <div id="body-content">
         
    <section class="nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <h3>สร้างเอกสาร PDF<br/>
                            <small></small>
                        </h3>
                    </header>
                </div>
                <div class="page-nav-options">
                    <div class="span9">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="{{ URL('/gen-pdf') }}"><i class="icon-home icon-large"></i></a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="page container">
        <div class="row">
			<div class="span8">
                {!!Form::open(['url'=>'/gen_pdf_course_total','class'=>'form-horizontal','id'=>''])!!}
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>รายละเอียดภาระงานสอนนักศึกษา ภาคปกติ(ในเวลาราชการ) </h5>
                    </div>
                    <div class="box-content">
                    	
                            <p>เลือกปีการศึกษา และ ภาคเรียน</p>
                            
                            <select id="term_course_id" name="term_course_id" class="span4">
                                <option value="">-- เลือกปีการศึกษา และ ภาคเรียน --</option>
                                @foreach ($TermCourse as $row_1)
                                    <option value="{{ $row_1['id'] }}">ปีการศึกษา : {{ $row_1['year'] }} ภาคเรียนที่ : {{ $row_1['term'] }}</option>
                                @endforeach
                            </select>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Generrate PDF
                        </button>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
            <div class="span8">
                {!!Form::open(['url'=>'/gen_pdf_course_table','class'=>'form-horizontal','id'=>''])!!}
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>ตารางสอนนักศึกษา ภาคปกติ(ในเวลาราชการ) </h5>
                    </div>
                    <div class="box-content">
                        
                            <p>เลือกปีการศึกษา และ ภาคเรียน</p>
                            
                            <select id="term_course_id" name="term_course_id" class="span4">
                                <option value="">-- เลือกปีการศึกษา และ ภาคเรียน --</option>
                                @foreach ($TermCourse as $row_1)
                                    <option value="{{ $row_1['id'] }}">ปีการศึกษา : {{ $row_1['year'] }} ภาคเรียนที่ : {{ $row_1['term'] }}</option>
                                @endforeach
                            </select>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Generrate PDF
                        </button>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
    	</div>
        <!-- ---------------------------------------------------------------------  -->
        <div class="row">
            <div class="span8">
                {!!Form::open(['url'=>'/gen_pdf_course_cost','class'=>'form-horizontal','id'=>''])!!}
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>ใบเบิกค่าสอนนักศึกษาภาคปกติเกินภาระงาน (ภาระงานสอนเกิน {{ $data_login['hour_level'] }} คาบ) </h5>
                    </div>
                    <div class="box-content">
                        <p>เลือกปีการศึกษา และ ภาคเรียน</p>
                        
                        <select id="term_course_id" name="term_course_id" class="span4">
                            <option value="">-- เลือกปีการศึกษา และ ภาคเรียน --</option>
                            @foreach ($TermCourse as $row_1)
                                @if((date("Y") + 543) == $row_1['year'])
                                <option value="{{ $row_1['id'] }}">ปีการศึกษา : {{ $row_1['year'] }} ภาคเรียนที่ : {{ $row_1['term'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Generrate PDF
                        </button>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
            <div class="span8">
                {!!Form::open(['url'=>'/gen_pdf_course_check','class'=>'form-horizontal','id'=>''])!!}
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>ใบเบิกค่าตอบแทนการสอนนักศึกษา ภาคปกติ(ในเวลาราชการ) </h5>
                    </div>
                    <div class="box-content">
                        
                            <p>เลือกปีการศึกษา และ ภาคเรียน</p>
                            
                            <select id="term_course_id" name="term_course_id" class="span4">
                                <option value="">-- เลือกปีการศึกษา และ ภาคเรียน --</option>
                                @foreach ($TermCourse as $row_1)
                                    @if((date("Y") + 543) == $row_1['year'])
                                    <option value="{{ $row_1['id'] }}">ปีการศึกษา : {{ $row_1['year'] }} ภาคเรียนที่ : {{ $row_1['term'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Generrate PDF
                        </button>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>

        </div>
	</section>

	</div>
</div>

@stop