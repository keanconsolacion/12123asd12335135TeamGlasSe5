


<h3 class="card-title">Order Form</h3>
<form action="insertEventDBTesting.php" method="post">
  <table class="table">
    <thead>
      <tr class="row">
        <th class="col-3">Event Title</th>
        <th class="col-3">Event Creator</th>
        <th class="col-3">Date</th>
      </tr>
    </thead>
    <tbody>
      <tr class="row">
        <td class="col-3">
        <input type="text" name="eventTitle" required>
        <td class="col-3">
        <input type="text" name="eventCreator" required>
        <td class="col-3">
        <input type="date" name="date" required>
      </td>

    </tbody>
  </table>
  <button class="btn btn-success" type="submit">Submit</button>
</form>

Date now:
<?php echo date('Y-m-d') ?>
