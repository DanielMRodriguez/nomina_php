<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePositionsTable extends AbstractMigration
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
        $table = $this->table('positions', ['id' => false, 'primary_key' => 'position_id']);
        $table->addColumn('position_id', 'integer', ['null' => false])
            ->addColumn('name', 'string', ['limit' => 60])
            ->addColumn('description', 'string', ['limit' => 200])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
