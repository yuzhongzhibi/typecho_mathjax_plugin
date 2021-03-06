# typecho_mathjax_plugin
一个基于MathJax 3的typecho的数学公式支持插件，支持latex语法。
## 概述
本插件原作者为[mutoo](https://blog.mutoo.im)，其所作插件[typecho-mathjax插件](https://blog.mutoo.im/mathjax-plugin/)自2013年来已经不更新了，且只支持MathJax 2，现在MathJax已经更新到了第3版了，两者的组件工作方式差别很大，于是我对这个插件进行了一些修改，给大家分享一下。
## 新特性：
- 支持MathJax 3
- 修改标识符仅支持`$`、`$$`，去除了对`()`、`[]`的识别，避免对文章其他内容造成影响
- 修改公式默认大小为80%
- 开启全局字体缓存
## 使用方法
下载插件并解压，将`MathJax.php`放到Typecho的`usr/plugins/`目录下，在Typecho后台中启用插件。
使用显示可查看我的博客[Typecho数学公式插件](https://www.yuzhongzhibi.site/index.php/archives/516)
