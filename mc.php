<?php
$username = "gowthamgts";
$email = "gowthamgts12@gmail.com";
$regno = "11itr022";
$classcode = "4ita";
$password = "testpassword";
$hashcode = sha1("register".$username.$email);
$verify_link = "http://cia-kec.rhcloud.com/verify.php?hash=$hashcode&user=$username";
$subject = "Account Verification for $username";
$emailBody = "
        <html><head></head><body>
        <h4>Hey, thanks for trying this out. Your information:</h4>
        <strong>Username</strong> : $username<br />
        <strong>Register Number</strong> : $regno<br />
        <strong>Email</strong> : $email<br />
        <strong>Class Code</strong> : $classcode<br />
        <p>Thanks for regsitering with KEC CIA[Continuous Internal Asssessment] web application. Please keep the following things in your mind:</p>
        <ol><li>We do protect your privacy and hence we do not affect or sell your information online. Every information about you is safe and hashed with us that even the DBA will not be able to mine your personal data.</li>
        <li>Please login and enter the details on the days when you are absent. Else you don't need to login.</li>
        <li>Also, there is an option to opt in and opt out for email notifications that will notify you when your attendence percent is low. Only notifications will be sent to you when there is a need for it. <strong>No Spam, we promise.</strong></li>
        <li>If you're a white hat or a person who would like to help us, then do help us by sending your patches or suggestions. Please mail to <a href='mailto:gowthamgts12@gmail.com' title='Mail to Gowtham Gopalakrishnan'>gowthamgts12@gmail.com</a> if you need access to the source code.</li>
        </ol>
        <p>Here's the verification link: <a href='$verify_link'>$verify_link</a></p>
        <p>I thank you for your patience and please <strong>do not reply</strong> to this mail since we're not going to read this mailbox.</p>
        <div style='display: block;width: 350px;text-align: center;margin: 0 auto;'><img src='cia-kec.rhcloud.com/framework.png' alt='a GTS framework' /></div>
        </body>
        </html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: KEC Continuous Internal Asssessment <gowthamgts12@gmail.com>' . "\r\n";
$mail = mail($email,$subject,$emailBody,$headers);
if($mail) {
    die('1');
}