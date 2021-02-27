<?php

//class => [values]

$pharPath = __DIR__;
$rootPath = dirname(__DIR__);

return [
  'global' => [
  ],
  'class'  => [
    \kmucms\routing\BubbleRequest::class => [
      'webPath' => $pharPath . '/webpages/web',
    ],
    \kmucms\uipages\common\APage::class               => [
      'templatePath' => $pharPath . '/webpages',
    ],
    kmucms\adminuser\AdminUser::class          => [
      'name'     => 'admin',
      'password' => 'admin',
    ]
  ]
];
