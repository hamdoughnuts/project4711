<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container-fluid">
    <div class="row-fluid top-buffer">

        <div class="col-md-6">
            <a href="/data/{image}" data-lightbox="{id}" data-title="{shorttext}">
                <img src="/data/{image}" title="{name}" class="img-responsive"/>
            </a>
            <a href="/data/{image2}" class="hide" data-lightbox="{id}" data-title="{shorttext}">
                <img src="/data/{image2}" title="{name}" class="img-responsive"/>
            </a>
            <a href="/data/{image3}" class="hide" data-lightbox="{id}" data-title="{shorttext}">
                <img src="/data/{image3}" title="{name}" class="img-responsive"/>
            </a>
        </div>


        <div class="col-md-6 whiteBox">
            <span class="whiteWords"><b>{name}</b></span>
            <br/>

            <span class="whiteWords">{contact}</span>
            <br/>
            <span class="whiteWords">{address}</span>
            <br/>
            <span class="whiteWords"><b>Our most popular dish: {most_popular}</b></span>
            
            <div class="fb-like" data-href="http://www.bcit.ca/" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
            <div class="fb-share-button" data-href="http://www.bcit.ca/" data-layout="button_count"></div>
            <div class="fb-follow" data-href="https://www.facebook.com/bcit.ca" data-width="5" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
        </div>

        <div class="col-md-12 top-buffer whiteBox">
            <span class="whiteWords">{longtext}</span>
        </div>

    </div>
</div>