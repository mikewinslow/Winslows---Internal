<?php
class Company_FileController extends Dataservice_Controller_Company_File_Action
{
    public function init()
    {
	$this->_EntityClass = "\Entities\Company\File\FileAbstract";
	
	parent::init();
    }
}
