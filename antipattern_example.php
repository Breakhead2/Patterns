// Пример антипатерна Hard Code

function sendMail($name, $email, $order, $phone)
{
    $mail = new PHPMailer();

    $myEmail = '*****@yandex.ru'; 
    $pass = 'Пароль';
	// решение вынести даннные в конфигурационный файл
	
    $mail->Mailer = 'smtp';
    $mail->Host = 'ssl://smtp.yandex.ru';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = $myEmail;
    $mail->Password = $pass;

    $mail->setFrom($myEmail, 'Lider Poiska');
    $mail->addAddress($email, $name);

    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Тестовое задание, заказ №' . $order;
    $mail->Body = $name . ', заказ ' . $order . ' сформирован. В ближайшее время наш специалист свяжется с вами по телефону ' . '+' . $phone . ' .';

    if (!$mail->send()) {
        echo 'Ошибка: ' . $mail->ErrorInfo;
    }
}

// Пример антипатерна магические числа

// решение указать разрешение окна и кол-во товаров в отдельные переменные,
так как данные значения могут измениться и повторно используются в другой функции

function getCatalog($category, $windowWidth, $page = 0){
    if($windowWidth > 768){
        $quantity = $page * 4 + 4; 
        if($category === 'featured'){
            return getAssocResult("SELECT * FROM catalog ORDER BY popularity DESC LIMIT 0 , {$quantity}");
        }
        return getAssocResult("SELECT * FROM catalog WHERE category = '{$category}' LIMIT 0, {$quantity}");
        }else{
        $quantity = $page * 3 + 3;
            if($category === 'featured'){
                return getAssocResult("SELECT * FROM catalog ORDER BY popularity DESC LIMIT 0 , {$quantity}");
            }
            return getAssocResult("SELECT * FROM catalog WHERE category = '{$category}'  LIMIT 0, {$quantity}");
        }
}

// Пример антипатерна Singletonitis и Приватизации

class Db
{
    private $config = [
        'driver' => 'mysql',
        'host'=> 'localhost',
        'dbname' => 'localhost',
        'user'=>'*****',
        'pass' => '****',
        'charset' => 'utf8'
    ];

    use TSingleton; // Синглтон на подключение
	
	//решение расположено ниже, использование приватного метода подключения.
	Но тогда мы не сможет менять базы данных, тогда наверное следует использовать интерфейс для подключения к БД
	и передавать в него способ подключения и реализовывать определенный, чтобы уйти от приватазации метода подключения к БД.

    private function getConnection()
    {
        if(is_null($this->connection))
        {
            $this->connection = new \PDO($this->prepateDnsString(), // с помощью \ мы попадаем в глобальное пространство имен
                $this->config['user'],
                $this->config['pass']
            );
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function prepateDnsString(){
        return sprintf("%s:host=%s;dbname=%s;charset=%s", //вместо %s вставляются данные по порядку
            $this->config['driver'],
            $this->config['host'],
            $this->config['dbname'],
            $this->config['charset'],
        );
    }
}