HDSlider v. 0.4
========
Паралакс-слайдер для Yii.
-------------------------
В данный момент находится в разработке.
В последующем модуль будет портирован на Yupe.

Установка:

 1. Скопируйте папку с модулем в /protected/modules
 2. Добавте таблицы в БД с помощью hdslider_install.sql
 3. Подключите модуль в файле конфигурации :

```
'modules' => array(
    ....
    'hdslider',
    ....
)
```
 Вывод слайдера:
 
 Вывод слайдера осуществляется через виджет.
 Пример:
 
 ```
<?php $this->widget('application.modules.hdslider.widgets.HDSliderWidget',array('name' => 'Test')); ?>
 ```

Где `name` - уникальное имя слайдера


Исходники слайдера взяты с <http://tympanus.net/codrops/2012/03/15/parallax-content-slider-with-css3-and-jquery/>