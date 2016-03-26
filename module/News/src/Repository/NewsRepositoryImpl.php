<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/26/2016
 * Time: 3:53 PM
 */

namespace News\Repository;


use News\Entity\News;

/**
 * Class NewsRepositoryImpl
 * @package News\Repository
 */
class NewsRepositoryImpl implements NewsRepository
{
    /**
     * @var |Zend|Db\Adapter $dbAdapter
     */
    protected $dbAdapter;

    /**
     * @param News $news
     */
    public function save(News $news)
    {
        $sql= new \Zend\Db\Sql\Sql($this->dbAdapter);
       $newsInsert = $sql ->insert()
            ->values(array(
                'title' =>$news->getTitle(),
                'content' => $news->getContent(),
                'description' => $news->getDescription(),
                'image'=> $news->getImage(),
                'published_date'=>$news->getPublishedDate(),
                'user_id'=>$news->getUserId(),
                'created'=> time(),
            ))->into('news_feeds');
        $statment = $sql->prepareStatementForSqlObject($newsInsert);
        $statment ->execute();



    }
}