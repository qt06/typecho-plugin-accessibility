# typecho-plugin-accessibility
accessibility for typecho


## 使用方法

1. 将`Acc`文件夹上传到`usr/plugins/`目录
2. 后台插件管理，启用即可

## 说明

typecho 默认模版本身的可访问性做的已经是不错的了。该插件只是针对读屏软件的操作习惯做了一些适当的优化处理。具体的改变有：

1. 处理了锚链接的聚焦问题
2. 给部分路标元素加了`aria-label`属性
