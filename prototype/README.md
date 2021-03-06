### 解释
通过复制已经存在的对象来创建新对象。

### 适用范围
有的时候创建一个对象有很多步骤才算是完成一个完整的创建过程，我要再创建一个的话，还得从头开始，不如复制，使用原型模式实现。

### 代码示例
首先创建`Prototype`接口类
```php
<?php

namespace prototype;

interface IPrototype
{
    public function copy();
}
```

创建`Demo`类实现`Prototype`
```php
<?php

namespace prototype;

class Demo implements IPrototype
{
    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function copy()
    {
        return clone $this;
    }
}
```

执行
```php
<?php

require_once "../init.php";

$demo = new \prototype\Demo();
$demo->setState('open');
$demo1 = $demo->copy();
echo $demo1->getState();    //输出open
```

深拷贝与浅拷贝请参考：
[深拷贝与浅拷贝的区别](https://enochzg.github.io/blog/2018/05/07/%E6%B7%B1%E6%8B%B7%E8%B4%9D%E4%B8%8E%E6%B5%85%E6%8B%B7%E8%B4%9D%E7%9A%84%E5%8C%BA%E5%88%AB/)