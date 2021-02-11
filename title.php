<?php
$pagename='Title';
include 'header.php';
include_once 'connection.php';
?>
                <main class="col-lg-10">
                    <form action="title.php" method="post">
                        <div class="input-group col-lg-6">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <span class="input-group-btn">
                                <!--<button class="btn btn-default" type="button">Search</button>-->
                                <input class="btn btn-default" type="submit" value="Search">
                            </span>
                        </div>
                        <div class="input-group col-lg-6">
                        </div>
                        <!--
                        <label for="">Enter Title: </label>
                        <input type="text" id="" name="title" required><br><br>
                        <input type="submit" value="Submit">
                        -->
                    </form>
                    <?php
                    if(isset($_POST['title'])) {
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
                        $query = $pdo->query('SELECT * FROM tbdvd WHERE title = "' . $title . '"');
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
                    <!--
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button"
                                id="dropdowntitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Select a Movie
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        
                        $query = $pdo->query('SELECT * FROM tbdvd');
                        while($result = $query->fetch(PDO::FETCH_OBJ)) {
                            echo "<li>$result->title</li>";
                        }
                        </ul>
                    </div>
                    -->
                </main>
<?php
include 'footer.php';
?>