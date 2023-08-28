<?php

namespace Drupal\button_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Render\Markup;

class ButtonController extends ControllerBase {
    public function mybutton(){
        // create a button element with an id and onclick attribute
        $button = [
            '#type'=>'html_tag',
            '#tag'=>'button',
            '#value'=>$this->t('click this button'),
            '#attributes'=>[
                'id'=>'mybutton',
                'onclick'=>$this->saysWelcome(),
            ]
            ];
            return $button;
        // Create a script element that defines sayWelcome function
       

        

}
public function saysWelcome(){
    return "alert('Button Clicked')";
}
}