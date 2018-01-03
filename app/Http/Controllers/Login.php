<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\UserInfo;
use App\Model\MongoUser;
use Illuminate\Support\Facades\Redis;

class Login extends Controller
{
	protected $_successStatus = 200;
	protected $_failureStatus = 401;
	protected $_userDetails = Array();

	public function authenticate(Request $request)
	{
		$is_valid_user = $this->checkCredential($request);
		$consumer_details = array();
		$consumer_details = $this->getKeys($request);

        if($is_valid_user AND !empty($consumer_details))
        {
			$this->setRedisData();
			$success['token'] =  $this->creatToken($consumer_details);
			setrawcookie("jwt_token", $success['token'],time() + 2*7*24*60*60,'/','isscommand.com',1);
			return response()->json(['success' => $success], $this->_successStatus);
		}
        else
        {
            return response()->json(['error'=>'Unauthorised'], $this->_failureStatus);
        }
	}

	public function setRedisData()
	{
		Redis::set('PHPREDIS_SESSION', json_encode($this->_userDetails));
	}

	public function checkCredential($request)
	{
		$user_info = new UserInfo();
		$details = $user_info
					->where('username', $request->input('username'))
					->where('password', $request->input('password'))
					->get();

		if(!empty($details))
		{
			$this->_userDetails = $details[0];
			return TRUE;
		}
		return FALSE;
	}

	public function creatToken($consumer_details)
    {
		$encoded_header = base64_encode('{"alg": "HS256","typ": "JWT"}');
		$encoded_payload = base64_encode('{"country": "Romania","name": "Octavia Anghel","email": "octaviaanghel@gmail.com"}');
		$header_payload = $encoded_header . '.' . $encoded_payload;
		$signature = base64_encode(hash_hmac('sha256', $header_payload, $consumer_details['secret'], true));
		$jwt_token = $header_payload . '.' . $signature;
		return $jwt_token;
	}

    public function getKeys($request)
    {
		// $cSession = curl_init();
		// curl_setopt($cSession,CURLOPT_URL,"http://localhost:8001/consumers/".$request->input('username')."/jwt");
		// curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
		// curl_setopt($cSession,CURLOPT_HEADER, false);
		// $result=json_decode(curl_exec($cSession),true);
		// curl_close($cSession);

		// if(isset($result['data']))
		// {
		// 	Return $result['data'][0];
		// }

		// RETURN FALSE;
		return array(
			'secret' => '2u{q{p9"g+NZ+_JCQD!~xs5'
		);
	}

	public function contact(Request $request)
	{
		echo '{
			"userId": 1,
			"id": 1,
			"title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
			"body": "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto"
		  }';
	}

	/*public function contact(Request $request)
	{
		$data = json_decode(file_get_contents('php://input'), true);
		print_r($data);
		echo "------------ FINAL ----------------------";
		print_r($_REQUEST);
		echo "------------ print headers I ----------------------";

		print_r($_POST);

		echo "------------ print headers II ----------------------";
		print_r($request->headers->all());
		// print_r($request->all());
		echo "--------------- getContent ----------";
		$data = $request->getContent();
		print_r($data);
		// print_r(gettype($data));
		// $userData = json_decode($data);
		// print_r($userData);
		// die;
		// print_r($request->headers->all());

		// var_dump("in");
		$post = file_get_contents('php://input');
		// var_dump($post);
		print_r($post);
	}*/

	public function check_mongo(Request $request)
	{
		// echo phpinfo();
		$user = new MongoUser();
		echo $user->test();

		/*$data = json_decode(file_get_contents('php://input'), true);
		print_r($data);
		echo "------------ FINAL ----------------------";
		print_r($_REQUEST);
		echo "------------ print headers I ----------------------";

		print_r($_POST);

		echo "------------ print headers II ----------------------";
		print_r($request->headers->all());
		// print_r($request->all());
		echo "--------------- getContent ----------";
		$data = $request->getContent();
		print_r($data);
		// print_r(gettype($data));
		// $userData = json_decode($data);
		// print_r($userData);
		// die;
		// print_r($request->headers->all());

		// var_dump("in");
		$post = file_get_contents('php://input');
		// var_dump($post);
		print_r($post);*/
	}
}
