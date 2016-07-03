# yii2-http2-server-push-demo

Demo app for [yii2-http2-server-push](https://github.com/DevGroup-ru/yii2-http2-server-push).

## How to run

Deploy it to HTTP/2 enabled web-server with server push support.

Note: nginx currently does not support server push.

## Vagrant

We have php7-apache vagrant here in repository, but it needs to be configured for http/2 protocol enabled.

In brief:

```
vagrant up
vagrant ssh
sudo a2enmod http2
```

Then edit vhosts files as it is described in article [How to enable HTTP/2 in apache](https://icing.github.io/mod_h2/howto.html).

## How to test

The best tool for testing is `nghttp -uv https://yii2-http2-server-push.demo/`.