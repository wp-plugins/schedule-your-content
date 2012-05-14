<?php
/*
Plugin Name: Schedule your content
Plugin URI: http://www.appinstore.com/schedule-your-content/
Description: Now you decide when to show what in your post or page. Easy to use shortcode. eg/ [scheduler start_date='2012-05-13' start_time='13:10' end_date='2012-05-18' end_time='02:20']
Author: j_p_s (Jatinder Pal Singh)
Version: 1.0
License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_shortcode('scheduler', 'jps_schduler');
	
	function jps_schduler($atts, $content){
		
		$curTime=current_time('mysql');
		$curTime=explode(' ', $curTime);
		
		$curStamp=strtotime($curTime[0].' '.$curTime[1]);

		if (empty($atts['start_date']))
			$atts['start_date'] = $curTime[0];

		if (empty($atts['end_date']))
			$atts['end_date'] = $curTime[0];
		
		if (empty($atts['start_time']))
			$atts['start_time'] = $curTime[1];
		
		if (empty($atts['end_time']))
			$atts['end_time'] = '00:00';

		
		$startTime=$atts['start_date'].' '.$atts['start_time']; 
		$endTime=$atts['end_date'].' '.$atts['end_time']; 

		$startTime=strtotime($startTime);
		$endTime=strtotime($endTime);		
		
		$return = '';
		if(($curStamp>=$startTime)&&($curStamp<=$endTime))
		{		
			$return=$content;	
		}
		return $return;
	}