<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
ci_faxhaidong
*/
function smarty_function_base_url($params, &$smarty) {
	
        if (!function_exists('site_url')) {
                if (!function_exists('get_instance')) {
                return "Can't get CI instance";
                }
                $CI= &get_instance();
                $CI->load->helper('url');
        }
        if (!isset($params['url'])) {
                //return site_url();
                return base_url();
        } else {
        		//return site_url($params['url']);
                return base_url($params['url']);
        }
}
 
 