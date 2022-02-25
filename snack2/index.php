<!-- 
    Snack 2
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
 -->

<?php
// $date = ['10/01/2019', '10/02/2019', '15/05/2019'];

$a = [

    [

        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    [

        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
        ]
    ],
    [

        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < count($a); $i++) : ?>
            <?php for ($j = 0; $j < count($a[$i]); $j++) : ?>
                <li><?= $a[$i][$j]['title'] . '-' . $a[$i][$j]['author'] . '-' . $a[$i][$j]['text'] ?></li>
            <?php endfor; ?>
        <?php endfor; ?>
    </ul>
</body>


</html>