	<thead>
        <tr>
            <th data-field="district">District</th>
            <th class="red-text" data-field="positive">Postive Cases</th>
            <th class="blue-text" data-field="active">Active Cases</th>
            <th class="green-text" data-field="recovered">Recovered</th>
            <th class="grey-text" data-field="deaths">Deaths</th>
        </tr>
    </thead>
    <tbody>
        <?php
	    	$casesdata = "SELECT * FROM cases LIMIT 20";
               $query = mysqli_query($dbconnect , $casesdata);
               while ($row = mysqli_fetch_array($query)) {
               echo
        "<tr id='" . $row['district_name'] . "'>
            <td class='green white-text' style='font-weight:bold'>" . $row['district_name'] . "</td>
            <td class='black-text text-darken-3'>" . $row['total_positive_cases'] . " <span class='red-text'>"; if ($row['new_positive_cases'] > "0"){echo "&#8593; " . $row['new_positive_cases'] . "";} elseif ($row['new_positive_cases'] < "0"){echo "&#8595;" . $row['new_positive_cases'] . "";}
else {echo "";} echo "</span></td>
            <td class='black-text text-darken-3'>" . $row['total_active_cases'] . " <span class='blue-text'>"; if ($row['new_active_cases'] > "0"){echo "&#8593; " . $row['new_active_cases'] . "";} elseif ($row['new_active_cases'] < "0"){echo "&#8595;" . $row['new_active_cases'] . "";}
else {echo "";} echo "</span></td>
            <td class='black-text text-darken-3'>" . $row['total_recovered'] . " <span class='green-text'>"; if ($row['new_recovered'] > "0"){echo "&#8593; " . $row['new_recovered'] . "";} elseif ($row['new_recovered'] < "0"){echo "&#8595;" . $row['new_recovered'] . "";}
else {echo "";} echo "</span></td>
            <td class='black-text text-darken-3'>" . $row['total_deaths'] . " <span class='grey-text'>"; if ($row['new_deaths'] > "0"){echo "&#8593; " . $row['new_deaths'] . "";} else {echo "";} echo "</span></td>
        </tr>
        "; }
        ?>
    </tbody>
