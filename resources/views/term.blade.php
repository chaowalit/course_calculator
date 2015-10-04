@extends('master')
 
@section('main')

<div id="body-container">
    <div id="body-content">
         
    <section class="nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <h3>จัดการกำหนดวัน เปิด-ปิด ภาคเรียน<br/>
                            <small></small>
                        </h3>
                    </header>
                </div>
                <div class="page-nav-options">
                    <div class="span9">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="{{ URL('/term') }}"><i class="icon-home icon-large"></i></a>
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
                {!!Form::open(['url'=>'/store_term','class'=>'form-horizontal','id'=>''])!!}
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Forms</h5>
                    </div>
                    <div class="box-content">
                    	
                            <p>เลือกปีการศึกษา และ ภาคเรียน</p>
                            
                            <select id="term_course_id" name="term_course_id" class="span4">
                                <option value="">-- เลือกปีการศึกษา และ ภาคเรียน --</option>
                                @foreach ($TermCourse as $row_1)
                                    <option value="{{ $row_1['id'] }}">ปีการศึกษา : {{ $row_1['year'] }} ภาคเรียนที่ : {{ $row_1['term'] }}</option>
                                @endforeach
                            </select>
                        
                        <div class="form-inline">
                            <p>วัน เปิด-ปิด ภาคเรียน</p>
                           <div  class="input-prepend date">
                                <span class="add-on"><i class="icon-th"></i></span>
                                <input class="span2" type="text" value="" name="datepicker_1" id="datepicker_1" data-date-format="dd-mm-yyyy">
                            </div>
                            -
                            <div class="input-prepend date">
                                <span class="add-on"><i class="icon-th"></i></span>
                                <input class="span2" type="text" value="" name="datepicker_2" id="datepicker_2" data-date-format="dd-mm-yyyy">
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Submit
                        </button>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
            <div class="span8">
				<div class="box pattern pattern-sandstone">
                    <div class="box-header">
                        <i class="icon-table"></i>
                        <h5>
                            แสดงข้อมูล &nbsp;&nbsp;&nbsp;
                        </h5>
                    </div>
                    <div class="box-content box-table">
                        <br>
                        <table id="sample-table" class="table table-hover table-bordered tablesorter">
                            <thead>
                                <tr>
                                    <th>ปีการศึกษา/ภาคเรียน</th>
                                    <th>วันเปิดเรียน</th>
                                    <th class="td-actions">วันปิดเรียน</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($TermCourse as $val)
                                    
                                    <tr>
                                        <td>ปีการศึกษา : {{ $val['year'] }} ภาคเรียนที่ : {{ $val['term'] }}</td>
                                        <td>{{ date('d-m-Y', strtotime($val['date_start']))  }}</td>
                                        <td class="td-actions">
                                            {{ date('d-m-Y', strtotime($val['date_end'])) }}
                                        </td>
                                    </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    	</div>
        <!--  -->

	</section>

	</div>
</div>
<style>
	.container.page {
	    
	    padding-bottom: 160px;
	}
</style>
@stop