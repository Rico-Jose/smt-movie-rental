<?php
/**
 * Home Page
 * 
 * @category Web_Programming
 * @package  PHP_CodeSniffer
 * @author   Original Author <30019932@tafe.wa.edu.au>
 * @license  https://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://pear.php.net/package/PHP_CodeSniffer
 */  
$page='index';
$pagename='Home';
require 'header.php';
require_once 'connection.php';
?>
                <main class="col-lg-10">
                    <h2>Movie List</h2>
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
                        $query = $pdo->query('SELECT * FROM tbdvd');
                        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
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
                </main>
<?php
require 'footer.php';
?>
