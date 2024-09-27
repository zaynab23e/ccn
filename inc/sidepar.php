<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							

							<?php
							$select3="SELECT * FROM category ";
							$res=$conn->query($select3);
							while($ro=$res->fetch_assoc()){
							?>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product-details.php?id_c=<?=$ro['id']?>"><?=$ro['name']?></a></h4>
								</div>
							</div>

                          <?php
							}
							?>

						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php
							$select="SELECT * FROM prand ";
							$re=$conn->query($select);
							while($r=$re->fetch_assoc()){
							?>
									<li><a href="product-details.php?id_p=<?=$r['id']?>"> <span class="pull-right"></span>  <?=$r['name']?></a></li>
								<?php
							}
							?>

								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>