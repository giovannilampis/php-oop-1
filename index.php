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
        public $title;
        public $director;
        public $producer;
        public $year;
        public $length;
        public $language;

        public function __construct($_title, $_director, $_producer, $_year, $_length, $_language)
        {
            $this->title = $_title;
            $this->director = $_director;
            $this->producer = $_producer;
            $this->year = $_year;
            $this->length = $_length;
            $this->language = $_language;

        }

        public function setTitle($valueTitle)
        {
            $this->title = $valueTitle;
        }

        public function setDirector($valueDirector)
        {
            $this->director = $valueDirector;
        }

        public function watchMovie()
        {
            return "Start to watch the movie {$this->title} , filmed by the director {$this->director}";
        }

    }

    ?>

</body>

</html>