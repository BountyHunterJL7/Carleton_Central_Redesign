<?php

class Article
{
    public $title;
    public $image;
    public $link;

    function __construct($title, $image, $link)
    {
        $this->title = $title;
        $this->image = $image;
        $this->link = $link;
    }
}

$articles = array(
    new Article("Carleton Central 2.0 is now open to the public!", "../media/carleton_mini_logo.png", "https://media0.giphy.com/media/8j3CTd8YJtAv6/giphy.gif?cid=790b7611340fef388ff69a11a4e2895b2fad6cc03da42545&rid=giphy.gif"),
    new Article("You can now use this site instead of Carleton Central", "../media/campus_landscape_summer.jpg", "https://media0.giphy.com/media/8j3CTd8YJtAv6/giphy.gif?cid=790b7611340fef388ff69a11a4e2895b2fad6cc03da42545&rid=giphy.gif"),
    new Article("Feel free to look around", "../media/campus-card.png", "https://media0.giphy.com/media/8j3CTd8YJtAv6/giphy.gif?cid=790b7611340fef388ff69a11a4e2895b2fad6cc03da42545&rid=giphy.gif"),
);

foreach ($articles as $article)
{
    echo '
    <li class="news-item" onclick="location.href = `' . $article->link . '`;">
        <img src="' . $article->image . '">
        <h2 class="article-name text">' . $article->title . '</h2>
    </li>
    ';
}
?>