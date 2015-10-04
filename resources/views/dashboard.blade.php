@extends('master')
 
@section('main')
<div id="body-container">
    <div id="body-content">
         
    <section class="nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <h3>หน้าจัดการรายวิชา<br/>
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
    <section class="page container">
        
        <div class="row">
            <div class="span16">
                <div class="row">
                    <div class="span16">
                        <div class="box pattern pattern-sandstone">
                            <div class="box-header">
                                <i class="icon-table"></i>
                                <h5>
                                    รายวิชาทั้งหมด &nbsp;&nbsp;&nbsp;
                                </h5>

                                <a href="{{ URL('/course') }}" class="btn-box-right"><i class="icon-calendar"></i> เพิ่มรายวิชา</a>
                            </div>
                            <div class="box-content box-table">
                                <br>
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                            <th>รหัสรายวิชา</th>
                                            <th>ชื่อรายวิชา</th>
                                            <th class="td-actions">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($course as $val)
                                            @foreach($val['course'] as $item)
                                                <tr>
                                                    <td>{{ $item['number_course'] }}</td>
                                                    <td>{{ $item['name_course'] }}</td>
                                                    <td class="td-actions">
                                                        <a href="{{ URL::to('course/edit/'.$item['id']) }}" class="btn btn-small btn-info">
                                                            <i class="btn-icon-only icon-edit"></i> แก้ไข
                                                        </a>

                                                        <a href="{{ URL::to('course/delete/'.$item['id']) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-small btn-danger">
                                                            <i class="btn-icon-only icon-remove"></i> ลบ
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    

    </div>
</div>
        
@stop