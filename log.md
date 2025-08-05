# アプリ作成記録
## エラー対処
### 初回localhost接続時に"暗号化キー"エラー発生

**詳細：**<br />
Laravelの .env ファイルに暗号化キー (APP_KEY) が 設定されていない<br />
**対処：**<br />
アプリケーションキーを作成
```bash
php artisan key:generate
```
.envファイル内に自動でキーが設定された
```
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=
```
