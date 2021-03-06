<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Filter by:
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Price Range <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="/filter/filter_by_price/low">$</a></li>
                            <li><a href="/filter/filter_by_price/med">$$</a></li>
                            <li><a href="/filter/filter_by_price/high">$$$</a></li>

                        </ul>
                    </div>
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Target Audience <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="/filter/filter_by_group/youth">Young adults</a></li>
                            <li><a href="/filter/filter_by_group/family">Family</a></li>

                        </ul>
                    </div>
                </div>

                <!-- Table -->
                <table class="table table-condensed table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                    </tr>
                    
                    {attractions}
                    <tr>
                        <td>{name}</td>
                        <td>{category}</td>
                        <td><a href="/{category}/single/{id}">More Info</a></td>
                    </tr>
                    {/attractions}
                
                </table>
            </div>

        </div>
    </div>
</div>
