<h2>Users</h2>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
            <?php echo htmlspecialchars($user['name']); ?> - <?php echo htmlspecialchars($user['email']); ?>
        </li>
    <?php endforeach; ?>
</ul>
