# Gitlab notifications with Line

## Install package with Composer

```sh
$ cd service/


service/
|-composer.json
|-index.php
```

```sh
$ composer install

OR

$ composer require pitchanon/line
$ composer require pitchanon/gitlab-notify
```

## Run the image

- Gitlab
- PHP

```bash
$ docker-compose up -d
```

## PHP

```php
$line = new Pitchanon\GitlabNotify\GitlabNotify();
$line::Config(["token" => "xxxxx"]);
```

```php
res($line::Notify($data));

```

```php
$line::Notify("{\"object_kind\":\"push\",\"event_name\":\"push\",\"before\":\"4f6cd4ee61fb8415729db734bc54abd153e60503\",\"after\":\"5da90a158b59f782083a167347c1ba1c7e216d58\",\"ref\":\"refs/heads/master\",\"checkout_sha\":\"5da90a158b59f782083a167347c1ba1c7e216d58\",\"message\":null,\"user_id\":1,\"user_name\":\"Administrator\",\"user_username\":\"root\",\"user_email\":\"admin@example.com\",\"user_avatar\":\"https://www.gravatar.com/avatar/e64c7d89f26bd1972efa854d13d7dd61?s=80\u0026d=identicon\",\"project_id\":1,\"project\":{\"id\":1,\"name\":\"test.local\",\"description\":\"\",\"web_url\":\"http://gitlab.localhost/root/test.local\",\"avatar_url\":null,\"git_ssh_url\":\"git@gitlab.localhost:root/test.local.git\",\"git_http_url\":\"http://gitlab.localhost/root/test.local.git\",\"namespace\":\"root\",\"visibility_level\":20,\"path_with_namespace\":\"root/test.local\",\"default_branch\":\"master\",\"ci_config_path\":null,\"homepage\":\"http://gitlab.localhost/root/test.local\",\"url\":\"git@gitlab.localhost:root/test.local.git\",\"ssh_url\":\"git@gitlab.localhost:root/test.local.git\",\"http_url\":\"http://gitlab.localhost/root/test.local.git\"},\"commits\":[{\"id\":\"5da90a158b59f782083a167347c1ba1c7e216d58\",\"message\":\"Update README.md #3\",\"timestamp\":\"2018-11-06T11:13:47Z\",\"url\":\"http://gitlab.localhost/root/test.local/commit/5da90a158b59f782083a167347c1ba1c7e216d58\",\"author\":{\"name\":\"Administrator\",\"email\":\"admin@example.com\"},\"added\":[],\"modified\":[\"README.md\"],\"removed\":[]}],\"total_commits_count\":1,\"repository\":{\"name\":\"test.local\",\"url\":\"git@gitlab.localhost:root/test.local.git\",\"description\":\"\",\"homepage\":\"http://gitlab.localhost/root/test.local\",\"git_http_url\":\"http://gitlab.localhost/root/test.local.git\",\"git_ssh_url\":\"git@gitlab.localhost:root/test.local.git\",\"visibility_level\":20}}");
```

-----

Print console logs.

```bash
$ docker exec -it gitlab-line_php_1 tail -f debug.log 
```
