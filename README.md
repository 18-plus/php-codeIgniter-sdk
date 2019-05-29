# AgeGateCI
## Install

Add to config.php
```php
$config['enable_hooks'] = TRUE;
$config['composer_autoload'] = APPPATH . 'third_party/vendor/autoload.php';
```

Create file hooks.php in application/config
Add
```php
$hook['post_controller_constructor'][] = array(
    'class'    => 'EighteenPlus\\AgeGateCI\\Hook',
    'function' => 'ageGateRun',
    'filename' => 'Hook.php',
    'filepath' => '<vendor_path>/agegateci/src/', // path relative to APPPATH
);
$hook['pre_system'][] = array(
    'class'    => 'EighteenPlus\\AgeGateCI\\CsrfHook',
    'function' => 'csrfDisable',
    'filename' => 'CsrfHook.php',
    'filepath' => '<vendor_path>/agegateci/src/', // path relative to APPPATH
);
```

## Options
Add folowing options to config/config.php

$config['agegate_title'] - Text in the <title> tag
$config['agegate_logo'] - Site logo before 'Age Gate' text and inside Qr-Code
$config['agegate_site_name'] - Text before 'Age Gate'
$config['agegate_custom_text'] - Text before 'reference to Digital Economy Act' or after
$config['agegate_custom_text_location'] - Position of 'agegate_custom_text'. Values: 'top', 'bottom'
$config['agegate_background_color'] - background color. Default: rgb(247, 241, 241)
$config['agegate_text_color'] - text color. Default: #212529
$config['agegate_remove_reference'] - Remove 'reference to Digital Economy Act'. Values: true, false
$config['agegate_remove_visiting'] - Remove 'you are visiting from UK' text. Values: true, false
$config['agegate_test_mode'] - start AgeGate immediatelly. Values: true, false
$config['agegate_test_anyip'] - start AgeGate at any ip. Value: true, false
$config['agegate_test_ip'] - set ip for testing. Example: '192.168.0.1'
$config['agegate_start_from'] - start AgeGate after this time. Default: 2019-07-15T12:00
$config['agegate_desktop_session_lifetime'] - reset AgeGate confirmation after this time in hours on Desktop. Default: 24
$config['agegate_mobile_session_lifetime'] - reset AgeGate confirmation after this time in hours on Mobile devices. Default: 24