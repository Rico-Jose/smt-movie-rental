<?php
$pagename='Rating';
include 'header.php';
include_once 'connection.php';
?>
                <main class="col-lg-10">
                    <form action="rating.php" method="post">
                        <div class="input-group col-lg-6">
                            <input type="text" class="form-control" name="rating" placeholder="Rating">
                            <span class="input-group-btn">
                                <input class="btn btn-default" type="submit" value="Search">
                            </span>
                        </div>
                        <div class="input-group col-lg-6">
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['rating'])) {
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
                        $rating = $_POST['rating'];
                        $query = $pdo->query('SELECT * FROM tbdvd WHERE rating = "' . $rating . '"');
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