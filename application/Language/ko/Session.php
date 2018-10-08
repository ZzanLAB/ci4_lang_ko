<?php

/**
 * Session language strings.
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
    'missingDatabaseTable'   => '`sessionSavePath`에는 DB 세션 테이블명이 있어야 합니다.', //'`sessionSavePath` must have the table name for the Database Session Handler to work.',
    'invalidSavePath'        => "Session: Configured save path '{0}' : 존재하지 않거나 만들 수 없습니다.", //"Session: Configured save path '{0}' is not a directory, doesn't exist or cannot be created.",
    'writeProtectedSavePath' => "Session: Configured save path '{0}' : 세션을 저장할 수 없습니다.", //"Session: Configured save path '{0}' is not writable by the PHP process.",
    'emptySavePath'          => '세션 저장 경로가 존재하지 않습니다.', //'Session: No save path configured.',
    'invalidSavePathFormat'  => 'Redis 세션 저장경로를 확인해주세요.', //'Session: Invalid Redis save path format: {0}',
];
