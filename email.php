require_once "Mail.php";

$from = '<edvin.fjodorov@gmail.com>'; //change this to your email address
$to = '<silmalas96@gmail.com>'; // change to address
$subject = 'hello'; // subject of mail
$body = "Hello world! this is the content of the email"; //content of mail

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'edvin.fjodorov@gmail.com', //your gmail account
        'password' => 'xeon96@google2505' // your password
    ));

// Send the mail
$mail = $smtp->send($to, $headers, $body);