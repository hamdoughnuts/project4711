
<script type="text/javascript">
    window.twttr = (function(d, s, id) {
        var t, js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
        return window.twttr || (t = {_e: [], ready: function(f) {
                t._e.push(f)
            }});
    }(document, "script", "twitter-wjs"));
</script>

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
            <span class="whiteWords">Entrance fee: {entrance_fee}</span>
            <br/>
            <a class="twitter-follow-button"
               href="https://twitter.com/bcit"
               data-show-count="false"
               data-lang="en">
                Follow @twitterdev
            </a>
        </div>

        <div class="col-md-12 top-buffer whiteBox">
            <span class="whiteWords">{longtext}</span>
        </div>

    </div>
</div>