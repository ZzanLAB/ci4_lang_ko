<?php

/**
 * Validation language strings.
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
    // Core Messages
    'noRuleSets'            => 'Validation의 규칙이 없습니다.', //'No rulesets specified in Validation configuration.',
    'ruleNotFound'          => '{0}의 규칙이 비정상입니다.', //'{0} is not a valid rule.',
    'groupNotFound'         => '{0} Validation 규칙 그룹을 찾을 수 없습니다.', //'{0} is not a validation rules group.',
    'groupNotArray'         => '{0} Validation 규칙 그룹은 배열이 아닙니다.', //'{0} rule group must be an array.',
    'invalidTemplate'       => '{0} 템플릿은 유효하지 않습니다.',//'{0} is not a valid Validation template.',

    // Rule Messages
    'alpha'                 => '{field}의 값은 알파벳만 허용합니다.', //'The {field} field may only contain alphabetical characters.',
    'alpha_dash'            => '{field}의 값은 알파벳, _, -만 허용합니다.', //'The {field} field may only contain alpha-numeric characters, underscores, and dashes.',
    'alpha_numeric'         => '{field}의 값은 알파벳, 숫자만 허용합니다.', //'The {field} field may only contain alpha-numeric characters.',
    'alpha_numeric_spaces'  => '{field}의 값은 알파벳, 숫자, 공백만 허용합니다.', //'The {field} field may only contain alpha-numeric characters and spaces.',
    'alpha_space'  			=> '{field}의 값은 알파벳, 공백만 허용합니다.', //'The {field} field may only contain alphabetical characters and spaces.',
    'decimal'               => '{field}의 값은 소수만 허용합니다.', //'The {field} field must contain a decimal number.',
    'differs'               => '{field}, {param} : 서로 다른 값이어야 합니다.', //'The {field} field must differ from the {param} field.',
    'exact_length'          => '{field}의 길이는 {param}이어야 합니다.', //'The {field} field must be exactly {param} characters in length.',
    'greater_than'          => '{field}의 값은 {param}보다 커야 합니다.', //'The {field} field must contain a number greater than {param}.',
    'greater_than_equal_to' => '{field}의 값은 {param} 이상이어야 합니다.', //'The {field} field must contain a number greater than or equal to {param}.',
    'in_list'               => '{field}의 값은 {param} 중 하나여야 합니다.', //'The {field} field must be one of: {param}.',
    'integer'               => '{field}의 값은 정수만 허용합니다.', //'The {field} field must contain an integer.',
    'is_natural'            => '{field}의 값은 숫자만 허용합니다.', //'The {field} field must only contain digits.',
    'is_natural_no_zero'    => '{field}의 값은 0보다 큰 숫자만 허용합니다.', //'The {field} field must only contain digits and must be greater than zero.',
    'is_unique'             => '{field}의 값은 유니크한 값이어야 합니다.', //'The {field} field must contain a unique value.',
    'less_than'             => '{field}의 값은 {param}보다 작아야 합니다.', //'The {field} field must contain a number less than {param}.',
    'less_than_equal_to'    => '{field}의 값은 {param} 이하여야 합니다.', //'The {field} field must contain a number less than or equal to {param}.',
    'matches'               => '{field}, {param} : 서로 같은 값이어야 합니다.', //'The {field} field does not match the {param} field.',
    'max_length'            => '{field}의 길이는 {param}보다 작아야 합니다.', //'The {field} field cannot exceed {param} characters in length.',
    'min_length'            => '{field}의 길이는 {param}보다 커야 합니다.', //'The {field} field must be at least {param} characters in length.',
    'numeric'               => '{field}의 값은 숫자만 허용합니다.', //'The {field} field must contain only numbers.',
    'regex_match'           => '{field}의 형식이 올바르지 않습니다.', //'The {field} field is not in the correct format.',
    'required'              => '{field}의 값은 반드시 존재해야 합니다.', //'The {field} field is required.',
    'required_with'         => '{field}의 값은 {param}의 값이 존재할 경우, 반드시 존재해야 합니다.', //'The {field} field is required when {param} is present.',
    'required_without'      => '{field}의 값은 {param}의 값이 존재하지 않을 경우, 반드시 존재해야 합니다.', //'The {field} field is required when {param} in not present.',
    'timezone'              => '{field}의 값은 유효한 시간대여야 합니다.', //'The {field} field must be a valid timezone.',
    'valid_base64'          => '{field}의 값은 BASE64 형식의 문자열이어야 합니다.', //'The {field} field must be a valid base64 string.',
    'valid_email'           => '{field}의 값은 정상적인 이메일 주소가 아닙니다.', //'The {field} field must contain a valid email address.',
    'valid_emails'          => '{field}의 값들은 모두 정상적인 이메일 주소이어야 합니다.', //'The {field} field must contain all valid email addresses.',
    'valid_ip'              => '{field}의 값은 정상적인 IP가 아닙니다.', //'The {field} field must contain a valid IP.',
    'valid_url'             => '{field}의 값은 정상적인 URL이 아닙니다.', //'The {field} field must contain a valid URL.',
    'valid_date'            => '{field}의 값은 정상적인 날짜가 아닙니다.', //'The {field} field must contain a valid date.',

    // Credit Cards
    'valid_cc_num'          => '{field}의 값은 유효한 신용카드 번호가 아닙니다.', //'{field} does not appear to be a valid credit card number.',

    // Files
    'uploaded'              => '{field} 파일이 올바르지 않습니다.', //'{field} is not a valid uploaded file.',
    'max_size'              => '{field} 파일 용량이 너무 큽니다..', //'{field} is too large of a file.',
    'is_image'              => '{field} 파일은 이미지여야 합니다.', //'{field} is not a valid, uploaded image file.',
    'mime_in'               => '{field} 파일의 타입을 알 수 없습니다.', //'{field} does not have a valid mime type.',
    'ext_in'                => '{field} 파일의 확장자는 허용되지 않습니다.', //'{field} does not have a valid file extension.',
    'max_dims'              => '{field} 파일은 이미지가 아니거나 사이즈가 너무 큽니다.', //'{field} is either not an image, or it is too wide or tall.',
];