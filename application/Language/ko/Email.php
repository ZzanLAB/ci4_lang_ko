<?php

/**
 * Email language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2018 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
    'mustBeArray'          => '이메일 유효성 검사에는 배열을 사용해야 합니다.', //'The email validation method must be passed an array.',
    'invalidAddress'       => '유효하지 않은 이메일 : {0}', //'Invalid email address: {0}',
    'attachmentMissing'    => '{0} : 해당 이메일 첨부파일을 찾을 수 없습니다.', //'Unable to locate the following email attachment: {0}',
    'attachmentUnreadable' => '{0} : 해당 첨부파일을 열 수 없습니다.', //'Unable to open this attachment: {0}',
    'noFrom'               => '"보낸 사람" 헤더 없이는 메일을 보낼 수 없습니다.', //'Cannot send mail with no "From" header.',
    'noRecipients'         => '수신자를 포함해야 합니다. (To, Cc 또는 Bcc)', //'You must include recipients: To, Cc, or Bcc',
    'sendFailurePHPMail'   => 'PHP의 mail() 메서드를 사용할 수 없습니다.', //'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.',
    'sendFailureSendmail'  => 'PHP의 SendMail을 사용할 수 없습니다.', //'Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.',
    'sendFailureSmtp'      => 'PHP의 SMTP를 사용할 수 없습니다.', //'Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.',
    'sent'                 => '정상적으로 메시지를 전송했습니다. 사용 프로토콜 : {0, string}', //'Your message has been successfully sent using the following protocol: {0, string}',
    'noSocket'             => 'Sendmail 소켓을 열 수 없습니다.', //'Unable to open a socket to Sendmail. Please check settings.',
    'noHostname'           => 'SMTP 호스트를 지정하지 않았습니다.', //'You did not specify a SMTP hostname.',
    'SMTPError'            => 'SMTP 오류 : {0}', //'The following SMTP error was encountered: {0}',
    'noSMTPAuth'           => 'SMTP 오류 : ID / Password 확인 필요', //'Error: You must assign a SMTP username and password.',
    'failedSMTPLogin'      => 'SMTP 오류 : 로그인 명령 송신 실패 ({0})', //'Failed to send AUTH LOGIN command. Error: {0}',
    'SMTPAuthUsername'     => 'SMTP 오류 : 사용자 ID 인증 실패 ({0})', //'Failed to authenticate username. Error: {0}',
    'SMTPAuthPassword'     => 'SMTP 오류 : 사용자 Password 인증 실패 ({0})', //'Failed to authenticate password. Error: {0}',
    'SMTPDataFailure'      => 'SMTP 오류 : 데이터 송신 실패 ({0})', //'Unable to send data: {0}',
    'exitStatus'           => '상태코드 종료 : {0}', //'Exit status code: {0}',
];
