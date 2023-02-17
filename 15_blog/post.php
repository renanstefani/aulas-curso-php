<?php
    include_once("./templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            // Se o id do post é o mesmo requisitado com GET
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

    }

    ?>
<body>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>

            <p id="post-description"><?= $currentPost['description'] ?></p>

            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, quasi repellat, ut quisquam illum nobis earum eaque provident similique mollitia ab laudantium dolorum. Laborum alias labore doloremque praesentium, delectus odit!
            Est doloribus sequi expedita nostrum maiores, culpa, illo, fugit quaerat a animi ex id earum vitae qui vel saepe quisquam quidem quis laudantium ut! Dolor magnam dolores asperiores repellat perspiciatis!
            Vitae doloremque beatae, deleniti corporis quisquam non quo consequuntur eaque nihil nobis modi eum vero facilis quidem quae, deserunt enim nam ea harum incidunt! Reprehenderit aut facilis consectetur consequatur libero.
            Corrupti laborum obcaecati veniam quod eaque soluta, id voluptas temporibus? Eveniet vitae, repudiandae corrupti accusamus earum ipsam quasi labore voluptatum mollitia sequi magni maxime accusantium recusandae, dolore quas explicabo necessitatibus!
            Ducimus, quas vero. Suscipit maxime eligendi quia repudiandae quidem eveniet. Dolorum consectetur iure ex natus necessitatibus porro, error neque vel eius architecto, veniam quaerat quos quam! Cum nulla iste harum.</p>
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
    
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
    
            <h3 id="categories-title">Categorias</h3>
    
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

    
    <?php
    include_once("./templates/footer.php");
?>