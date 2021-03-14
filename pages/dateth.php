<?php
	function DateTimeThai($strDateTime)
	{
		$strYear = date("Y",strtotime($strDateTime))+543;
		$strMonth= date("n",strtotime($strDateTime));
		$strDay= date("j",strtotime($strDateTime));
		$strHour= date("H",strtotime($strDateTime));
		$strMinute= date("i",strtotime($strDateTime));
		$strSeconds= date("s",strtotime($strDateTime));
		$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}
    function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
	
		$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}
	function HourMinute($strDatetoHourMinute)
	{
		$strHour= date("H",strtotime($strDatetoHourMinute));
		$strMinute= date("i",strtotime($strDatetoHourMinute));
		$strSeconds= date("s",strtotime($strDatetoHourMinute));
		return "$strHour:$strMinute";
	}
	function HourMinute1($strDatetoHourMinute1)
	{
		$strHour= date("H",strtotime($strDatetoHourMinute1));
		$strMinute= date("i",strtotime($strDatetoHourMinute1));
		$strSeconds= date("s",strtotime($strDatetoHourMinute1));
		return "$strHour:$strMinute";
    }
   /*  $strDateTime = "2021-01-22 21:27:39";
    $strDate = "2021-01-22 21:27:39";
    echo DateTimeThai($strDateTime);
    echo  "";
	echo DateThai($strDate); */
?>