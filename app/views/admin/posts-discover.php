        <div class="d-flex mb-4">
            <button class="btn <?= ($data["nav"] == "def")?'btn-info ': 'btn-secondary'; ?> mr-2" onclick='postsNav("all")'>All Posts</button>
            <button class="btn <?= ($data["nav"] == "sus")?'btn-info ': 'btn-secondary'; ?>" onclick='postsNav("sus")'>Suspended Posts</button>
          </div>
         <!-- all status -->
        <div class="status" id="posts-result">
        <?php require_once("posts-result.php") ?>