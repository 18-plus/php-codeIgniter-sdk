<?php
namespace EighteenPlus\AgeGateCI;

use EighteenPlus\AgeGate\AgeGate;

class Hook 
{
    public function ageGateRun()
    {
        $ci =& get_instance();
        $ci->load->helper('url');
        
        $gate = new AgeGate(base_url());
        $gate->setTitle($ci->config->item('AGEGATE_TITLE'));
        $gate->run();
    }
}
