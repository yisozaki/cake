<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DungeonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DungeonsTable Test Case
 */
class DungeonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DungeonsTable
     */
    public $Dungeons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dungeons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dungeons') ? [] : ['className' => 'App\Model\Table\DungeonsTable'];
        $this->Dungeons = TableRegistry::get('Dungeons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dungeons);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
