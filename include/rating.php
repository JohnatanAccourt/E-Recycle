<?php 
	if (($row["AVALIACAO"] >= 1.0) && ($row["AVALIACAO"] < 2.0)) {
		$rating = "<p class='rating'>
				<span>★</span>
				<span>✩</span>
				<span>✩</span>
				<span>✩</span>
				<span>✩</span>
			</p>";
	} elseif (($row["AVALIACAO"] >= 2.0) && ($row["AVALIACAO"] < 3.0)) {
		$rating = "<p class='rating'>
				<span>★</span>
				<span>★</span>
				<span>✩</span>
				<span>✩</span>
				<span>✩</span>
			</p>";
	} elseif (($row["AVALIACAO"] >= 3.0) && ($row["AVALIACAO"] < 4.0)) {
		$rating = "<p class='rating'>
				<span>★</span>
				<span>★</span>
				<span>★</span>
				<span>✩</span>
				<span>✩</span>
			</p>";
	} elseif (($row["AVALIACAO"] >= 4.0) && ($row["AVALIACAO"] < 5.0)) {
		$rating = "<p class='rating'>
				<span>★</span>
				<span>★</span>
				<span>★</span>
				<span>★</span>
				<span>✩</span>
			</p>";
	} elseif (($row["AVALIACAO"] == 5.0)) {
		$rating = "<p class='rating'>
				<span>★</span>
				<span>★</span>
				<span>★</span>
				<span>★</span>
				<span>★</span>
			</p>";
	} else {
		$rating = "<p class='rating'>
				<span>✩</span>
				<span>✩</span>
				<span>✩</span>
				<span>✩</span>
				<span>✩</span>
			</p>";
	}