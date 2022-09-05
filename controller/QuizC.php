<?PHP
include "C://wamp64/www/naja7ni/config.php";
require_once 'C://wamp64/www/naja7ni/model/Quiz.php';

class quizC
{

    public function ajouterQuiz($quiz)
    {
        $sql = "INSERT INTO question_test(question,opt1,opt2,opt3,opt4,answer,course) 
			VALUES (:question,:opt1,:opt2,:opt3,:opt4,:answer,:course)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'question' => $quiz->getQuestion(),
                'opt1' => $quiz->getOpt1(),
                'opt2' => $quiz->getOpt2(),
                'opt3' => $quiz->getOpt3(),
                'opt4' => $quiz->getOpt4(),
                'answer' => $quiz->getAnswer(),
                'course' => $quiz->getCourse(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function afficherquiz()
    {
        $limit = 12;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql="SELECT * FROM question_test  ORDER BY id  DESC LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afi($catt)
    {
        $limit = 3;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql="SELECT * FROM article WHERE postCategory = '$catt' ORDER BY vues DESC LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherarticledash()
    {
        $sql="SELECT * FROM article ORDER BY Datearticle DESC";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpop1()
    {
        $sql="SELECT * FROM article ORDER BY vues DESC LIMIT 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichermostviews()
    {
        $sql="SELECT * FROM article ORDER BY vues DESC LIMIT 4";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpopfoot()
    {
        $sql="SELECT * FROM article where postCategory = 'FootBall' ORDER BY vues DESC LIMIT 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpopfoot1()
    {
        $sql="SELECT * FROM article where postCategory = 'FootBall' ORDER BY vues DESC LIMIT 1, 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpop2()
    {
        $sql="SELECT * FROM article ORDER BY vues DESC LIMIT 1, 2";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherjv()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'JAVA' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherfoot()
    {
        $sql = "SELECT * FROM article WHERE postCategory = 'JAVA' order by Datearticle desc LIMIT 2";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpoo()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'POO' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherathletisme()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'PHP' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherpy()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'PYTHON' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichercyclisme()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'HTML' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherjs()
    {
        $limit = 8;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM article WHERE postCategory = 'JAVASCRIPT' order by Datearticle desc LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrprt()
    {
        $sql = "SELECT COUNT(DISTINCT mail) as nbra FROM participants";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbreqt()
    {
        $sql = "SELECT COUNT(DISTINCT question) as nbri FROM question_test";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrecrs()
    {
        $sql = "SELECT COUNT(course) as nbrart FROM question_test";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrejs()
    {
        $sql = "SELECT COUNT(postCategory) as nbrjs FROM article WHERE postCategory = 'JAVASCRIPT'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrejv()
    {
        $sql = "SELECT COUNT(postCategory) as nbrfb FROM article WHERE postCategory = 'JAVA'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrepoo()
    {
        $sql = "SELECT COUNT(postCategory) as nbrtn FROM article WHERE postCategory = 'POO'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrepy()
    {
        $sql = "SELECT COUNT(postCategory) as nbrhb FROM article WHERE postCategory = 'PYTHON'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbreath()
    {
        $sql = "SELECT COUNT(postCategory) as nbrath FROM article WHERE postCategory = 'PHP'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function affichernbrecyc()
    {
        $sql = "SELECT COUNT(postCategory) as nbrcyc FROM article WHERE postCategory = 'HTML'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function postarticle($id)
    {

        $sql = "SELECT * FROM article where idNewsArticle =" . $_GET["idNewsArticle"];
        $sql1 = "UPDATE article SET vues = vues +1 WHERE idNewsArticle =" . $_GET["idNewsArticle"];
        $db = config::getConnexion();
        try {
            $hh = $db->query($sql1);
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerquiz($id)
    {
        $sql = "DELETE FROM question_test WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierquiz($quiz, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE question_test SET 
						question = :question,
                        opt1 = :opt1,
                        opt2 = :opt2,
                        opt3 = :opt3,
                        opt4 = :opt4,
                        answer = :answer,
                        course = :course
=					WHERE id = :id'
            );
            $query->execute([
                'question' => $quiz-> getQuestion(),
                'opt1' => $quiz->getOpt1(),
                'opt2' => $quiz->getOpt2(),
                'opt3' => $quiz->getOpt3(),
                'opt4' => $quiz->getOpt4(),
                'answer' => $quiz->getAnswer(),
                'course' => $quiz->getCourse(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererquiz($id)
    {
        $sql = "SELECT * from question_test where id=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function sortdate1()
    {
        $sql = "SELECT * from question_test order by id desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate2()
    {
        $sql = "SELECT * from question_test order by id asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function affvues()
    {
        $sql = "SELECT * from article order by vues desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recentpost()
    {
        $sql = "SELECT * from participants order by date desc limit 3";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recentpost2()
    {
        $sql = "SELECT * from article order by Datearticle desc limit 2";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function search($text){
		if(!empty($_POST['q'])){
			$q = $_POST['q'];
			$q = "%".$q."%";
        $text = strtolower($text); 
        $limit = 12;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;
        $query = "SELECT * FROM article WHERE titre LIKE '$text' OR auteur LIKE '$text' OR texte LIKE '$text' OR postCategory LIKE '$text' or Datearticle LIKE '$text' order by Datearticle desc LIMIT $start, $limit";
		$db = config::getConnexion();
		try {
			$stmt = $db->query($query);
			$stmt->execute([$text,$text,$text,$text,$text]);
            return $stmt;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
	}
}
public function show_questions($course_id)
{
    $sql ="SELECT * from question_test where course='$course_id'";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}
public function show_result($data)
	{
		$ans=implode("", $data);    // to break the $data into string chunk bcoz $data is an array
		$course_id=$_SESSION['course_id'];  // the session variable is created in question_show.php file
		$right=0;
		$wrong=0;
		$no_answer=0;
        $sql ="select id,answer from question_test where course_id='$course_id'";
        $db = config::getConnexion();
        try {	
			if ($row['answer']==$_POST[$row['id']])         //if answer is match
			 {
				$right++;
			}
			elseif ($_POST[$row['id']]=="no_attempt")   // if user didnt selected any answer
			 {
				$no_answer++;
			}
			else
			{
				$wrong++;                          // if wrong answer is selected by user
			}
		
		$array=array();                //creating an array
		$array['right']=$right;         // putting the values inside the array
		$array['wrong']=$wrong;
		$array['not_attempted']=$no_answer;
		return $array;		
    }
    catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }			//returning the array filled with above values
	 }
  
}