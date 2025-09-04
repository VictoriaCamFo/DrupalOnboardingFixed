<?php

declare(strict_types=1);

namespace Drupal\custom_hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello message' block.
 *
 * @Block(
 *   id = "custom_hello_message_block",
 *   admin_label = @Translation("Hello message (custom_hello)"),
 *   category = @Translation("Custom")
 * )
 */
final class HelloMessageBlock extends BlockBase {

  /**
   * Default block configuration.
   */
  public function defaultConfiguration(): array {
    return [
      'message' => $this->t('Hello from block!'),
    ];
  }

  /**
   * Block configuration form.
   */
  public function blockForm($form, FormStateInterface $form_state): array {
    $form['message'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Message'),
      '#default_value' => $this->configuration['message'] ?? '',
      '#required' => TRUE,
      '#description' => $this->t('Text to display in the block.'),
    ];
    return $form;
  }

  /**
   * Submit handler for the config form.
   */
  public function blockSubmit($form, FormStateInterface $form_state): void {
    $this->configuration['message'] = (string) $form_state->getValue('message');
  }

  /**
   * Block output.
   */
  public function build(): array {
    return [
      '#type' => 'markup',
      '#markup' => $this->configuration['message'],
    ];
  }
}