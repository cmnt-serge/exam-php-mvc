<?php
class Team
{
    private $id;
    private $name;
    private $points;
    private $goalTaken;
    private $goalScored;
    private $logoUrl;

    /**
     * Team constructor.
     * @param $id
     * @param $name
     * @param $points
     * @param $goalTaken
     * @param $goalScored
     * @param $logoUrl
     */
    public function __construct($id = null, $name = null, $points = null, $goalTaken = null, $goalScored = null, $logoUrl = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->points = $points;
        $this->goalTaken = $goalTaken;
        $this->goalScored = $goalScored;
        $this->logoUrl = $logoUrl;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|null
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed|null $points
     */
    public function setPoints($points): void
    {
        $this->points = $points;
    }



    /**
     * @return mixed
     */
    public function getGoalTaken()
    {
        return $this->goalTaken;
    }

    /**
     * @param mixed $goalTaken
     */
    public function setGoalTaken($goalTaken): void
    {
        $this->goalTaken = $goalTaken;
    }

    /**
     * @return mixed
     */
    public function getGoalScored()
    {
        return $this->goalScored;
    }

    /**
     * @param mixed $goalScored
     */
    public function setGoalScored($goalScored): void
    {
        $this->goalScored = $goalScored;
    }

    /**
     * @return mixed|null
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * @param mixed|null $logoUrl
     */
    public function setLogoUrl($logoUrl): void
    {
        $this->logoUrl = $logoUrl;
    }




}