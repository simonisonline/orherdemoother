<?php
/**
 * Description of class
 *
 * @author simon
 */

namespace orherdemoother;
class x {
    protected $protect;
    
    public function setProtect($string){
        $this->protect = $string;
        return $this;
    }
    
    public function getProtect(){
        return $this->protect;
    }
    public function demo(){
        return $this;
    }
}
