<!-- Insert sidebar script here -->
 <!-- Blog Sidebar Begins -->
                <div class="col-md-4">
                
                    <div class="sidebar">
                    
                        <!-- Search -->
                        <div class="search wow fadeInUp">
                            <form>
                                <input type="search" name="name" placeholder="SEARCH..">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                        
                        <!-- Popular Post -->
                        <div class="blog/popular-post widget wow fadeInUp">
                            <!-- Title -->
                            <h2>most popular posts</h2>
                            <ul class="popular-list">
                                <!-- Item -->
                                <li>
								
								<?php
									$populars_side = $this->post()->getPopular('5', 'DESC', WEB_LANG_ID);
									foreach($populars_side as $popular_side){
								?>
                                    <!-- Post Image -->
                                    <a href="#"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_side['picture'];?>" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$popular_side['seotitle'];?>"><?=$popular_side['title'];?></a></h3>
                                        <div class="posted-date"><?=$this->pocore()->call->podatetime->tgl_indo($popular_side['date']);?></div>
                                    </div>
                                </li>
                               </ul>
							<?php } ?>
                        </div><!-- Popular Post Ends-->
                        
                        <!-- Newest Posts -->
                        <div class="blog/popular-post widget wow fadeInUp">
                            <!-- Title -->
                            <h2>Newest posts</h2>
                            <ul class="popular-list">
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="images/blog/popular-post/1.jpg" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="images/blog/popular-post/2.jpg" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="images/blog/popular-post/3.jpg" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="images/blog/popular-post/4.jpg" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- Newest Post Ends-->
                        
                        
                        <!-- Category Posts -->
                        <div class="category widget wow fadeInUp">
                            <!-- Title -->
                            <h2>Categories</h2>
                            <ul class="category-list">
                                <li>
                                    <h3><a href="#">Asset Protection</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Bankruptcy</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Bankruptcy Alternatives</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Clients</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Credit Cards</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Pilates</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Running</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Estate Planning</a></h3>
                                </li>
                            </ul>
                        </div><!-- Category Ends-->
                        
                    </div>
                    
                </div><!-- Blog Sidebar Ends -->