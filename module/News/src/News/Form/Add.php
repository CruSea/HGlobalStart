<?php
/**
 * Created by PhpStorm.
 * User: free
 * Date: 3/26/2016
 * Time: 12:39 AM
 */

namespace News\Form;


use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Stdlib\Hydrator\ClassMethods;

class Add extends Form
{
    public function __construct()
    {

        parent::__construct('add');
        $this->setHydrator(new ClassMethods());


        $title = new Element\Text('title');
        $title->setLabel('Title');
        $title->setAttribute('class', 'form-control');

        $description = new Element\Text('description');
        $description->setLabel('Description');
        $description->setAttribute('class', 'form-control');

        $content = new Element\Textarea('content');
        $content->setLabel('Content');
        $content->setAttribute('class', 'form-control');

        $image = new Element\File('image');
        $image->setLabel('Image');
        $image->setAttribute('class', 'form-control');

        $Published_date = new Element\DateSelect('Published_date');
        $Published_date->setLabel('Publish date');
        $Published_date->setAttribute('class', 'form-control');

        $submit = new Element\Submit('submit');
        $submit->setValue('Add News');
        $submit->setAttribute('class', 'btn btn-primary');

        $this->add($title);
        $this->add($image);
        $this->add($description);
        $this->add($content);
        $this->add($Published_date);
        $this->add($submit);
    }
}