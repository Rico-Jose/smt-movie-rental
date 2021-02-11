<?php
$pagename='Advanced Search';
include 'header.php';
include_once 'connection.php';
?>
                <main class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="advanced.php" method="post">
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Genre:</label>
                                        <input type="text" class="form-control" name="genre" placeholder="Enter Genre">
                                    </div>
                                    <div class="form-group">
                                        <label>Year:</label>
                                        <input type="text" class="form-control" name="year" placeholder="Enter Year">
                                    </div>
                                    <div class="form-group">
                                        <label>Rating:</label>
                                        <input type="text" class="form-control" name="rating" placeholder="Enter Rating">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                    <?php
                    if(isset($_POST['title']) && isset($_POST['genre']) && isset($_POST['year']) && isset($_POST['rating'])) {
                    ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Genre</th>
                                <th>Year</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $title = $_POST['title'];
                        $genre = $_POST['genre'];
                        $year = $_POST['year'];
                        $rating = $_POST['rating'];

                        $query = $pdo->query('SELECT * FROM tbdvd WHERE title = "' . $title . '" AND genre = "' . $genre . '" AND year = "' . $year . '" AND rating = "' . $rating . '"');
                        while($result = $query->fetch(PDO::FETCH_OBJ)) {
                            $title = $result->Title;
                            $genre = $result->Genre;
                            $year = $result->Year;
                            $rating = $result->Rating;
                            echo "
                            <tr>
                                <td>$title</td>
                                <td>$genre</td>
                                <td>$year</td>
                                <td>$rating</td>
                            </tr>
                            ";
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                    }
                    ?>
                </main>
<?php
include 'footer.php';
?>