<form action="/index.php/topic/add" method="post">
    <?php echo validation_errors(); ?>
    제목 : <input type="text" name="title">
    본문 : <textarea name="description"></textarea>
    <input type="submit">
</form>
