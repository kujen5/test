<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title :)</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="dark">
	<section class="bg-gray-50 dark:bg-gray-900">
		<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
			<div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
				<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
					<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
						Sign in to your account
					</h1>
					<form class="space-y-4 md:space-y-6" action="login.php" method="POST">
						<div>
							<label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
							<input type="text" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Oussama">
						</div>
						<div>
							<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
							<input type="password" name="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
						</div>
						<button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
							<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
								Login
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>

</html>

<?php
require_once('config.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($username === "admin" && sha1(md5($password)) === $admin_hash) {
		echo '<script>alert("Login seccess!");</script>';
	} else {
		if (isset($_GET['debug'])) {
			if ($_GET['debug'] === 'hitctf') {
				$logfile = "log/" . $username . ".log";
				$content = $username . " => " . $password;
				file_put_contents($logfile, $content);
			} else {
				echo '<script>alert("Login failed!");</script>';
			}
		} else {
			echo '<script>alert("Login failed!");</script>';
		}
	}
} else {
	echo '<script>alert("Please input username and password!");</script>';
}
?>