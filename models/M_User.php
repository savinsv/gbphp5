<?
class M_User {
	public function auth($login,$password){
 
        $dbo = Db::Instance();
        $dbo->sql = "SELECT id, login, password FROM users WHERE login = :login";

        $row = $dbo->select([':login'=>$login]);
        
        return "Пользователь: ".$login." Ввел пароль: ".$password . "<br>" . "Login найден: ".$row;
    }
    
    public function new(array $pars){
        $dbo = Db::Instance();
        $psel[':login'] = $pars['login'];
//        $psel[':name'] = $pars['name'];
        $dbo->sql = "SELECT id, login, password FROM users WHERE login = :login";
        //$row = $dbo->select([':login'=>$pars['login']]);
        $row = $dbo->select($psel);
//        $text='';
        $markers=[];
        $columns=[];
        foreach($pars as $key => $value){
            $markers[":".$key ] = $value;
//            $columns[] = $key;
//            $text .="\n". $key ." = ".$value;
        }
        
//        ($pars['login']) ? $text .="login = ".$pars['login'] : $text; 
//        return $text;
        
        if($row){
            return "Пользователь {$row['login']} уже зарегистрирован." /* \n\b". print_r($psel,true) . "\n\n".print_r($markers,true) */;
        }else {

/*             $text.="\n\n";
            $text .=print_r($markers,true);
            $text .="\n\n";
            $text .=print_r($columns,true);
 */
/*                 foreach($markers as $key => $value){
                    $text .="\n". $key ." = ".$value; 
                }
 */            
 //           return $text;
            //Вставить нового пользователя
            //1 surname
            //2 name
            //3 patronymic  необязательное поле
            //4 login
            //5 password
            //6 email
            //7 user_change timestamp
            $dbo->sql = "INSERT INTO users (surname,name,patronymic,login,password,email,user_change) VALUES (:surname,:name,:patronymic,:login,:password,:email,CURRENT_TIMESTAMP())";

            //$timestamp = new DateTime;
            //$markers[':user_change'] = date('YmdHis');
            
            $row = $dbo->insert($markers);
            var_dump($row);
            //$row = $markers[':user_change'];
            return $row;
        }

    }

    public function logout(){

    }

    private function info(){

    }
}