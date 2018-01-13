<?php
namespace Transmission\Tests\Model;

use Transmission\Model\FileStats;
use Transmission\Util\PropertyMapper;

class FileStatsTest extends \PHPUnit_Framework_TestCase
{
    protected $fileStats;

    /**
     * @test
     */
    public function shouldImplementModelInterface()
    {
        $this->assertInstanceOf('Transmission\Model\ModelInterface', $this->getFileStats());
    }

    /**
     * @test
     */
    public function shouldHaveNonEmptyMapping()
    {
        $this->assertNotEmpty($this->getFileStats()->getMapping());
    }

    /**
     * @test
     */
    public function shouldBeCreatedFromMapping()
    {
        $source = (object) array(
            'bytesCompleted' => 1000,
            'priority' => 3,
            'wanted' => false
        );

        PropertyMapper::map($this->getFileStats(), $source);

        $this->assertEquals(1000, $this->getFileStats()->getCompleted());
        $this->assertEquals(3, $this->getFileStats()->getPriority());
        $this->assertEquals(false, $this->getFileStats()->getWanted());
    }

    public function setup()
    {
        $this->fileStats = new FileStats();
    }

    private function getFileStats()
    {
        return $this->fileStats;
    }
}
