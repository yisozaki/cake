<?php
use Migrations\AbstractMigration;

class Maps extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('maps');
        $table
            ->addColumn('dungeion_id', 'integer')
            ->addColumn('coord', 'integer')
            ->addColumn('created', 'datetime')
            ->create()
        ;
    }
}
