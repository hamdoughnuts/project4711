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
                        <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Audience <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="/filter/price_high_low">Price High-Low</a></li>
                            <li><a href="/filter/price_low_high">Price Low-High</a></li>

                        </ul>
                    </div>
                    </th>
                    <th>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Target Audience <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="/filter/audience_adults">Target Audience Young adults</a></li>
                            <li><a href="/filter/audience_family">Target Audience Family first</a></li>

                        </ul>
                    </div>
                    </th>
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
