<?php



//echo '<tr><td colspan="4" style="font-weight: 700; text-align: center">' . $name_sub . '</td></tr>';
echo '		
<body>
<style>
font-family:  "Times New Roman" ;
}

table {
  width: 100%;
  border-collapse: collapse;
  
}

.page-break {
        page-break-before: always; /* или page-break-after: always; */
    }
.container {
    display: flex; /* Включаем Flexbox */
    width: 100%; /* Устанавливаем ширину контейнера */
}

.left-block, .right-block {
    width: 50%; /* Оба блока занимают по 50% ширины */
    padding: 20px; /* Отступы внутри блоков */
    box-sizing: border-box; /* Учёт отступов в общей ширине */
}
td {
   border: 1px solid black;
  padding: 4px;
  text-align: start;
  font-size: 12pt;
}
td {
  word-break: break-word;
}
th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f5f5f5;
}

</style>
</body>        
<br><br><br>
<div style=" font-size: 11pt;
    position: relative;
    text-align: right;

    line-height: 18pt"
">
<!-- Преамбула заявления -->
    Приложение № <br> К договору № <br> От</div>
    <br>
    <div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px;">
        УТВЕРЖДАЮ<br><strong>Заказчик</strong><br>Белорусский государственный университет<br>
        Проректор по экономике и материально-<br>техническому развитию
    </div>
    <div class="right-block" style="text-align: left; line-height: 18pt;">
        СОГЛАСОВАНО<br><strong>Подрядчик</strong><br>ООО «ИЗИСКОМ»<br><p>Директор</p>
    </div>
</div>
<div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px;">______________<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    <div class="right-block" style="text-align: left; line-height: 18pt;">______________А.В. Лукьянович<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    </div><br><br>  
<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>ТЕХНИЧЕСКОЕ ЗАДАНИЕ</strong> </div><br><br>
    <p style="font-size: 11pt; margin-left: 3%; margin-bottom: 5px;">1. Цель выполнения заказных работ: .<br>
2. Местоположение обследуемого объекта: .<br>
3. Технико-экономические показатели объекта обследования
</p>



<!-- Поля для заполнения данных о юр. лице -->

 <div style=" justify-content: center; margin-left: 3%;">
<table style="border-collapse: collapse; border: 1px solid black; width: 98%; margin-top: 0px; margin-bottom: 0;">
    <tr style="padding: 6px;">
        <td style=" text-align: center;">
            № п/п
        </td>
        <td style=" text-align: center;">
            Наименование показателя
        </td>
       <td style="text-align: center;">
            Значение показателя
        </td>
        </tr>
        
        <tbody>';


echo ' <tr>
        <td style = " width: 10%; text-align: center;">1</td>
        <td style = "width: 70%; text-align: left;">Категория сложности здания</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">2</td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Строительный объем, м.куб</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">10</td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Этажность</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">1</td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Высота здания, м</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">6</td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Высота этажа , м</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">1</td>
</tr>';
echo' </tbody></table>
<p style="font-size: 11pt; margin-bottom: 5px; margin-top: 5px;"> 4. Заказчик: Белорусский государственный университет<br>
5. Подрядчик: ООО «ИЗИСКОМ»<br>
6. Количество экземпляров технического заключения по результатам выполнения работ, необходимые<br>
Заказчику: 01 (один) на бумажном носителе.<br>
7. Перечень выполняемых работ по сбору исходных данных:</p>

 <table style="border-collapse: collapse; border: 1px solid black; width: 98%; ">
    <tr>
        <td style=" text-align: center;">
            № п/п
        </td>
        <td style=" text-align: center;">
            Наименование показателя
        </td>
       <td style="text-align: center;">
            Да/Нет(Категория сложности)
        </td>
        </tr>   
    <tr>
    <tbody>';


echo '
 
        <td style = " width: 10%; text-align: center;">1</td>
        <td style = "width: 70%; text-align: left;">Фундаменты </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Стены и перегородки</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Полы</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Колонны, столбы, стойки </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    <tr class="page-break">
 
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Подкрановые и тормозные конструкции</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    <tr>
 
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">Перекрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    <tr>
 
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Покрытие</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    <tr>
 
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Колонны, столбы, стойки </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">Да</td>
    </tr>
    <tr>
 
        <td colspan="2" style = " width: 80%;text-align: left;">Категория сложности работ по сбору исходных данных</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">1</td>
    </tr>
    ';
echo'
 </tbody></table>
 <p style="font-size: 11pt; ">8. Перечень выполняемых обмерных работ и особые к ним требования:</p>
    <table style="border-collapse: collapse; border: 1px solid black; width: 98%; ">
    <tr>
        <td style=" text-align: center;">
            № п/п
        </td>
        <td style=" text-align: center;">
            Виды работ
        </td>
       <td style="text-align: center;">
            Да/Нет(Категория сложности)
        </td>
        </tr>   
    <tr>
    <tbody>';


echo '
    <tr>
        <td style = " width: 10%; text-align: center;">1</td>
        <td style = "width: 70%; text-align: left;">Конструкция фундаментов по выполненным шурфам</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Планы этажей</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Фасады</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Разрезы, сечения</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">План кровли</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">Схема раскладки стропильных и подстропильных конструкций</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Схемы расположения несущих элементов перекрытий</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Схемы расположения несущих элементов покрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td colspan="2" style = " width: 80%;text-align: left;">Категория сложности обмерных работ</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;"></td>
    </tr>';
echo'
 </tbody></table>
 <p style="font-size: 11pt; ">9.  Перечень выполняемых обследовательских работ и особые к ним требования:</p>
    <table style="border-collapse: collapse; border: 1px solid black; width: 98%; ">
    <tr>
        <td style="width: 10%; text-align: center;">
            № п/п
        </td>
        <td style="width: 70%; text-align: center;">
            Наименование конструкций
        </td>
       <td style="width: 20%; text-align: center;">
            Да/Нет(Категория сложности)
        </td>
        </tr>   
    <tr>
    <tbody>';


echo '
    <tr>
        <td style = " width: 10%; text-align: center;">1</td>
        <td style = "width: 70%; text-align: left;">Фундаменты </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Стены и перегородки</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Полы</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Колонны, столбы, стойки </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Подкрановые и тормозные конструкции </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">Перекрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Покрытие </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Кровля</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td colspan="2" style = " width: 80%;text-align: left;">Категория сложности работ по определению технического состояния<br>
строительных конструкций
</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;"></td>
    </tr>';
echo'
 </tbody></table>
 <p style="font-size: 11pt; margin-bottom: 5px; margin-top: 5px;">10. Разработка рекомендаций и технических решений по ремонту и усилению строительных конструкций в<br>
 следующем объеме: заключение о состоянии строительных конструкций с выводами и рекомендациями.</p>
    <table style="border-collapse: collapse; border: 1px solid black; width: 98%; ">
    <tr>
        <td style="width: 10%; text-align: center;">
            № п/п
        </td>
        <td style="width: 70%; text-align: center;">
            Наименование конструкций
        </td>
       <td style="width: 20%; text-align: center;">
            Да/Нет(Категория сложности)
        </td>
        </tr>   
    <tr>
    <tbody>';


echo '
    <tr>
        <td style = " width: 10%; text-align: center;">1</td>
        <td style = "width: 70%; text-align: left;">Фундаменты </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Стены и перегородки</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Полы</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Колонны, столбы, стойки </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Подкрановые и тормозные конструкции </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr class="page-break">
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">Перекрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Покрытие </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Кровля</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    <tr>
        <td colspan="2" style = " width: 80%;text-align: left;">Категория сложности работ по определению технического состояния<br>
строительных конструкций
</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;"></td>
    </tr>';
echo'
 </tbody></table>
    
 <p style="font-size: 11pt;">11. Перечень выполняемых работ по обследованию инженерных сетей:</p>
    <table style="border-collapse: collapse; border: 1px solid black; width: 98%; ">
    <tr>
        <td style="width: 10%; text-align: center;">
            № п/п
        </td>
        <td style="width: 70%; text-align: center;">
            Наименование конструкций
        </td>
       <td style="width: 20%; text-align: center;">
            Да/Нет
        </td>
        </tr>   
    <tr>
    <tbody>';


echo '
    <tr>
        <td style = " width: 10%; text-align: center;">1</td>
        <td style = "width: 70%; text-align: left;">Водопровод и канализация </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Электроснабжение</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Отопление и вентиляция</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">нет</td>
    </tr>';
echo'
 </tbody></table>
 <p style="font-size: 11pt; margin-bottom: 5px;">12.  Перечень предоставляемой технической документации на здание: техпаспорт.<br>
13. Качество обмерно-обследовательских работ должно соответствовать нормативным требованиям ТКП 45-<br>
1.04-306-2016 «Техническое состояние и техническое обслуживание зданий и сооружений. Общие требования».<br>
14. Наличие корректирующих коэффициентов при проведении работ: Расположение конструкций перекрытия<br>
или покрытия на высоте ≤1,6м (К18.205).<br>
 Заказчику: 01 (один) на бумажном носителе.<br>
15. Вскрытие и заделка строительных конструкций производится силами Заказчика.<br>
16. Дополнительные условия:</p>
<u><i style="font-size: 11pt; margin-top: 5px;">Для определения технического состояния элементов, вскрытие которых в условиях эксплуатации объекта не<br>
представляется возможным, техническое обследование этих элементов осуществляется после обеспечения<br>
ЗАКАЗЧИКОМ доступа (п.5.10 П4-04 к СНБ 1.03.02-96). В случае невыполнения вышеуказанного оценка<br>
технического состояния производится на основании визуального осмотра видимых частей конструкций.</i></u>
<br>
<p style="font-size: 11pt";><strong>Задание к исполнению принял:<br>
Главный специалист</strong><br><br><br>__________________Е.С. <Мамчиц></Мамчиц></p>


</div>';
?>

</body>

