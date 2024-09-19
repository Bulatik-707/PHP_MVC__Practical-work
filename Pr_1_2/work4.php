<!doctype html>
<head>
<title>Пр. 1-2 Задача 4 Интернет-магазин</title>
<meta charset="utf-8">
</head>
<body>
    <div align="center">
    <p> <a href='../index.php'> К содержанию</a> </p> <br>

    <?php 
        /*Создать три переменные с названием товаров ($product1, $product2, $product3) 
        и соответствующие им переменные с ценой товаров ($price1, $price2, $price3), вывести их на экран.
        Рассчитать и вывести среднюю цену товара. Определить и вывести товар с максимальной и минимальной ценой 
        */
        $product1 = "ЦП AMD Athlon 200 GE";
        $product2 = "ЦП Ryzen 3700X";
        $product3 = "ГП RX 6900 XT";
        // В целых числах можно писать "_" (ДЛЯ ВИЗУАЛЬНОГО РАЗДЕЛЕНИЯ)
        $price1 = 2_500;
        $price2 = 9_000;
        $price3 = 50_000;

        $Avg = ($price1 + $price2 + $price3) / 3;

        //$MinTov = min(array($price1, $price2, $price3));
        //$min_Price = 0;
        //$max_Price = 0;
    
        echo <<<HERE
        <table width="300" align="center" cellpading="10"
        bgcolor="#f6f6f6" style="border: 1px solid gray">
        <tr>
        <td valign="top"></td>
        </tr>

        <tr> 
        <td style="border: 1px solid gray">Товар</td>  
        <td style="border: 1px solid gray">Цена (руб.)</td>
        </tr>
        <tr> 
        <td style="border: 1px solid gray">"$product1"</td>  
        <td style="border: 1px solid gray">$price1</td>
        </tr>

        <tr> 
        <td style="border: 1px solid gray">"$product2"</td>  
        <td style="border: 1px solid gray">$price2</td> 
        </tr>

        <tr>
        <td style="border: 1px solid gray">"$product3"</td>  
        <td style="border: 1px solid gray">$price3</td> 
        </tr>

        </table> <br>
        HERE;
        printf("Средняя стоимость товаров = %.2f руб. <br>", $Avg);
        echo "Самый дорогой товар = ", max(array($price1, $price2, $price3)), "<br>"; 
        echo "Самый дешевый товар = ", min(array($price1, $price2, $price3)), "<br>"; 
    ?>
    </div>
</body>
</html>