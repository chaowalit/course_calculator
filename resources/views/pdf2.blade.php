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
                    <th>ตารางสอนนักศึกษาภาคปกติ (นอกเวลาราชการ) ประจำภาคเรียนที่ {{ $item[0]['term'] }} ปีการศึกษา {{ $item[0]['year'] }} 
                    เดือน {{ date('F') }} พ.ศ. {{ (date("Y") + 543) }}
                    </th>
                </tr>
                <tr>
                    <th>อาจารย์ผู้สอน ..... {{ $item[0]['full_name'] }} ............</th>
                </tr>
            </table>
            <table class="show-border" style="width:100%;font-size:14px;border:0.5px solid #000;" border="1" cellspacing="0" cellpadding="3">
                <tr>
                    <th style="width:7%;">คาบ</th>
                    <th style="width:7%;">1</th>
                    <th style="width:7%;">2</th>
                    <th style="width:7%;">3</th>
                    <th style="width:7%;">4</th>
                    <th style="width:7%;">5</th>
                    <th style="width:7%;">6</th>
                    <th style="width:7%;">7</th>
                    <th style="width:7%;">8</th>
                    <th style="width:7%;">9</th>
                    <th style="width:7%;">10</th>
                    <th style="width:7%;">11</th>
                    <th style="width:7%;">12</th>
                    <th style="width:7%;">13</th>
                    <th style="width:7%;">14</th>
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
                </tr>
                
                <tr>
                    <td style="text-align:center;height:70px;">วันเสาร์</td>
                    <?php
                        $time_1 = array();
                        $time_2 = array();
                        $temp_1 = array();
                        $temp_2 = array();
                        $temp_3 = array();
                        $temp_4 = array();
                        foreach($item[0]['course'] as $val){
                            //echo $val['date_teach'];
                            if($val['date_teach'] == "ส"){
                                $sub_str = explode(' - ', $val['time_teach']);
                                //echo $sub_str[0];
                                if($sub_str[0] == "08 : 30 : 00"){
                                    array_push($time_1, 1);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "09 : 20 : 00"){
                                    array_push($time_1, 2);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "10 : 10 : 00"){
                                    array_push($time_1, 3);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "11 : 30 : 00"){
                                    array_push($time_1, 4);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "12 : 20 : 00"){
                                    array_push($time_1, 5);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "13 : 10 : 00"){
                                    array_push($time_1, 6);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "14 : 10 : 00"){
                                    array_push($time_1, 7);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "15 : 00 : 00"){
                                    array_push($time_1, 8);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "15 : 50 : 00"){
                                    array_push($time_1, 9);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "16 : 40 : 00"){
                                    array_push($time_1, 10);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "17 : 30 : 00"){
                                    array_push($time_1, 11);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "18 : 20 : 00"){
                                    array_push($time_1, 12);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "19 : 10 : 00"){
                                    array_push($time_1, 13);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "20 : 00 : 00"){
                                    array_push($time_1, 14);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                ////////////////////////////////////////////////////
                                if($sub_str[1] == "09 : 20 : 00"){
                                    array_push($time_2, 1);
                                }
                                else if($sub_str[1] == "10 : 10 : 00"){
                                    array_push($time_2, 2);
                                }
                                else if($sub_str[1] == "11 : 00 : 00"){
                                    array_push($time_2, 3);
                                }
                                else if($sub_str[1] == "12 : 20 : 00"){
                                    array_push($time_2, 4);
                                }
                                else if($sub_str[1] == "13 : 10 : 00"){
                                    array_push($time_2, 5);
                                }
                                else if($sub_str[1] == "14 : 00 : 00"){
                                    array_push($time_2, 6);
                                }
                                else if($sub_str[1] == "15 : 00 : 00"){
                                    array_push($time_2, 7);
                                }
                                else if($sub_str[1] == "15 : 50 : 00"){
                                    array_push($time_2, 8);
                                }
                                else if($sub_str[1] == "16 : 40 : 00"){
                                    array_push($time_2, 9);
                                }
                                else if($sub_str[1] == "17 : 30 : 00"){
                                    array_push($time_2, 10);
                                }
                                else if($sub_str[1] == "18 : 20 : 00"){
                                    array_push($time_2, 11);
                                }
                                else if($sub_str[1] == "19 : 10 : 00"){
                                    array_push($time_2, 12);
                                }
                                else if($sub_str[1] == "20 : 00 : 00"){
                                    array_push($time_2, 13);
                                }
                                else if($sub_str[1] == "20 : 50 : 00"){
                                    array_push($time_2, 14);
                                }
                            }
                        }

                        //var_dump($time_1);

                        //var_dump($time_2);
                    ?>
                    <?php 
                        $poiter_1 = 0;
                        $poiter_2 = 0;
                        for($i = 1 ; $i <= 14 ; $i++){
                            if($time_1[$poiter_1] == $i){
                                $col = (($time_2[$poiter_2] - $time_1[$poiter_1]) + 1);
                                echo "<td colspan='".$col. "' style='background-color:#ccc;text-align:center;'>".
                                        "($temp_1[$poiter_1]) ($temp_3[$poiter_1]) ($temp_4[$poiter_1])<br><br>".
                                        "$temp_2[$poiter_1]".
                                        "</td>";
                                $i = $i + ($col - 1);

                                $poiter_1++;
                                $poiter_2++;
                            }else{
                                echo '<td></td>';
                            }
                        }
                     ?>
                </tr>
                <tr>
                    <td style="text-align:center;height:70px;">วันอาทิตย์</td>
                    <?php
                        $time_1 = array();
                        $time_2 = array();
                        $temp_1 = array();
                        $temp_2 = array();
                        $temp_3 = array();
                        $temp_4 = array();
                        foreach($item[0]['course'] as $val){
                            //echo $val['date_teach'];
                            if($val['date_teach'] == "อา"){
                                $sub_str = explode(' - ', $val['time_teach']);
                                //echo $sub_str[0];
                                if($sub_str[0] == "08 : 30 : 00"){
                                    array_push($time_1, 1);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "09 : 20 : 00"){
                                    array_push($time_1, 2);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "10 : 10 : 00"){
                                    array_push($time_1, 3);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "11 : 30 : 00"){
                                    array_push($time_1, 4);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "12 : 20 : 00"){
                                    array_push($time_1, 5);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "13 : 10 : 00"){
                                    array_push($time_1, 6);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "14 : 10 : 00"){
                                    array_push($time_1, 7);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "15 : 00 : 00"){
                                    array_push($time_1, 8);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "15 : 50 : 00"){
                                    array_push($time_1, 9);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "16 : 40 : 00"){
                                    array_push($time_1, 10);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "17 : 30 : 00"){
                                    array_push($time_1, 11);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "18 : 20 : 00"){
                                    array_push($time_1, 12);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "19 : 10 : 00"){
                                    array_push($time_1, 13);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                else if($sub_str[0] == "20 : 00 : 00"){
                                    array_push($time_1, 14);
                                    array_push($temp_1, $val['number_course']);
                                    array_push($temp_2, $val['name_course']);
                                    array_push($temp_3, $val['groups']);
                                    array_push($temp_4, $val['room_number']);
                                }
                                ////////////////////////////////////////////////////
                                if($sub_str[1] == "09 : 20 : 00"){
                                    array_push($time_2, 1);
                                }
                                else if($sub_str[1] == "10 : 10 : 00"){
                                    array_push($time_2, 2);
                                }
                                else if($sub_str[1] == "11 : 00 : 00"){
                                    array_push($time_2, 3);
                                }
                                else if($sub_str[1] == "12 : 20 : 00"){
                                    array_push($time_2, 4);
                                }
                                else if($sub_str[1] == "13 : 10 : 00"){
                                    array_push($time_2, 5);
                                }
                                else if($sub_str[1] == "14 : 00 : 00"){
                                    array_push($time_2, 6);
                                }
                                else if($sub_str[1] == "15 : 00 : 00"){
                                    array_push($time_2, 7);
                                }
                                else if($sub_str[1] == "15 : 50 : 00"){
                                    array_push($time_2, 8);
                                }
                                else if($sub_str[1] == "16 : 40 : 00"){
                                    array_push($time_2, 9);
                                }
                                else if($sub_str[1] == "17 : 30 : 00"){
                                    array_push($time_2, 10);
                                }
                                else if($sub_str[1] == "18 : 20 : 00"){
                                    array_push($time_2, 11);
                                }
                                else if($sub_str[1] == "19 : 10 : 00"){
                                    array_push($time_2, 12);
                                }
                                else if($sub_str[1] == "20 : 00 : 00"){
                                    array_push($time_2, 13);
                                }
                                else if($sub_str[1] == "20 : 50 : 00"){
                                    array_push($time_2, 14);
                                }
                            }
                        }

                        //var_dump($time_1);

                        //var_dump($time_2);
                    ?>
                    <?php 
                        $poiter_1 = 0;
                        $poiter_2 = 0;
                        for($i = 1 ; $i <= 14 ; $i++){
                            if($time_1[$poiter_1] == $i){
                                $col = (($time_2[$poiter_2] - $time_1[$poiter_1]) + 1);
                                echo "<td colspan='".$col. "' style='background-color:#ccc;text-align:center;'>".
                                        "($temp_1[$poiter_1]) ($temp_3[$poiter_1]) ($temp_4[$poiter_1])<br><br>".
                                        "$temp_2[$poiter_1]".
                                        "</td>";
                                $i = $i + ($col - 1);

                                $poiter_1++;
                                $poiter_2++;
                            }else{
                                echo '<td></td>';
                            }
                        }
                     ?>
                </tr>
            </table>
            <br>
            <!--
            <table style="width:100%;font-size:14px;" border="0">
                <tr>
                    <th>รหัสวิชา &nbsp;&nbsp; นก.(ท-ป-อ)</th>
                    <th>กลุ่ม &nbsp;&nbsp; จำนวนนักศึกษา</th>
                    <th>รหัสวิชา &nbsp;&nbsp; นก.(ท-ป-อ)</th>
                    <th>กลุ่ม &nbsp;&nbsp; จำนวนนักศึกษา</th>
                    <th>รหัสวิชา &nbsp;&nbsp; นก.(ท-ป-อ)</th>
                    <th>กลุ่ม &nbsp;&nbsp; จำนวนนักศึกษา</th>
                </tr>
                <tr>
                    <td>1................................................</td>
                    <td>...................................คน</td>
                    <td>3................................................</td>
                    <td>...................................คน</td>
                    <td>5................................................</td>
                    <td>...................................คน</td>

                </tr>
                <tr>
                    <td>2................................................</td>
                    <td>...................................คน</td>
                    <td>4................................................</td>
                    <td>...................................คน</td>
                    <td>6................................................</td>
                    <td>...................................คน</td>

                </tr>
            </table>
            -->
        </div>
        
        
        <style>
           
        </style>
	</body>
</html>