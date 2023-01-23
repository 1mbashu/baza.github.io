<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baza</title>
</head>
<body>
<?php
    function randLastName() {
        $lnames = array("Филиппов", "Горшков", "Плотников", "Белоусов", "Курочкин", "Никитин", "Крылов", "Горохов", "Сизов", "Алешин", "Усов", "Лебедев", "Моисеев", "Селиванов", "Литвинов", "Новиков", "Киселев", "Ермаков", "Беликов", "Кочетов");
        $lname = $lnames[rand(0, 19)];
        echo $lname;
    } // Возвращает рандмоную фамилию
    function randFirstName() {
        $fnames = array("Денис", "Иван", "Борис", "Даниил", "Серафим", "Святослав", "Тимофей", "Михаил", "Владимир", "Александр", "Олег", "Роман", "Роберт", "Тихон", "Илья", "Марк", "Алексей", "Лев", "Дмитрий", "Максим");
        $fname = $fnames[rand(0, 19)];
        echo $fname;
    }    // Возвращает рандомное имя
    function randPatronymic() {
        $ptrnmcs = array("Фёдорович", "Владимирович", "Романович", "Викторович", "Русланович", "Максимович", "Глебович", "Петрович", "Григорьевич", "Евгеньевич", "Никитич", "Егорович", "Владиславович", "Тимофеевич", "Ярославович", "Леонидович", "Олегович", "Александрович", "Андреевич", "Святославович");
        $ptrnmc = $ptrnmcs[rand(0, 19)];
        echo $ptrnmc;
    } // Возвращает рандомное отчество
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Доп. информация</th>
    </tr>
    <tr>
        <td><?php echo $id = 1?></td>
        <td><?php echo $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a2: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a2;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a3: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a3;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a4: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a4;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a5: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a5;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a6: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a6;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a7: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a7;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a8: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a8;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
    <tr>
        <td><?php echo $id += 1?></td>
        <td><?php a9: $newLastName = randLastName();
            $usedLastNames[$id-1] = $newLastName;
            for ($i = $id; $i > 0; $i--) {
                if ($generatedLN = $usedLastNames[$i]) {
                    $repeat = true;
                }
            }
            if ($repeat = true) {
                goto a9;
            }?></td>
        <td><?php randFirstName() ?></td>
        <td><?php randPatronymic() ?></td>
        <td>Очень долго кушает и пьёт</td>
    </tr>
</table>
</body>
</html>