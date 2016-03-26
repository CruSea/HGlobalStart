<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/26/2016
 * Time: 3:04 PM
 */

namespace News\Service;


use News\Entity\News;

Interface  NewsService
{

    /**
     * @param News $news
     * @return mixed
     */
    public function save(News $news);

}