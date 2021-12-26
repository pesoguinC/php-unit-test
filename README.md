# php-unit-test


## 1. ビルド
```
docker-compose up --build
```

### 2. テスト実行
```
docker-compose exec apach bash -c "vendor/bin/phpunit SampleTest.php"
```

## コンテナに入る場合
```
docker-compose exec apach bash
```