<?php
/**
 * 无障碍
 * 
 * @package  无障碍
 * @author 杨永全
 * @version 1.0.0
 * @dependence 14.10.10-*
 * @link http://www.qt06.com
 */
class Acc_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
    */
    public static function activate()
    {
        //Typecho_Plugin::factory('Widget_Abstract_Contents')->filter = array('plyr_Plugin','filter');
        //Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = array('plyr_Plugin', 'parse');
        //Typecho_Plugin::factory('Widget_Abstract_Contents')->excerptEx = array('plyr_Plugin', 'parse');
        //Typecho_Plugin::factory('Widget_Archive')->header = array('plyr_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('Acc_Plugin', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
    */
    public static function deactivate(){}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
    */
    public static function config(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
    */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 输出尾部js
     * 
     * @access public
     * @param unknown $header
     * @return unknown
    */
    public static function footer($widget) {
        $jsUrl = Helper::options()->pluginUrl . '/Acc/acc.js';
        echo '
<script src="'. $jsUrl .'"></script>';
    }
    
}
