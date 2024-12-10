<?php 

function timeAgo($time_ago){
	$cur_time   = time();
	$time_elapsed   = $cur_time - $time_ago;
	$seconds  = $time_elapsed ;
	$minutes  = round($time_elapsed / 60 );
	$hours    = round($time_elapsed / 3600);
	$days     = round($time_elapsed / 86400 );
	$weeks    = round($time_elapsed / 604800);
	$months   = round($time_elapsed / 2600640 );
	$years    = round($time_elapsed / 31207680 );
// Seconds
	if($seconds <= 60){
		echo "$seconds sec ago";
	}
//Minutes
	else if($minutes <=60){
		if($minutes==1){
			echo "1 min ago";
		}
		else{
			echo "$minutes min ago";
		}
	}
//Hours
	else if($hours <=24){
		if($hours==1){
			echo "an hour ago";
		}else{
			echo "$hours hours ago";
		}
	}
//Days
	else if($days <= 7){
		if($days==1){
			echo "yesterday";
		}else{
			echo "$days days ago";
		}
	}
//Weeks
	else if($weeks <= 4.3){
		if($weeks==1){
			echo "a week ago";
		}else{
			echo "$weeks weeks ago";
		}
	}
//Months
	else if($months <=12){
		if($months==1){
			echo "a month ago";
		}else{
			echo "$months months ago";
		}
	}
//Years
	else{
		if($years==1){
			echo "one year ago";
		}else{
			echo "$years years ago";
		}
	}
}

function getTimeLeft($startDate) 
{
	$now = new DateTime();
	$then = new DateTime($startDate);
	$timeLeft = "Expired";

  // Only calculate time left if $then is still a future date
	if ($now < $then) {
		$difference = $now->diff($then);

		$days = $difference->days;
		$hours = $difference->h;
		$minutes = $difference->i;

		if ($days > 1) {
			$timeLeft = $days .' days left';
		} elseif ($days == 1) {
			$timeLeft = $days .' day left';
		} elseif ($days < 1) {

			if ($hours > 1) {
				$timeLeft = $hours .' hours left';
			} elseif ($hours == 1) {
				$timeLeft = $hours .' hour left';
			} elseif ($hours < 1) {

				if ($minutes > 1) {
					$timeLeft = $minutes .' minutes left';
				} elseif ($minutes == 1) {
					$timeLeft = $minutes .' minute left';
				} elseif ($minutes < 1) {
					$timeLeft = "Expired";
				}
			}
		}
	}

	return $timeLeft;
}

function fixText($metin){

	$metin = urldecode(strip_tags($metin));


	$url = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';
	return preg_replace($url, '<a href="$0" style="color:aliceblue;" target="_blank" title="$0">$0</a>', $metin);

	return htmlentities($metin, ENT_QUOTES, 'UTF-8', false);

	$metin =str_replace("iframe","",$metin);
	$metin =str_replace("refresh","",$metin);
	$metin =str_replace("style","",$metin);
	$metin =str_replace("script","",$metin);
	$metin =str_replace("<script","",$metin);
	$metin =str_replace("</script","",$metin);
	$metin =str_replace("/script","",$metin);
	$metin =str_replace("<?","",$metin);
	$metin =str_replace("?>","",$metin);
	$metin =str_replace("SELECT *","",$metin); 
	$metin =str_replace("DELETE FROM","",$metin); 


}

function fixData($metin){

	$metin = urldecode(strip_tags($metin));

	return htmlentities($metin, ENT_QUOTES, 'UTF-8', false);

	$metin =str_replace("iframe","",$metin);
	$metin =str_replace("refresh","",$metin);
	$metin =str_replace("style","",$metin);
	$metin =str_replace("script","",$metin);
	$metin =str_replace("<script","",$metin);
	$metin =str_replace("</script","",$metin);
	$metin =str_replace("/script","",$metin);
	$metin =str_replace("<?","",$metin);
	$metin =str_replace("?>","",$metin);
	$metin =str_replace("SELECT *","",$metin); 
	$metin =str_replace("DELETE FROM","",$metin); 


}

function phone_number($number) {
	$result = preg_replace('~.*(\d{4})[^\d]{0,3}(\d{3})[\d]{0,2}(\d{2})[\d]{0,2}(\d{2}).*~', '$1 $2 $3 $4', $number);
	return $result;
}


?>