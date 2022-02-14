<!DOCTYPE html>
<title>Blog</title>
<link rel="stylesheet" href="/app.css">


<body>

    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">
                    <?= $post->title; ?>
                </a>
            </h1>
            <div>
                <?= $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>



<!-- <article>
        <h1> <a href="/posts/mi-primer-post">Mi primer post</a> </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, consequatur! Debitis facere voluptatum in at vero ea esse. Consectetur maiores minima eum rem voluptatibus quidem similique quia molestias fugit ullam!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi natus, necessitatibus et praesentium provident labore aut asperiores architecto quasi cupiditate placeat sunt id accusamus? A quo tempora autem at doloribus!
        </p>
    </article> -->
<!-- <article>
        <h1><a href="/posts/mi-segundo-post">Mi segundo post</a> </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, consequatur! Debitis facere voluptatum in at vero ea esse. Consectetur maiores minima eum rem voluptatibus quidem similique quia molestias fugit ullam!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sed vero fugiat dolorum quidem saepe ea possimus similique excepturi, consequuntur dolore aut culpa facere aspernatur, laborum dolor iusto tenetur quos.
        </p>
    </article>
    <article>
        <h1><a href="/posts/mi-tercer-post">Mi tercer post</a> </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, consequatur! Debitis facere voluptatum in at vero ea esse. Consectetur maiores minima eum rem voluptatibus quidem similique quia molestias fugit ullam!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti dignissimos enim rem sapiente esse odio quasi repellendus minus dolor, recusandae cumque quis nesciunt eaque fugit odit pariatur adipisci. Culpa, modi.
        </p>
    </article> -->
