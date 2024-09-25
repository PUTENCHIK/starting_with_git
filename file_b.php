<?php 

modes = [
	"default" => 1,
	"premium" => 2,
];

app_mode = 3;

?>

<?php if(app_mode === modes["default"]): ?>
<h2>You are default user</h2>

<?php elseif (app_mode === modes["premium"]): ?>
<h1>Hello, Premium User!</h1>

<?php else: ?>
<p>Who are you?</p>

<?php endif ?>
