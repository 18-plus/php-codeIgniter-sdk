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
        $gate->setLogo($ci->config->item('agegate_logo'));
        
        $gate->setSiteName($ci->config->item('agegate_site_name'));
        $gate->setCustomText($ci->config->item('agegate_custom_text'));
        $gate->setCustomLocation($ci->config->item('agegate_custom_text_location'));
        
        $gate->setBackgroundColor($ci->config->item('agegate_background_color'));
        $gate->setTextColor($ci->config->item('agegate_text_color'));
        
        $gate->setRemoveReference($ci->config->item('agegate_remove_reference'));
        $gate->setRemoveVisiting($ci->config->item('agegate_remove_visiting'));
        
        $gate->setTestMode($ci->config->item('agegate_test_mode'));
        $gate->setTestAnyIp($ci->config->item('agegate_test_anyip'));
        $gate->setTestIp($ci->config->item('agegate_test_ip'));
        
        $gate->setStartFrom($ci->config->item('agegate_start_from'));
        
        $gate->setDesktopSessionLifetime($ci->config->item('agegate_desktop_session_lifetime'));
        $gate->setMobileSessionLifetime($ci->config->item('agegate_mobile_session_lifetime'));
        
        $gate->run();
    }
}
