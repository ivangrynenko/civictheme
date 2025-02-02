<?php

/**
 * @file
 * Theme settings form for CivicTheme theme.
 */

use Drupal\civictheme\CivicthemeSettingsFormManager;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
function civictheme_form_system_theme_settings_alter(&$form, FormStateInterface &$form_state) {
  $settings = \Drupal::classResolver(CivicthemeSettingsFormManager::class);
  $settings->form($form, $form_state);
}
