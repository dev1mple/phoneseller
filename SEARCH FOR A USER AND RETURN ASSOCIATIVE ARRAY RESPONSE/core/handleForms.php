<?php  

require_once 'dbConfig.php';
require_once 'models.php';


if (isset($_POST['insertUserBtn'])) {
	$insertUser = insertNewUser($pdo,$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['address'], $_POST['city'], $_POST['nationality'], $_POST['work_experience']);

	if ($insertUser) {
		$_SESSION['message'] = "Successfully inserted!";
		header("Location: ../index.php");
	}
}


if (isset($_POST['editUserBtn'])) {
	$editUser = editUser($pdo,$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['address'], $_POST['city'], $_POST['nationality'], $_POST['work_experience'], $_GET['id']);

	if ($editUser) {
		$_SESSION['message'] = "Successfully edited!";
		header("Location: ../index.php");
	}
}

if (isset($_POST['deleteUserBtn'])) {
	$deleteUser = deleteUser($pdo,$_GET['id']);

	if ($deleteUser) {
		$_SESSION['message'] = "Successfully deleted!";
		header("Location: ../index.php");
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForAUser = searchForAUser($pdo, $_GET['searchInput']);
	foreach ($searchForAUser as $row) {
		echo "<tr> 
				<td>{$row['id']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['email']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['address']}</td>
				<td>{$row['city']}</td>
				<td>{$row['nationality']}</td>
				<td>{$row['work_experience']}</td>
			  </tr>";
	}
}

?>