<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row col-xs-12">

            <div class="panel panel-default">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/admin/newAttraction"><button type="button" class="btn btn-default">Create new attraction</button></a>

                </div>
                <div class="panel-heading">Attractions</div>


                <!-- Table -->
                <table class="table table-condensed table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th></th>
                        <th></th>
                    </tr>
                    {attractions}
                    <tr>
                        <td>{id}</td>
                        <td>{name}</td>
                        <td>{category}</td>
                        <td>{date}</td>
                        <td><a href="/admin/edit/{id}">Edit</a></td>
                        <td><a href="/admin/delete/{id}">Delete</a></td>
                    </tr>

                    {/attractions}
                </table>
            </div>

        </div>
    </div>
</div>