<?=$this->layout('index');?>

    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(images/background/page-banner-bg-2.jpg);">
    	<div class="auto-container text-center">
        	<h1><?=$post['title'];?></h1>
            <!--<ul class="bread-crumb"><li><a href="#">Home</a></li> <li><a href="#">Blog</a></li> <li>Blog Detail</li></ul>-->
        </div>
    </section>
    
	<!-- Blog Section Begins -->
    <section id="blog" class="blog-area single section">
        <div class="auto-container">
            <div class="row">
                <!-- Blog Left Side Begins -->
                <div class="col-md-8">
                    <!-- Post -->
                    <div class="post-item">
                        <!-- Post Title -->
                        <h2 class="wow fadeInLeft"><?=$post['title'];?></h2>
                        <div class="post wow fadeInUp">
							<?php if ($this->e($post['picture']) != '') { ?>
                            <!-- Image -->
                            <img class="img-responsive" src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($post['picture']);?>" alt="" />
							<?php } ?>
                            <div class="post-content wow fadeInUp">	
                                <!-- Meta -->
                                <div class="posted-date"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?>  /   <span>by</span> <a href="#"><?=$this->post()->getAuthorName($post['editor']);?></a>   /   <a href="#"><?=$this->post()->getCountComment($post['id_post']);?>Komentar</a></div>
                                <!-- Text -->
                                <?=htmlspecialchars_decode(html_entity_decode($post['content']));?>
                                <div class="share-btn">
                                    <a href="#" class="btn fb-bg">Share on <b>Facebook</b></a>
                                    <a href="#" class="btn twitter-bg">Share on <b>Twitter</b></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Post -->	
                    
                    <!-- Author Section -->
                    <div class="author wow fadeInUp">
                        <!-- Image -->
                        <img src="images/blog/author/1.jpg" alt="" />
                            <div class="author-comment">
                                <h5>John Michaels</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.</p>
                            </div>						
                    <div class="clear"></div>							
                    </div><!-- Author Section Ends-->

                    <!-- Comment Section -->
                    
                    
                    
                    
                    
                </div><!-- Blog Left Side Ends -->
                
                
                <!-- Blog Sidebar Begins -->
               
                
				<!-- Insert Sidebar -->
				<?=$this->insert('sidebar');?>
                    
                </div><!-- Blog Sidebar Ends -->
                
            </div>
        
        </div>
    </section><!-- Our Blog Section Ends -->