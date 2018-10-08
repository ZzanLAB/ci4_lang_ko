<?php

/**
 * Image language strings.
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
    'sourceImageRequired'    => '소스 이미지를 지정해야 합니다.', //'You must specify a source image in your preferences.',
    'gdRequired'             => 'GD 라이브러리가 필요합니다.', //'The GD image library is required to use this feature.',
    'gdRequiredForProps'     => '서버가 GD 라이브러리를 지원해야 합니다.', //'Your server must support the GD image library in order to determine the image properties.',
    'gifNotSupported'        => '라이센스로 인해 GIF 이미지를 지원하지 않을 수 있습니다. JPG, PNG를 사용해 보세요.', //'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.',
    'jpgNotSupported'        => 'JPG 이미지를 지원하지 않습니다.', //'JPG images are not supported.',
    'pngNotSupported'        => 'PNG 이미지를 지원하지 않습니다.', //'PNG images are not supported.',
    'unsupportedImagecreate' => '서버가 해당 GD 기능을 지원하지 않습니다.', //'Your server does not support the GD function required to process this type of image.',
    'jpgOrPngRequired'       => '이미지 크기 조정 설정은 JPEG 또는 PNG에서만 동작합니다.', //'The image resize protocol specified in your preferences only works with JPEG or PNG image types.',
    'rotateUnsupported'      => '이미지 회전이 서버에서 지원하지 않습니다.', //'Image rotation does not appear to be supported by your server.',
    'libPathInvalid'         => '{0, string} : 이미지 라이브러리 경로를 확인해 주세요.', //'The path to your image library is not correct. Please set the correct path in your image preferences. {0, string)',
    'imageProcessFailed'     => '이미지 처리에 실패했습니다. 관련 환경을 확인해 주세요.', //'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.',
    'rotationAngleRequired'  => '이미지 회전에는 각도가 필요합니다.', //'An angle of rotation is required to rotate the image.',
    'invalidPath'            => '이미지 경로가 유효하지 않습니다.', //'The path to the image is not correct.',
    'copyFailed'             => '이미지 복사가 실패했습니다.', //'The image copy routine failed.',
    'missingFont'            => '사용 폰트를 찾을 수 없습니다.', //'Unable to find a font to use.',
    'saveFailed'             => '이미지를 저장할 수 없습니다. 파일 디렉토리의 권한을 확인해 주세요.', //'Unable to save the image. Please make sure the image and file directory are writable.',
    'invalidDirection'       => '{0} : `vertical` 또는 `horizontal`만 가능합니다.', //'Flip direction can be only `vertical` or `horizontal`. Given: {0}',
    'exifNotSupported'       => 'EXIF 데이터를 읽을 수 없습니다.', //'Reading EXIF data is not supported by this PHP installation.',
];
