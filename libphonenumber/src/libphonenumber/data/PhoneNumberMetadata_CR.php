<?php
  /* This file is automatically generated by {@link BuildMetadataPHPFromXml}.
   * Please don't modify it directly.
   */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[24-9]\\d{7,9}',
    'PossibleNumberPattern' => '\\d{8,10}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '2[24-7]\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '22123456',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          5(?:
            0[0-4]|
            7[01]
          )\\d{5}|
          [67][0-2]\\d{6}|
          8[3-9]\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '83123456',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '800\\d{7}',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '8001234567',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '90[059]\\d{7}',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '9001234567',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => '
          210[0-6]\\d{4}|
          4(?:
            0(?:
              [04]0\\d{4}|
              10[0-3]\\d{3}|
              2900\\d{2}|
              3[01]\\d{4}|
              5\\d{5}|
              70[01]\\d{3}|
              8[0-2]\\d{4}
            )|
            1[01]\\d{5}|
            20[0-3]\\d{4}|
            400\\d{4}|
            70[0-2]\\d{4}
          )|
          5100\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '40001234',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'CR',
  'countryCode' => 506,
  'internationalPrefix' => '00',
  'nationalPrefixForParsing' => '(19(?:0[01468]|19|20|66|77))',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{4})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [24-7]|
            8[3-9]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
    ),
    1 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[89]0',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
/* EOF */