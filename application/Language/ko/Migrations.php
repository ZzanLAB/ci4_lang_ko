<?php

/**
 * Migration language strings.
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
    // Migration Runner
    'missingTable'  => '마이그레이션 테이블을 설정해야 합니다.', //'Migrations table must be set.',
    'invalidType'   => '{0} : 잘못된 마이그레이션 넘버링 유형입니다.', //'An invalid migration numbering type was specified: {0}',
    'disabled'      => '마이그레이션이 로드되었지만, 사용하지 않도록 설정되었거나 잘못 설정되었습니다.', //'Migrations have been loaded but are disabled or setup incorrectly.',
    'notFound'      => '마이그레이션 파일을 찾을 수 없습니다: ', //'Migration file not found: ',
    'empty'         => '마이그레이션 파일이 없습니다.', //'No Migration files found',
    'gap'           => '마이그레이션 순서에 간격이 있습니다: ', //'There is a gap in the migration sequence near version number: ',
    'classNotFound' => '마이그레이션 "%s" 클래스를 찾을 수 없습니다.', //'The migration class "%s" could not be found.',
    'missingMethod' => '마이그레이션 클래스에 "%s" 메서드가 없습니다.', //'The migration class is missing an "%s" method.',

    // Migration Command
    'migHelpLatest'     => "\t\t최신버젼으로 마이그레이션 합니다.", //"\t\tMigrates database to latest available migration.",
    'migHelpCurrent'    => "\t\t'current'로 설정된 버젼으로 마이그레이션 합니다.", //"\t\tMigrates database to version set as 'current' in configuration.",
    'migHelpVersion'    => "\t{v} 버젼으로 마이그레이션 합니다.", //"\tMigrates database to version {v}.",
    'migHelpRollback'   => "\t모든 마이그레이션을 롤백합니다.", //"\tRuns all migrations 'down' to version 0.",
    'migHelpRefresh'    => "\t\t모든 마이그레이션 삭제 및 재실행하여 데이터베이스를 초기화합니다.", //"\t\tUninstalls and re-runs all migrations to freshen database.",
    'migHelpSeed'       => "\t[name] Seeder를 실행합니다.", //"\tRuns the seeder named [name].",
    'migCreate'         => "\t[name] 마이그레이션을 생성합니다.", //"\tCreates a new migration named [name]",
    'nameMigration'     => "마이그레이션 파일명", //"Name the migration file",
    'badCreateName'     => '마이그레이션 파일명이 필요합니다.', //'You must provide a migration file name.',
    'writeError'        => '파일 생성 중 오류가 발생했습니다.', //'Error trying to create file.',
    'migNumberError'    => '이전 번호는 3자리여야 하고 간격이 없어야 합니다.', //'Migration number must be three digits, and there must not be any gaps in the sequence.',

    'toLatest'       => '최신버젼으로 마이그레이션 중...', //'Migrating to latest version...',
    'migInvalidVersion' => '비정상적인 버젼입니다.', //'Invalid version number provided.',
    'toVersionPH'    => '%s 버젼으로 마이그레이션 중...', //'Migrating to version %s...',
    'toVersion'      => 'current 버젼으로 마이그레이션 중...', //'Migrating to current version...',
    'rollingBack'    => "모든 마이그레이션 롤백 중...", //"Rolling back all migrations...",
    'noneFound'      => '마이그레이션을 찾을 수 없습니다.', //'No migrations were found.',
    'on'             => 'Migrated On: ',
    'migSeeder'         => 'Seeder명', //'Seeder name',
    'migMissingSeeder'  => 'Seeder명이 필요합니다.', //'You must provide a seeder name.',
    'removed'        => 'Rolling back: ',
    'added'          => 'Running: ',

    'version'  => '버젼', //'Version',
    'filename' => '파일명', //'Filename',
];