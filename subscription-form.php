<?php
if(isset($_GET['FormSubscription'])) {
	$surnameform=$_GET['surname'];
	$nameform=$_GET['name']; 
	$lastnameform=$_GET['lastname']; 
	$phonenumberform=$_GET['phone-number']; 
	$emailform=$_GET['email']; 
	$ageform= $_GET['age'];
    $monthform= $_GET['month'];
	
	$mysqli = new mysqli("localhost", "root", "", "dance_studio");
		if($mysqli->connect_errno){
			echo "Извините, возникла проблема на сайте";
			echo "Ошибка: не удалось создать соединение с базой MySQL по данной причине: "; 
			echo "Номер ошибки: " . $mysqli->connect_errno . " ";
			echo "Ошибка:" . $mysqli->connect_errno . " " ;
			exit;
		}
	$surname = '"'.$mysqli->real_escape_string($surnameform).'"';
	$name = '"'.$mysqli->real_escape_string($nameform).'"';
	$lastname = '"'.$mysqli->real_escape_string($lastnameform).'"';
	$phonenumber = '"'.$mysqli->real_escape_string($phonenumberform).'"';
	$email = '"'.$mysqli->real_escape_string($emailform).'"';
	$age = '"'.$mysqli->real_escape_string($ageform).'"';
    $month = '"'.$mysqli->real_escape_string($monthform).'"';
	
	$query = "INSERT INTO subscription(surname, name, lastname, phonenumber, email, age, month) VALUES ($surname, $name, $lastname, $phonenumber, $email, $age, $month)";
	$result = $mysqli->query($query);
			if(!$result){
			die('Error : ('.$mysqli->errno.')' . $mysqli->error);
		} 
	$mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-sub-form.css">
    <script defer src="js/script.js"></script>
    <title>Оформление Абонемента</title>
</head>

<body>
    <div class="container">
        <div class="back">
            <a href="subscrition.php">
                <img src="images/back-vector.svg" alt="back">
            </a>
            <p class="lbl">Назад</p>
        </div>
        <h1>Оформление Абонемента</h1>
        <form action="" id="form-profile">
            <p class="lbl">Личные данные</p>
            <div class="persondata">
                <input type="text" placeholder="Фамилия" name="surname" required>
                <input type="text" placeholder="Имя" name="name" required>
                <input type="text" placeholder="Отчество" name="lastname" required>
                <input type="phone" placeholder="Номер Телефона" name="phone-number" required>
                <input type="email" placeholder="E-mail" name="email" required>
            </div>

            <p class="lbl">Ваш возраст</p>
            <div class="persondata">
                <label for="kids">
                    <input type="radio" name="age" id="kids" value="Детский" required>От 7 до 17 лет
                </label>
                <label for="adult">
                    <input type="radio" name="age" id="adult" value="Взрослый" required>Больше 18 лет
                </label>
            </div>
            <p class="lbl">Срок абонемента</p>
            <div class="persondata">
                <label for="1mons">
                    <input type="radio" name="month" id="1mons" value="1 месяц" required>1 месяц
                </label>
                <label for="3mons">
                    <input type="radio" name="month" id="3mons" value="3 месяца" required>3 месяца
                </label>
                <label for="6mons">
                    <input type="radio" name="month" id="6mons" value="6 месяцев" required>6 месяцев
                </label>
                <label for="inpl">
                    <input type="radio" name="month" id="inpl" value="Индивидуальный план" required>Индивидуальный план
                </label>
            </div>
            <div class="subm">
                <input type="submit" value="Оформить" name="FormSubscription" id="BtnSub">
                <p class="lbl">Нажимая кнопку, Вы подтверждаете, что ознакомлены с <a href="#"
                        style="color:white;">Политикой Конфиденциальности</a> и даете согласие на обработку персональных
                    данных</p>
            </div>

        </form>

    </div>
</body>

</html>