<?php 
class admin{

	private $db;

	function __construct($DB_con){
		$this->db = $DB_con;
	}

	public function ceklogin($username,$password)
	{
		try {
			$sql = "SELECT * FROM user WHERE username = :username AND password = :password";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':username',$username);
			$stmt->bindparam(':password',$password);
			$stmt->execute();

			$count = $stmt->rowCount();
			if ($count != 0) {
				$_SESSION['username'] = $username;
				header("Location: home.php");
				return;
			}else{
				echo "Anda tidak dapat login";
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM table_buku_tamu WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow = $stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function update($id,$nama,$subject,$isi)
	{
		try {
			$stmt = $this->db->prepare("UPDATE table_buku_tamu SET nama=:nama, subject=:subject, isi=:isi WHERE id=:id");
			$stmt->bindparam(":id",$id);
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":subject",$subject);
			$stmt->bindparam(":isi",$isi);
			$stmt->execute();
			// header("Location: ?success");
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function delete($id)
 {
  $stmt = $this->db->prepare("DELETE FROM table_buku_tamu WHERE id=:id");
  $stmt->bindparam(":id",$id);
  $stmt->execute();
  return true;
 }

	public function logout()
	{
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
		return true;
	}

}
?>