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
        $gate->setTitle($ci->config->item('agegate_title'));
        $gate->setTestIp($ci->config->item('agegate_test_ip'));
        $gate->setStartFrom($ci->config->item('agegate_start_from'));
        $gate->run();
    }
}
