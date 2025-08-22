<?php require __DIR__ . '/includes/functions.php'; ?>
<?php include __DIR__ . '/includes/header.php'; ?>
<div class="container">
  <h1>Admin: Leads</h1>
  <?php
    $file = __DIR__ . '/data/contacts.json';
    $contacts = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    if (!$contacts) {
        echo '<div class="alert">No leads yet.</div>';
    } else {
        echo '<table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Property ID</th><th>Created</th></tr></thead><tbody>';
        foreach ($contacts as $c) {
            echo '<tr>';
            echo '<td>'.(int)$c['id'].'</td>';
            echo '<td>'.htmlspecialchars($c['name']).'</td>';
            echo '<td>'.htmlspecialchars($c['email']).'</td>';
            echo '<td>'.htmlspecialchars($c['phone']).'</td>';
            echo '<td>'.htmlspecialchars($c['message']).'</td>';
            echo '<td>'.htmlspecialchars($c['property_id']).'</td>';
            echo '<td>'.htmlspecialchars($c['created_at']).'</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
  ?>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
