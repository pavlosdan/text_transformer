<?php

namespace Drupal\text_transformer\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the TextLimit constraint.
 */
class TextLimitValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($value, Constraint $constraint) {
    // Check if the value exceeds 255 characters.
    if (strlen($value) >= 255) {
      // The value exceeds 255 characters, so a violation, aka error, is applied.
      $this->context->addViolation($constraint->exceedsLimit, ['%value' => $value, '%limit' => 255]);
    }
  }

}