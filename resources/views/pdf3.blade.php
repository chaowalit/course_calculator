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
                $hour_practice = $hour_practice + $val['hour_practice'];
                $hour_describe = $hour_describe + $val['hour_describe'];
             ?>
        @endforeach

        <div class="body-content">
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <th>คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏจันทรเกษม</th>
                </tr>
                <tr>
                    <th>ใบเบิกค่าสอนนักศึกษาภาคปกติเกินภาระงาน (ภาระงานสอนเกิน {{ $item[0]['hour_level'] }} คาบ)</th>
                </tr>
                <tr>
                    <th>ภาคเรียนที่ {{ $item[0]['term'] }}/{{ $item[0]['year'] }} สัปดาร์ที่ {{ $week_start }}-{{ $week_end }} 
                    	<?php 
                    		$date_1 = date("d", strtotime($item[0]['date_start']." +".(($week_start - 1)*7).' day'));
                    	 	$date_2 = date("d", strtotime($item[0]['date_start']." +".(($week_end * 7)-1).' day'));
                    	 	$date_3 = date("F", strtotime($item[0]['date_start']." +".(($week_end * 7)-1).' day'));
                    	 	$date_4 = date("Y", strtotime($item[0]['date_start']." +".(($week_end * 7)-1).' day')) + 543;
                                $header_mount = array(
                                    'September' => 'กันยายน',
                                    'October' => 'ตุลาคม',
                                    'Nov' => 'พ.ย.',
                                    'Dec' => 'ธ.ค.',
                                );
                    	 ?>
                    	(วันที่ จันทร์ ที่ <?php echo $date_1; ?> - อาทิตย์ ที่ <?php echo $date_2; ?> <?php echo $header_mount[$date_3]; ?> <?php echo $date_4; ?>)
                    </th>
                </tr>
                <tr>
                    <th>อาจารย์ผู้สอน ..... {{ $item[0]['full_name'] }} ............</th>
                </tr>
            </table>
            <table class="show-border" style="width:100%;font-size:14px;border:0.5px solid #000;" border="1" cellspacing="0" cellpadding="3">
                <tr>
                	<td rowspan="2" style="text-align:center;">สัปดาห์<br>ที่</td>
                	<td rowspan="2" style="text-align:center;">วัน-เดือน-ปี</td>
                	<td rowspan="2" style="text-align:center;">ภาระงานสอน<br>ทั้งหมด(คาบ)</td>
                	<td colspan="2" style="text-align:center;">ภาระงานสอน<br>ที่เบิกได้(ไม่เกิน9คาบ)</td>
                	
                	<td colspan="2" style="text-align:center;">ภาระงานสอน<br>ชดเชย</td>
                	
                	<td rowspan="2" style="text-align:center;">จำนวนเงิน<br>ที่เบิกได้<br>(300บาท/คาบ)</td>
                	<td rowspan="2" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ&nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                	<td style="text-align:center;">บรรยาย</td>
                	<td style="text-align:center;">ปฏิบัติ</td>
                	<td style="text-align:center;">บรรยาย</td>
                	<td style="text-align:center;">ปฏิบัติ</td>
                </tr>
                <?php 
                    $mount_arr = array(
                        'Sep' => 'ก.ย.',
                        'Oct' => 'ต.ค.',
                        'Nov' => 'พ.ย.',
                        'Dec' => 'ธ.ค.',
                    ); 
                	for($i = $week_start ; $i <= $week_end ; $i++){
                 ?>
					<tr>
						<td style="text-align:center;"><?php echo $i; ?></td>
						<?php
						$date_1 = date("d", strtotime($item[0]['date_start']." +".(($i - 1)*7).' day'));
						$date_2 = date("d", strtotime($item[0]['date_start']." +".(($i * 7)-1).' day'));
						$date_3 = date("M", strtotime($item[0]['date_start']." +".(($i * 7)-1).' day'));
						$date_4 = date("Y", strtotime($item[0]['date_start']." +".(($i * 7)-1).' day')) + 543;

						?>
						<td style="font-size:12px;text-align:center;">จ.<?php echo $date_1; ?> - อา.<?php echo $date_2; ?> <?php echo $mount_arr[$date_3]; ?> 
						<?php echo $date_4; ?>
						</td>
						<td style="text-align:center;">{{ ($hour_practice+$hour_describe) }}</td>
						<td style="text-align:center;">{{ (($hour_practice+$hour_describe)-$item[0]['hour_level']) }}</td>
						<td></td>
						<td></td>
						<td></td>
						<td style="text-align:center;">{{ (($hour_practice+$hour_describe)-$item[0]['hour_level']) * 300 }}</td>
						<td></td>
					</tr>
                 <?php } ?>
                 <tr>
					<td></td>
					<td style="text-align:center;">รวม</td>
					<td></td>
					<td style="text-align:center;">{{ (($hour_practice+$hour_describe)-$item[0]['hour_level']) * $week_end }}</td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align:center;">{{ (($hour_practice+$hour_describe)-$item[0]['hour_level']) * 300 * $week_end }}</td>
					<td></td>
				</tr>
            </table>
            <p style="width:100%;font-size:14px;">หมายเหตุ ***กรณีสอนชดเชยให้แนบใบอนุญาติสอนชดเชยในการเบิก</p>
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <td style="text-align: right;">ขอรับรองว่า(นาย, นาง, นางสาว)</td>
                    <td>....................................................................</td>
                    <td>ได้ทำการสอนตามวันและเวลาดังกล่าว</td>
                </tr>
                <tr>
                    <td style="text-align: right;">ลงชื่อ</td>
                    <td>....................................................................</td>
                    <td>ประธานหลักสูตร</td>
                </tr>
                <tr>
                    <td style="text-align: right;">ลงชื่อ</td>
                    <td>....................................................................</td>
                    <td>คณบดี</td>
                </tr>
                <tr>
                    <td style="text-align: right;">ลงชื่อ</td>
                    <td>....................................................................</td>
                    <td>รองคณบดีฝ่ายวิชาการและวิจัย</td>
                </tr>
            </table>
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <td style="text-align: left;">ข้าพเจ้าได้รับเงินค่าตอบแทนการสอนนักศึกษาภาคปกติ เกินภาระงาน จำนวน ........... {{ (($hour_practice+$hour_describe)-$item[0]['hour_level']) * $week_end }} ........... คาบ</td>
                    
                </tr>
                <tr>
                    <td style="text-align: left;">เป็นเงิน ........ {{ (($hour_practice+$hour_describe)-$item[0]['hour_level']) * 300 * $week_end }} ........ บาท(........................................................................................................) ไว้เรียบร้อยแล้ว</td>
                    
                </tr>
            </table>   
            <br>
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <td style="text-align: left;">ลงชื่อ................................................................. ผู้รับเงิน</td>
                    <td style="text-align: right;">ลงชื่อ.................................................................... ผู้จ่ายเงิน</td>
                    
                </tr>
               
            </table>
        </div>
        
        
        <style>
           
        </style>
	</body>
</html>