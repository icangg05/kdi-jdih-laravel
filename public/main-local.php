<?php
return [
  'components' => [
    'db' => [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=103.85.5.123;dbname=jdihkendarikota',
      'username' => 'jdihkendari',
      'password' => 'm67iEudLY25AXUm21UEMN',
      'charset' => 'utf8',
    ],
    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
      'viewPath' => '@common/mail',
      // send all mails to a file by default. You have to set
      // 'useFileTransport' to false and configure a transport
      // for the mailer to send real emails.
      'useFileTransport' => true,
    ],
  ],
];
