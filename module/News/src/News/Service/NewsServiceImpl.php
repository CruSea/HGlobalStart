<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/26/2016
 * Time: 3:08 PM
 */
use News\Service\NewsService;
class NewsServiceImpl implements NewsService
{
    /**
     * @var |News|Repository|NewsRepository  $newsRepository
     */
    protected $NewsRepository;
    /**
     * @param News $news
     */
    public function save(\News\Entity\News $news)
    {
       $this->NewsRepository->save($news);
    }

    /**
     * @return mixed
     */
    public function getNewsRepository()
    {
        return $this->NewsRepository;
    }

    /**
     * @param mixed $NewsRepository
     */
    public function setNewsRepository($NewsRepository)
    {
        $this->NewsRepository = $NewsRepository;
    }
}