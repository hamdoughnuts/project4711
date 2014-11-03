<div id="page-content-wrapper">
    <div class="container-fluid whiteBox">
                <form class="form-horizontal" role="form" action="/admin/post/{id}" method="POST" enctype="multipart/form-data">
                    <h1 class="white">Edit Form</h1>
        
                    <div class="form-group">
                        <label for="ID" class="col-sm-2 control-label white">ID</label>
                        <div class="col-sm-2">
                            <p class="form-control-static white" name="id" id="id">{id}</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label white">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name" id="name" value="{name}">
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="category" class="col-sm-2 control-label white">Category</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="category" id="category" value="{category}">
                        </div>
                    </div>
                    
                                <div class="form-group">
                                    
                        <label for="image1" class="col-sm-2 control-label white">Image 1</label>
                        <div class="col-sm-4">
                            <img src="/data/{image}" title="{name}" class="img-responsive thumbnail-size"/>
                            <input type="file" id="image1" name="image1" class="white" accept="image/*">
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="image2" class="col-sm-2 control-label white">Image 2</label>
                        <div class="col-sm-4">
                            <img src="/data/{image2}" title="{name}" class="img-responsive thumbnail-size"/>
                            <input type="file" id="image2" name="image2" class="white" accept="image/*">
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="image3" class="col-sm-2 control-label white">Image 3</label>
                        <div class="col-sm-4">
                            <img src="/data/{image3}" title="{name}" class="img-responsive thumbnail-size"/>
                            <input type="file" id="image3" name="image3" class="white" accept="image/*">
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="longtext" class="col-sm-2 control-label white">Long Text</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="longtext" id="longtext">{longtext}</textarea>
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="shorttext" class="col-sm-2 control-label white">Short Text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " name="shorttext" id="shorttext" value="{shorttext}">
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="contact" class="col-sm-2 control-label white">Contact</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " name="contact" id="contact" value="{contact}">
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="address" class="col-sm-2 control-label white">Address</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " name="address" id="address" value="{address}">
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="most_popular" class="col-sm-2 control-label white">Most Popular</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="most_popular" id="most_popular" value="{most_popular}"/>
                        </div>
                    </div>
                    
                                <div class="form-group">
                        <label for="single_room_rate" class="col-sm-2 control-label white">Single Room Rate</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="single_room_rate" id="single_room_rate" value="{single_room_rate}">
                        </div>
                    </div>
                                <div class="form-group">
                        <label for="double_room_rate" class="col-sm-2 control-label white">Double Room Rate</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="double_room_rate" id="double_room_rate" value="{double_room_rate}">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Save</button>
                        </div>
                    </div>
                </form>
<!--        <form class="form-horizontal" role="form" action="../post/{id}" method="POST" enctype="multipart/form-data">
            {fid}
            {fname}
            {flongtext}
            {fcategory}
            {fsubmit}
        </form>-->
    </div>
</div>