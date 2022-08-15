<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Welcome to dashboard.';
	return AdminSection::view($content, 'Dashboard');
}]);
