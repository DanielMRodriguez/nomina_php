<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePayrollsTable extends AbstractMigration
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
        $table = $this->table('payrolls', ['id' => false, 'primary_key' => 'payroll_id']);
        $table->addColumn('payroll_id', 'integer', ['null' => false])
            ->addColumn('period_id', 'integer')
            ->addColumn('employee_id', 'integer')
            ->addColumn('concept_id', 'integer')
            ->addColumn('unit', 'integer')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
