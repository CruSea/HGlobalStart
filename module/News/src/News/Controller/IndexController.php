<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/25/2016
 * Time: 10:47 PM
 */
namespace News\Controller;

use News\Entity\News;
use News\Form\Add;
use News\InputFilter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
     {
            return new ViewModel();
     }
    public function addAction()
    {
        $form = new Add();
        $variables =array('form' => $form);

        if ($this->request->isPost()){
            $news = new News();
            $form->bind($news);
            $form->setInputFilter(new InputFilter\addNews());
            $form->setData($this->request->getPost());
            if ($form->isValid()){
                /**
                 * @var \News\Service\NewsService $newsService
                 */
               $newsService = $this->getServiceLocator()->get('News\Service\NewsService');
                $newsService  ->save($news);
                $variables ['success']=true;
            }
        }


        return new ViewModel($variables);
    }

}
