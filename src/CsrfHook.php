<?php
namespace EighteenPlus\AgeGateHook;

class CsrfHook 
{
    public function csrfDisable() 
    {
        if (isset($_REQUEST['agecheck'])) {
	        $CFG =& load_class('Config', 'core');
	        $CFG->set_item('csrf_protection', false);
        }
    }
}