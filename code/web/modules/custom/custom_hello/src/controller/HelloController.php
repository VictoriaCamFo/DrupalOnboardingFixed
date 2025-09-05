<?php

declare(strict_types=1);

namespace Drupal\custom_hello\Controller;

use Drupal\Core\Controller\ControllerBase;

final class HelloController extends ControllerBase {
  public function hello(): array {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello Drupal World!'),
    ];
  }
}