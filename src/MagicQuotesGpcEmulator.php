<?php

namespace Takapi86;

class MagicQuotesGpcEmulator {
  public function apply() {
    if ($this->isMagicQuotesGpcEnabled()) {
      return;
    }

    $this->addslashesRecursive($_GET);
    $this->addslashesRecursive($_POST);
    $this->addslashesRecursive($_COOKIE);
    $this->addslashesRecursive($_REQUEST);

    define('MagicQuotesGpcEmulatorApplied', true);
  }

  private function addslashesRecursive(&$value)
  {
    if (is_array($value)) {
        foreach ($value as $key => &$item) {
            $this->addslashesRecursive($item);
        }
    } elseif (is_object($value)) {
        $value = get_object_vars($value);
        $this->addslashesRecursive($value);
    } else {
        $value = addslashes($value);
    }
  }

  public function isApplied() {
    return defined('MagicQuotesGpcEmulatorApplied');
  }

  public function isMagicQuotesGpcEnabled() {
    if ($this->isApplied()) {
      return true;
    }
    if (!function_exists('get_magic_quotes_gpc')) {
      return false;
    }
    return get_magic_quotes_gpc();
  }
}
