<!DOCTYPE html>
<html>
<head>
    
</head>
    <body>
        <?php 
        	//, strtotime("+7 day"
        	$current_date = date("Y-m-d");
        	//echo $current_date;
        	//echo "<br>";
        	$mount_start = date("m", strtotime($item[0]['date_start']));
        	$day_start = date("d", strtotime($item[0]['date_start']));
        	$year_start = date("Y", strtotime($item[0]['date_start']));

        	$jd = gregoriantojd($mount_start, ($day_start), $year_start);
			//echo jddayofweek($jd,2);

			$data_count_week = $item[0]['date_start'];
			$date_end_pdf;
			$week_start = 1;
			$week_end = 1;
			$continue_1 = true;

			$continue_2 = false;

			$continue_3 = false;

			$continue_4 = false;

			$continue_5 = false;
			$date_define;
			for($i = 1 ; $i <= 20 ; $i++){

				if((date("m", strtotime($item[0]['date_start'])) == date("m", strtotime($data_count_week))) && $continue_1 ){
					$data_count_week = date("Y-m-d", strtotime($data_count_week. " +7 day"));

					$test_week = date("Y-m-d", strtotime($data_count_week. " +6 day"));
					if(date("m", strtotime($item[0]['date_start'])) == date("m", strtotime($test_week))){
						$week_start = 1;
						$week_end++;
					}
					//---------------------------
					if((date("m", strtotime($data_count_week)) != date("m", strtotime($test_week))) && date("Y-m-d") >= date("Y-m-d", strtotime($data_count_week))){
						$continue_2 = true;
						$continue_1 = false;

						$week_start = ($week_end + 1);
						$week_end = ($week_end + 1);
						$date_define = $test_week;
					}else{
						$continue_2 = false;
					}
				}
				if($continue_2){
					$data_count_week = date("Y-m-d", strtotime($data_count_week. " +7 day"));

					$test_week = date("Y-m-d", strtotime($data_count_week. " +6 day"));
					if(date("m", strtotime($date_define)) == date("m", strtotime($test_week))){
						
						$week_end++;
					}
					//-----------------------------------------------
					if((date("m", strtotime($data_count_week)) != date("m", strtotime($test_week))) && date("Y-m-d") >= date("Y-m-d", strtotime($data_count_week))){
						$continue_3 = true;
						$continue_2 = false;
						$continue_1 = false;

						$week_start = ($week_end + 1);
						$week_end = ($week_end + 1);
						$date_define = $test_week;
					}else{
						$continue_3 = false;
					}
				}
				if($continue_3){
					$data_count_week = date("Y-m-d", strtotime($data_count_week. " +7 day"));

					$test_week = date("Y-m-d", strtotime($data_count_week. " +6 day"));
					if(date("m", strtotime($date_define)) == date("m", strtotime($test_week))){
						
						$week_end++;
					}
					//-----------------------------------------------
					if((date("m", strtotime($data_count_week)) != date("m", strtotime($test_week))) && date("Y-m-d") >= date("Y-m-d", strtotime($data_count_week))){
						$continue_4 = true;
						$continue_3 = false;
						$continue_2 = false;
						$continue_1 = false;

						$week_start = ($week_end + 1);
						$week_end = ($week_end + 1);
						$date_define = $test_week;
					}else{
						$continue_4 = false;
					}
				}
				if($continue_4){
					$data_count_week = date("Y-m-d", strtotime($data_count_week. " +7 day"));

					$test_week = date("Y-m-d", strtotime($data_count_week. " +6 day"));
					if(date("m", strtotime($date_define)) == date("m", strtotime($test_week))){
						
						$week_end++;
					}
					//-----------------------------------------------
					if((date("m", strtotime($data_count_week)) != date("m", strtotime($test_week))) && date("Y-m-d") >= date("Y-m-d", strtotime($data_count_week))){
						$continue_5 = true;
						$continue_4 = false;
						$continue_3 = false;
						$continue_2 = false;
						$continue_1 = false;

						$week_start = ($week_end + 1);
						$week_end = ($week_end + 1);
						$date_define = $test_week;
					}else{
						$continue_5 = false;
					}
				}
				if($continue_5){
					$data_count_week = date("Y-m-d", strtotime($data_count_week. " +7 day"));

					$test_week = date("Y-m-d", strtotime($data_count_week. " +6 day"));
					if(date("m", strtotime($date_define)) == date("m", strtotime($test_week))){
						
						$week_end++;
					}
					//-----------------------------------------------
					if((date("m", strtotime($data_count_week)) != date("m", strtotime($test_week))) && date("Y-m-d") >= date("Y-m-d", strtotime($data_count_week))){
						$continue_5 = false;
						$continue_4 = false;
						$continue_3 = false;
						$continue_2 = false;
						$continue_1 = false;

						$week_start = ($week_end );
						$week_end = ($week_end );
						$date_define = $test_week;
					}else{
						$continue_5 = false;
					}
				}
			}

			//echo "<br><br>".$week_start." - ".$week_end.' '.$continue;

         ?>

		@foreach($item[0]['course'] as $val)
            <?php 
            if($val['date_teach'] == 'ส'){
                $hour_practice_1 = $hour_practice_1 + $val['hour_practice'];
                $hour_describe_1 = $hour_describe_1 + $val['hour_describe'];
                
            }else if($val['date_teach'] == 'อา'){
                $hour_practice_2 = $hour_practice_2 + $val['hour_practice'];
                $hour_describe_2 = $hour_describe_2 + $val['hour_describe'];
            }
                
             ?>
        @endforeach
        <?php 
        $total_1 = $hour_practice_1 + $hour_describe_1;
        $total_2 = $hour_practice_2 + $hour_describe_2;
        $amount = 0;
        ?>
        <div class="body-content">
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <th>มหาวิทยาลัยราชภัฏจันทรเกษม</th>
                </tr>
                <tr>
                    <th>คณะวิทยาศาสตร์</th>
                </tr>
                <tr>
                    <?php
                    $header_mount = array(
                                    'September' => 'กันยายน',
                                    'October' => 'ตุลาคม',
                                    'Nov' => 'พ.ย.',
                                    'Dec' => 'ธ.ค.',
                                );
                    ?>
                    <th>ใบเบิกค่าตอบแทนการสอนนักศึกษา ภาคปกติ(นอกเวลาราชการ) ประจำภาคเรียนที่ {{ $item[0]['term'] }} ปีการศึกษา {{ $item[0]['year'] }} 
						เดือน {{ $header_mount[date("F", strtotime($item[0]['date_start']." +".(($week_end * 7)-1).' day'))]  }} พ.ศ.
						{{ date("Y", strtotime($item[0]['date_start']." +".(($week_end * 7)-1).' day')) + 543 }}
                    </th>
                </tr>
                
                <tr>
                    <th>อาจารย์ผู้สอน ..... {{ $item[0]['full_name'] }} ............</th>
                </tr>
            </table>
            <table class="show-border" style="width:100%;font-size:13px;border:0.5px solid #000;" border="1" cellspacing="0" cellpadding="3">
                <tr>
                    <th style="width:10%;">คาบ</th>
                    <th style="width:5%;">1</th>
                    <th style="width:5%;">2</th>
                    <th style="width:5%;">3</th>
                    <th style="width:5%;">4</th>
                    <th style="width:5%;">5</th>
                    <th style="width:5%;">6</th>
                    <th style="width:5%;">7</th>
                    <th style="width:5%;">8</th>
                    <th style="width:5%;">9</th>
                    <th style="width:5%;">10</th>
                    <th style="width:5%;">11</th>
                    <th style="width:5%;">12</th>
                    <th style="width:5%;">13</th>
                    <th style="width:5%;">14</th>
                    <th colspan="5">จำนวนหน่วยชั่วโมงที่เบิกได้แต่ละอัตรา(ชั่วโมง)</th>
                    <th rowspan="2">รวมจำนวนเงิน<br>ที่คำนวณได้<br>บาท</th>
                    <th rowspan="2">หมายเหตุ</th>
                </tr>
                <tr>
                    <th style="">วัน / เวลา</th>
                    <th style="">8:30<br>9:20</th>
                    <th style="">9:20<br>10:10</th>
                    <th style="">10:10<br>11:00</th>
                    <th style="">11:30<br>12:20</th>
                    <th style="">12:20<br>13:10</th>
                    <th style="">13:10<br>14:00</th>
                    <th style="">14:10<br>15:00</th>
                    <th style="">15:00<br>15:50</th>
                    <th style="">15:50<br>16:40</th>
                    <th style="">16:40<br>17:30</th>
                    <th style="">17:30<br>18:20</th>
                    <th style="">18:20<br>19:10</th>
                    <th style="">19:10<br>20:00</th>
                    <th style="">20:00<br>20:50</th>
                    <th style="">250<br>บาท</th>
                    <th style="">300<br>บาท</th>
                    <th style="">350<br>บาท</th>
                    <th style="">400<br>บาท</th>
                    <th style="">450<br>บาท</th>
                </tr>
				<?php 
                                $mount_arr = array(
                                    'Sep' => 'ก.ย.',
                                    'Oct' => 'ต.ค.',
                                    'Nov' => 'พ.ย.',
                                    'Dec' => 'ธ.ค.',
                                );
                                $day_arr = array(
                                    'Mon' => 'จ',
                                    'Tue' => 'อ',
                                    'Wed' => 'พ',
                                    'Thu' => 'พฤ',
                                    'Fri' => 'ศ',
                                    'Sat' => 'ส',
                                    'Sun' => 'อา',
                                );
				$date_loop = date("Y-m")."-01";
				for($i = 0 ; $i < 25 ; $i++){ 
					if(date("m", strtotime($date_loop)) == date("m", strtotime($date_loop." +".$i.' day'))){
				?>
				<tr>
					<td>
						<?php 
							$y = date("Y", strtotime($date_loop." +".$i.' day'));
							$m = date("m", strtotime($date_loop." +".$i.' day'));
							$d = date("d", strtotime($date_loop." +".$i.' day'));
							$jd = gregoriantojd($m, ($d), $y);
							echo $day_arr[jddayofweek($jd,2)];
							echo ", ".($i+1)." ".$mount_arr[date("M", strtotime($date_loop." +".$i.' day'))]." ".
							(($y + 543) % 2500);
						 ?>
					</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
                                        <td style="text-align: center;">
                                            <?php
                                                if($day_arr[jddayofweek($jd,2)] == "ส"){
                                                    echo $total_1;
                                                }else if($day_arr[jddayofweek($jd,2)] == "อา"){
                                                    echo $total_2;
                                                }
                                            ?>
                                        </td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
                                        <td style="text-align: center;">
                                            <?php
                                                if($day_arr[jddayofweek($jd,2)] == "ส"){
                                                    echo $total_1*250;
                                                    $amount = $amount + ($total_1*250);
                                                }else if($day_arr[jddayofweek($jd,2)] == "อา"){
                                                    echo $total_2*250;
                                                    $amount = $amount + ($total_2*250);
                                                }
                                            ?>
                                        </td>
					<td></td>
				</tr>
				<?php } } ?>
            </table>
            
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <th>มหาวิทยาลัยราชภัฏจันทรเกษม</th>
                </tr>
                <tr>
                    <th>คณะวิทยาศาสตร์</th>
                </tr>
                <tr>
                    <th>ใบเบิกค่าตอบแทนการสอนนักศึกษา ภาคปกติ(นอกเวลาราชการ) ประจำภาคเรียนที่ {{ $item[0]['term'] }} ปีการศึกษา {{ $item[0]['year'] }} 
						เดือน {{ $header_mount[date("F", strtotime($item[0]['date_start']." +".(($week_end * 7)-1).' day'))]  }} พ.ศ.
						{{ date("Y", strtotime($item[0]['date_start']." +".(($week_end * 7)-1).' day')) + 543 }}
                    </th>
                </tr>
                
                <tr>
                    <th>อาจารย์ผู้สอน ..... {{ $item[0]['full_name'] }} ............</th>
                </tr>
            </table>
            <table class="show-border" style="width:100%;font-size:13px;border:0.5px solid #000;" border="1" cellspacing="0" cellpadding="3">
                <tr>
                    <th style="width:10%;">คาบ</th>
                    <th style="width:5%;">1</th>
                    <th style="width:5%;">2</th>
                    <th style="width:5%;">3</th>
                    <th style="width:5%;">4</th>
                    <th style="width:5%;">5</th>
                    <th style="width:5%;">6</th>
                    <th style="width:5%;">7</th>
                    <th style="width:5%;">8</th>
                    <th style="width:5%;">9</th>
                    <th style="width:5%;">10</th>
                    <th style="width:5%;">11</th>
                    <th style="width:5%;">12</th>
                    <th style="width:5%;">13</th>
                    <th style="width:5%;">14</th>
                    <th colspan="5">จำนวนหน่วยชั่วโมงที่เบิกได้แต่ละอัตรา(ชั่วโมง)</th>
                    <th rowspan="2">รวมจำนวนเงิน<br>ที่คำนวณได้<br>บาท</th>
                    <th rowspan="2">หมายเหตุ</th>
                </tr>
                <tr>
                    <th style="">วัน / เวลา</th>
                    <th style="">8:30<br>9:20</th>
                    <th style="">9:20<br>10:10</th>
                    <th style="">10:10<br>11:00</th>
                    <th style="">11:30<br>12:20</th>
                    <th style="">12:20<br>13:10</th>
                    <th style="">13:10<br>14:00</th>
                    <th style="">14:10<br>15:00</th>
                    <th style="">15:00<br>15:50</th>
                    <th style="">15:50<br>16:40</th>
                    <th style="">16:40<br>17:30</th>
                    <th style="">17:30<br>18:20</th>
                    <th style="">18:20<br>19:10</th>
                    <th style="">19:10<br>20:00</th>
                    <th style="">20:00<br>20:50</th>
                    <th style="">250<br>บาท</th>
                    <th style="">300<br>บาท</th>
                    <th style="">350<br>บาท</th>
                    <th style="">400<br>บาท</th>
                    <th style="">450<br>บาท</th>
                </tr>
				<?php 
				$date_loop = date("Y-m")."-01";
				for($i = 25 ; $i < 32 ; $i++){ 
					if(date("m", strtotime($date_loop)) == date("m", strtotime($date_loop." +".$i.' day'))){
				?>
				<tr>
					<td>
						<?php 
							$y = date("Y", strtotime($date_loop." +".$i.' day'));
							$m = date("m", strtotime($date_loop." +".$i.' day'));
							$d = date("d", strtotime($date_loop." +".$i.' day'));
							$jd = gregoriantojd($m, ($d), $y);
							echo $day_arr[jddayofweek($jd,2)];
							echo ", ".($i+1)." ".$mount_arr[date("M", strtotime($date_loop." +".$i.' day'))]." ".
							(($y + 543) % 2500);
						 ?>
					</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align: center;">
                                            <?php
                                                if($day_arr[jddayofweek($jd,2)] == "ส"){
                                                    echo $total_1;
                                                }else if($day_arr[jddayofweek($jd,2)] == "อา"){
                                                    echo $total_2;
                                                }
                                            ?>
                                        </td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align: center;">
                                            <?php
                                                if($day_arr[jddayofweek($jd,2)] == "ส"){
                                                    echo $total_1*250;
                                                    $amount = $amount + ($total_1*250);
                                                }else if($day_arr[jddayofweek($jd,2)] == "อา"){
                                                    echo $total_2*250;
                                                    $amount = $amount + ($total_2*250);
                                                }
                                            ?>
                                        </td>
					<td></td>
				</tr>
				<?php } } ?>
                                <tr>
                                    <td style="text-align: center;" colspan="15">รวมทั้งหมด</td>
                                    <td style="text-align: center;" colspan="6"><?php echo $amount; ?></td>
                                    <td></td>
                                </tr>
            </table>
            <p style="width:100%;font-size:12px;">หมายเหตุ *กรณีสอนชดเชย ให้แนบใบอนุญาติสอนชดเชยที่ได้รับการอนุญาติจากรองอธิการบดีฝ่ายวิชาการแล้ว แนบการเบิกด้วย</p>
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <td style="text-align: right;width: 35%;">ขอรับรองว่า(นาย, นาง, นางสาว)</td>
                    <td style="width: 30%;">........................................................................................</td>
                    <td>ได้ทำการสอนตามวันและเวลาดังกล่าว</td>
                </tr>
                <tr>
                    <td style="text-align: right;">ลงชื่อ</td>
                    <td>........................................................................................</td>
                    <td>ประธานหลักสูตร</td>
                </tr>
                <tr>
                    <td style="text-align: right;">ลงชื่อ</td>
                    <td>........................................................................................</td>
                    <td>คณบดี</td>
                </tr>
                <tr>
                    <td style="text-align: right;">ลงชื่อ</td>
                    <td>........................................................................................</td>
                    <td>รองคณบดีฝ่ายวิชาการและวิจัย</td>
                </tr>
            </table>
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <td style="text-align: center;">ข้าพเจ้าได้รับเงินค่าตอบแทนการสอน รหัสวิชา ........................................................................................................................</td>
                    
                </tr>
                <tr>
                    <td style="text-align: center;">รวมเป็นเงิน ........<?php echo $amount; ?>........ บาท(........................................................................................................) ไว้เรียบร้อยแล้ว</td>
                     
                </tr>
            </table>   
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <td style="text-align: center;">ลงชื่อ................................................................. ผู้รับเงิน</td>
                    <td style="text-align: center;">ลงชื่อ.................................................................... ผู้จ่ายเงิน</td>
                    
                </tr>
               <tr>
                    <td style="text-align: center;">วันที่................เดือน............................. พ.ศ ............ ผู้รับเงิน</td>
                    <td style="text-align: center;">วันที่................เดือน............................. พ.ศ ............ ผู้รับเงิน</td>
                    
                </tr>
            </table>
        </div>
        
        
        <style>
           
        </style>
	</body>
</html>