
<h1 class="mdl-typography--font-light">Press Releases</h1>

<h4>Contact Us</h4>
<p>
    If you'd like to write a story about Rime, please get in touch!
    Are you a journalist? Let us know if you're interested in getting occasional press-related news. <?php echo mailto('press@rime.co', NULL, ['subject' => 'Press']
</p>

<?php 
$articles = [
    [
        'Rime is a desktop app from 2 Indian founders that allows you to display all of your social media content in one place',
        'Edmund',
        'Haggerston Times',
        'Sep 3, 2015',
        'http://www.haggerston-times.com/rime-is-a-desktop-app-from-2-indian-Founders-that-allows-you-to-display-all-of-your-social-media-content-in-one-place'
    ],
    [
        'Research assistants from IIT Bombay start a social media startup',
        'YS Team',
        'YourStory',
        'Feb 20, 2015',
        'http://yourstory.com/2015/02/rime-social-media'
    ],
    [
        'Indian Startup Opportunities',
        'Ravi Vooda',
        'Mafianz',
        'Apr 16, 2014',
        'http://www.mafianz.com/blog/philosophy/indian-startup-opportunities'
    ],
];

foreach ($articles as $article)
{
    ?>
    <h4 class="mdl-typography--font-light"><?php echo $article[0]; ?></h4>
    <p>
        <a href="<?php echo $article[4]; ?>" target="_blank"><?php echo $article[3]; ?></a>
        <?php echo $article[1]; ?>, <?php echo $article[2]; ?>
    </p>
    <?php
}
?>
