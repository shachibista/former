<?php
/**
 * Hidden
 *
 * Class for hidden fields
 */
namespace Former\Fields;

use \Form;

class Hidden extends \Former\Field
{
  /**
   * Easier arguments order for hidden fields
   *
   * @param string $type       hidden
   * @param string $name       Field name
   * @param string $value      Its value
   * @param array  $attributes Attributes
   */
  public function __construct($type, $name, $value, $attributes)
  {
    parent::__construct($type, $name, '', $value, $attributes);
  }

  /**
   * Outputs a hidden field
   *
   * @return string An <input type="hidden" />
   */
  public function render()
  {
    return $this->app['former.laravel.form']->hidden($this->name, $this->value, $this->attributes);
  }
}
