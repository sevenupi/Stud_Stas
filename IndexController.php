<?php
class Encomage_Mymodule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
		$resource = Mage::getSingleton('core/resource');
        $read = $resource->getConnection('core_read');
        $table = $resource->getTableName('encomagemymodule/table_users');

        $select = $read->select()
                ->from($table, array('id', 'FirstName', 'LastName', 'Email', 'CreateDate', 'UpdateDate'));

        $users = $read->fetchAll($select);
        Mage::register('users', $users);
		
        $this->loadLayout();
        $this->renderLayout();
    }

	
}