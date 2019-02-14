<?php

include_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php');

$id = $_POST['to_id'];

$message = 'Received '.date('m/d/Y H:i:s').'<br>Name: '.trim($_POST['name']).'Phone: '.trim($_POST['phone']).'<br>Email: '.trim($_POST['email']).'<br>Message: '.trim(nl2br($_POST['message']));

if($id) {

    $insert = "insert into heritage_title.messages (
        from_email,
        from_name,
        from_phone,
        message,
        message_type,
        sent_to_name,
        sent_to_email
    ) values (
        '".$db->quote(trim($_POST['name']))."',
        '".$db->quote(trim($_POST['phone']))."',
        '".$db->quote(trim($_POST['email']))."',
        '".$db->quote(trim(nl2br($_POST['message'])))."',
        'agent',
        '".$staff[$id]['name']."',
        '".$staff[$id]['email']."'
        )";
    $resultsQuery = $db->query($insert);

    sendMail('', $staff[$id]['email'], 'DoNotReply@TaylorProps.com', 'Contact from website visitor', $message);
    //sendMail('', 'mike@taylorprops.com', 'DoNotReply@TaylorProps.com', 'Contact from website visitor', $message);

} else {

    $insert = "insert into heritage_title.messages (
        from_email,
        from_name,
        from_phone,
        message,
         message_type
        ) values (
            '".$db->quote(trim($_POST['name']))."',
            '".$db->quote(trim($_POST['phone']))."',
            '".$db->quote(trim($_POST['email']))."',
            '".$db->quote(trim(nl2br($_POST['message'])))."',
            'office'
        )";
    $resultsQuery = $db->query($insert);

    sendMail('', 'info@heritagetitlemd.com', 'Internal@TaylorProps.com', 'Contact from website visitor', $message);

}



?>
