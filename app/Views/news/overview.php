
<?php if (! empty($news) && is_array($news)) : ?>
    
    <div class="mt-5 row row-cols-1 row-cols-md-3">
        <?php foreach ($news as $news_item): ?>

            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $news_item['title'] ?></h5>
                        <p class="card-text"><?= $news_item['body'] ?></p>                    
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('/news/'.$news_item['slug']) ?>" class="btn btn-primary">View</a>
                        <a href="<?= base_url('/edit-news/'.$news_item['slug']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('/delet-news/'.$news_item['slug']) ?>" class="btn btn-danger">Delet</a>
                    </div>
                </div>
            </div>
                    
        <?php endforeach; ?>
    </div>
        
<?php else : ?>
            
    <h3>No News</h3>
            
    <p>Unable to find any news for you.</p>
            
<?php endif ?>
