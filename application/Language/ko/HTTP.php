<?php

/**
 * HTTP language strings.
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
    // CurlRequest
    'missingCurl'                => 'CURL을 활성화해야 합니다.', //'CURL must be enabled to use the CURLRequest class.',
    'invalidSSLKey'              => '{0} SSL 키파일은 유효하지 않습니다.', //'Cannot set SSL Key. {0} is not a valid file.',
    'sslCertNotFound'            => '{0}에서 SSL 인증서를 찾을 수 없습니다.', //'SSL certificate not found at: {0}',
    'curlError'                  => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType'     => '{0} : 유효하지 않습니다. media, charset, encoding, language 중 하나여야 합니다.', //'{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol'        => 'HTTP 버젼 오류. {0} 중 하나여야 합니다.', //'Invalid HTTP Protocol Version. Must be one of: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Negotiation을 위한 배열값이 필요합니다.', //'You must provide an array of supported values to all Negotiations.',

    // RedirectResponse
    'invalidRoute'               => '{0, string} : 유효하지 않은 라우트', //'{0, string} is not a valid route.',

    // Response
    'missingResponseStatus'      => 'HTTP 응답에 상태코드가 없습니다.', //'HTTP Response is missing a status code',
    'invalidStatusCode'          => '{0, string} : 유효한 HTTP 상태코드가 아닙니다.', //'{0, string} is not a valid HTTP return status code',
    'unknownStatusCode'          => '{0} : 알 수 없는 HTTP 상태코드', //'Unknown HTTP status code provided with no message: {0}',

    // URI
    'cannotParseURI'             => '{0} : URI을 분석할 수 없습니다.', //'Unable to parse URI: {0}',
    'segmentOutOfRange'          => '{0} : URI 세그먼트가 범위를 벗어났습니다.', //'Request URI segment is out of range: {0}',
    'invalidPort'                => '{0} : 포트는 0~65535 사이여야 합니다.', //'Ports must be between 0 and 65535. Given: {0}',
    'malformedQueryString'       => '쿼리스트링에는 URI가 포함될 수 없습니다.', //'Query strings may not include URI fragments.',

    // Page Not Found
    'pageNotFound'               => '페이지를 찾을 수 없습니다.', //'Page Not Found',
    'emptyController'            => '컨트롤러가 지정되지 않았습니다.', //'No Controller specified.',
    'controllerNotFound'         => '{0}::{1} : 컨트롤러 또는 메서드를 찾을 수 없습니다.', //'Controller or its method is not found: {0}::{1}',
    'methodNotFound'             => '{0} : 메서드를 찾을 수 없습니다.', //'Controller method is not found: {0}',

    // CSRF
    'disallowedAction'           => '허용되지 않는 동작입니다.', //'The action you requested is not allowed.',

    // Uploaded file moving
    'alreadyMoved'				 => '파일이 이미 이동되었습니다.', //'The uploaded file has already been moved.',
    'invalidFile'				 => '원본파일이 유효하지 않습니다.', //'The original file is not a valid file.',
    'moveFailed'				 => '{0} 파일을 {1} 파일로 이동할 수 없습니다. ({2})', //'Could not move file {0} to {1} ({2})',
];
