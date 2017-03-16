     <?php
     $user = 'root';
     $pass = 'shadowfax';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=spellingWords', $user, $pass);
    $sth = $dbh->prepare("SELECT `word_id`, `word`, `correctAttempts`, `incorrectAttempts` FROM spellingWordsLvl1");
    $sth->execute();

    /* Fetch all of the remaining rows in the result set */
    // print("Fetch all of the remaining rows in the result set:\n");
    $result = $sth->fetchAll();
    // print_r($result);
    // $JsonData = json_encode($result);
    // echo $JsonData;

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}



?>
<script>
    var currentWords = <?php echo json_encode($result); ?>;
</script>
