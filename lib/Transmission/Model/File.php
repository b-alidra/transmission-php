<?php
namespace Transmission\Model;

class File
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $size;


    /**
     * @var integer
     */
    protected $bytesCompleted;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = (string) $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param integer $size
     */
    public function setSize($size)
    {
        $this->size = (integer) $size;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param integer $completed
     */
    public function setBytesCompleted($completed)
    {
        $this->completed = (integer) $completed;
    }

    /**
     * @return integer
     */
    public function getBytesCompleted()
    {
        return $this->completed;
    }

    /**
     * @return array
     */
    public static function getMapping()
    {
        return array(
            'name' => 'name',
            'length' => 'size',
            'bytesCompleted' => 'bytesCompleted'
        );
    }
}