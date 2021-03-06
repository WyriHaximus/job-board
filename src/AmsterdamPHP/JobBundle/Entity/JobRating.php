<?php

namespace AmsterdamPHP\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * JobRating
 *
 * @ORM\Table(name="job_rating")
 * @ORM\Entity(repositoryClass="AmsterdamPHP\JobBundle\Entity\JobRatingRepository")
 */
class JobRating
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Job
     *
     * @ORM\ManyToOne(targetEntity="AmsterdamPHP\JobBundle\Entity\Job")
     */
    private $job;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set job
     *
     * @param Job $job
     * @return JobRating
     */
    public function setJob(Job $job)
    {
        $this->job = $job;
    
        return $this;
    }

    /**
     * Get job
     *
     * @return Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return JobRating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
}
