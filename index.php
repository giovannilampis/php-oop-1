<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>

    <?php

    class Movie
    {
        public $director;
        public $producer;
        public $year;
        public $length;
        public $language;

        public function __construct($_director, $_producer, $_year, $_length, $_language)
        {
            $this->director = $_director;
            $this->producer = $_producer;
            $this->year = $_year;
            $this->length = $_length;
            $this->language = $_language;

        }

    }

    ?>

</body>

</html>