<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
								<?php
                                    if( ! have_comments() ){ # ! = if not
                                        echo "Leave a comment";
                                    } else {
                                        echo get_comments_number()." Comments";
                                    }
                                ?>

						</div><!-- .comments-header -->

						<div class="comments-inner">

							<?php
                               
                                wp_list_comments(
                                    array(#there's a lot of parameter that can be added
                                        'avatar_size' => 120,
                                        'style' => 'div',
                                    )
                                );
                            ?>

						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">
                        <?php
                            if( comments_open() ){ #checks if comments are allowed on a page
                                comment_form(
                                    array(
                                        'class_form' => '',
                                        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                                        'title_reply_after' => '</h2>',
                                    )
                                );
                            }
                        ?>

				</div>