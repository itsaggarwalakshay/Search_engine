<?php
$con=mysqli_connect('localhost','root','','searchengine');
class dbconnection{
	// --function-search_results()-to-perform-search-operation--
	function search_results($search){
		global $con;
		$word = "-";
		$str = $search;
		if (strpos($str, $word) !== false) {
			$str1 = strpos($str, $word);
			$str1 = $str1 + 1;
			$str = $search;
			$str2 = substr($str,$str1);

			$query = "SELECT `title`, `description` FROM `search_engine` WHERE title NOT LIKE '%$str2%' 
			AND description NOT LIKE '%$str2%'";
			$result = mysqli_query($con,$query);

			while ($result_row = mysqli_fetch_assoc($result)) {
				$return_results[] = array(
					'title' => $result_row['title'],
					'description' => $result_row['description'],
				);
			}
			return $return_results;		
		}
		else{
		//dynamic where 
		$where= "";
		// preg_split() will store the searched in an array
		$search = preg_split("/[\s]+/",$search);

		$total_search = count($search);

		foreach ($search as $key => $value) {
			$where .="title LIKE '%$value%' OR description LIKE '%$value%'";
			if ($key != $total_search-1) {
				$where .= " OR ";	
			}
		}

		$query = "SELECT `title`, `description` FROM `search_engine` WHERE $where";

		$result = mysqli_query($con,$query);

		while ($result_row = mysqli_fetch_assoc($result)) {
				$return_results[] = array(
					'title' => $result_row['title'],
					'description' => $result_row['description'],
				);
			}
			return $return_results;
		}
				
	}
}
?>