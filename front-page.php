<header>
    <?php get_header(); ?>
</header>
<div class="container-fluid full-width bg-black">
    
    <div class="container-fluid full-width mobile-edition">
        <?php if( have_rows('slides') ): ?>
            <div class="flexslider">
                <ul class="slides">
                    <?php while( have_rows('slides') ): the_row(); 
                        $image = get_sub_field('image');
                        $imageurl= $image;
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $button_text = get_sub_field('button_text');
                        ?>
                        <li>
                            <div class="inside-slide">
                                <img src= "<?php echo $imageurl;?>" alt="<?php echo $title;?>">
                                <div class="centered-slide">
                                    <div class="centered-title"><h1><?php echo $title;?> </h1> </div>
                                    <div class="centered-text"><h6><?php echo $text;?> </h6></div>
                                    <div class="centered-button_text"><button class="button-inside-slide"><?php echo $button_text;?> </button></div>

                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <div class="container-fluid full-width customer">
        <section class="customer-logos">
                <?php if( have_rows('sponsors') ): ?>        
                
                            <?php while( have_rows('sponsors') ): the_row(); 
                                $image = get_sub_field('image');
                                $imageurl= $image['sizes']['smallest'];
                                ?>
                            <div class="slide"><img src= "<?php echo $imageurl;?>"></div>
                                
                            <?php endwhile; ?>
                <?php endif; ?> 
            
        </section>
    </div>

    <div class="container bootstrap snippets bootdey">
        <section id="services" class="current">
            <div class="services-top">
                <div class="container bootstrap snippets bootdey">
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-md-12">
                            <h2 class="customer-title">Work with us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10">
                            <div class="services-list">
                                <div class="row">
                                <?php if( have_rows('work_with_us') ): ?>        
        
                                    <?php while( have_rows('work_with_us') ): the_row(); 
                                        $image = get_sub_field('image');
                                        $imageurl= $image['sizes']['smallest'];
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        ?>
                                    <div class="col-sm-6 col-md-4 col-md-4">
                                        <div class="service-block" style="visibility: visible;">
                                            <div class="ico"><img src= "<?php echo $imageurl;?>"></div>
                                            <div class="text-block">
                                                <div class="name"><?php echo $title;?></div>
                                                <div class="text"><?php echo $description;?></div>
                                            </div>
                                        </div>
                                    </div>    
                                    <?php endwhile; ?>

                                <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>     

    <div class="container bootstrap snippets bootdey">
        <section id="services" class="current">
            <div class="services-without-top">
                <div class="container bootstrap snippets bootdey">
                    <div class="row justify-content-center">
                        <div class="col-md-offset-1 col-sm-6 col-md-6 col-md-8">
                            <div class="services-list">
                                <div class="row">
                                <?php if( have_rows('about_us') ): ?>        
        
                                    <?php while( have_rows('about_us') ): the_row(); 
                                        $image = get_sub_field('image');
                                        $imageurl= $image['sizes']['smallest'];
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        ?>
                                    <div class="col-sm-6 col-md-4 col-md-4">
                                        <div class="service-block" style="visibility: visible;">
                                            <div class="ico" style="width: 50px;"><img src= "<?php echo $imageurl;?>"></div>
                                            <div class="text-block">
                                                <div class="name"><?php echo $title;?></div>
                                                <div class="text"><?php echo $description;?></div>
                                            </div>
                                        </div>
                                    </div>    
                                    <?php endwhile; ?>

                                <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>     
            
</div>
