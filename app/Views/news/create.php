
<div class="card mt-5">
  <div class="card-body">
    <h2 class="card-title"><?= esc($title); ?></h2>

    <form method="post" action="<?= base_url('news/create') ?>">
        
    <input type="hidden" name="id" value="<?= (isset($news['id']) && $news['id']) ? $news['id'] : ''?>">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= (isset($news['title']) && $news['title']) ? $news['title'] : ''?>">
        </div>

        <div class="form-group">
            <label for="body">Text</label>
            <textarea class="form-control" name="body" id="body" rows="6"><?= (isset($news['body']) && $news['body']) ? $news['body'] : ''?></textarea>
        </div>

        <button type="submit" class="btn btn-primary"><?= (isset($news['id']) && $news['id']) ? 'Update' : 'Create'?> news item</button>
    </form>
  </div>

  <div class="card-footer">
    <?= \Config\Services::validation()->listErrors(); ?>
  </div>
</div>



