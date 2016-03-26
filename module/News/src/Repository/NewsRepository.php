<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/26/2016
 * Time: 3:51 PM
 */

namespace News\Repository;


use News\Entity\News;

interface NewsRepository
{
    /**
     * @param News $news
     * @return mixed
     */
    public function save(News $news);

}