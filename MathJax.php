<?php
/**
 * MathJax
 * 
 * @package MathJax
 * @author zhibi
 * @version 1.0.1
 * @link https://www.yuzhongzhibi.site
 */
class MathJax implements Typecho_Plugin_Interface
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
        Typecho_Plugin::factory('Widget_Archive')->footer = array('MathJax', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {}
    
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
     * @param unknown $footer
     * @return unknown
     */
    public static function footer() {
    echo '<script>
    MathJax = {
        tex:{
            inlineMath: [["$", "$"]],
            displayMath: [["$$", "$$"]],
        },
        svg: {
            fontCache: "global",
            scale: 0.8,
        }
    };
    </script>
    <script type="text/javascript" id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js">
    </script>';
    }
}
