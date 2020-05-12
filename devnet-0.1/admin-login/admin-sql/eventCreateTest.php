
<h3 class="card-title">Order Form</h3>
<form action="insertEventDBTesting.php" method="post">
  <table class="table">
    <thead>
      <tr class="row">
        <th class="col-3">Event Title</th>
        <th class="col-3">Event Creator</th>
        <th class="col-3">eventCategory</th>
        <th class="col-3">eventAudience</th>
        <th class="col-3">date</th>
        <th class="col-3">startAt</th>
        <th class="col-3">endAt</th>
        <th class="col-3">venue</th>
      </tr>
    </thead>
    <tbody>
      <tr class="col">
        <td class="row-2">
          <input type="text" name="eventTitle" required>
        </td>
        <td class="row-2">
          <input type="text" name="eventCreator" required>
        </td>
        <td class="row-2">
          <input type="text" name="eventCategory" required>
        </td>
        <td class="row-2">
          <input type="text" name="eventAudience" required>
        </td>
        <td class="row-2">
          <input type="date" name="date" required>
        </td>
        <td class="row-2">
          <input type="time" name="startAt" required>
        </td>
        <td class="row-2">
          <input type="time" name="endAt" required>
        </td>
        <td class="row-2">
          <input type="text" name="venue" required>
        </td>

    </tbody>
  </table>
  <button class="btn btn-success" type="submit">Submit</button>
</form>

Date now:
<?php echo date('Y-m-d') ?>
