<?php
if (post_password_required()) return;
?>

<div class="comments">
    <string class="comments-title">评论列表</string>

    <?php 
    function my_custom_comment_list($comment, $args, $depth){
        $GLOBALS['comment'] = $comment;
        ?>
        <div class="comment">
            <div class="comment-body">
                <div class="comment-author">
                    <div class="avatar">
                        <?php echo get_avatar($comment, 30); ?>
                    </div>
                    <span class="author-name"><?php comment_author(); ?>: &nbsp;</span>
                </div>
                <div class="comment-content">
                    <?php comment_text(); ?>
                </div>
                <div class="comment-meta">
                    <span class="comment-time">&nbsp;<?php comment_date('Y-m-d'); ?></span>
                    <span class="reply-link">
                        <?php comment_reply_link( array_merge( $args, array(
                            'depth'      => $depth,
                            'max_depth'  => $args['max_depth'],
                            'reply_text' => '回复',
                            'login_text' => '登录以回复',
                            'before'     => '',
                            'after'      => '',
                        ) ) ); ?>
                    </span>
                </div>
            </div>
        </div>
        <?php 
    } 

    if (have_comments()) :
        wp_list_comments(array(
            'callback' => 'my_custom_comment_list',
        ));
    endif;


    if (comments_open()) {
        comment_form(
            array(
                'title_reply_before' => '<p class="comments-title">',
                'title_reply_after'  => '</p>',
                'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" rows="6" placeholder="' . '禁止垃圾评论' . '" required></textarea></p>'
            )
        );
    }
    ?>
</div><!-- #comments -->