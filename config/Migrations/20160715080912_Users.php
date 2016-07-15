<?php
use Migrations\AbstractMigration;

class Users extends AbstractMigration
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
        $table = $this->table('users');
        $table
            ->addColumn('name', 'string')
            ->addColumn('level', 'integer')
            ->addColumn('login', 'datetime')
            ->addColumn('created', 'datetime')
            ->create()
        ;
    }
}
