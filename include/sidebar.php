<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="POST">
        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                <button name="submit" type="submit" class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
    </form> 
    <!-- /.input-group -->
</div>



<?php

if(isset($_POST['submit']))
{

    $search =$_POST['search'] ;
    $query1 ="SELECT * FROM posts WHERE post_tags LIKE '%$search%' " ;
    $search_query= mysqli_query($connection,$query);
    if(!$search_query)
    {
        die("QUERY FAILED" . mysqli_error($connection));
    }


    $count = mysqli_num_rows($search_query);
    if($count == 0)
    {
        echo "<h1> No Result  </h1>"; 
    }
   
    else {
        echo "<h1>New  Result  </h1>"; 
    }
}

?>








<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">

                <?php 
                   $query = "SELECT * FROM categories LIMIT 3" ;
                    $select_categories_sidebar = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_categories_sidebar))
                    {
                        
                        $cat_title = $row['cat_title'];
                        ?>
                         <li><a href="#"><?php echo $cat_title ;?> </a>

                    <?php

                    }

                ?>

                
                </li>

            </ul>
        </div>

        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>






<!-- Side Widget Well -->
<?php include "widget.php" ; ?>

</div>