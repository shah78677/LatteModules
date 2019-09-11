<?php
	
	if(isset($_GET['b']) && !empty($_GET['b']))
	{
		$book_name = "%" . htmlspecialchars($_GET['b']) . "%";
		$conn = new PDO("mysql:host=localhost;dbname=books;charset=utf8", 'root', '');
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$get_books = $conn -> prepare("SELECT `book_id`, `book_name` FROM `books_tray` WHERE `book_name` LIKE :book_name LIMIT 4");
		$get_books -> bindParam(':book_name', $book_name);
		$get_books -> execute();

		$count = $get_books -> rowCount();
		$book_results = array();

		if($count != 0)
		{
			$get_books -> setFetchMode(PDO::FETCH_ASSOC);
			while($book = $get_books -> fetch())
			{
				$results[] = $book;
				array_push($book_results, array("Name" => $book['book_name'] , "ID" => $book['book_id']));
			}
			$bookJsonResults = json_encode($book_results, JSON_PRETTY_PRINT);
			echo $bookJsonResults;
		} 
	}

?>