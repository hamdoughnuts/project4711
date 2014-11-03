<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row col-xs-12">

            <div class="panel panel-default">
                <a href="/admin/newAttraction">Create new attraction</a>
                <div class="panel-heading">Attractions</div>

               
                <!-- Table -->
                <table class="table table-condensed table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
<!--                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Image 3</th>
                        <th>Contact</th>
                        <th>Address</th>-->
                        <th>Date</th>
                        <th></th>
                        <th></th>
                    </tr>
                    {attractions}
                    <tr>
                        <td>{id}</td>
                        <td>{name}</td>
                        <td>{category}</td>
<!--                        <td>{image1}</td>
                        <td>{image2}</td>
                        <td>{image3}</td>
                        <td>{contact}</td>
                        <td>{address}</td>-->
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