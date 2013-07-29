			<div class="sidebar">
                <div class="sidebarContent">
                    <div class="close">

                    </div>
                    <h2>Hi I'm Kyle</h2>
                    <p>
                        i'm a freelance front end 
                        designer and developer living
                        in boston ma. 
                    </p>
                    <h3>Development</h3>
                    <ul>
                    <?php
                        $recentPosts = new WP_Query();
                        $recentPosts->query('category_name=Development');
                    ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                    </ul>
                    <h3>Design</h3>
                    <ul>
                    <?php
                        $recentPosts = new WP_Query();
                        $recentPosts->query('category_name=Design');
                    ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                    </ul>
                </div><!--sidebarcontent-->
            </div><!--sidebar-->
