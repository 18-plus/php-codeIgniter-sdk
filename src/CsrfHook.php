<?php
namespace EighteenPlus\AgeGateCI;

class CsrfHook 
{
    public function csrfDisable() 
    {
        if (isset($_REQUEST['agecheck'])) {
	        $cfg =& load_class('Config', 'core');
	        $cfg->set_item('csrf_protection', false);
        }
    }
}