## magic-quotes-gpc-emulator

**magic-quotes-gpc-emulator** は、PHP の `magic_quotes_gpc` 機能をエミュレートするライブラリです。

このライブラリを使用することで、古いコードを最新の PHP バージョンに移行する際に、`magic_quotes_gpc` の依存関係を解消することができます。

### 使い方

```php
use Takapi86\MagicQuotesGpcEmulator;

// エミュレータを初期化します
$emulator = new MagicQuotesGpcEmulator();

// エミュレータを適用します
$emulator->apply();

// $_GET, $_POST, $_COOKIE, $_REQUEST の値はエスケープされます
echo $_GET['foo']; // 'fo\'o'
```

### 詳細

- `apply()` メソッドを呼び出すと、`$_GET`, `$_POST`, `$_COOKIE`, `$_REQUEST` の値が `addslashes()` 関数でエスケープされます。
- `isApplied()` メソッドは、エミュレータが適用済みかどうかを判定します。
- `isMagicQuotesGpcEnabled()` メソッドは、`magic_quotes_gpc` 機能が有効かどうかを判定します。

### 注意点

- このライブラリは、`magic_quotes_gpc` をエミュレートするためのものであり、完全な互換性を保証するものではありません。
- 古いコードを最新の PHP バージョンに移行する際には、`magic_quotes_gpc` の依存関係を解消するために、このライブラリを使用するだけでなく、コードの修正も必要となる場合があります。

### ライセンス

このライブラリは、MIT ライセンスの下で配布されています。

### 貢献

このライブラリへの貢献は歓迎されます。
