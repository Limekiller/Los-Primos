<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="./style.css" />
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./scripts/header.js"></script>
        <script src="./scripts/index.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoKMv8WQN8ytcp_J1GJPCKaxTtrtH71jg&callback=initMap" type="text/javascript"></script>
        <title>
            Los Primos Mexican Grill
        </title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
		<a href="/">
                <div class="logo">
                    <section class="blocker"></section>
                    <img src="./images/chili.svg"/>
                    <div>
                        <h1>LOS PRIMOS</h1>
                        <h5>MEXICAN GRILL</h5>
                    </div>
                </div>
		</a>
                <nav class="menu">
                    <ul>
                        <li><a href="./menu.php">Menu</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li>Contact</li>
                    </ul>
                </nav>
            </div>
            <div class="feature">
                <div class="feature_container">
                    <div class="feature_cascade">
                        <h1 class="head" style="text-shadow:2px 2px #000; color:#00AF5F;">Unparalleled authentic Mexican cuisine, right here in Goshen.</h1>
                        <p>Looking for authentic, delicioius Mexican food in Goshen? Los Primos has the best there is. Our two locations provide different dining experiences for any mood: dine in at our cozy sit-down family restaurant at 122 East Clinton Street, or grab your food faster at our Chipotle-style 124 West Jefferson Street location! No matter which you choose, you'll experience only the best ingredients prepared perfectly just for you.</p>
                        <div>
                            <div id="fi1" class="featured_item featured_item_selected">
                            <h1>Cochinita Pibil</h1>
                            <p>Slow-roasted pork marinated in citrus and wrapped in a banana leaf, served with habaneros, refried black beans, rice, and corn tortillas. This delicious, traditional Mexican dish will leave any hunger satisfied.</p>
                            </div>
                            <div id="fi2" class="featured_item">
                            <h1>Featured Item 2</h1>
                            <p>Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah </p>
                            </div>
                            <div id="fi3" class="featured_item">
                            <h1>Featured Item 3</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                            </div>
                            <div id="fi4" class="featured_item">
                            <h1>Featured Item 4</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                            </div>
                            <div id="fi5" class="featured_item">
                            <h1>Featured Item 5</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                            </div>
                        </div>
                        <div class="img_selector">
                            <div id="is1" class="img_select img_select_on"></div>
                            <div id="is2" class="img_select"></div>
                            <div id="is3" class="img_select"></div>
                            <div id="is4" class="img_select"></div>
                            <div id="is5" class="img_select"></div>
                        </div>
                    </div>
                    <div class="plates">
                       <img id="p1" class="plate plate_selected" src="./images/plate1.png"/>
                       <img id="p2" class="plate " src="./images/plate2.png"/>
                       <img id="p3" class="plate " src="./images/plate3.png"/>
                       <img id="p4" class="plate " src="./images/plate4.png"/>
                       <img id="p5" class="plate " src="./images/plate5.png"/>
                    </div>
                </div>
            </div>
            <div style="height:200px;"></div>
	    <h1 id='rh'>Customer Reviews</h1>
	    <div class="reviews">
	            <?php
	                $html = file_get_contents('https://www.yelp.com/biz/los-primos-restaurant-goshen?sort_by=rating_desc');
	                $review_doc = new DOMDocument();
	                libxml_use_internal_errors(TRUE);
	                if(!empty($html)){
	                    $review_doc->loadHTML($html);
	                    libxml_clear_errors();
	                    $review_xpath = new DOMXPath($review_doc);
	                    $review_row = $review_xpath->query('//li[@class="user-name"]');
	                    if($review_row->length > 0){
	                        for($i = 0; $i < 6; $i++){
				    ${'title'.$i} = str_replace(array("\r", "\n"), '', $review_row[$i]->nodeValue);
	                            echo"\n";
	                        }
	                    }
	                    $review_row = $review_xpath->query('//p[@lang="en"]');
	                    if($review_row->length > 0){
	                        for($i = 0; $i < 6; $i++){
	                            ${'review'.$i}= str_replace(array("\r", "\n"), '', $review_row[$i]->nodeValue);
	                            echo"\n";
	                        }
	                    }
	               
	                     }
			for($i = 0; $i < 6; $i++){
				echo '<div class="review">';
				echo '<h2>'.${'title'.$i}.'</h2>';
				echo '<hr/><br/>';
				echo '<p>'.${'review'.$i}.'</p>';
				echo '</div>';
			}
	            ?>
	        </div>
		<a target="_blank" class="button"href="https://www.yelp.com/biz/los-primos-restaurant-goshen?sort_by=rating_desc">
			<div><h2>See more reviews</h2></div>
		</a>
		<div class="map">
			<div class="map_text">
				<h1>Locate Us</h1>
				<br />
                            	<b>Los Primos Restaurant & Catering</b> <br /> 122 E Clinton St <br /> Goshen, IN 46528
				<br /> (574) 533-5326 <br /><br /><hr /><br /> <b>Los Primos Mexican Grill</b> 
				<br /> 124 W Jefferson St <br /> Goshen, IN 46528 <br /> (574) 971-5223
			</div>
			<div id="map"></div>
		</div>
        </div>

        <div style="height:150px;"></div>
        <div class="footer">
                <div class="flogo">
                    <img src="./images/chili.svg"/>
                    <div style="width:100%;">
                        <h1>LOS PRIMOS</h1>
                        <h5>MEXICAN GRILL</h5>
                    </div>
                </div>
		<div class="finfo">Created by Bryce Yoder, 2018.</div>
        </div>
    </body>
</html>
