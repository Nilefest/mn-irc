<?php

class ValidateLibrary {
	public function firstname($firstname) {
		/*
			Разрешенные символы: А-Я а-я
			Длина: 2-16
		*/
		return preg_match("/^([А-ЯЁ]{1})([а-яё]{1,15})$/u", $firstname);
	}
	
	public function lastname($lastname) {
		/*
			Разрешенные символы: А-Я а-я
			Длина: 2-16
		*/
		return preg_match("/^([А-ЯЁ]{1})([а-яё]{1,15})$/u", $lastname);
	}

	public function email($email) {
		return preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $email);
	}
	
	public function password($password) {
		/*
			Разрешенные символы: A-Z a-z 0-9
			Длина: 6-32
		*/
		return preg_match("/^[a-zA-Z0-9,\.!?_-]{6,32}$/", $password);
	}
}
?>