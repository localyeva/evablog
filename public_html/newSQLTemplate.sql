
insert into wp_postmeta(post_id, meta_key, meta_value)
(select wp_posts.ID, 'redirect_url', '' 
from wp_posts where `post_status`='publish')