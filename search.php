<!DOCTYPE html>
<html>
    <head>
        <title>Activity</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include('config.php');
        ?>
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
							<br />
                          <a href="index.php" class="btn btn-success">Back</a>
							<br />
							<br />
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="span6">
                                <form method="POST"  class="navbar-search pull-left">
                                    <input type="text" name="search" class="search-query" placeholder="Search">
                                </form>
                            </div>
							<br />
							<br />
							<br />
                            <table class="table table-bordered  table-hover table-striped"> 
                                <thead>
                                    <tr>
                                        <th>Text</th>
                                        <th>Username</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_POST['search'])){
                                    
                                        $search=$_POST['search'];
                                        
                                        $query=mysql_query("select * FROM users WHERE text LIKE '%$search%'")or die(mysql_error());
                                        while($row=mysql_fetch_array($query)){
                                        ?>

                                        <tr>
                                            <td><?php echo $row['text']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['image']; ?></td>

                                        </tr>
                                        <?php
                                        }}
                                        ?>
                                                                                
                                            
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
