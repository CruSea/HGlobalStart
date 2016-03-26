<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/26/2016
 * Time: 12:09 PM
 */

namespace News\Entity;


/**
 * Class News
 * @package News\Entity
 */
class News
{
    /**
     * @var string
     */
    protected $user_id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $content;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPublishedDate()
    {
        return $this->published_date;
    }

    /**
     * @param string $published_date
     */
    public function setPublishedDate($published_date)
    {
        $this->published_date = $published_date;
    }
    /**
     * @var string
     */
    protected $image;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $published_date;
}