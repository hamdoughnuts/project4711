<!--
<div class="row">
    {attractions}
    <div class="span4"><a href="{category}/{location}"><img src="/data/{image}" title="{location}"/></a></div>
    {/attractions}
</div>
-->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- Most recent  -->
            <div class="col-lg-12">
                <div class="col-lg-8 col-lg-offset-2 " id="recent-div">

                    <div class="span4"><a href="{category}/{location}"><img src="/data/{image}" title="{location}"/></a></div>

                </div>

            </div>
            <!-- End most recent-->
            <!-- EAT PLAY SLEEP BUTTONS-->

            <div id="eat-play-sleep" class="col-lg-12 top-buffer">
                <!-- CATEGORY BUTTON-->
                
                {categories}
                <div id="eat-div" class="col-lg-4">
                    <div class="col-lg-10 col-lg-offset-1">
                        
                        <div class="span4"><a href="{ccategory}/{clocation}"><img src="/data/{cimage}" title="{clocation}"/></a></div>
                        
                    </div>
                </div>
                {/categories}

            </div>
            <!-- END EAT PLAY SLEEP BUTTONS-->

        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->