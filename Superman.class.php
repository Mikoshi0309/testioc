<?php
class Superman
{
    protected $module;
 
    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
	public function test(){
		$this->module->test([123]);
	}
}

?>