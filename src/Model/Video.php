<?php


namespace App\Model;


class Video
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $code;
    /**
     * @var string
     */
    private $type;
    
    /**
     * Video constructor.
     * @param string $name
     * @param string $code
     * @param string $type
     */
    public function __construct(string $name, string $code, string $type)
    {
        $this->name = $name;
        $this->code = $code;
        $this->type = $type;
    }
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     * @return Video
     */
    public function setName(string $name): Video
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    
    /**
     * @param string $code
     * @return Video
     */
    public function setCode(string $code): Video
    {
        $this->code = $code;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    
    /**
     * @param string $type
     * @return Video
     */
    public function setType(string $type): Video
    {
        $this->type = $type;
        return $this;
    }
    
    
}