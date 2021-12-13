<?php

namespace Drupal\hello_velir\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Controller\ControllerBase;

/**
 * This is our controller.
 */
class HelloVelirController extends ControllerBase {
    public function fistContent() {
        $data['#markup'] =t('Hello, my name is Pedro');
        $data['#cache']['max-age'] = 0;
        $data['#attached']['library'] = ['module_hero/hero-query'];
        return $data;

    }
    public function secondContent() {
        $options = array('done' => 'Hello, my name is Pedro');
        return new JsonResponse($options);
    }
    public function thirdContent() {
        $data['#markup'] =t('Hello, my name is Pedro');
        $data['#cache']['max-age'] = 0;
        $data['#attached']['library'] = ['module_hero/hero-query'];
        return $data;
    }
}