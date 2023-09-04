<?php

/* @file
contains '\Drupal\links_example\Controller\LinksExampleController */
namespace Drupal\links_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\Response;

class LinksExampleController extends ControllerBase {
    public function links(){
        // link to /admin/structure/block
        $url1 = Url::fromRoute('block.admin_display');
        $link1 = Link::fromTextAndUrl(t('Go to block admin display'),$url1);
        $list[]=$link1;

        // link to /admin/content
        $url2 = Url::fromRoute('system.admin_content');
        $link2 = Link::fromTextAndUrl(t('Go to system admin content'),$url2);
        $list[]=$link2;

        // link to /admin/people
        $url3 = Url::fromRoute('entity.user.collection');
        $link3 = Link::fromTextAndUrl(t('Go to entity user collection'),$url3);
        $list[]=$link3;

        // link to homepage
        $url4 = Url::fromRoute('<front>');
        $link4 = Link::fromTextAndUrl(t('Go to front page of drupal'),$url4);
        $list[]=$link4;

        // external link to drupal.org
        $url5 = Url::fromUri('https://www.drupal.org/');
        $link_options = [
            'attributes'=>[
                'target'=>'_blank',
                'title'=>'Link to drupal homepage'
                ]   
            ];
        $url5->setOptions($link_options);
        $link5 = Link::fromTextAndUrl(t('Go to the drupal homepage'),$url5);
        $list[]=$link5;

        // mount the render output
        $output['links_example']=[
            '#theme'=>'item_list',
            '#items'=>$list,
            '#title'=> $this->t('Links Example Module Developed for Customer')
        ];
        return $output;
    }
}