<?php
namespace Aura\Framework\Cli\NotFound;
use Aura\Framework\Cli\AbstractCommandTest;

/**
 * Test class for Command.
 * Generated by PHPUnit on 2011-10-06 at 15:20:19.
 */
class CommandTest extends AbstractCommandTest
{
    protected $command_name = 'NotFound';

    /**
     * @todo Implement testAction().
     */
    public function testAction()
    {
        $command = $this->newCommand();
        $command->exec();
        $actual = file_get_contents($this->errfile);
        $expect = 'Command not found.' . PHP_EOL;
        $this->assertSame($actual, $expect);
    }
}
