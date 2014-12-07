<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">Attractions</div>


                <!-- Table -->
                <table class="table table-condensed table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th><a href="/filter/price">Price Range</a></th>
                        <th><a href="/filter/audience">Target Audience</a></th>
                    </tr>
                    {attractions}
                    <tr>
                        <td>{name}</td>
                        <td>{category}</td>
                        <td>{price_range}</td>
                        <td>{target_audience}</td>
                    </tr>

                    {/attractions}
                </table>
            </div>

        </div>
    </div>
</div>