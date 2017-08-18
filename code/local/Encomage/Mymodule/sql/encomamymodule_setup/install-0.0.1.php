<?php 

$installer = $this;
$tableUsers = $installer->getTable('encomagemymodule/table_users');

$installer->startSetup();

$installer->getConnection()->dropTable($tableUsers);
$table = $installer->getConnection()
	->newtable($tableUsers)
	->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ))
	->addColumn('FirstName', Varien_Db_Ddl_Table::TYPE_TEXT, array(
        'nullable'  => false,
        ))
	->addColumn('LastName', Varien_Db_Ddl_Table::TYPE_TEXT, array(
        'nullable'  => false,
        ))
	->addColumn('Email', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
        ))
	->addColumn('CreateDate', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
		))
	->addColumn('UpdateDate', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
	));	
$installer->getConnection()->createTable($table);

$installer->endSetup();


