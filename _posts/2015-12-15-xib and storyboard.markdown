---
layout: post
title: xib和storyboard的使用
date: 2015-12-15 23:32:54
tags: objective-c
---
#xib和storyboard的使用
###UI布局是每个ios开发者必须学会使用的技能之一，而Autolayout是一种可以简化代码的一种UI布局方式。
* 先用Autolayout设置一些简单的布局
3个色块，都距离顶部100，高度相同都为100，宽度相同，距离左面和右面都是30;

**首先先拖入一个View:**
[1]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-14-下午4.31.40.png
**然后按住option可以快速脱出另外两个色块:**
[2]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-14-下午4.33.05.png
**在xib或者storyboard的视图窗口，有四个按键**
[3]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-14-下午4.34.32.png
**第二按钮给选中多个按钮一起添加越是，第三个是单个约束，第四个是更新或者删除约束。
在xib或者storyboard的视图窗口，下面还有一个按键，但是建议初学者不要动用这个按钮：**
[4]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-14-下午4.40.10.png
**这是初始状态，代表你的约束适用于所有的机型，你还可以根据选中的框，来决定你的约束会适用哪些机型。我们这里使用的是所有机型通用的约束。**

**接下来  我们给三个色块添加约束：**

* 选中三个色块，添加共同约束，距离上面100，左右面都是30.
[5]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-20-下午8.06.30.png
* 设置三个色块等宽，高度为100
[6]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-20-下午8.14.50.png
* 然后我们按住command+option+”=”更新他们的位置
* 运行后可以看到横屏和竖屏的显示情况
[7]:http://blog.olesee.org/wp-content/uploads/2015/12/Simulator-Screen-Shot-2015年12月20日-下午8.17.41.png
[8]:http://blog.olesee.org/wp-content/uploads/2015/12/Simulator-Screen-Shot-2015年12月20日-下午8.17.53-700x394.png
我们这里的原则是确定一个控件的x.y.height.width。如果多设或者少设导致不确定他的位置，会有红色的错误提醒你设置。
###那么我们如何在一个xib或者storyboard上添加自己写好的view。

只要在xib上拖出一个view，然后在他得class上关联到你自定义的View里即可。
[9]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-20-下午8.24.14.png
###在xib中还有利用键值编码在runtime的时候修改一个控件的属性。
[10]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-20-下午8.26.06.png
平常我们需要我们需要先把控件关联到.m里，然后用代码实现修改self.buttonlayer.cornerRadius = 8，使用它的时候仅需要把这个控件的属性和对应的值写入即可
[11]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-20-下午8.27.01.png
###如果我们自定义一个xib，需要怎样用代码使用它
```
[[NSBundle mainBundle] loadNibNamed:@”你的xib名字” owner:self options:nil][0];
```
它取出来会是一个数组，其实第一个就是这个xib视图
###如果我们只是想拖控件，但是又想用代码设置它的位置，往往修改半天，却不能修改他的位置，这是因为我们没有关闭aotulayout
[12]:http://blog.olesee.org/wp-content/uploads/2015/12/屏幕快照-2015-12-20-下午8.38.29.png
