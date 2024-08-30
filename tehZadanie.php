<?php
require 'vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

$phpWord = new PhpWord();
$section = $phpWord->addSection();


$section->addText('Приложение №');
$section->addText('К договору №');
$section->addText('От');
$section->addText('УТВЕРДЖДАЮ', ['bold' => true]);


$table = $section->addTable();
$table->addRow();
$table->addCell(3000)->addText('Заказчик');
$table->addCell(3000)->addText('СОГЛАСОВАНО');
$table->addRow();
$table->addCell(3000)->addText('Белорусский государственный университет');
$table->addCell(3000)->addText('ООО «ИЗИСКОМ»');
$table->addRow();
$table->addCell(3000)->addText('Проректор по экономике и материально-техническому развитию');
$table->addCell(3000)->addText('Директор');
$table->addRow();
$table->addCell(3000)->addText('______________');
$table->addCell(3000)->addText('______________А.В. Лукьянович');
$table->addRow();
$table->addCell(3000)->addText('м.п.');
$table->addCell(3000)->addText('м.п.');


$section->addText('ТЕХНИЧЕСКОЕ ЗАДАНИЕ', ['bold' => true]);


$section->addText('1. Цель выполнения заказных работ: .');
$section->addText('2. Местоположение обследуемого объекта: .');


$section->addText('3. Технико-экономические показатели объекта обследования:');
$table = $section->addTable();
$table->addRow();
$table->addCell(1000)->addText('№ п/п');
$table->addCell(3000)->addText('Наименование показателя');
$table->addCell(1000)->addText('Значение показателя');
$table->addRow();
$table->addCell()->addText('1');
$table->addCell()->addText('Категория сложности здания');
$table->addCell()->addText('2');
$table->addRow();
$table->addCell()->addText('2');
$table->addCell()->addText('Строительный объем, м³');
$table->addCell()->addText('10');
$table->addRow();
$table->addCell()->addText('3');
$table->addCell()->addText('Этажность');
$table->addCell()->addText('1');
$table->addRow();
$table->addCell()->addText('4');
$table->addCell()->addText('Высота здания, м');
$table->addCell()->addText('6');
$table->addRow();
$table->addCell()->addText('5');
$table->addCell()->addText('Высота этажа, м');
$table->addCell()->addText('1');


$section->addText('4. Заказчик: Белорусский государственный университет');
$section->addText('5. Подрядчик: ООО «ИЗИСКОМ»');
$section->addText('6. Количество экземпляров технического заключения по результатам выполнения работ, необходимые Заказчику: 01 (один) на бумажном носителе.');


$section->addText('7. Перечень выполняемых работ по сбору исходных данных:');
$table = $section->addTable();
$table->addRow();
$table->addCell(1000)->addText('№ п/п');
$table->addCell(3000)->addText('Наименование конструкций');
$table->addCell(2000)->addText('Да/Нет (Категория сложности)');
$table->addRow();
$table->addCell()->addText('1');
$table->addCell()->addText('Фундаменты');
$table->addCell()->addText('Да');
$table->addRow();
$table->addCell()->addText('2');
$table->addCell()->addText('Стены и перегородки');
$table->addCell()->addText('Да');
$table->addRow();
$table->addCell()->addText('3');
$table->addCell()->addText('Полы');
$table->addCell()->addText('Да');
$table->addRow();
$table->addCell()->addText('4');
$table->addCell()->addText('Колонны, столбы, стойки');
$table->addCell()->addText('Да');
$table->addRow();
$table->addCell()->addText('5');
$table->addCell()->addText('Подкрановые и тормозные конструкции');
$table->addCell()->addText('Да');
$table->addRow();
$table->addCell()->addText('6');
$table->addCell()->addText('Перекрытия');
$table->addCell()->addText('Да');
$table->addRow();
$table->addCell()->addText('7');
$table->addCell()->addText('Покрытие');
$table->addCell()->addText('Да');
$table->addRow();
$table->addCell()->addText('8');
$table->addCell()->addText('Кровля');
$table->addCell()->addText('Да');
$section->addText('Категория сложности работ по сбору исходных данных: 1');


$section->addText('8. Перечень выполняемых обмерных работ и особые к ним требования:');
$table = $section->addTable();
$table->addRow();
$table->addCell(1000)->addText('№ п/п');
$table->addCell(3000)->addText('Виды работ');
$table->addCell(2000)->addText('Да/Нет (Категория сложности)');
$table->addRow();
$table->addCell()->addText('1');
$table->addCell()->addText('Конструкция фундаментов по выполненным шурфам');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('2');
$table->addCell()->addText('Планы этажей');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('3');
$table->addCell()->addText('Фасады');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('4');
$table->addCell()->addText('Разрезы, сечения');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('5');
$table->addCell()->addText('План кровли');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('6');
$table->addCell()->addText('Схема раскладки стропильных и подстропильных конструкций');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('7');
$table->addCell()->addText('Схемы расположения несущих элементов перекрытий');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('8');
$table->addCell()->addText('Схемы расположения несущих элементов покрытия');
$table->addCell()->addText('Нет');
$section->addText('Категория сложности обмерных работ:');


$section->addText('9. Перечень выполняемых обследовательских работ и особые к ним требования:');
$table = $section->addTable();
$table->addRow();
$table->addCell(1000)->addText('№ п/п');
$table->addCell(3000)->addText('Наименование конструкций');
$table->addCell(2000)->addText('Да/Нет (Категория сложности)');
$table->addRow();
$table->addCell()->addText('1');
$table->addCell()->addText('Фундаменты');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('2');
$table->addCell()->addText('Стены и перегородки');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('3');
$table->addCell()->addText('Полы');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('4');
$table->addCell()->addText('Колонны, столбы, стойки');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('5');
$table->addCell()->addText('Подкрановые и тормозные конструкции');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('6');
$table->addCell()->addText('Перекрытия');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('7');
$table->addCell()->addText('Покрытие');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('8');
$table->addCell()->addText('Кровля');
$table->addCell()->addText('Нет');
$section->addText('Категория сложности работ по определению технического состояния строительных конструкций:');


$section->addText('10. Разработка рекомендаций и технических решений по ремонту и усилению строительных конструкций в следующем объеме: заключение о состоянии строительных конструкций с выводами и рекомендациями.');
$table = $section->addTable();
$table->addRow();
$table->addCell(1000)->addText('№ п/п');
$table->addCell(3000)->addText('Наименование конструкций');
$table->addCell(2000)->addText('Да/Нет (Категория сложности)');
$table->addRow();
$table->addCell()->addText('1');
$table->addCell()->addText('Фундаменты');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('2');
$table->addCell()->addText('Стены и перегородки');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('3');
$table->addCell()->addText('Полы');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('4');
$table->addCell()->addText('Колонны, столбы, стойки');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('5');
$table->addCell()->addText('Подкрановые и тормозные конструкции');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('6');
$table->addCell()->addText('Перекрытия');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('7');
$table->addCell()->addText('Покрытие');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('8');
$table->addCell()->addText('Кровля');
$table->addCell()->addText('Нет');
$section->addText('Категория сложности работ по разработке рекомендаций:');


$section->addText('11. Перечень выполняемых работ по обследованию инженерных сетей:');
$table = $section->addTable();
$table->addRow();
$table->addCell(1000)->addText('№ п/п');
$table->addCell(3000)->addText('Наименование конструкций');
$table->addCell(2000)->addText('Да/Нет');
$table->addRow();
$table->addCell()->addText('1');
$table->addCell()->addText('Водопровод и канализация');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('2');
$table->addCell()->addText('Электроснабжение');
$table->addCell()->addText('Нет');
$table->addRow();
$table->addCell()->addText('3');
$table->addCell()->addText('Отопление и вентиляция');
$table->addCell()->addText('Нет');


$section->addText('12. Перечень предоставляемой технической документации на здание: техпаспорт.');


$section->addText('13. Качество обмерно-обследовательских работ должно соответствовать нормативным требованиям ТКП 45-1.04-306-2016 «Техническое состояние и техническое обслуживание зданий и сооружений. Общие требования».');


$section->addText('14. Наличие корректирующих коэффициентов при проведении работ: Расположение конструкций перекрытия или покрытия на высоте ≤1,6м (К18.205).');


$section->addText('15. Вскрытие и заделка строительных конструкций производится силами Заказчика.');


$section->addText('16. Дополнительные условия:');
$section->addText('Для определения технического состояния элементов, вскрытие которых в условиях эксплуатации объекта не представляется возможным, техническое обследование этих элементов осуществляется после обеспечения ЗАКАЗЧИКОМ доступа (п.5.10 П4-04 к СНБ 1.03.02-96). В случае невыполнения вышеуказанного оценка технического состояния производится на основании визуального осмотра видимых частей конструкций.');


$section->addText('Задание к исполнению принял:');
$section->addText('Главный специалист');
$section->addText('__________________Е.С. Мамчиц');

$filename = 'technical_assignment.docx';
$phpWord->save($filename, 'Word2007');

echo "Документ сохранен как $filename";
?>