<div id="commentsection">
<div id="commentform">
<?php comment_form(); ?>
</div>
<ol class="commentlist">
    <?php wp_list_comments(); ?>
</ol>

<?php if(function_exists('wp_simple_comments_pagination')) {
    wp_simple_comments_pagination();
} ?>

</div>