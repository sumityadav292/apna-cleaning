
<?php

require_once __DIR__ . '/../includes/bootstrap.php';

$pageTitle = 'Cleaning Tips & Guides | Apna Cleaning Mumbai';

$pageDescription = 'Explore practical cleaning guides, home care tips, kitchen cleaning advice and useful information about maintaining cleaner residential and commercial spaces in Mumbai.';

$posts = blog_posts();

require __DIR__ . '/../includes/header.php';

?>

<!-- BLOG HERO -->
<section class="page-hero page-hero-compact">

    <div
        class="page-hero-image"
        style="background-image:url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1800&q=82')">
    </div>

    <div class="page-hero-overlay"></div>

    <div class="container page-hero-content">

        <div class="eyebrow eyebrow-light">
            <span></span> NOTES FOR BETTER SPACES
        </div>

        <h1>
            Ideas for a more
            <em>considered clean.</em>
        </h1>

        <p>
            Explore practical cleaning guides, helpful home care tips
            and useful information for maintaining cleaner spaces.
        </p>

        <div class="breadcrumbs">

            <a href="<?= e(site_url()) ?>">Home</a>

            <i class="fa-solid fa-angle-right"></i>

            <span>Blog</span>

        </div>

    </div>

</section>


<!-- BLOG LISTING -->
<section class="section">

    <div class="container">

        <div class="section-heading heading-split reveal">

            <div>

                <div class="eyebrow">
                    <span></span> THE JOURNAL
                </div>

                <h2>
                    Fresh thinking,
                    <em>simple guidance.</em>
                </h2>

            </div>

            <p>
                Discover helpful information about home deep cleaning,
                sofa care, kitchen hygiene, bathroom maintenance,
                office cleaning and everyday cleaning requirements.
            </p>

        </div>


        <div class="blog-grid">

            <?php if (!empty($posts)): ?>

                <?php foreach ($posts as $slug => $post): ?>

                    <article class="blog-card reveal">

                        <a
                            class="blog-image"
                            href="<?= e(page_url('blog/' . rawurlencode($slug))) ?>"
                        >

                            <img
                                src="<?= e($post['image']) ?>"
                                alt="<?= e($post['title']) ?>"
                                loading="lazy"
                            >

                            <span class="blog-image-arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>

                        </a>


                        <div class="blog-card-content">

                            <div class="blog-meta">

                                <span>
                                    <?= e($post['category']) ?>
                                </span>

                                <time datetime="<?= e($post['date']) ?>">
                                    <?= e(date('M j, Y', strtotime($post['date']))) ?>
                                </time>

                            </div>


                            <h3>

                                <a href="<?= e(page_url('blog/' . rawurlencode($slug))) ?>">
                                    <?= e($post['title']) ?>
                                </a>

                            </h3>


                            <p>
                                <?= e($post['excerpt']) ?>
                            </p>


                            <div class="blog-card-bottom">

                                <small>
                                    <?= e($post['read_time']) ?>
                                </small>

                                <a href="<?= e(page_url('blog/' . rawurlencode($slug))) ?>">

                                    Read article

                                    <i class="fa-solid fa-arrow-right"></i>

                                </a>

                            </div>

                        </div>

                    </article>

                <?php endforeach; ?>

            <?php else: ?>

                <div class="blog-empty-state">

                    <h3>New articles are coming soon.</h3>

                    <p>
                        Please check back for useful cleaning guides
                        and home care information.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>


<?php require __DIR__ . '/../includes/footer.php'; ?>
