<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEmployeesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('employees', ['id' => false, 'primary_key' => 'employee_id']);
        $table->addColumn('employee_id', 'integer', ['null' => false])
            ->addColumn('name', 'string',['limit' => 200])
            ->addColumn('mail', 'string',['limit' => 100])
            ->addColumn('phone', 'string',['limit' => 15])
            ->addColumn('rfc', 'string',['limit' => 30])
            ->addColumn('curp', 'string',['limit' => 30])
            ->addColumn('position_id', 'integer')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
