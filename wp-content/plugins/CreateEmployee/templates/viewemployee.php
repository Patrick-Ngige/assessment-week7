<?php

global $wpdb;

$table_name = $wpdb->prefix . 'employees';


$results = $wpdb->get_results("SELECT * FROM $table_name");

if ($results) {
  echo '<table class="table table-striped" style="margin: 0 auto; width: 80%;  border-collapse: collapse;color: black; margin-top: 20px; border-shadow: 2px 2px 2px grey;">';
  echo '<thead>
            <tr>
              <th style="border: 1px solid black; padding: 10px;">Employee Id</th>
              <th style="border: 1px solid black; padding: 10px;">Name </th>
              <th style="border: 1px solid black; padding: 10px;">Phone Number</th>
              <th style="border: 1px solid black; padding: 10px;">Email</th>
            </tr>
          </thead>';
  echo '<tbody>';


  foreach ($results as $result) { ?>
    <tr>
      <td style="border: 1px solid black; padding: 10px;">
        <?php echo $result->id ?>
      </td>
      <td style="border: 1px solid black; padding: 10px;">
        <?php echo $result->name ?>
      </td>
      <td style="border: 1px solid black; padding: 10px;">
        <?php echo $result->phone_number ?>
      </td>
      <td style="border: 1px solid black; padding: 10px;">
        <?php echo $result->email ?>
      </td>
    </tr>
    </form>
    </td>

  <?php } ?>

  </tbody>
  </table>
<?php } else {
  echo 'No employees found.';
}

global $wpdb;

global $success_msg;
global $error_msg;
$table_name = $wpdb->prefix . 'tickets';

$table_name = $wpdb->prefix . 'tickets';

?>