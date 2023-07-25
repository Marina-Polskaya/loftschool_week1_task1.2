<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Task 1.2</title>
    </head>
    <body>
        <div>
            <?php
            /*
1. На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками. 
   Сколько рисунков, выполненных красками, на школьной выставке?
2. Описать и вывести условия, решение этой задачи на PHP. Все предоставленные числа из пункта 1 должны быть указаны в константах.
             */
            define('ALL_PICTURES', 80);
            define('PICTURES_BY_MARKERS', 23);
            define('PICTURES_BY_PENCIL', 40);
            
            $paintPictures = ALL_PICTURES - (PICTURES_BY_MARKERS + PICTURES_BY_PENCIL);
            
            define('PAINT_PICTURES', $paintPictures);
            echo "На школьной выставке ".PAINT_PICTURES." рисунков, выполненных красками.<br />";
            ?>
        </div>
    </body>
</html>
