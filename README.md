# 一、界面
![在这里插入图片描述](https://img-blog.csdnimg.cn/2020043020281883.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM2MjYwOTc0,size_16,color_FFFFFF,t_70)


![在这里插入图片描述](https://img-blog.csdnimg.cn/20200430180954755.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM2MjYwOTc0,size_16,color_FFFFFF,t_70)
![在这里插入图片描述](https://img-blog.csdnimg.cn/20200430181041235.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzM2MjYwOTc0,size_16,color_FFFFFF,t_70)
# 二、说明
## 1、前台（portal）
配置 app.js 文件。
```javascript
globalData:
{
    appid: "小程序APPID",
    api: "https://自己公众号第三方管理的域名/app/ewei_shopv2_api.php?i=对接公众号的ID",
    approot: "https://自己公众号第三方管理的域名/addons/ewei_shopv2/",
    userInfo: null
}
```
然后下载微信开发者工具填如 appid（注意 appid 和 app.js 还有人人后台端要统一）！

一定要填写授权域名以 https 开通可信证书证书 ts1.2。

## 2、后台（console）
### ① 安装说明

1、PHP5.4+MYSQL5.1 以上，PHP 必须开启 openssl 扩展。

2、此源码必须安装在一级目录，不支持二级目录！

3、使用条件：备案域名（不支持IP）+ 认证服务号。

### ② 安装步骤

1、上传完毕后打开 `http://你的域名/`。

2、然后按照步骤填写信息安装即可。

3、安装完成打开你的网址 `http:// 你的域名`，登陆你安装时的密码即可。

# 三、其他
Please contact [Wei Yuxuan](https://blog.csdn.net/qq_36260974) for detail.
