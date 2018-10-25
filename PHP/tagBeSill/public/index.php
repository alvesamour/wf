<?php 
    //Articles : id, pub_date, img, title, description
    $articles = [
        [
            'id' => 1,
            'pub_date' => '2018-06-21 11:43:12',
            'img' => 'https://picsum.photos/100/100',
            'title' => 'Title 1',
            'description' => 'Lorem ipsum dolor sit amet, idque assentior et nam, viris corrumpit ius eu. Dico stet essent pro te, autem nostrud noluisse at eum. Mel habeo albucius sententiae ne, id euripidis conceptam appellantur sit. Mel ei mentitum vulputate, latine intellegat sententiae in quo, ne mea albucius sapientem comprehensam. Ad mutat integre dissentiet has, audiam sensibus ne duo. Ei option epicurei eum, ad vero liber sea. His natum salutatus at.
'
        ],
        [
            'id' => 2,
            'pub_date' => '2018-06-22 09:33:17',
            'img' => 'https://picsum.photos/g/100/100',
            'title' => 'Title 2',
            'description' => 'Lorem ipsum dolor sit amet, idque assentior et nam, viris corrumpit ius eu. Dico stet essent pro te, autem nostrud noluisse at eum. Mel habeo albucius sententiae ne, id euripidis conceptam appellantur sit. Mel ei mentitum vulputate, latine intellegat sententiae in quo, ne mea albucius sapientem comprehensam. Ad mutat integre dissentiet has, audiam sensibus ne duo. Ei option epicurei eum, ad vero liber sea. His natum salutatus at.
'
        ]
    ];
?>

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