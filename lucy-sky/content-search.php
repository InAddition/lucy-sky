<div class="container site-module white-background with-background">
	<div class="wysiwyg">
		<h5><?php $post_type = get_post_type_object( get_post_type($post) );
			echo $post_type->labels->singular_name ; ?></h5><p><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></p>
	</div>
</div>