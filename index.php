<?php
$jobs = [
    [
        'id' => 1,
        'title' => 'Frontend Developer',
        'company' => 'TechCorp',
        'location' => 'New York, NY',
        'type' => 'Full-time',
        'created_at' => '2025-06-01 10:00:00'
    ],
    [
        'id' => 2,
        'title' => 'Backend Developer',
        'company' => 'DevSolutions',
        'location' => 'San Francisco, CA',
        'type' => 'Remote',
        'created_at' => '2025-06-05 14:30:00'
    ],
    [
        'id' => 3,
        'title' => 'UI/UX Designer',
        'company' => 'Designify',
        'location' => 'Remote',
        'type' => 'Part-time',
        'created_at' => '2025-06-08 09:00:00'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4">Job Listings</h1>
        <?php if (empty($jobs)): ?>
            <p>No job listings available at the moment.</p>
        <?php else: ?>
            <div class="list-group">
                <?php foreach ($jobs as $job): ?>
                    <a href="job.php?id=<?= $job['id'] ?>" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?= htmlspecialchars($job['title']) ?></h5>
                            <small><?= date('F j, Y', strtotime($job['created_at'])) ?></small>
                        </div>
                        <p class="mb-1">Company: <?= htmlspecialchars($job['company']) ?> | Location: <?= htmlspecialchars($job['location']) ?></p>
                        <small>Type: <?= htmlspecialchars($job['type']) ?></small>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>