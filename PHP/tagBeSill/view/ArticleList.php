<!DOCTYPE html>
	<html>
		<head>
		<meta charset="UTF-8">
		<title>Tag be sill home page</title>
	</head>
	<body>
		<h1>Tag be sill</h1>
		
		<p>
		The actual time is
		<?php 
		
		  echo (new DateTime()) -> format('Y-m-d H:i:s');
		?>
		</p>
		<table>
                <tr>
                    <th>id</th>
                    <th>Publication date</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
		<?php 
		foreach ($articles as $article) {
		
		  echo '<tr>';
		  echo '<td>'.$article['id'].'</td>';
		  echo '<td>'.$article['pub_date'].'</td>';
		  echo '<td><img src="'.$article['img']. '"/>'.'</td>';
		  echo '<td>'.$article['title'].'</td>';
		  echo '<td>'.$article['description'].'</td>';
		  echo '</tr>';
		}
		?>
		</table>
		
	</body>
</html>