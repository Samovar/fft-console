FFTConsole application
======================

Пример реализации эквалайзера в консоли с помощью php.

Для запуска клонировать репозиторий и установить пакеты composer'ом.
Перейти в папку и запустить ./app или php ./index.php

WavReader и BinaryReader не выделены в отдельные пакеты, так как всё равно в этой жизни никто не будет парсить wav файлы с помощью php. (За исклчением единиц, у которых эти классы уже реализованы)

Что касается тестов, то есть парочку... Но само приложение по сути это обёртка над FFT и компонентами Symfony, так что тестить нечего. Всё в основном улетает в SDTOUT.

Работает на линухе.

Скриншот примера в папке ресурсов.


### Мнение

php НЕ ДОЛЖЕН использоваться для таких задач, как обработка звука, изображений, нейронный сетей и прочих.
Для этого есть 100500 инструментов, которые делают это в разы лучше.

На примере этого приложения были попытки распознавания голоса.
Но скорость обработки данных у этого замечательного языка потрясающе медленная.

php7 пошустрее и кое-как справляется с файлами где частота 8000, 16000 kHz. Далее задержки...

Так же при запуске ./app samovar:render:test или ./app samovar:animate:sinus можно наблюдать потрясающую картину отрисовки обычного прямоугольника.
Всё вроде ничего, за исключением одной небольшой проблемы.
php не умеет нормально чистить терминал.
На Intel i3, 8GB RAM не успевает прорисовать.

http://php.net/manual/ru/function.ncurses-clear.php не пробовал. Да и в доке она ЭКСПЕРИМЕНТАЛЬНАЯ "капс локом".
