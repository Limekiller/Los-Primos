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
        for($i = 1; $i <= 3; $i++){
            echo str_replace(array("\r", "\n"), '', $review_row[$i]->nodeValue);
            echo"\n";
        }
    }
    $review_row = $review_xpath->query('//p[@lang="en"]');
    if($review_row->length > 0){
        for($i = 1; $i <= 3; $i++){
            echo str_replace(array("\r", "\n"), '', $review_row[$i]->nodeValue);
            echo"\n";
        }
    }

}
?>
