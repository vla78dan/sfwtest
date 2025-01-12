<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Album example · Bootstrap v5.3.3</title>

    <?php //wp_head();?>
</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other
                        background context. Make it a few sentences long so folks can pick up some informative tidbits.
                        Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                     stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                     viewBox="0 0 24 24">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                    <circle cx="12" cy="13" r="4"/>
                </svg>
                <strong>Album</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

Подключили в файле header.php-->
<?php get_header(); ?>


<main>

    <div class="album py-5 bg-light">
        <div class="container">


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <!-- Цикл WordPress (The Loop) — это перебор записей (постов) и вывод какой-либо информации о каждом посте. Цикл получает массив записей (объектов), перебирает этот массив и во время перебора выводит информацию о каждом посте. При этом в цикле используются специально созданные для него функции: the_title(), the_permalink(), the_date() и т.д.-->

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!-- Цикл WordPress -->

                    <div class="col">
                        <div class="card shadow-sm">
                            <?php echo sfwtest_post_thumb(get_the_ID())  ?>

<!-- -------------------------------function sfwtest_postthumb()
                            <div class="card-thumb">
                                    <?php //if (has_post_thumbnail()): ?>
                                    <?php //the_post_thumbnail('full', array('class' => "attachment-test")); ?>
                                <?php //else: ?>
                                <img src="https://picsum.photos/seed/picsum/1200/900"
                                     class="attachment-test"
                                     alt=""
                                     width="1200"
                                     height="900">
                                <?php //endif; ?>
                             </div>

 END ---------------------------------function sfwtest_postthumb() -->

                            <div class="card-body">
                                <h5 class="card-title"><?php the_title();  ?></h5>
                                <div class="card-text"><?php the_excerpt(); //the_content('');?></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">View</a>

                                    </div>
                                    <small class="text-muted">
                                        <?php
                                        echo sfwtest_get_human_time();

                                        /*$time_diff = human_time_diff(get_post_time('U'), current_time('timestamp'));
                                        echo "Опубликовано $time_diff назад.";
                                        the_time('Опубликовано: ' . 'Y-m-d H:i:s');
                                        */
                                        ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; else : ?>
                    <p>Записей нет.</p>
                <?php endif; ?>

                <!-- -----------End Цикл WordPress (The Loop)---------------- -->


            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

<!-- Переносим футер в footer.php

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                    href="/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
    </div>



</footer>
<?php //wp_footer();?>

</body>
</html>

________________________________ -->
