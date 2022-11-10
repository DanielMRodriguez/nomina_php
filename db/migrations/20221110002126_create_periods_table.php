<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePeriodsTable extends AbstractMigration
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
        $table = $this->table('periods', ['id' => false, 'primary_key' => 'period_id']);
        $table->addColumn('period_id', 'integer', ['null' => false])
            ->addColumn('week', 'string', ['limit' => 60])
            ->addColumn('init_date', 'timestamp')
            ->addColumn('end_date', 'timestamp')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}