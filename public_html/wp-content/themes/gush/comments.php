<div id="comment_box">
<?php if( have_comments() ): // コメントがあったら ?>
<h3 id="comments">Comment</h3>
<ol class="commets-list">
<?php wp_list_comments( 'avatar_size=55' ); ?>
</ol>
<?php endif; ?>
<?php $args = array(
'title_reply' => 'Your Message',
'label_submit' => 'コメント送信',
);
comment_form( $args ); ?>
</div>