<table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($subscribers as $subscriber) { ?>
        <tr>
          <td><?php echo $subscriber->name ?></td>
          <td><?php echo $subscriber->surname ?></td>
          <td><?php echo $subscriber->email ?></td>
          <td><a href="main/deleteSubscriber/<?php echo $subscriber->id?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
  </table>
