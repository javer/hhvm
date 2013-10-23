<?php

/**
 * ResourceBundle class
 *
 * ResourceBundle supports direct access to the data through array access pattern and iteration via foreach,
 * as well as access via class methods. The result will be PHP value for simple resources and ResourceBundle
 * object for complex ones. All resources are read-only.
 */
class ResourceBundle implements Traversable
{
  /**
   * Creates a resource bundle.
   *
   * @param string $locale     Locale for which the resources should be loaded (locale name, e.g. en_CA).
   * @param string $bundlename The directory where the data is stored or the name of the .dat file.
   * @param bool   $fallback   Whether locale should match exactly or fallback to parent locale is allowed.
   *
   * @return ResourceBundle
   */
  public function __construct($locale, $bundlename, $fallback = false)
  {
  }

  /**
   * Get the number of elements in the bundle.
   *
   * @return int Number of elements in the bundle.
   */
  public function count()
  {
    return 0;
  }

  /**
   * Creates a resource bundle.
   *
   * @param string $locale Locale for which the resources should be loaded (locale name, e.g. en_CA).
   * @param string $bundlename The directory where the data is stored or the name of the .dat file.
   * @param bool $fallback Whether locale should match exactly or fallback to parent locale is allowed.
   *
   * @return ResourceBundle
   */
  public static function create($locale, $bundlename, $fallback = false)
  {
    return new ResourceBundle($locale, $bundlename, $fallback);
  }

  /**
   * Get error code from the last function performed by the bundle object.
   *
   * @return int Error code from last bundle object call.
   */
  public function getErrorCode()
  {
    return intl_get_error_code();
  }

  /**
   * Get error message from the last function performed by the bundle object.
   *
   * @return string Error message from last bundle object's call.
   */
  public function getErrorMessage()
  {
    return intl_get_error_message();
  }

  /**
   * Get the data from the bundle by index or string key.
   *
   * @param string|int $index Data index, must be string or integer.
   *
   * @return mixed
   */
  public function get($index)
  {
  }

  /**
   * Get available locales from ResourceBundle name.
   *
   * @param string $bundlename Path of ResourceBundle for which to get available
   *                           locales, or empty string for default locales list.
   *
   * @return array The list of locales supported by the bundle.
   */
  public function getLocales($bundlename)
  {
    return array();
  }
}
