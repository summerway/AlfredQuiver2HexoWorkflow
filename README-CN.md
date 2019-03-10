# 概述
**Quiver**笔记  => `quiver2hexo`同步 => **Hexo** posts => 网站发布 

![](http://markdown.zengtuo.net/1552198456.png?imageMogr2/thumbnail/!70p)

## 同步
- 第一次同步，将**Quiver** markdown记录的笔记迁移到 **Hexo** _posts文件夹中 
- 同步之后被修改的文件同步至**Hexo** 

## 模拟
同步完成后启动HEXO本地服务，查看同步效果
![](http://markdown.zengtuo.net/1552199336.png?imageMogr2/thumbnail/!70p)

## 发布部署
在同步完成后部署网站

## 回滚
- 支持回滚最近一次的同步操作
- 支持回滚最近一次的发布操作

# 如何使用
## 下载
[workflow下载地址](http://github.com/summerway/AlfredQuiver2HexoWorkflow/quiver2hexo.alfredworkflow);

##  前期准备
- 将`hexo_path/source/_post`目录下的markdown文件导入**Quiver**中，或者做好备份，**脚本会清空该目录**
- 给发布笔记加上特定标签，默认是`relHexo`,当然该标签不会出现在**Hexo**。
- 将文章加上`<!-- more -->`来精确控制文章的摘要预览,比如这篇文章就是在这个段落的末尾添加了该标志，所以本文在首页的预览就会显示到这个段落为止。
![](http://markdown.zengtuo.net/1552197294.png?imageMogr2/thumbnail/!70p)

## 配置
第一次执行时, 会生成`.env`配置，请填写相关环境变量。
![](http://markdown.zengtuo.net/1552197683.png?imageMogr2/thumbnail/!70p)

## 命令
| 命令      | 描述  | 默认快捷键 |
| :------:  | :-----:  | :-----:  |
| server  | 同步完成后启动HEXO本地服务 | `command` + `shift` + `s` |
| deploy | 同步完成后部署网站 | `command` + `shift` + `d` |
| rollback | 回滚最近一次的同步操作 | - |
| rollback deploy | 回滚最近一次的部署操作 | - |


# 遇到问题
- 如何在执行完bash命令后启动hexo
- bash如何读取文件的变量
- bash如何去除双引号
