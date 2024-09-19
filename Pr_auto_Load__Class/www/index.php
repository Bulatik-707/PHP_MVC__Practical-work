<?php 

// // _0_
// // Загружаем класы (путь)
// require __DIR__ . '/../src/MyProject/Models/Users/User.php';
// require __DIR__ . '/../src/MyProject/Models/Articles/Article.php';

// //Созд. V класов
// $author = new User('Connor');
// $article = new Article('Title', 'Text', $author);
// var_dump($article);



// // _1_
// // Загружаем класы (путь)
// require __DIR__ . '/../src/MyProject/Models/Users/User.php';
// require __DIR__ . '/../src/MyProject/Models/Articles/Article.php';


// // Теперь, чтобы в файле index.php работать с данными классами,
// //мы должны указать полное имя класса – это имя класса с указанием
// //его namespace. Делается это следующим образом.

// //Созд. V класов
// $author = new \MyProject\Models\Users\User('Ivan');
// $article = new \MyProject\Models\Articles\Article('Title 1', 'Text 1', $author);
// var_dump($article);





//_2_
// Автозагрузка
// функцию автозагрузки классов. Она будет вызываться каждый раз, 
// когда впервые будет встречаться новый класс.
// мы одинаково называли папки, в которых лежат файлы и namespace классов
//  Это  для того, чтобы можно было преобразовать
//   полное имя класса в путь до .php-файла с этим классом.

//_2_1_
// // Каждый раз, когда в коде будет встречаться класс, который ещё не был
// //  подключён, в неё первым аргументом будет передаваться полное имя
// //   класса (вместе с namespace). 
// function myAutoLoader(string $className){
//     require_once __DIR__ . '/../src/' . $className . '.php';
// }

// // spl_autoload_register() принимает первым аргументом имя функции,
// //  в которую будет передаваться имя класса, каждый раз, когда этот класс 
// //  ещё не был загружен.
// spl_autoload_register('myAutoLoader');

// //__2_2_
// // В функцию spl_autoload_register можно передать не имя функции, а прямо саму функцию 
// spl_autoload_register(function(string $className){
//     require_once __DIR__ . '/../src/' . $className . '.php';
// });

// //Созд. V класов
// $author = new \MyProject\Models\Users\User('Ivan 2');
// $article = new \MyProject\Models\Articles\Article('Title 2', 'Text 2', $author);
// var_dump($article);


// _3_ Самаст
// Загружаем класы (путь)
require __DIR__ . '/../src/MyProject/Models/WeatherEntrys/WeatherEntry.php';

//Созд. V класов
$fSept = new WeatherEntry('2020-11-25', 'Good', 15);
$fSept->setRainStatus(false);

print($fSept->getDayDescription());





?>