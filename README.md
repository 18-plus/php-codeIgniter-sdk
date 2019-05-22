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
    'filepath' => '<vendor_path>/agegateci/src/',
);
$hook['pre_system'][] = array(
    'class'    => 'EighteenPlus\\AgeGateCI\\CsrfHook',
    'function' => 'csrfDisable',
    'filename' => 'CsrfHook.php',
    'filepath' => '<vendor_path>/agegateci/src/'
);
```

