# coachtech(フリマアプリ)

## 作成した目的
coachtechブランドのアイテムを出品する。

## 機能一覧
* 会員登録機能
* ログイン機能
* ログアウト機能
* マイページ機能
* ユーザー購入商品一覧取得機能
* ユーザー出品商品一覧取得機能
* プロフィール変更機能
* 商品一覧取得機能
* 商品お気に入り一覧取得機能
* 商品詳細取得機能
* お気に入り商品登録機能
* お気に入り商品削除機能
* 商品コメント追加機能
* 商品出品機能
* クレジット決済機能
* バリデーション機能

## 機能概要
### 商品一覧ページ
おすすめタブでは商品全件を表示し、マイリストタブではお気に入り商品のみを表示します。  
上部真ん中の検索バーで商品を検索することができます。  
商品の画像をクリックすると商品詳細ページに遷移します。
![スクリーンショット 2025-01-09 021737](https://github.com/user-attachments/assets/6bd00f9c-29b8-4919-8ebd-1d19704543ef)
購入済みの商品は商品名の下にSOLD OUTが表記されます。
![スクリーンショット 2025-01-09 022457](https://github.com/user-attachments/assets/10b1e4cf-6395-44d0-8fc2-41701bddbb1d)

### 会員登録ページ
ユーザー名、メールアドレス、パスワードを入力し、新規利用者ユーザーの作成を行います。
![スクリーンショット 2025-01-09 021752](https://github.com/user-attachments/assets/55ba6643-17f0-4aea-a0a6-a497d8b6c724)

### ログインページ
メールアドレス、パスワードを入力し、ログインを行います。
![スクリーンショット 2025-01-09 021807](https://github.com/user-attachments/assets/d7ec8278-8183-4651-9e45-e8ae055bbda9)

### 商品詳細ページ
商品の詳細を表示します。  
☆でお気に入り登録を行い、💬を押下するとコメントページに遷移します。  
購入するボタンを押下すると購入ページに遷移します。
![スクリーンショット 2025-01-09 021835](https://github.com/user-attachments/assets/96593177-7b68-45a7-ba26-ea9c3fa9ec7d)
既に購入されている商品は購入済みボタンになり、購入ページには遷移しません。
![スクリーンショット 2025-01-09 022315](https://github.com/user-attachments/assets/48095c9f-b9e8-42ac-9d0b-a2e72f9a92b5)
出品者本人が詳細ページを表示した場合も同様に購入ページには遷移しません。
![スクリーンショット 2025-01-09 030240](https://github.com/user-attachments/assets/57b25232-10ba-41eb-a56a-9f853bcfe34b)

### コメントページ
商品コメントの閲覧、作成を行います。  
該当商品の最新のコメント3件までを表示します。
![スクリーンショット 2025-01-09 022559](https://github.com/user-attachments/assets/24c9c04a-da15-4f40-acf6-985782ea44f3)
同一ユーザーが同一商品に複数のコメントを送信することはできません。
![スクリーンショット 2025-01-09 022657](https://github.com/user-attachments/assets/9e2942c0-f028-4a07-ad69-04af4ce78995)

### 購入ページ
支払い金額、支払い方法、配送先を表示し、購入するボタンを押下すると決済ページに遷移します。  
支払い方法はクレジット決済のみの為、変更はできません。  
配送先は変更するを押下すると住所変更ページに遷移します。
![スクリーンショット 2025-01-09 022222](https://github.com/user-attachments/assets/21d63420-0a11-4590-a227-4f622ee0a3f0)
住所設定をしていない場合は購入するボタンを押下することはできません。
![スクリーンショット 2025-01-09 022207](https://github.com/user-attachments/assets/345613df-2f82-4003-b48c-f73567e8f37c)

### 住所変更ページ
郵便番号、住所、建物名を入力し、プロフィール情報を作成、更新することができます。
![スクリーンショット 2025-01-09 031949](https://github.com/user-attachments/assets/65c55fe6-edb6-48e1-beca-10348919d332)

### 決済ページ
カード番号などを入力することで事前決済が行えます。
![スクリーンショット 2025-01-09 022246](https://github.com/user-attachments/assets/b69438dd-418f-4e25-a161-40296150a28e)

### マイページ
ユーザー名、プロフィール画像を表示します。  
初期状態のプロフィール画像未設定時にはデフォルトでアイコン画像を表示します。  
出品した商品タブではログインユーザーが出品した商品一覧を表示し  
購入した商品タブではログインユーザーが購入した商品一覧を表示します。  
プロフィールを編集ボタンを押下するとプロフィール編集ページに遷移します。
![スクリーンショット 2025-01-09 022128](https://github.com/user-attachments/assets/12a436ac-1f32-488b-a119-414e520a3650)
![スクリーンショット 2025-01-09 022331](https://github.com/user-attachments/assets/52cb5445-92e8-41c3-9708-fc402205ce03)

### プロフィール編集ページ
プロフィール画像、ユーザーネーム、郵便番号、住所、建物名を入力し、プロフィールの作成、更新が行えます。
![スクリーンショット 2025-01-09 022146](https://github.com/user-attachments/assets/ee96ceda-2e98-4dc9-9cbe-bc74c3d0e1da)

### 出品ページ
商品画像、カテゴリー、商品の状態、商品名、商品の説明、販売価格を入力し、商品を出品することができます。  
カテゴリーは複数選択することができます。
![スクリーンショット 2025-01-09 022402](https://github.com/user-attachments/assets/7ca3406a-769f-42ac-b059-703050c3495d)


## 環境構築
### Dockerビルド

　1. `git clone git@github.com:YamaguchiTomoaki/Rese.git`  
　2. DockerDesktopアプリを立ち上げる  
　3. `docker compose up -d --build`  
　*MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください  

 ### Laravel環境構築

　1. `docker compose exec php bash`  
　2. `composer install`  
　3. 「.env.example」ファイルを「.env」ファイルに命名を変更。又は、新しく「.env」ファイルを作成  
　4. 「.env」ファイルに以下の環境変数を追加  

    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel_db
    DB_USERNAME=laravel_user
    DB_PASSWORD=laravel_pass  

    MAIL_HOST=mail  

    STRIPE_PUBLIC_KEY=pk_test_51PynoNArnwtide5IJsCGJF8TDeGl3LXADSp8TmglZ05vApv9DYjEKEyjxxgAuNqoauK2n36onGrEyT4H3xj6m4WK00SEyEWIj3  
    STRIPE_SECRET_KEY=sk_test_51PynoNArnwtide5IFUtjQxzTXFlVmLJ1wohv1hHMZDbzOzwTw4Bjv6wPjv5gQYUfKEGDaYvnHww3c2cgYXUHxSJV00Qa19haTL  
    
　5. アプリケーションキーの作成
 
    php artisan key:generate

  6. マイグレーションの実行

    php artisan migrate

  7. シーディングの実行

    php artisan db:seed

　※上記を全て実行してもサイトにアクセスできない場合  
　　storageディレクトリの書き込み権限を変更  
    
    sudo chmod -R 777 src/storage/

## 作成済みのユーザー

### ユーザー1
#### ユーザーネーム：出品者太郎
#### メールアドレス：seller@gmail.com
#### パスワード：seller_test1

### ユーザー2
#### ユーザーネーム：出品者次郎
#### メールアドレス：seller2@gmail.com
#### パスワード：seller_test2


## 使用技術(実行環境)
* PHP 8.2.27
* Laravel 10.48.23
* MySQL 8.0.26

## テーブル設計
![スクリーンショット 2025-01-09 024432](https://github.com/user-attachments/assets/7d1de532-00a8-43b6-bc78-a6004664361e)
![スクリーンショット 2025-01-09 024450](https://github.com/user-attachments/assets/3cbad06a-e220-473d-9d72-0a093ecfc9aa)
![スクリーンショット 2025-01-09 024500](https://github.com/user-attachments/assets/9696f928-f493-489e-8ced-098b2989d66d)


## ER図
![スクリーンショット 2025-01-09 013511](https://github.com/user-attachments/assets/3b4414b3-bca8-4347-9ff7-79b130b1c83c)

## URL
* 開発環境：http://localhost/
* phpMyAdmin：http://localhost:8080/
* 本番環境：http://54.95.250.249/
