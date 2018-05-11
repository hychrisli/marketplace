<?php

function productTile($title, $description, $productUrl, $imgUrl, $company)
{

  $description = trim(preg_replace('/\s+/', ' ', $description));
  print ("
    
    <div class=\"col-sm-6 col-md-3 col-lg-3 $company\">
      <div class=\"portfolio-item\">
        <div class=\"hover-bg\"> 
          <a onclick='toProductPage(\"$title\", \"$description\", \"$productUrl\", \"$imgUrl\")'>
            <div class=\"hover-text\">
              <h4>$title</h4>
              <small>$description</small> </div>
            <img src=$imgUrl class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
      </div>
    </div>
    ");
}?>

<script type="text/javascript">
  function toProductPage(title, desc, productUrl, imgUrl) {
    const form = document.createElement('form');
    const titleElem = document.createElement('input');
    const descElem = document.createElement('input');
    const productUrlElem = document.createElement('input');
    const imgUrlElem = document.createElement('input');


    form.action ='product.php';
    form.method = 'post';

    titleElem.value = title;
    titleElem.name = 'title';
    descElem.value = desc;
    descElem.name = 'desc';
    productUrlElem.value = productUrl;
    productUrlElem.name = 'productUrl';
    imgUrlElem.value = imgUrl;
    imgUrlElem.name = 'imgUrl';

    form.appendChild(titleElem);
    form.appendChild(descElem);
    form.appendChild(productUrlElem);
    form.appendChild(imgUrlElem);

    document.body.appendChild(form);

    console.log(form);
    form.submit();
  }
</script>


