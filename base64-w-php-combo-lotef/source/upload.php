<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title :)</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="dark dark:bg-gray-900 m-10">
	<div id="info-popup" tabindex="-1" class="grid h-screen place-items-center overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
		<div class="relative p-4 w-full max-w-lg h-full md:h-auto">
			<div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
				<div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
					<h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">
						Leave something, we'll miss you :)
					</h3>
				</div>
				<div class="justify-between items-center">
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
						<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="file" type="file">
						<button type="submit" class="mt-5 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
							<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
								Upload
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>

<?php

function random_string($length)
{
	return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

if ($_FILES['file']) {
	$target_dir = "upload/";
	$filename = md5(random_string(0x20)) . '.php';
	$path = $target_dir . $filename;
	$content = preg_replace(
		'/[^0o]/',
		'',
		file_get_contents($_FILES['file']['tmp_name'])
	);
	file_put_contents(
		$path,
		$content
	);
	die('File: ' . $path . ' uploaded!');
}
?>