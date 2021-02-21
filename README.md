# blog

## Description
This is a CMS(Contents Management System）with simple features.
You can create, delete, and correct posts from the blog's manegement page:`postlist.php`.

## Requirements
- PHP 7.4
- MySQL 5.6
- HTML
- CSS

## Install
```
git clone https://github.com/kinpoko/blog.git
```

## Usage
This needs MySQL ,and this is not included in commom.php. So you need create it.
Create a database named `blog`:

``` 
CREATE TABLE post (
  id SERIAL,
  url TEXT,
  title TEXT,
  description TEXT,
  tag TEXT,
  content TEXT,
  datestamp DATE
);
```

and `commom.php`:
```PHP:commom.php
<?php
$dsn = 'mysql:dbname=***;host=***';
$user = '***';
$password = '***';

$pdo = new PDO($dsn, $user, $password);
?>
```

## Future features
- [ ] Tag list
- [ ] Comment
- [ ] Support for Markdown syntax
 
