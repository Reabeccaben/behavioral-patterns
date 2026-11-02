<?php
require_once __DIR__ . '/StudentProfile.php';
require_once __DIR__ . '/ProfileHistory.php';

$profile = new StudentProfile(
    'Reabeccaben',
    'BSIT',
    3,
    'reabeccaben.sercedillo.dorsu.edu.ph'
);

$history = new ProfileHistory();

echo '<h2>Student Profile Undo System</h2>';
echo '<strong>Original Profile:</strong><br>';
$profile->display();


$history->save($profile->save());

echo '<br><strong>Updating profile...</strong><br>';
$profile->updateProfile('BSCS', 4);

echo '<strong>Current Profile:</strong><br>';
$profile->display();

echo '<br><strong>Undo...</strong><br>';
$previousProfile = $history->undo();

if ($previousProfile !== null) {
    $profile->restore($previousProfile);
    echo '<strong>Restored Profile:</strong><br>';
    $profile->display();
} else {
    echo 'No previous profile is available.';
}
?>
