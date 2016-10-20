<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountsTable Test Case
 */
class AccountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountsTable
     */
    public $Accounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.accounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Accounts') ? [] : ['className' => 'App\Model\Table\AccountsTable'];
        $this->Accounts = TableRegistry::get('Accounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Accounts);

        parent::tearDown();
    }

    public function testFindEnable()
    {
        $this->assertEquals(2, $this->Accounts->find('enable')->count());
    }
}
