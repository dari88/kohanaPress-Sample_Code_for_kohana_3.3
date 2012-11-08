kohanaPress for kohana 3.3
==========================
**The kohanaPress is WordPress style blog system driven by kohana. Since it is filled with elements for building a blog site, kohanaPress is suitable for beginners to study PHP and kohana.**

- Demo site: http://bit.ly/KSJ8Hc

Install
--------
1. Make `kohana` folder under document root.
2. Install kohana 3.3 under `kohana` folder.
3. Download kohanaPress.
4. Copy `application` folder under `kohana` folder.
5. Copy `paginator` and `zend` folder under `kohana/modules` folder.
6. Copy `includes` folder under document root `/` .
7. Make `uploads` folder under document root `/` . Case Linux, chmod 757.
8. Create tables in the `kohana` MySQL database using `application/classes/Model/Test12/kohanaPress.sql` .
9. Edit `application/config/database.php` to fill in username and password for MySQL.
10. ImageMagick and Imagick are needed.
11. Mail server is needed.

Test
----
Acsess: http://localhost/kohana/test12

You can learn many things about creating a blog site.
-----------------------------------------------------

1. application/bootstrap.php

 - L25: default timezone
 - L93: base url
 - L120,121: enable modules
 - L130: default route
 - L137: enable HTMLPurifier's auto loading
 - L144: Cookie settings

2. application/config/ folder

 - `session.php`: settings for the session (using only the `native`)
 - `auth.php`: specify Auth driver -> `application/classes/Auth/Wplogin.php`
 - `database.php`: settings for the Database
 - `test12.php`: e-mail settings for users, list of header photos
 - `wp-js-css.php`: management of assets such as js, css. js and css are loaded by name
  - see -> `application/classes/Controller/Loadjs.php,Loadcss.php`
   - these loader has a function of binding and compression

3. User registration

 - `application/classes/Controller/Test12/Register.php`
 - `application/classes/Model/Test12/Register.php`
 - validate user name, e-mail
 - issue a password, registration to the database, send a password by e-mail to user

4. User authentication

 - how to make Auth driver -> `application/classes/Auth/Wplogin.php`
  - password genarator, hashed password, check password, login processing

5. Blog system

 - configuration of the top page: `application/classes/Controller/Test12.php`
  - nested structure of View
  - make a list of articles: `application/classes/Contents/Toppage`
   - make a snippet of recent posts title
   - using the Paginator
 - how to handle the database: `application/classes/Model/Test12/Posts.php`
 - post article: `application/classes/Controller/Test12/Postnew.php`
  - how to use TinyMCE, haw to use HTMLPurifier
  - measures of XSS attack, SQL injection, and DoS attack
 - article management: `application/classes/Controller/Test12/Edit.php`

6. Upload images

 - `application/classes/Controller/Test12/Upload.php`
 - `application/classes/Controller/Test12/Uploadify.php`
  - how to use jQuery Uploadify
  - how to use Imagick (ImageMagick)
  - how to identify the user who uploaded images
  - how to save images to the database in binary format
  - determination of malicious false data
  - management of images
  - how to use jQuery ThickBox
 - `application/classes/Controller/Test12/Mediaview.php`
  - how to write HTTP response in order to return the image data according to the HTTP request

**//by dari88**
