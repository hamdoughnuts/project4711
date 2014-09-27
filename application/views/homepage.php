<!--
<div class="row">
    {attractions}
    <div class="span4"><a href="{category}/{location}"><img src="/data/{image}" title="{location}"/></a></div>
    {/attractions}
</div>
-->
<!-- Most recent  -->
<div class="col-lg-12" id="recent-div">
    <div class="col-xs-12 top-buffer " id="inner-recent-div">

        <div class="col-lg-4 col-md-6"><a href="{category}/{location}"><img src="/data/{image}" title="{location}"/></a>
        </div>
        <div class="col-lg-4 col-md-6"><a href="{category}/{location}"><img src="/data/{image}" title="{location}"/></a>
        </div>
        <div class="col-lg-4 col-md-6"><a href="{category}/{location}"><img src="/data/{image}" title="{location}"/></a>
        </div>


    </div>


</div>
<!-- End most recent-->
<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid">
        <div class="row">

            <!-- EAT PLAY SLEEP BUTTONS-->

            <div id="eat-play-sleep" class="col-lg-12 top-buffer">
                <!-- CATEGORY BUTTON-->
                
                {categories}
                <div id="cat-divs" class="col-lg-4">
                    <div id="inner-cat-divs" class="col-lg-11">

                        <div class="col-lg-4">
                            <a href="{ccategory}/{clocation}">
                                <img class="fitImgToContainer" src="/data/{cimage}" title="{clocation}"/>
                            </a>
                        </div>
                        
                    </div>
                </div>
                {/categories}

            </div>
            <!-- END EAT PLAY SLEEP BUTTONS-->

        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->