<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>ajax-dischi-1</title>
</head>

<body>

    <?php
    $albums = [
        [
            'author' => 'Bon Jovi',
            'genre' => 'Rock',
            'poster' => 'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg',
            'title' => 'New Jersey',
            'year' => "1988"
        ],

        [
            'author' => 'Queen',
            'genre' => 'Pop',
            'poster' => 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
            'title' => 'Live at Wembley 86',
            'year' => '1992'
        ],

        [
            'author' => 'Sting',
            'genre' => 'Pop',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
            'title' => 'Ten s Summoner s Tales',
            'year' => '1993'
        ],
        [
            'author' => 'Steve Gadd Band',
            'genre' => 'Jazz',
            'poster' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
            'title' => 'Steve Gadd Band',
            'year' => '2018'
        ],
        [
            'author' => 'Iron Maiden',
            'genre' => 'Metal',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
            'title' => 'Brave new World',
            'year' => '2000'
        ],

        [
            'author' => 'Eric Clapton',
            'genre' => 'Rock',
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
            'title' => 'One more car, one more raider',
            'year' => '2002'
        ],
        [
            'author' => 'Deep Purple',
            'genre' => 'Rock',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
            'title' => 'Made in Japan',
            'year' => '1972'
        ],

        [
            'author' => 'Metallica',
            'genre' => 'Metal',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
            'title' => 'And Justice for All',
            'year' => '1988'
        ],
        [
            'author' => 'Dave Weckl',
            'genre' => 'Jazz',
            'poster' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
            'title' => 'Hard Wired',
            'year' => '1994'
        ],

        [
            'author' => 'Michael Jacjson',
            'genre' => 'Pop',
            'poster' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
            'title' => 'Bad',
            'year' => '1987'
        ],

    ];

    ?>
    <div class="container">
        <div class="nav_bar">
            <img class="logo" src="./Spotify_icon.png" alt="">
        </div>
    </div>

    <div class="main">
        <div class="card_wrapper">
            <?php
             foreach ($albums as $value) {
                 $author = $value['author'];
                 $genre = $value['genre'];
                 $poster = $value['poster'];
                 $title = $value['title'];
                $year = $value['year'];
            ?>
                <div class="card">
                    <img src="<?php
                                echo  $poster
                                ?>" alt="">
                    <div class="card_body">
                        <h3>
                            <?php
                            echo  $title
                            ?>
                        </h3>
                        <p>
                            <?php
                            echo  $author
                            ?>
                        </p>
                        <p>
                            <?php
                            echo  $year
                            ?> -->
                        </p>

                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>
<?php
