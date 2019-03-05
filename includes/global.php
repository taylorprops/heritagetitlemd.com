<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Composer

use PHPMailer\PHPMailer\PHPMailer;

date_default_timezone_set('America/New_York');
include_once($_SERVER['DOCUMENT_ROOT'].'vendor/autoload.php');

include($_SERVER['DOCUMENT_ROOT'].'includes/config/Db.php');
$db = new Db();

/* Functions */

function sendMail($priority, $to, $from, $subject, $body) {

	$mail = new PHPMailer;

    $mail->isSMTP();
	$mail->Host = 'mail.tpmailserver.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'mailer@mail.tpmailserver.com';
	$mail->Password = 'T0m@hawkT@ters';
	$mail->SMTPSecure = '';
	$mail->Port = 587;

	$mail->setFrom($from);
	$mail->addAddress($to);
	$mail->isHTML(true);

	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->send();


}

$officesQuery = "Select * from company.offices where deleted = 'no'";
$offices = $db->select( $officesQuery );
$officesCount = count( $offices );

/* end Functions */
$staff = array(

    array(
        "name" => 'Princess George',
        "title" => '',
        "email" => 'princess@heritagetitlemd.com',
        "img" => '/img/custom/page-our-team/princess-web.jpg'
    ),
	array(
        "name" => 'Krystyn Padgett',
        "title" => '',
        "email" => 'krystyn@heritagetitlemd.com',
        "img" => '/img/custom/page-our-team/krystyn-web.jpg'
    ),
    array(
        "name" => 'Donna Downing',
        "title" => '',
        "email" => 'donna@heritagetitlemd.com',
        "img" => ''
    ),
    array(
        "name" => 'Jacqueline Eucare',
        "title" => '',
        "email" => 'jackie@heritagetitlemd.com',
        "img" => ''
    )

);

use Jaybizzle\CrawlerDetect\CrawlerDetect;
if(!isset($_SESSION['tracked'])) {

	if(isset($_GET['email'])) {
		$email = $_GET['email'];
	} else {
		$email = '';
	}

	$CrawlerDetect = new CrawlerDetect;
	if(!$CrawlerDetect->isCrawler()) {
		tracking($_GET['email'], $_SERVER['HTTP_REFERER'], $_GET['src'], $_SERVER['REMOTE_ADDR'], $_GET['page']);
	}
}

function tracking($email, $referrer, $source, $ip, $page) {

    global $db;

    $source = strtolower($source);
	$email = strtolower($email);
	$type = '';

    if($source == 'titleagents') { // good ht emails
        $source = 'Heritage Title Email To Agents';
		$type = 'agent';
    } else if($source == 'titlelos') { // good ht emails
        $source = 'Heritage Title Email To Loan Officers';
		$type = 'lo';
    } else if($source == 'titleouragents') { // good ht emails
        $source = 'Heritage Title Email To Our agents';
		$type = 'our_agent';
    }

	if($page == 'app') {
		$goto = 'https://www.titlecapture.com/app/30/heritagetitle';
	} else if($page == 'rates') {
		$goto = '/our-fees.html';
	} else {
		$goto = '/index.html';
	}

    if($email != '' && $email != '%%Email%%') {
    	// Get prospect details
    	$leadQuery = "Select * from marketing.emails where email = '".$db -> quote($email)."'";
    	$lead =  $db -> select($leadQuery);



		$existsLeadsQuery = "SELECT * from company.title_leads where lead_email = '".$db -> quote($email)."'";
        $existsLeads =  $db -> select($existsLeadsQuery);

		$addVisitorQuery = "INSERT INTO `marketing`.`site_visitors`(
			`site`,
			`visitor_name`,
			`visitor_email`,
			`visitor_phone`,
			`visitor_company`,
			`referrer`,
			`visitor_source`,
			`visitor_ip`,
			`visitor_type`,
			`link`
		)
			VALUES
		(
			'heritagetitlemd.com',
			'".$lead[0]['name']."',
			'".$lead[0]['email']."',
			'".$lead[0]['phone']."',
			'".$lead[0]['company']."',
			'".$referrer."',
			'".$source."',
			'".$ip."',
			'".$type."',
			'".$page."'
		)";
		$queryResults = $db -> query($addVisitorQuery);
		// if already there die
        if(count($existsLeads) > 0) {

		    header("Location: ".$goto);

        } else {
			// Add them to title leads

			if($type != 'our_agent') {

				// Add to title leads if not our agent
		        $add = "insert into company.title_leads (lead_source, lead_name, lead_phone, lead_email, our_agent, lead_status) values ('".$source."', '".$lead[0]['name']."', '".$lead[0]['phone']."', '".$lead[0]['email']."', 'no', 'live')";
		        $queryResults = $db -> query($add);
				header("Location: ".$goto);

			}

		}

    } else {
		// If no email just add them to visitors
		$addVisitorQuery = "INSERT INTO `marketing`.`site_visitors`(
			`site`,
			`referrer`,
			`visitor_ip`
		)
			VALUES
		(
			'heritagetitlemd.com',
			'".$referrer."',
			'".$ip."'
		)";
		$queryResults = $db -> query($addVisitorQuery);

	}
	$_SESSION['tracked'] = 'yes';
}


?>
