<?php

namespace Drupal\text_transformer\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks that the submitted value is a unique integer.
 *
 * @Constraint(
 *   id = "TextLimit",
 *   label = @Translation("Text Limit", context = "Validation"),
 *   type = "string"
 * )
 */
class TextLimit extends Constraint {

  // The message that will be shown if the value exceeds the limit.
  public $exceedsLimit = '%value is bigger than %limit characters.';

}
