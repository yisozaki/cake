<?php
use Migrations\AbstractMigration;

class Dungeons extends AbstractMigration
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
        $table = $this->table('dungeons');
        $table
            ->addColumn('title', 'string')
            ->addColumn('level', 'integer')
            ->addColumn('created', 'datetime')
            ->create()
        ;
    }
}
