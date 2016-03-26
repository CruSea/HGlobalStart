<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/25/2016
 * Time: 10:56 PM
 */
return array (
    'invokable' => array(
        'News\Service\NewsService'=> 'News\Service\NewsServiceImpl',
    ),
    'factories' => array(
        'News\Repository\NewsRepository' => function (\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator){
             $NewsRepository = new \News\Repository\NewsRepositoryImpl();
            $NewsRepository->setDbAdapter($serviceLocator ->get('Zend\Db\Adapter\Adapter'));

            return $NewsRepository;

        }
    ),
    'News\Service\NewsService' => function(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator){
          $NewsService = new \News\Service\NewsServiceImp();
        $NewsService -> setNewsRepository($serviceLocator->get('News\Repository\NewsRepository'));
             return $NewsService;
    }
);
