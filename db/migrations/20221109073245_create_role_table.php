<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateRoleTable extends AbstractMigration
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

        $table = $this->table('roles', ['id' => false, 'primary_key' => ['rol_id']]);
        $table->addColumn('name', 'string')
            ->addColumn('rol_id', 'integer', ['null' => false])
            ->addColumn('description', 'string')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
