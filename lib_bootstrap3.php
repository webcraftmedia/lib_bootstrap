<?php
namespace LIB;
class lib_bootstrap3 extends \LIB\lib_jscss{
    public static function get_class(){
        return self::class;}
    public static function js_path(){
        return new \PLIB('bootstrap3/lib/js/bootstrap.min.js');}
    public static function css_path(){
        return new \PLIB('bootstrap3/lib/css/bootstrap.min.css');}
    public static function version(){
        return '3.3.4';}
}
