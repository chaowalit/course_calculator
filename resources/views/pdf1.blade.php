<!DOCTYPE html>
<html>
<head>
    
</head>
    <body>
        
        <div class="body-content">
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <th>มหาวิทยาลัยราชภัฏจันทรเกษม</th>
                </tr>
                <tr>
                    <th>คณะวิทยาศาสตร์</th>
                </tr>
                <tr>
                    <th>รายละเอียดภาระงานสอนนักศึกษา ภาคปกติ(ในเวลาราชการ) ประจำภาคเรียนที่ {{ $item[0]['term'] }} ปีการศึกษา {{ $item[0]['year'] }}</th>
                </tr>
                <tr>
                    <th>อาจารย์ผู้สอน ..... {{ $item[0]['full_name'] }} ............</th>
                </tr>
            </table>
            <table class="show-border" style="width:100%;font-size:14px;border:0.5px solid #000;" border="1" cellspacing="0" cellpadding="3">
                <tr>
                    <th style="">ลำดับ</th>
                    <th style="">รหัสวิชา</th>
                    <th style="">หน่วยกิต(ท-ป-อ)</th>
                    <th style="">กลุ่ม</th>
                    <th style="">จำนวนผู้สอน<br>ทั้งหมด(คน)</th>
                    <th style="">จำนวน<br>นักศึกษา<br>(คน)</th>
                    <th style="">วัน-เวลาที่สอน</th>
                    <th style="">จำนวนชั่วโมง<br>ปฏิบัติ<br>1.ช.ม=1ช.ม.</th>
                    <th style="width:13%;">จำนวนชั่วโมง<br>บรรยาย<br>(นักศึกษา 1-79 คน)<br>1.ช.ม=1ช.ม.</th>
                </tr>
                <?php $count = 0; $hour_practice = 0; $hour_describe = 0; ?>
                @foreach($item[0]['course'] as $val)
                <tr>
                    <td style="text-align:center;">{{ ++$count }}</td>
                    <td style="text-align:center;">{{ $val['number_course'] }}</td>
                    <td style="text-align:center;">{{ $val['credits'] }}</td>
                    <td style="text-align:center;">{{ $val['groups'] }}</td>
                    <td style="text-align:center;">{{ $val['number_instructors'] }}</td>
                    <td style="text-align:center;">{{ $val['number_student'] }}</td>
                    <td style="text-align:center;">{{ $val['date_teach'].' '.$val['time_teach'] }}</td>
                    <td style="text-align:center;">{{ $val['hour_practice'] }}</td>
                    <td style="text-align:center;">{{ $val['hour_describe'] }}</td>
                    <?php 
                        $hour_practice = $hour_practice + $val['hour_practice'];
                        $hour_describe = $hour_describe + $val['hour_describe'];
                     ?>
                </tr>

                @endforeach
                <tr>
                    <td colspan="7" style="text-align:center;">รวม</td>
                    <td style="text-align:center;"><?php echo $hour_practice; ?></td>
                    <td style="text-align:center;"><?php echo $hour_describe; ?></td>
                    
                </tr>
            </table>
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <th>ภาระงานสอนทั้งหมด (ปฏิบัติ + บรรยายปกติ + บรรยายกลุ่มใหญ่) เท่ากับ ....... <?php echo ($hour_practice + $hour_describe); ?> ......... ชั่วโมง</th>
                </tr>
                <tr>
                    <th>ภาระงานสอนเกิน เท่ากับ ภาระงานสอนทั้งหมด - {{ $item[0]['hour_level'] }} ชั่วโมง</th>
                </tr>
                <tr>
                    <th>ภาระงานสอนเกิน เท่ากับ ........ <?php echo ($hour_practice + $hour_describe); ?> ........ - {{ $item[0]['hour_level'] }} ชั่วโมง เท่ากับ ...... <?php echo (($hour_practice + $hour_describe) - $item[0]['hour_level'] > 0)? ($hour_practice + $hour_describe) - $item[0]['hour_level'] : "0"; ?> ...... ชั่วโมง</th>
                </tr>
                <tr>
                    <th>สรุป อาจารย์เบิกค่าสอนเกิน บรรยาย เท่ากับ ....... <?php echo (($hour_practice + $hour_describe) - $item[0]['hour_level'] > 0)? ($hour_practice + $hour_describe) - $item[0]['hour_level'] : "0"; ?> ....... คาบ และ ปฏิบัติ ..... - ..... คาบ (เบิกได้ไม่เกิน 9 คาบ)</th>
                </tr>
                <tr>
                    <th>ลงชื่อ ................................................................ อาจารย์ผู้สอน</th>
                </tr>
            </table>
        </div>
        
        
        <style>
           
        </style>
	</body>
</html>