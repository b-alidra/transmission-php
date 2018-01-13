<?php
namespace Transmission\Model;

/**
 * @author KisGabo <kisgabo94@gmail.com>
 */
class FileStats extends AbstractModel
{
    /**
     * @var integer
     */
    protected $completed;

    /**
     * @var integer
     */
    protected $priority;

    /**
     * @var boolean
     */
    protected $wanted;

    /**
     * @param integer $completed
     */
    public function setcompleted($completed)
    {
        $this->completed = (integer) $completed;
    }

    /**
     * @return integer
     */
    public function getcompleted()
    {
        return $this->completed;
    }

    /**
     * @param integer $priority
     */
    public function setPriority($priority)
    {
        $this->priority = (integer) $priority;
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param boolean $wanted
     */
    public function setWanted($wanted)
    {
        $this->wanted = (boolean) $wanted;
    }

    /**
     * @return boolean
     */
    public function getWanted()
    {
        return $this->wanted;
    }

    /**
     * {@inheritDoc}
     */
    public static function getMapping()
    {
        return array(
            'bytesCompleted' => 'completed',
            'wanted' => 'wanted',
            'priority' => 'priority'
        );
    }
}
