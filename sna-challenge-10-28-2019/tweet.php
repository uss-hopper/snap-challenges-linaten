public static function getTweetByTweetDate(\PDO $pdo, string $tweetDate) : \SplFixedArray {
$startDateString = $tweetDate->format('Y-m-d') . '00:00:00';
$startDate = new DateTime ($startDateString);
$endDate = New DateTime($startDateString);

// create query template
$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDateTime FROM tweet Where twetDate>= :startDate AND tweetDate < :endDate";
$statement = $pdo->prepare($query);

// bind the tweet content to the place holder in the template
$tweetDate = "%$tweetDate%";
$parameters =[
'startDate'=> $startDate>format("Y-m-dH:i:s.u"),
'endDate' => $endDate ->format("Y-m-d H:i:s.u),
];
$statement->execute($parameters);


// build an array of tweets
$tweets = new \SplFixedArray($statement->rowCount());
$statement->setFetchMode(\PDO::FETCH_ASSOC);
while(($row = $statement->fetch()) !== false) {
try {
$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
$tweets[$tweets->key()] = $tweet;
$tweets->next();
} catch(\Exception $exception) {
// if the row couldn't be converted, rethrow it
throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
}
return($tweets);
}
