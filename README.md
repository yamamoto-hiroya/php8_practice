## 概要

こちらの記事で用意したphp8の挙動を試せるdocker環境です
https://qiita.com/drafts/23d79e43c87eade20981/edit

## 使い方

```bash
git clone xxx
cd /path/to/xxx
docker pull phpdockerio/php80-fpm
docker-compose up -d
docker exec -it php8 bash

// 以下docker内
cd /var/www/html/
php sample1_match.php
php sample2_match.php
php sample3_match.php

// 終わる時
exit
docker-compose stop
```

アプリケーションルートが/var/www/htmlにマウントされているのでローカルマシンでファイルを作成すればコンテナ内に反映されます。
