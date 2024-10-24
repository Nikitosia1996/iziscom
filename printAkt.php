<?php

$obem = $_POST['obem'] ?? null;
$etazh = $_POST['etazh'] ?? null;
$visotazdani = $_POST['visotazdani'] ?? null;
$visotapola = $_POST['visotapola'] ?? null;
$zakazchik = $_POST['zakazchik'] ?? null;
$podryadchik = $_POST['podryadchik'] ?? null;

$toggleZd1 = $_POST['toggleZd1'] ?? 0;
$toggleZd2 = $_POST['toggleZd2'] ?? 0;
$toggleZd3 = $_POST['toggleZd3'] ?? 0;
$toggleZd4 = $_POST['toggleZd4'] ?? 0;
$toggleZd5 = $_POST['toggleZd5'] ?? 0;
$toggleZd6 = $_POST['toggleZd6'] ?? 0;
$toggleZd7 = $_POST['toggleZd7'] ?? 0;
$toggleZd8 = $_POST['toggleZd8'] ?? 0;
$toggleZd9 = $_POST['toggleZd9'] ?? 0;

$toggleZd41 = $_POST['toggleZd41'] ?? 0;
$toggleZd42 = $_POST['toggleZd42'] ?? 0;
$toggleZd43 = $_POST['toggleZd43'] ?? 0;
$toggleZd44 = $_POST['toggleZd44'] ?? 0;
$toggleZd45 = $_POST['toggleZd45'] ?? 0;
$toggleZd46 = $_POST['toggleZd46'] ?? 0;
$toggleZd48 = $_POST['toggleZd48'] ?? 0;
$toggleZd49 = $_POST['toggleZd49'] ?? 0;
$toggleZd449 = $_POST['toggleZd449'] ?? 0;

$toggleZd51 = $_POST['toggleZd51'] ?? 0;
$toggleZd52 = $_POST['toggleZd52'] ?? 0;
$toggleZd53 = $_POST['toggleZd53'] ?? 0;
$toggleZd54 = $_POST['toggleZd54'] ?? 0;
$toggleZd55 = $_POST['toggleZd55'] ?? 0;
$toggleZd56 = $_POST['toggleZd56'] ?? 0;
$toggleZd57 = $_POST['toggleZd57'] ?? 0;
$toggleZd58 = $_POST['toggleZd58'] ?? 0;
$toggleZd59 = $_POST['toggleZd59'] ?? 0;


$toggleZd61 = $_POST['toggleZd61'] ?? 0;
$toggleZd62 = $_POST['toggleZd62'] ?? 0;
$toggleZd63 = $_POST['toggleZd63'] ?? 0;
$toggleZd64 = $_POST['toggleZd64'] ?? 0;
$toggleZd65 = $_POST['toggleZd65'] ?? 0;
$toggleZd66 = $_POST['toggleZd66'] ?? 0;
$toggleZd67 = $_POST['toggleZd67'] ?? 0;
$toggleZd68 = $_POST['toggleZd68'] ?? 0;
$toggleZd69 = $_POST['toggleZd69'] ?? 0;


$cel = $_POST['cel'] ?? null;
$mestoObj = $_POST['mestoObj'] ?? null;
$naimRabot = $_POST['naimRabot'] ?? null;
$toggleZd1Text = $toggleZd1 > 0 ? 'Да' : 'Нет';
$toggleZd2Text = $toggleZd2 > 0 ? 'Да' : 'Нет';
$toggleZd3Text = $toggleZd3 > 0 ? 'Да' : 'Нет';
$toggleZd4Text = $toggleZd4 > 0 ? 'Да' : 'Нет';
$toggleZd5Text = $toggleZd5 > 0 ? 'Да' : 'Нет';
$toggleZd6Text = $toggleZd6 > 0 ? 'Да' : 'Нет';
$toggleZd7Text = $toggleZd7 > 0 ? 'Да' : 'Нет';
$toggleZd8Text = $toggleZd8 > 0 ? 'Да' : 'Нет';
$toggleZd9Text = $toggleZd9 > 0 ? 'Да' : 'Нет';

$toggleZd41Text = $toggleZd41 > 0 ? 'Да' : 'Нет';
$toggleZd42Text = $toggleZd42 > 0 ? 'Да' : 'Нет';
$toggleZd43Text = $toggleZd43 > 0 ? 'Да' : 'Нет';
$toggleZd44Text = $toggleZd44 > 0 ? 'Да' : 'Нет';
$toggleZd45Text = $toggleZd45 > 0 ? 'Да' : 'Нет';
$toggleZd46Text = $toggleZd46 > 0 ? 'Да' : 'Нет';
$toggleZd48Text = $toggleZd48 > 0 ? 'Да' : 'Нет';
$toggleZd49Text = $toggleZd49 > 0 ? 'Да' : 'Нет';
$toggleZd449Text = $toggleZd449 > 0 ? 'Да' : 'Нет';


$toggleZd51Text = $toggleZd51 > 0 ? 'Да' : 'Нет';
$toggleZd52Text = $toggleZd52 > 0 ? 'Да' : 'Нет';
$toggleZd53Text = $toggleZd53 > 0 ? 'Да' : 'Нет';
$toggleZd54Text = $toggleZd54 > 0 ? 'Да' : 'Нет';
$toggleZd55Text = $toggleZd55 > 0 ? 'Да' : 'Нет';
$toggleZd56Text = $toggleZd56 > 0 ? 'Да' : 'Нет';
$toggleZd57Text = $toggleZd57 > 0 ? 'Да' : 'Нет';
$toggleZd58Text = $toggleZd58 > 0 ? 'Да' : 'Нет';
$toggleZd59Text = $toggleZd59 > 0 ? 'Да' : 'Нет';

$toggleZd61Text = $toggleZd61 > 0 ? 'Да' : 'Нет';
$toggleZd62Text = $toggleZd62 > 0 ? 'Да' : 'Нет';
$toggleZd63Text = $toggleZd63 > 0 ? 'Да' : 'Нет';
$toggleZd64Text = $toggleZd64 > 0 ? 'Да' : 'Нет';
$toggleZd65Text = $toggleZd65 > 0 ? 'Да' : 'Нет';
$toggleZd66Text = $toggleZd66 > 0 ? 'Да' : 'Нет';
$toggleZd67Text = $toggleZd67 > 0 ? 'Да' : 'Нет';
$toggleZd68Text = $toggleZd68 > 0 ? 'Да' : 'Нет';
$toggleZd69Text = $toggleZd69 > 0 ? 'Да' : 'Нет';

$zdvisValue = $_POST['zdvisValue'] ?? '';
$zdvisValueSlRab = $_POST['zdvisValueSlRab'] ?? '';

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
        page-break-before: always; 
    }
.container {
    display: flex; 
    width: 100%; 
}

.left-block, .right-block {
    width: 50%; 
    padding: 20px;
    box-sizing: border-box; 
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

    line-height: 18pt;
    margin-right:80px;
    " 
    >
<!-- Преамбула заявления -->
    Приложение № <br> К договору № <br> От</div>
    <br>
    <div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px;">
        УТВЕРЖДАЮ<br><strong>Заказчик</strong><br>'.$zakazchik.'<br>
        Проректор по экономике и материально-<br>техническому развитию
    </div>
    <div class="right-block" style="text-align: left; line-height: 18pt; margin-left:120px;">
        СОГЛАСОВАНО<br><strong>Подрядчик</strong><br>'.$podryadchik.'<br><p>Директор</p>
    </div>
</div>
<div class="container" style="margin-left: 3%;">
    <div class="left-block" style="text-align: left; line-height: 18pt; padding-left: 0px; ">______________<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    <div class="right-block" style="text-align: left; line-height: 18pt; margin-left:120px;">______________А.В. Лукьянович<div class="center-text" style="margin-left: 40px; margin-top: 8px; margin-bottom: 8px;" >м.п.</div></div>
    </div><br><br>  
<div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>ТЕХНИЧЕСКОЕ ЗАДАНИЕ</strong> </div>
    <div style=" font-size: 14pt;
    position: relative;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
">
<!-- Преамбула заявления -->
    <strong>'.$naimRabot.'</strong> </div><br>
    
    <p style="font-size: 11pt; margin-left: 3%; margin-bottom: 5px;">1. Цель выполнения заказных работ: '.$cel.' <br>
2. Местоположение обследуемого объекта: '.$mestoObj.'<br>
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
        <td style="width: 20%;    word-break: break-word; text-align: center;"> '.$zdvisValue.' </td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Строительный объем, м.куб</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">' . $obem . '</td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Этажность</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">'.$etazh.'</td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Высота здания, м</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">'.$visotazdani.'</td>
</tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Высота этажа , м</td>
        <td style="width: 20%;    word-break: break-word; text-align: center;">'.$visotapola.'</td>
</tr>';
echo' </tbody></table>
<p style="font-size: 11pt; margin-bottom: 5px; margin-top: 5px;"> 4. Заказчик: '.$zakazchik.'<br>
5. Подрядчик: '.$podryadchik.'<br>
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
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd1Text.'</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Стены и перегородки</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd2Text.'</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Полы</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd3Text.'</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Колонны, столбы, стойки </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd4Text.'</td>
    </tr>
    
         <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Несущие конструкции копров,пролетных строейний галерей </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd5Text.'</td>
    </tr>
    <tr >
 
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">Подкрановые и тормозные конструкции</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd6Text.'</td>
    </tr>
    <tr>
 
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Перекрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd7Text.'</td>
    </tr>
    <tr>
 
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Покрытие</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd8Text.'</td>
    </tr>
    <tr>
 
        <td style = " width: 10%; text-align: center;">9</td>
        <td style = "width: 70%; text-align: left;">Кровля </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd9Text.'</td>
    </tr>
    <tr>
 
        <td colspan="2" style = " width: 80%;text-align: left;">Категория сложности работ по сбору исходных данных</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$zdvisValueSlRab.'</td>
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
        <td style = "width: 70%; text-align: left;">Конструкция фундаментов</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd41Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Планы этажей</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd42Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Фасады</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd43Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Разрезы, сечения</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd44Text.'</td>
    </tr>
        <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Несущие конструкции копров,пролетных строейний галерей</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd45Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">План кровли</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd46Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Стропильные и подстропильные конструкции, подкрановые и тормозные конструкции</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd48Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Несущие элементы перекрытий</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd49Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">9</td>
        <td style = "width: 70%; text-align: left;">Схемы расположения несущих элементов покрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd449Text.'</td>
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
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd51Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Стены и перегородки</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd52Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Полы</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd53Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Колонны, столбы, стойки </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd54Text.'</td>
    </tr>
        <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Несущие конструкции копров,пролетных строейний галерей </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd55Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">Подкрановые и тормозные конструкции </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd56Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Перекрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd57Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Покрытие </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd58Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">9</td>
        <td style = "width: 70%; text-align: left;">Кровля</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd59Text.'</td>
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
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd61Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 70%; text-align: left;">Стены и перегородки</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd62Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 70%; text-align: left;">Полы</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd63Text.'</td>
    </tr>
    
    <tr>
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 70%; text-align: left;">Колонны, столбы, стойки </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd64Text.'</td>
    </tr>
        <tr>
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 70%; text-align: left;">Несущие конструкции копров,пролетных строейний галерей </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd65Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 70%; text-align: left;">Подкрановые и тормозные конструкции </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd66Text.'</td>
    </tr>
    <tr >
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 70%; text-align: left;">Перекрытия</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd67Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 70%; text-align: left;">Покрытие </td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd68Text.'</td>
    </tr>
    <tr>
        <td style = " width: 10%; text-align: center;">9</td>
        <td style = "width: 70%; text-align: left;">Кровля</td>
        <td style="width: 20%;  text-align: center;  word-break: break-word;">'.$toggleZd69Text.'</td>
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

