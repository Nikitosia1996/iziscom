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
  page-break-inside: avoid;
}

.page-break {
        page-break-before: always; /* или page-break-after: always; */
    }

td {
   border: 1px solid black;
  padding: 8px;
  text-align: center;
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

<div style=" font-size: 18pt;
    position: relative;
    text-align: center;
    margin-left: 5%;
">
<!-- Преамбула заявления -->
    Регистрационно-контрольная карточка <br> регистрации заявления</div>
    <div style="display: block; margin-top: 30px">
<div style="display: flex; font-size: 15pt;
     margin-bottom: 30px; margin-left: 5%;  justify-content: space-between;
">
<div style="float: left">12.12.12 <br> <span style="font-size: 9pt; font-weight: normal;">(дата регистрации)</span></div>
<!-- Шапка заявления -->
	<div ><span style="float: right">№  12.12.12 </span><br>
	<span style="font-size: 9pt; font-weight: normal;">(регистрационный индекс)</span></div>
	
	</div>

<div style="display: block; font-size: 15pt;">
<!-- Поля для заполнения данных о юр. лице -->

 <div style=" justify-content: center; margin-top: 20px;margin-left: 3%;  ">
<table style="border-collapse: collapse; border: 1px solid black; width: 98%; ">
    <tr>
        <td colspan="2" style=" text-align: center; width: 50%">
            Реквизиты
        </td>
        <td style=" width: 50%; text-align: center;">
            Информация
        </td>
       
        </tr>
        <tr > <td colspan="3">Этап 1. Регистрация заявления</td></tr>
        <tbody>';


echo ' <tr>
 
        <td style = " width: 10%; text-align: center;">1</td>
        <td style = "width: 40%; text-align: left;">Наименование юридического лица</td>
        <td style="width: 50%;    word-break: break-word; text-align: left;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">2</td>
        <td style = "width: 40%; text-align: left;">Юридический адрес</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">3</td>
        <td style = "width: 40%; text-align: left;">Фактический адрес</td>
        <td style="width: 50%; text-align: left;   word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">4</td>
        <td style = "width: 40%; text-align: left;">Контактная информация (телефон (факс), электронный адрес)</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">5</td>
        <td style = "width: 40%; text-align: left;">Заявление</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 л</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">6</td>
        <td style = "width: 40%; text-align: left;">Документы и сведения, представленные вместе с заявлением:</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;"></td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">6.1</td>
        <td style = "width: 40%; text-align: left;">сведения об используемой медицинской технике по форме, устанавливаемой Министерством здравоохранения;</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">6.2</td>
        <td style = "width: 40%; text-align: left;">копия штатного расписания;</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">6.3</td>
        <td style = "width: 40%; text-align: left;">сведения о показателях укомплектованности специалистами с высшим и средним специальным медицинским образованием (по штатным должностям, физическим лицам, коэффициенту совместительства) по форме, устанавливаемой Министерством здравоохранения;</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">6.4</td>
        <td style = "width: 40%; text-align: left;">отчет о результатах самоаккредитации в произвольной форме;</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">6.5</td>
        <td style = "width: 40%; text-align: left;">дополнительные документы и сведения</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">7</td>
        <td style = "width: 40%; text-align: left;">Информация о работнике, принявшем заявление и представленные вместе ним документы и сведения</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">8</td>
        <td style = "width: 40%; text-align: left;">Отметка о разъяснении заинтересованному лицу его прав и обязанностей</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr class="page-break">
 
        <td style = " width: 10%; text-align: center;">9</td>
        <td style = "width: 40%; text-align: left;">Срок исполнения</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;"></td>
    </tr>
    <tr > <td colspan="3">Этап 2. Ход рассмотрения</td></tr>
    <tr>
 
        <td style = " width: 10%; text-align: center;">10</td>
        <td style = "width: 40%; text-align: left;">Приказ о создании комиссии</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">11</td>
        <td style = "width: 40%; text-align: left;">Информация о выезде комиссии</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
 
    
   
    
    <tr>
        <td style = " width: 10%; text-align: center;">14</td>
        <td style = "width: 40%; text-align: left;">Отметка об отзыве заявления</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">15</td>
        <td style = "width: 40%; text-align: left;">Отметка об уведомлении о принятом административном решении</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;"> № №  12.12.12 , ' ;
            if ('' === '1970-01-01') {
        echo '';
    } else {
        echo 12;
    }
        echo '</td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">16</td>
        <td style = "width: 40%; text-align: left;">Результат принятого административного решения</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
     <tr>
 
        <td style = " width: 10%; text-align: center;">17</td>
        <td style = "width: 40%; text-align: left;">Информация о профилях заболеваний, состояниях, синдромах, методах их исследования и видах медицинской помощи, которые не были заявлены государственной организацией здравоохранения</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;">№  12.12.12 </td>
    </tr>
    
    <tr>
 
        <td style = " width: 10%; text-align: center;">18</td>
        <td style = "width: 40%; text-align: left;">Документы и сведения, выданные заинтересованному лицу (указать количество листов):</td>
        <td style="width: 50%;  text-align: left;  word-break: break-word;"></td>
    </tr>
    ';

echo '</tbody></table>
</div>';
?>
</div>
</body>

