<?php

namespace Takapi86;

class MagicQuotesGpcEmulator {
  public function apply() {
    $_GET = filter_var_array($_GET, FILTER_SANITIZE_MAGIC_QUOTES);
    $_POST = filter_var_array($_POST, FILTER_SANITIZE_MAGIC_QUOTES);
    $_COOKIE = filter_var_array($_COOKIE, FILTER_SANITIZE_MAGIC_QUOTES);
    $_REQUEST = filter_var_array($_REQUEST, FILTER_SANITIZE_MAGIC_QUOTES);
  }
}
